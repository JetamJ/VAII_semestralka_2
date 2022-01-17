<div class="container">
    <form method="post" action="?a=pridaj">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Názov burgru</label>
            <div class="col-sm-10">
                <input type="text" name="nazov" class="form-control" id="nazov" placeholder="Zajte názov burgru" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Zloženie</label>
            <div class="col-sm-10">
                <input type="text" name="zlozenie" class="form-control " id="zlozenie" placeholder="Zajte zloženie burgru" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Obrázok</label>
            <div class="col-sm-10">
                <input type="text" name="img" class="form-control" id="img" pattern="https://.*.jpg" placeholder="Zajte url adresu obrázka" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cena</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" name="cena" class="form-control" id="cena" placeholder="Zajte cenu burgru" required>
            </div>
        </div>

        <button class="btn btn-outline-success">Pridaj</button>
    </form>
</div>
