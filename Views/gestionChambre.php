<div class="modal fade" id="subscribe-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="title">Formulaire d’ajout d’une nouvelle chambre</h1>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body" id="msg">
                <form>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Numero Batiment</label>
                        <div class="col-sm-9">
                            <select id="inputState" class="form-control">
                                <option selected>Choisir le tnumero du batiment</option>
                                <option>...</option>
                            </select>
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
                            <select id="inputState" class="form-control">
                                <option selected>Choisir le type de chambre</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
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
            <tr>
                <th scope="row">0120001</th>
                <td>individuelle</td>
                <td><img src="img/ic-liste-active.png"></td>
                <td><img src="img/ic-supprimer.png"></td>
            </tr>
            <tr>
                <th scope="row">0100002</th>
                <td>commune</td>
                <td><img src="img/ic-liste-active.png"></td>
                <td><img src="img/ic-supprimer.png"></td>
            </tr>
            <tr>
                <th scope="row">0110003</th>
                <td>individuelle</td>
                <td><img src="img/ic-liste-active.png"></td>
                <td><img src="img/ic-supprimer.png"></td>
            </tr>
            <tr>
                <th scope="row">0130004</th>
                <td>commune</td>
                <td><img src="img/ic-liste-active.png"></td>
                <td><img src="img/ic-supprimer.png"></td>
            </tr>
            <tr>
                <th scope="row">0140005</th>
                <td>individuelle</td>
                <td><img src="img/ic-liste-active.png"></td>
                <td><img src="img/ic-supprimer.png"></td>
            </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-around">
            <button type="button" class="btn btn-primary">Precedent</button>
            <button type="button" class="btn btn-primary">Suivant</button>
        </div>
    </div>
</div>