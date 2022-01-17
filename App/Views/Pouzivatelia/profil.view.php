<body>
<section class="page-section">
    <div class="container-fluid">
        <div class="row">
            <?php $data = \App\Models\RegistraciaModel::getOne(\App\Prihlasenie::getId())?>
            <div class="col-md-5">
                <div class="text-center">
                    <?php if(($data->getProfilovka()) == null){ ?>
                        <img src="https://ldreality.sk/wp-content/uploads/2016/04/anonym-219x300.jpg" width="200" class="rounded-circle">
                    <?php }else{?>
                        <img src="/semestralka/<?=\App\Config\Configuration::UPLOAD_DIR."/".$data->getProfilovka()?>" width="200" class="rounded-circle">
                    <?php }?>
                </div>
            </div>
            <div class="col-md-7">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Meno</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $data->getMeno()?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Priezvisko</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $data->getPriezvisko()?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $data->email?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tel. čislo</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">nepridané</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Adresa</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">nepridané</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" enctype="multipart/form-data" action="?c=pouzivatelia&a=upravFotku">
                <div class="col-md-5">
                    <input name="subor" class="form-control vyber-file " id="formFileLg" type="file">
                    <button type="upravFotku" class="btn btn-outline-success btn-zmenit">zmeniť</button>
                </div>
            </form>
    </div>
</section>
</body>