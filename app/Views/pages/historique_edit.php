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
                <th scope="col">Dernière police</th>
                <th scope="col">Dernière couleur</th>
                <th scope="col">Date de la dernière modification</th>
                <th scope="col">Modifié par</th>

            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($dataHistorique as $element) { ?>



                <tr>
                    <td class="text-break" scope="col">
                        <?= $element['HISTORIQUETITREMESSAGE'] ?>
                    </td>
                    <td class="text-break" scope="col"
                        style="font-family: <?= $element['HISTORIQUEPOLICEMESSAGE'] ?>; color: <?= $element['HISTORIQUECOULEURMESSAGE'] ?>;">
                        <?= $element['HISTORIQUETEXTEMESSAGE'] ?>
                    </td>
                    <td scope="col">
                        <?= $element['HISTORIQUEPOLICEMESSAGE'] ?>
                    </td>
                    <td scope="col">
                        <input type="color" disabled value="<?= $element['HISTORIQUECOULEURMESSAGE'] ?>">
                    </td>
                    <td scope="col">
                        <?= $element['HISTORIQUEDATEHEUREMESSAGE'] ?>
                    </td>
                    <td scope="col">
                        <?= $element['IDENTIFIANTUTILISATEUR'] ?>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>






<?= $this->endSection();

?>