<div class="modal fade" id="subscribe-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-center" id="title">Enregistrer Etudiant</h1>
                <!-- <button type="button" class="close" data-dismiss="modal">x</button> -->
            </div>
            <div class="modal-body" id="msg">
                <form  method="post" id="studentSubscribtionForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" placeholder="nom">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom">
                            <small class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputemail">Email</label>
                            <input type="email" name="email" class="form-control" id="inputemail" placeholder="example@example.com">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dateInscription">Annee D'inscription</label>
                            <input type="date" name="dateInscription" class="form-control" id="dateInscription" placeholder="">
                            <small class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Date Naissance</label>
                            <input type="date" name="datenaissance" class="form-control" id="inputCity">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Telephone</label>
                            <input type="tel" name="tel" class="form-control" id="inputCity">
                            <small class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputState">Status Etudiant</label>
                        <select id="inputState" name="typeetudiant" class="form-control">
                            <option value="#" selected>Choisir le Status de l'etudiant</option>
                            <option value="boursier logé">Boursier Loge</option>
                            <option value="boursier non logé">Boursier Non Loge</option>
                            <option value="non boursier">Non Boursier</option>
                        </select>
                        <small class="text-danger"></small>
                    </div>
                    <div class="" id="info">
                    </div>
                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
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
    <div class="d-flex justify-content-end mt-1">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un Etudiant" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

    <div class="card-body table-responsive-sm">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Matricule</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">email</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">2014Toou0001</th>
                    <td>Toure</td>
                    <td>Souhaibou</td>
                    <td>souhaibou@gmail.com</td>
                    <td><img src="img/ic-liste-active.png"></td>
                    <td><img src="img/ic-supprimer.png"></td>
                </tr>
                <tr>
                    <th scope="row">2018Somy0002</th>
                    <td>Sow</td>
                    <td>Amy</td>
                    <td>amysow04@gmail.com</td>
                    <td><img src="img/ic-liste-active.png"></td>
                    <td><img src="img/ic-supprimer.png"></td>
                </tr>
                <tr>
                    <th scope="row">2015Niby0003</th>
                    <td>Niang</td>
                    <td>Papa Djiby</td>
                    <td>papadjibyniang@gmail.com</td>
                    <td><img src="img/ic-liste-active.png"></td>
                    <td><img src="img/ic-supprimer.png"></td>
                </tr>
                <tr>
                    <th scope="row">2010DiBA0004</th>
                    <td>Diallo</td>
                    <td>Séckou BA</td>
                    <td>sb.diallo@gmail.com</td>
                    <td><img src="img/ic-liste-active.png"></td>
                    <td><img src="img/ic-supprimer.png"></td>
                </tr>
                <tr>
                    <th scope="row">2016Wane0005</th>
                    <td>Wane</td>
                    <td>Birane</td>
                    <td>biranewane@gmail.com</td>
                    <td><img src="img/ic-liste-active.png"></td>
                    <td><img src="img/ic-supprimer.png"></td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button type="button" name="" data-toggle="modal" data-target="#subscribe-modal" id="addNewStudent" class="btn btn-primary">Ajouter un nouveau etudiant</button>
        </div>
    </div>
</div>