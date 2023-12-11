<?= $this->extend('layout_hf') ?>

<?= $this->section('content') ?>
<?= helper('html'); ?>


<div class="my-4 text-center">
    <h1>Liste des messages</h1>
</div>



<div class="container">
    <form method="post" action="<?= route_to('supprimer.message') ?>">
        <div class="mb-4">
            <button type="submit" class="btn btn-danger opacity-100 shadow-lg">Supprimer des messages</button>
        </div>
        <table class=" table text-center">
            <thead>
                <tr>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Message</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Créateur</th>
                    <th scope="col">Modifier</a></th>
                    <th scope="col">Historique</th>
                </tr>
            </thead>
            <tbody>


                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                    <?php
                    $image = [
                        'src' => 'images/image.svg',
                        'alt' => 'image',
                        'class' => 'post_images',
                        'width' => '20',
                        'height' => '20',
                    ];
                    foreach ($listeMessage as $message) { ?>
                        <tr>
                            <td scope="row"><input type="checkbox" name="message[]" value="<?= $message['IDMESSAGE'] ?>">
                            </td>
                            <td class="text-break" scope="col">
                                <?= $message['TITREMESSAGE'] ?>
                            </td>
                            <td class="text-break" scope="col"
                                style="font-family: <?= $message['POLICEMESSAGE'] ?>; color: <?= $message['COULEURMESSAGE'] ?>">
                                <?= $message['TEXTEMESSAGE'] ?>
                            </td>
                            <td scope="col"> <button class="btn" type="button" data-bs-toggle="modal"
                                    data-bs-target="#modal<?= $message['IDMESSAGE'] ?>" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    <img src="images/image.svg"></img>
                                </button></td>
                            <td scope="col">
                                <?= $message['DATEHEUREMESSAGE'] ?>
                            </td>
                            <td scope="col">
                                <?= ($message['STATUTMESSAGE'] == 1 ? "En ligne" : "Hors ligne") ?>
                            </td>
                            <td scope="col">
                                <?= $message['CREATEURMESSAGE'] ?>
                            </td>
                            <td scope="col"><a
                                    href="<?= route_to('page.modifier') . '?id=' . $message['IDMESSAGE'] ?>">Modifier</a>
                            </td>
                            <td scope="col"><a
                                    href="<?= route_to('historique.message') . '?id=' . $message['IDMESSAGE'] ?>">Historique</a>
                            </td>
                        </tr>

                        <div class="modal" id="modal<?= $message['IDMESSAGE'] ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Aperçu de l'image</h5>
                                    </div>
                                    <div class="modal-body text-center" style="overflow: hidden;">
                                        <img src="data:image/*;base64,<?= base64_encode($message['IMAGEMESSAGE']) ?>"
                                            alt="Image"></img>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }

                    ?>

    </form>
    </tbody>
    </table>
</div>




<?= $this->endSection() ?>