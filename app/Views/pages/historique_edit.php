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
            //   var_dump($utilisateurs);
            //   die();
            foreach ($utilisateurs as $utilisateur) {
              
            }

            foreach ($dataHistorique as $historique) {

                echo '<tr><td scope="col">' . $historique['HISTORIQUETITREMESSAGE'] . '</td>';
                echo '<td scope="col">' . $historique['HISTORIQUETEXTEMESSAGE'] . '</td>';
                echo '<td scope="col">' . $historique['HISTORIQUEDATEHEUREMESSAGE'] . '</td>';
                echo '<td scope="col">' . $utilisateur['IDENTIFIANTUTILISATEUR'] . '</td></tr>';

            }

            ?>
        </tbody>
    </table>
</div>







<?=

    $this->endSection();

?>