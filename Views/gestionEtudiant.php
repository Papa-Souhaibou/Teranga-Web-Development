<div class="modal fade" id="subscribe-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="title">Inscription</h1>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body" id="msg">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nom</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="nom">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Prenom</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Prenom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Annee D'inscription</label>
                        <input type="date" class="form-control" id="inputAddress" placeholder="">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Telephone</label>
                            <input type="tel" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Date Naissance</label>
                            <input type="date" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputState">Status Etudiant</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choisir le Status de l'etudiant</option>
                            <option>...</option>
                        </select>
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
            <button type="button" name="" data-toggle="modal" data-target="#subscribe-modal" id="" class="btn btn-primary">Ajouter un nouveau etudiant</button>
        </div>
    </div>
</div>