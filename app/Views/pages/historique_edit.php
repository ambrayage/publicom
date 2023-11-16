<?=

    $this->extend('layout_hf');

$this->section('content');

?>

<div class="my-4 text-center">
    <h1>Historique des messages</h1>
</div>

<div class="container">
    <table class=" table text-center">
        <thead>
            <tr>
                <th scope="col">Dernier titre</th>
                <th scope="col">Dernier message</th>
                <th scope="col">Date de la dernière modification</th>
                <th scope="col">Modifié par</th>

            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($dataHistorique as $element) {



                echo '<tr><td scope="col">' . $element['HISTORIQUETITREMESSAGE'] . '</td>';
                echo '<td scope="col">' . $element['HISTORIQUETEXTEMESSAGE'] . '</td>';
                echo '<td scope="col">' . $element['HISTORIQUEDATEHEUREMESSAGE'] . '</td>';
                echo '<td scope="col">' . $element['IDENTIFIANTUTILISATEUR'] . '</td></tr>';
            }


            ?>
        </tbody>
    </table>
</div>






<?= $this->endSection();

?>