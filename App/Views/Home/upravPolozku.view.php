<div class="container">
    <form method="post" action="?a=uprav&id=<?= $_GET['id']?>">
        <?php $data = \App\Models\MenuModel::getOne($_GET['id']);
            $nazov = $data->getNazov();
            $zlozenie = $data->getZlozenie();
            $img = $data->getImg();
            $cena = $data->getCena();
        ?>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Názov burgru</label>
            <div class="col-sm-10">
                <input type="text" name="nazov" class="form-control" id="nazov" value="<?= $nazov?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Zloženie</label>
            <div class="col-sm-10">
                <input type="text" name="zlozenie" class="form-control" id="zlozenie" value="<?= $zlozenie?>" required></input>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Obrázok</label>
            <div class="col-sm-10">
                <input type="text" name="img" class="form-control" id="img" pattern="https://.*.jpg" value="<?= $img?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Cena</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" name="cena" class="form-control" id="cena" value="<?= $cena?>" required>
            </div>
        </div>



        <button type="pridaj" class="btn btn-outline-success">Upraviť</button>
    </form>
</div>
