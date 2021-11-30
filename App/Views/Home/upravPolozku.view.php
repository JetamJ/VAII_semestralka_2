<div class="container">
    <form method="post" action="?a=uprav&id=<?= $_GET['id']?>">
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Názov burgru</label>
            <div class="col-sm-10">
                <input type="text" name="nazov" class="form-control" id="inputPassword" value="<?= $_GET['nazov']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Zloženie</label>
            <div class="col-sm-10">
                <input type="text" name="zlozenie" class="form-control" id="inputPassword" value="<?= $_GET['zlozenie']?>"></input>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Obrázok</label>
            <div class="col-sm-10">
                <input type="text" name="img" class="form-control" id="inputPassword" value="<?= $_GET['img']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Cena</label>
            <div class="col-sm-10">
                <input type="text" name="cena" class="form-control" id="inputPassword" value="<?= $_GET['cena']?>">
            </div>
        </div>



        <button type="pridaj" class="btn btn-outline-success">Upraviť</button>
    </form>
</div>
