<div class="row">

    <?php foreach ($params['posts'] as $post) : ?>
        <div class="col-6">

            <div class="card my-3">
                <div class="card-body">
                    <h2><?= $post->title ?></h2>
                    <small class="bg-info rounded-top">Publié le <?= $post->getCreatedAt() ?></small>
                    <p><?= $post->getExcerpt() ?></p>
                    <?= $post->getButton() ?>
                </div>
            </div>
        </div>

    <?php endforeach ?>
</div>