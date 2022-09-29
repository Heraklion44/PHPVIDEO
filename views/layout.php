<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre</title>
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'langs' . DIRECTORY_SEPARATOR . 'fr_FR.js' ?>"></script>
    <script src="https://cdn.tiny.cloud/1/5gxqymgfj5ou3vo3ikjfgyopzvi9myqpf9x12xbg74q7q7ne/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'style.css' ?>">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggle" style="
    justify-content: space-around;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Billet simple pour l'Alaska</a>
                </li>
                <?php
                if (isset($_SESSION['user'])) {

                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/posts">Administration</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?= $content ?>
    </div>

    <script>
        tinymce.init({
            selector: 'textarea',
            language: 'fr_FR',
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>