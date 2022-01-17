
<div class="page-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <select id="vyberMesto" class="form-select form-select-sm selectBar" aria-label=".form-select-sm example">
                    <option value="1" selected>Bratislava</option>
                    <option value="2">Žilina</option>
                    <option value="3">Košice</option>
                    <option value="4">Prešov</option>
                </select>

                <h4 class="my-3">Kontakt</h4>
                <label>Poloha: </label>
                <span id="poloha"></span>
                <br />
                <label>telefón: </label>
                <span id="telefon"></span>
                <br />
                <label>email: </label>
                <span id="email"></span>
                <br />
                <br />
                <p>Otváracie hodiny:</p>
                <div id="otvaracky"></div>
                <?php if(\App\Prihlasenie::jePrihlaseny() && \App\Prihlasenie::jeAdmin()){?>
                    <button  class="btn btn-primary btn-zatvor">zatvorit pobocku</button>
                    <button  class="btn btn-primary btn-otvor">otvorit pobocku</button>
                <?php }?>
            </div>
            <div class="col-md-8">
                <h4 class="my-3">Galéria:</h4>
                <a class="predchadzajuci" onclick="posun(-1)">❮</a>
                <a class="dalsi" onclick="posun(1)">❯</a>
                <div class="row">
                    <?php $data = \App\Models\ObrazkyModel::getAll();
                    foreach ($data as $obrazok) { ?>
                        <img class="col-3 restaurant-photo" onload="aktualny(1)" src="<?= $obrazok->cesta?>" alt="fotka restauracie">
                    <?php }?>
                </div>
                <?php if(\App\Prihlasenie::jePrihlaseny() && \App\Prihlasenie::jeAdmin()){?>
                    <form method="post" enctype="multipart/form-data" action="?c=kontakt&a=pridajFotku">
                        <input name="subor" class="form-control vyber-file " id="formFileLg" type="file">
                        <button type="pridajFotku" class="btn btn-primary btn-pridaj-fotku">pridať fotku</button>
                    </form>
                <?php }?>
            </div>
        </div>
    </div>
</div>
