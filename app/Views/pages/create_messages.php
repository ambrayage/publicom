<?=

    $this->extend('layout_hf');

$this->section('content');

?>

<div class="text-center">
    <h1 class="display-3">Ajouter Message</h1>
</div>

<div class="container border">
    <form action="">
    <div class="text-center">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Titre</span>
            <input type="text" class="form-control" placeholder="Titre du message" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
            <span class="input-group-text">Contenu ( 160 caractères max )</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <input class="w-100 btn btn-primary " type="submit" value="Ajouter">
    </div>
    </form>
</div>


<?= $this->endSection(); ?>