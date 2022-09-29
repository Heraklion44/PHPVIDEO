<h1 style="text-align: -webkit-center;margin-top: 1em;margin-bottom: 1em;">Administration des commentaires</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Publié le</th>
            <th class="col-3" scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($params['comments'] as $comment) : ?>
            <tr>
                <th scope="row"><?= $comment->id ?></th>
                <td><?= $comment->comment ?></td>
                <td><?= $comment->getCreatedAt() ?></td>
                <td>
                    <form action="/admin/comments/keep/<?= $comment->id ?>" method="post" class="d-inline">
                        <button type="submit" class="btn btn-success">Conserver</button>
                    </form>
                    <form action="/admin/comments/delete/<?= $comment->id ?>" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>