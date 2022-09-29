<div class="connexion d-flex justify-content-center align-items-center">
    <?php
    if (isset($params['error'])) {
    ?>
        <div class="alert alert-danger d-flex align-items-center"><?= $params['error'] ?></div>
    <?php
    }
    ?>
    <form class="d-flex" method="POST" action="/connexionUser">
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Identifiant" required id="login" name="login">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" placeholder="Mot de passe" required id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>