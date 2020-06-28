<?php
    if (isset($_POST['numBatiment'])) {
        $_POST['numChambre'] = '0'.$_POST['numBatiment'].mt_rand(0,9999);
    }
?>
<div class="modal fade" id="setType">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Modifier le Type chambre</h1>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="setForm" method="post">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Status </label>
                        <div class="col-sm-9">
                            <select class="mdb-select md-form form-control questionField" name="type" id="type">
                                <option value="" id="previousType" disabled selected>Donnez le type de chambre</option>
                                <option value="" id="newType"></option>
                            </select>
                            <small class="text-danger"></small>
                        </div>
                    </div>
                    <button type="submit" name="submit" id="" class="btn float-right btn-success">Modifier</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="subscribe-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="title">Formulaire d’ajout d’une nouvelle chambre</h1>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body" id="msg">
                <form id="form-id" method="post">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Numero Batiment</label>
                        <div class="col-sm-9">
                            <select id="inputState" class="form-control" name="numBatiment">
                                <option value="-1" selected disabled>Choisir le numéro du batiment</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                            </select>
                            <span class="error-form" id="numbat_error_message"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Numero Chambre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Numero Chambre" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputState" class="col-sm-3 col-form-label">Type</label>
                        <div class="col-sm-9">
                            <select id="inputStateType" class="form-control"  name="type">
                                <option value="-1" selected disabled>Choisir le type de chambre</option>
                                <option value="individuelle">Individuelle</option>
                                <option value="commune"> Commune </option>
                            </select>
                            <span class="error-form" id="type_error_message"></span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-primary" id="ajouter" name="ajouter">Ajouter</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div class="card mt">
    <div class="d-flex justify-content-center mt-1">
        <button type="button" name="" data-toggle="modal" data-target="#subscribe-modal" id="" class="btn btn-primary">Ajouter une nouvelle chambre</button>
    </div>
    <div class="card-body table-responsive-sm" id="scrollable">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Numero Chambre</th>
                <th scope="col">Type chambre</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <div class="d-flex justify-content-around">
            <button type="button" class="btn btn-primary" id="previous">Precedent</button>
            <button type="button" class="btn btn-primary" id="next">Suivant</button>
        </div>
    </div>
</div>
<script>

$(function() {

$("#ajouter").click(function(){
    valid = true;
    if ($('#inputState option:selected').val() == -1) {
        $("#inputState").css("border-color", "#FF0000");
        $("#inputState").next(".error-form").fadeIn().text("Veuillez choisir un numéro de bâtiment svp!");
        valid = false;
    }
    else{
        $("inputState").next(".error-form").fadeOut();
    }

    if ($('#inputStateType option:selected').val() == -1) {
        $("#inputStateType").css("border-color", "#FF0000");
        $("#inputStateType").next(".error-form").fadeIn().text("Veuillez choisir un type de chambre svp!");
        valid = false;
    }
    else{
        $("#inputStateType").next(".error-form").fadeOut();
    }

    return valid;
});

});

</script>