$(function () {
    const tbody = $("tbody");
    let idchambre;
    let roomNumber;
    const roomsPerPage = 10;
    let currentPage = 0;
    const setRoomFormModication = (idElt,value) => {
        $(`#${idElt}`).val(value);
        $(`#${idElt}`).text(value);
    };
    const displayRooms = room => {
        const elt = `
        <tr id="${room.idchambre}">
            <th scope="row">${room.numchambre}</th>
            <td>${room.type}</td>
            <td><img src="img/ic-liste-active.png" id="modify${room.idchambre}" title="Modifier le type de la chambre"></td>
            <td><img src="img/ic-supprimer.png" id="delete${room.idchambre}" title="Supprimer la chambre"></td>
        </tr>
        `;
        $("tbody").append(elt);
        $(`#modify${room.idchambre}`).on("click", function () {
            const confirm = window.confirm("voulez vous vraiment modifier cette chambre ?");
            if (confirm) {
                setRoomFormModication("previousType","");
                setRoomFormModication("previousType",room.type);
                const newType = room.type == "individuelle" ? "commune" : room.type == "commune" ? "individuelle" : room.type;
                setRoomFormModication("newType","");
                setRoomFormModication("newType",newType);
                idchambre = room.idchambre;
                $('#setType').modal('toggle');
            }
        });
        $(`#delete${room.idchambre}`).on("click", function () {
            const confirm = window.confirm("voulez vous vraiment supprimer cette chambre ?");
            if (confirm) {
                const data = new FormData();
                data.append("delete","del");
                data.append("idchambre",room.idchambre);
                $.ajax({
                    type: "POST",
                    url: "Controllers/ChambreController.php",
                    contentType: false,
                    processData: false,
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        $(`#${room.idchambre}`).remove();
                        roomNumber = response.number;
                    }
                });
            }
        });
    };
    const getRooms = (limit=0,offset=15) => {
        offset = roomsPerPage;
        const form = new FormData();
        form.append("getRoom","room");
        form.append("limit",limit);
        form.append("offset",offset);
        $("tbody").html('<tr><td colspan="4" class="text-center"><img src="http://www.mediaforma.com/sdz/jquery/ajax-loader.gif"></td></tr>');
        $.ajax({
            type: "POST",
            url: "Controllers/ChambreController.php",
            contentType: false,
            processData: false,
            data: form,
            dataType: "json",
            success: function (response) {
                $("tbody").html("");
                if (response.length) {
                    for (const room of response) {
                        displayRooms(room);
                    }
                }else{
                    $("tbody").html('<tr><td colspan="4" class="text-center">Plus de Chambre</td></tr>');
                }
            } 
        });
    };
    const showError = (element, message) => {
        element.nextElementSibling.textContent = message;
    };
    const load = () => {
        const href = window.location.href.split("#")[1] || "gestionEtudiant";
        if(href == "gestionChambre"){
            $("#websiteContent").load(`Views/${href}.php`,function () {
                getRooms(0,15);
                roomTypeModificationSubmitEvent();
            });
        }else if(href == "gestionEtudiant"){
            $("#websiteContent").load(`Views/${href}.php`,function () {
                $("#addNewStudent").click(function (e) { 
                    addStudentEvents();
                });
            });
        }
    };
    const addStudentEvents = () => {
        resetForm(document.querySelector("#studentSubscribtionForm"));
        let hasError = false;
        $("#studentSubscribtionForm input").on("blur", function () {
            if(!this.value){
                hasError = true;
                showError(this,"Ce champs est obligatoire");
            }
            if(this.type == "tel" && this.value){
                const regex = /^(002217|7)(0|7|8){1}[0-9]{7}/;
                if(!regex.test(this.value)){
                    hasError = true;
                    showError(this,"Un nummero valide est sous la forme 7xxxxxxxx");
                }
            }else if(this.type == "email" && this.value){
                const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(!regex.test(this.value)){
                    hasError = true;
                    showError(this,"Un email valide est sous la forme exemple@exemple.com");
                }
            }else if((this.type == "text" && this.value) && (this.value.length < 4 && this.getAttribute("name") == "prenom")){
                hasError = true;
                showError(this,"La longueur minimale est de 4 caracteres.");
            }
        });
        $("#studentSubscribtionForm input").on("input", function () {
            showError(this,"");
            hasError = false;
        });
        $("#inputState").on("change", function () {
            $("#info").html("");
            $("#info").attr("class", "");
            if (this.value == "boursier logé") {
                const form = new FormData();
                form.append("allRooms","all");
                $.ajax({
                    type: "POST",
                    url: "Controllers/ChambreController.php",
                    contentType: false,
                    processData: false,
                    data: form,
                    dataType: "json",
                    success: function (response) {
                        let options = "";
                        for (const room of response) {
                            const option = `
                                <option value="${room.idchambre}" selected>${room.numchambre}</option>
                            `;
                            options += option;
                        }
                        const elt = `
                        <div class="form-group col-md-6">
                            <label for="pension">Pension</label>
                            <select id="pension" name="pension" class="form-control">
                                <option value="20000" selected>20000</option>
                                <option value="40000">40000</option>
                            </select>
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="chambre">Numero Chambre</label>
                            <select id="chambre" name="chambre" class="form-control">
                                ${options}
                            </select>
                            <small class="text-danger"></small>
                        </div>
                        `;
                        $("#info").addClass("form-row");
                        $("#info").html(elt);
                    }
                });
                
            }else if(this.value == "boursier non logé"){
                const elt = `
                <div class="form-group">
                    <label for="pension">Pension</label>
                    <select id="pension" name="pension" class="form-control">
                        <option value="40000">40000</option>
                        <option value="20000" selected>20000</option>
                    </select>
                    <small class="text-danger"></small>
                </div>
                `;
                $("#info").html(elt);
            }else if(this.value == "non boursier"){
                const elt = `
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" class="form-control">
                    <small class="text-danger"></small>
                </div>
                `;
                $("#info").html(elt);
            }
        });
        $("#studentSubscribtionForm").on("submit", function (event) {
            event.preventDefault();
            const inputs = document.querySelectorAll("#studentSubscribtionForm input");
            const select = document.querySelector("#inputState");
            for (const input of inputs) {
                if (!input.value) {
                    hasError = true;
                    showError(input,"Ce champs est obligatoire");
                }else if(input.type == "text" && input.value.lenght <= 4){
                    hasError = true;
                    showError(input,"La longueur minimale est de 4 caracteres.");
                }
            }
            if (select.value == "#") {
                hasError = true;
                showError(select,"Ce champs est obligatoire");
            }
            if(hasError){
                event.preventDefault();
            }else{
                const nom = document.querySelector("#nom").value.substr(0,2)
                let prenom = document.querySelector("#prenom").value;
                prenom = prenom.substr(prenom.length - 2);
                let dateInscription = document.querySelector("#dateInscription").value;
                dateInscription = dateInscription.split("-")[0]
                let unique = new Date().valueOf().toString();
                let size = unique.length - 4;
                unique = unique.substr(size);
                const matricule = dateInscription+nom+prenom+unique;
                let form = document.querySelector("#studentSubscribtionForm");
                form = new FormData(form);
                form.append("matricule",matricule);
                form.append("subscribtion","save");
                $.ajax({
                    type: "POST",
                    url: "Controllers/EtudiantController.php",
                    contentType: false,
                    processData: false,
                    data: form,
                    dataType: "json",
                    success: function (response) {
                    }
                });
                $('#subscribe-modal').modal('hide');
            }
        });
    };
    const resetForm = form => {
        const smalls = form.querySelectorAll("small");
        for (const small of smalls) {
            small.textContent = "";
        }
    };
    const roomTypeModificationSubmitEvent = () => {
        $("#previous").on("click", function () {
            currentPage--;
            const limit = currentPage <= 0 ? 0 * roomsPerPage : currentPage * roomsPerPage;
            getRooms(limit);
        });
        $("#next").on("click", function () {
            currentPage++;
            if(roomNumber == undefined){
                const data = new FormData();
                data.append("count","count");
                $.ajax({
                    type: "POST",
                    url: "Controllers/ChambreController.php",
                    contentType: false,
                    processData: false,
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        roomNumber = response.number;
                    }
                });
            }else{
                const page = Math.ceil(roomNumber/roomsPerPage);
                if (currentPage >= page) {
                    currentPage = page;
                    const limit = currentPage * roomsPerPage;
                    getRooms(limit);
                }else{
                    const limit = currentPage * roomsPerPage;
                    getRooms(limit);
                }
            }
            
        });
        $("#setForm").on("submit", function (event) {
            const data = new FormData(document.querySelector("#setForm"));
            data.append("modify","modif");
            data.append("idchambre",idchambre);
            $.ajax({
                type: "POST",
                url: "Controllers/ChambreController.php",
                contentType: false,
                processData: false,
                data: data,
                success: function (response) {
                            
                }
            });
        });
    };
    $("#navbar a").on("click",function () {
        const href = this.getAttribute("href").split("#")[1];
        if(href == "gestionChambre"){
            $("#websiteContent").load(`Views/${href}.php`,function () {
                getRooms(0,15);
                roomTypeModificationSubmitEvent();
            });
        }else if(href == "gestionEtudiant"){
            $("#websiteContent").load(`Views/${href}.php`,function () {
                $("#addNewStudent").click(function (e) { 
                    addStudentEvents();
                });
            });
        }
    })
    load();
});