<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/img/alaska1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Jean Forteroche</h1>
        <p>Présente</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/img/alaska2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Billet simple pour l'Alaska</h1>
        <p>Un roman publié en ligne </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  <div class="card text-center" style="margin-top: 3em;">
    <div class="card-header">
    </div>
    <div class="card-body">
      <h5 class="card-title"><?= $params['post']->title ?></h5>
      <p class="card-text"><?= $params['post']->getExcerpt() ?></p>
      <?= $params['post']->getButton() ?>
    </div>
    <div class="card-footer text-muted">
      <?= $params['post']->getCreatedAt() ?>
    </div>
  </div>
</div>
