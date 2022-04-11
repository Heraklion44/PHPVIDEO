<?php

foreach ($params['posts'] as $post) {
?>
    <h2><?= $post->title ?></h2>
    <div><?= $post->content ?></div>
<?php
}
