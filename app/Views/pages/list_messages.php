<?= $this->extend('layout_hf') ?>

<?= $this->section('content') ?>


<center><h1>Liste des messages</h1></center>

<table class="table">
    <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Titre</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>
            <th scope="col">Statut</th>
            <th scope="col">Créateur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Test</td>
            <td>Message test</td>
            <td>13/12/1312</td>
            <td>En ligne</td>
            <td>Test</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Test</td>
            <td>Message test</td>
            <td>13/12/1312</td>
            <td>En ligne</td>
            <td>Test</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Test</td>
            <td>Message test</td>
            <td>13/12/1312</td>
            <td>En ligne</td>
            <td>Test</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Test</td>
            <td>Message test</td>
            <td>13/12/1312</td>
            <td>En ligne</td>
            <td>Test</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Test</td>
            <td>Message test</td>
            <td>13/12/1312</td>
            <td>En ligne</td>
            <td>Test</td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Test</td>
            <td>Message test</td>
            <td>13/12/1312</td>
            <td>En ligne</td>
            <td>Test</td>
        </tr>
    </tbody>
</table>

<?= $this->endSection() ?>