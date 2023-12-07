<?=

$this->extend('layout_hf');

$this->section('content');

?>

<div class="my-5 text-center">
    <h1>Ajouter un message</h1>
</div>


<div class="container border rounded">
    <form method="post" action="<?= url_to('creation.message'); ?>" enctype="multipart/form-data">

        <div class="text-center">
            <div class="input-group ">
                <span class="mt-3 input-group-text" id="basic-addon1">Titre</span>
                <input type="text" class="mt-3 form-control" placeholder="Titre du message" aria-label="Username" aria-describedby="basic-addon1" name="titre" required>
            </div>
        </div>

        <div class="text-center">
            <div class="input-group">
                <span class="mt-4 input-group-text">Contenu ( 160 caractères max )</span>
                <textarea class="mt-4 form-control" aria-label="With textarea" name="contenu" required></textarea>
            </div>
        </div>
        <!-- <div class="input-group mt-4">
            <input type="file" class="form-control" id="inputGroupFile02" name="image">
        </div> -->
        <div class="mb-3 mt-4">
            <input class="form-control" type="file" name="image" id="formFile" accept="image/*" required>
        </div>
        <li class="row input-group">
            <div class="col-md-8">
                <select name="police" class="form-select mt-3" aria-label="Default select example">
                    <option selected>Police d'écriture</option>
                    <option value="Verdana">Verdana</option>
                    <option value="Courier">Courier</option>
                    <option value="Lucida Sans">Lucida Sans</option>
                </select>

            </div>
            <div class="col-md-4 mt-3 btn h-100">
                <input class="w-100" type="color" id="colortext" name="colortext" value="#0000" />
            </div>
        </li>


        <div class="form-check  form-switch">
            <input class="mt-5 form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="statut" checked>
            <label class="mt-5 form-check-label " for="flexSwitchCheckChecked">Afficher ?</label>
        </div>
        <input class="mt-3 mb-4 w-100 btn btn-primary " type="submit" value="Ajouter">

    </form>

</div>

<?= $this->endSection(); ?>