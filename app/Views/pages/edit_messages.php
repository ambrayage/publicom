<?=

    $this->extend('layout_hf');

$this->section('content');

?>

<div class="my-5 text-center">
    <h1>Modifier le message</h1>
</div>


<div class="container border rounded">
    <form action="">
        <div class="text-center">
            <div class="input-group ">
                <span class="mt-5 input-group-text" id="basic-addon1">Titre</span>
                <input type="text" class="mt-5 form-control" placeholder="Titre du message" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="mt-4 input-group-text">Contenu ( 160 caractères max )</span>
                <textarea class="mt-4 form-control" aria-label="With textarea"></textarea>
            </div>
            <div class="form-check  form-switch">
                <input class="mt-5 form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="mt-5 form-check-label " for="flexSwitchCheckChecked">Afficher ?</label>
            </div>
            <input class="mt-3 mb-4 w-100 btn btn-primary " type="submit" value="Modifier">
        </div>
    </form>
</div>


<?= $this->endSection(); ?>