<div class="page-section">
    <div class="container-fluid">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Meno</th>
                    <th scope="col">Priezvisko</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tel. čislo</th>
                    <th scope="col">Adresa</th>
                </tr>
                </thead>
                <tbody>
                <?php $data = \App\Models\RegistraciaModel::getAll();
                foreach ($data as $pouzivatel) { ?>
                <tr>
                    <th scope="row"><?= $pouzivatel->id?></th>
                    <td><?= $pouzivatel->meno?></td>
                    <td><?= $pouzivatel->priezvisko?></td>
                    <td><?= $pouzivatel->email?></td>
                    <?php if($pouzivatel->telefon == "") {?>
                        <td>nepridane</td>
                    <?php } else {?>
                        <td><?= $pouzivatel->telefon?></td>
                    <?php }?>
                    <?php if($pouzivatel->adresa == "") {?>
                        <td>nepridane</td>
                    <?php } else {?>
                        <td><?= $pouzivatel->adresa?></td>
                    <?php }?>
                </tr>
                <?php } ?>
                </tbody>
            </table>
    </div>
    </div>
</div>
