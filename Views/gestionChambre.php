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
                
            </tbody>
        </table>
        <div class="d-flex justify-content-around">
            <button type="button" class="btn btn-primary" id="previous">Precedent</button>
            <button type="button" class="btn btn-primary" id="next">Suivant</button>
        </div>
    </div>
</div>