<?php
    session_start();
?>
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
                    <th scope="col">Prénom</th>
                    <th scope="col">email</th>
                    <th scope="col">Téléphone </th>
                    <th scope="col">Type</th>
                    <th scope="col">Modifier</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($_SESSION["liste"] as $etu):
                ?>
                <tr>
                    <th scope="row"> <?php echo $etu['matricule']; ?> </th>
                    <td> <?php echo $etu['nom']; ?></td>
                    <td> <?php echo $etu['prenom']; ?></td>
                    <td> <?php echo $etu['email']; ?></td>
                    <td> <?php echo $etu['telephone']; ?></td>
                    <td> <?php echo $etu['typeetudiant']; ?></td>
                    <td> <a href="" data-target="#subscribe-modal-update" data-toggle="modal"> <img src="img/ic-liste-active.png"> </a> </td> 
                </tr>
                <?php  endforeach; ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button type="button" name="" data-toggle="modal" data-target="#subscribe-modal" id="addNewStudent" class="btn btn-primary">Ajouter un nouveau etudiant</button>
        </div>
    </div>
</div>