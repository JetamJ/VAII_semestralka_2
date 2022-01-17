<body onload="aktualny(1)">
<section class="page-section">
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
            </div>
            <div class="col-md-8">
                <h4 class="my-3">Galéria:</h4>
                <a class="predchadzajuci" onclick="posun(-1)">❮</a>
                <a class="dalsi" onclick="posun(1)">❯</a>
                <div class="row">
                    <img class="col-3 restaurant-photo" src="semestralka/assets/img/best_burger2.jpg" alt="fotka restauracie">
                    <img class="col-3 restaurant-photo" src="semestralka/assets/img/best_burger3.jpg" alt="fotka restauracie">
                    <img class="col-3 restaurant-photo" src="semestralka/assets/img/best_burger.jpg" alt="fotka restauracie">
                    <img class="col-3 restaurant-photo" src="semestralka/assets/img/best_burger6.jpg" alt="fotka restauracie">
                    <img class="col-3 restaurant-photo" src="semestralka/assets/img/best_burger5.jpg" alt="fotka burgrov">
                    <img class="col-3 restaurant-photo" src="semestralka/assets/img/logo.jpg" alt="fotka restauracie">
                </div>
            </div>
        </div>
    </div>
</section>
</body>