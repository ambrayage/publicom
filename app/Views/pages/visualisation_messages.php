<?= $this->extend('layout_hf') ?>
<?= $this->section('content') ?>
<main>
  <?php if ($msgPrec !== null) { ?>
    <div id="carousel-bouton-gauche">
      <a href="<?= route_to('visu') . '?id=' . $msgPrec['IDMESSAGE'] ?>"><input type="image" type="submit" value="" src="/images/caret-left-square-fill.svg" width="40%"></a>
    </div>
  <?php } ?>
  <div style="background-image: url(data:image/*;base64,<?= base64_encode($msgActu['IMAGEMESSAGE'])?>); background-size: cover;" class="card">
    <p class="text-break" style="font-family: <?= $msgActu['POLICEMESSAGE'] ?>; color: <?=  $msgActu['COULEURMESSAGE'] ?>;"><?= $msgActu["TEXTEMESSAGE"] ?></p>
  </div>

  <?php if ($msgSuiv !== null) { ?>
    <div id="carousel-bouton-droite">
      <a href="<?= route_to('visu') . '?id=' . $msgSuiv['IDMESSAGE'] ?>"><input type="image" value="" src="/images/caret-right-square-fill.svg" width="40%"></a>

    </div>
  <?php } ?>


</main>


<?= $this->endSection() ?>