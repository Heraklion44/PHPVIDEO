<form autocomplete="off" action='/comment/create' method="POST">
    <input type="hidden" name="post_id" value="<?= $params['post']->id ?>">

    <div class="form-group mt-4">
        <div class="row">
            <div class="col-3">
                <input type="text" name="name" class="form-control mb-4" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1" required>
            </div>
            <div class="col">
                <input type="text" name="comment" class="form-control" placeholder="Ajouter un commentaire..." aria-label="Ajouter un commentaire..." aria-describedby="basic-addon1" required>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-4 text-end">
            <button type="reset" class="btn btn-light">ANNULER</button>
            <button type="submit" class="btn btn-primary">AJOUTER UN COMMENTAIRE</button>
        </div>
    </div>
</form>