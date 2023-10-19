<?= $this->extend('layout_hf') ?>
<?= $this->section('content') ?>
<main>
  <div><p>test</p></div>
  <div class="card">
    <?php 
    
    foreach ($listemessage as $message) {
      echo '<p>'.$message['TEXTEMESSAGE'].'</p>';
    }

    ?>
  </div>
  <div><p>test</p></div>
</main>


<?= $this->endSection() ?>