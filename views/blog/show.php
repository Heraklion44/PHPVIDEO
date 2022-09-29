<h1 class="text-center"><?= $params['post']->title ?></h1>
<hr>
<p class="text-center"><?= $params['post']->content ?></p>
<div class="justify-content-end">
  <a  href="/posts" class="btn btn-secondary">RETOUR</a>
</div>

<div class="container">
  <?php include("comment/form.php"); ?>
</div>

<div class="container">
  <?php include("comment/list.php"); ?>
  
</div>

