<?= $this->extend('layout_hf') ?>
<?= $this->section('content') ?>
<main>
  <div id="carousel-bouton-gauche">
    <img src="/images/caret-left-square-fill.svg">
  </div>
  
  <div class="card">
    <?php

    foreach ($listemessage as $message) {
      echo '<p>' . $message['TEXTEMESSAGE'] . '</p>';
    }

    ?>

  </div>
  <div id="carousel-bouton-droite">
    <img src="/images/caret-right-square-fill.svg">
  </div>

</main>


<?= $this->endSection() ?>