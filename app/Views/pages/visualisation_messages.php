<?= $this->extend('layout_hf') ?>
<?= $this->section('content') ?>
<main>
  <div id="carousel-bouton-gauche">
      <input type="image" value="" src="/images/caret-left-square-fill.svg" width="40%">
  </div>
  <div class="card">
    <?php
    foreach ($listemessage as $message) {
      echo '<p>' . $message['TEXTEMESSAGE'] . '</p>';
    }
    ?>
  </div>
  <div id="carousel-bouton-droite">
    <input type="image" value="" src="/images/caret-right-square-fill.svg" width="40%">
  </div>

</main>


<?= $this->endSection() ?>