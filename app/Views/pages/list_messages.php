<?= $this->extend('layout_hf') ?>

<?= $this->section('content') ?>


<div class="my-4 text-center">
    <h1>Liste des messages</h1>
</div>

<div class="container">
    <div class="mb-4">
        <button type="submit" class="btn btn-primary">Supprimer des messages</button>
    </div>
    <table class=" table text-center">
        <thead>
            <tr>
                <th scope="col">Supprimer</th>
                <th scope="col">Titre</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
                <th scope="col">Statut</th>
                <th scope="col">Créateur</th>
                <th scope="col">Modifier</a></th>
                <th scope="col">Historique</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($listeMessage as $message) {
                echo '<tr><td scope="row"><input type="checkbox"></td>';
                echo '<td scope="col">' . $message['TITREMESSAGE'] . '</td>';
                echo '<td scope="col">' . $message['TEXTEMESSAGE'] . '</td>';
                echo '<td scope="col">' . $message['DATEHEUREMESSAGE'] . '</td>';
                echo '<td scope="col">' . ($message['STATUTMESSAGE'] == 1 ? "En ligne" : "Hors ligne") . '</td>';
                echo '<td scope="col">' . $message['CREATEURMESSAGE'] . '</td>';
                echo '<td scope="col"><a href="'. route_to('page.modifier') .'?id='. $message['IDMESSAGE'] .'" >Modifier</a></td>';
                echo '<td scope="col"><a href="" >Historique</a></td></tr>';

            }

            ?>


        </tbody>
    </table>
</div>


<?= $this->endSection() ?>