<?= $this->extend('layout_hf') ?>

<?= $this->section('content') ?>
<?= helper('html'); ?>


<div class="my-4 text-center">
    <h1>Liste des messages</h1>
</div>



<div class="container">
    <form method="post" action="<?= route_to('supprimer.message') ?>">
        <div class="mb-4">
            <button type="submit" class="btn btn-primary">Supprimer des messages</button>
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
                    foreach ($listeMessage as $message) {
                    echo '<tr>
                        <td scope="row"><input type="checkbox" name="message[]" value="'.$message['IDMESSAGE'].'"></td>';
                        echo '<td scope="col">' . $message['TITREMESSAGE'] . '</td>';
                        echo '<td scope="col">' . $message['TEXTEMESSAGE'] . '</td>';
                        echo '<td scope="col"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwje5_LD1dmCAxXrTaQEHbiRDCwQFnoECBIQAQ&url=https%3A%2F%2Ffr.linkedin.com%2Fin%2Fjean-baptiste-loirot-aba759220&usg=AOvVaw3CKXUOK_jwwQX5Tain3-kC&opi=89978449">'.img($image).'</a></td>';
                        echo '<td scope="col">' . $message['DATEHEUREMESSAGE'] . '</td>';
                        echo '<td scope="col">' . ($message['STATUTMESSAGE'] == 1 ? "En ligne" : "Hors ligne") . '</td>';
                        echo '<td scope="col">' . $message['CREATEURMESSAGE'] . '</td>';
                        echo '<td scope="col"><a href="' . route_to('page.modifier') . '?id=' . $message['IDMESSAGE'] . '">Modifier</a></td>';
                        echo '<td scope="col"><a href="' . route_to('historique.message') . '?id=' . $message['IDMESSAGE'] . '">Historique</a></td>
                    </tr>';

                    }

                    ?>

    </form>
    </tbody>
    </table>
</div>




<?= $this->endSection() ?>