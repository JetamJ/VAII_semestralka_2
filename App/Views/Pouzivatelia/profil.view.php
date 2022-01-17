<div class="page-section">
    <div class="container-fluid">
        <div class="row">
            <?php $data = \App\Models\RegistraciaModel::getOne(\App\Prihlasenie::getId())?>
            <div class="col-md-4">
                <div class="text-center">
                    <?php if(($data->getProfilovka()) == null){ ?>
                        <img src="https://ldreality.sk/wp-content/uploads/2016/04/anonym-219x300.jpg" alt="profilovka" width="200" class="rounded-circle">
                    <?php }else{?>
                        <img src="/semestralka/<?=\App\Config\Configuration::UPLOAD_DIR."/".$data->getProfilovka()?>" alt="profilovka" width="200" class="rounded-circle">
                    <?php }?>
                </div>
            </div>
            <div class="col-md-6">
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
                                    <?php IF($data->telefon == "") {?>
                                        <p class="text-muted mb-0">nepridané</p>
                                    <?php } else {?>
                                        <p class="text-muted mb-0"><?= $data->telefon?></p>
                                    <?php }?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Adresa</p>
                                </div>
                                <div class="col-sm-9">
                                    <?php IF($data->adresa == "") {?>
                                        <p class="text-muted mb-0">nepridané</p>
                                    <?php } else {?>
                                        <p class="text-muted mb-0"><?= $data->adresa?></p>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <a class="btn btn-primary nav-link" href="?c=pouzivatelia&a=upravProfil&id=<?= $data->getId()?>">zmeniť udaje</a>
            <form method="post" enctype="multipart/form-data" action="?c=pouzivatelia&a=vymazUcet&id=<?= $data->getId()?>">
                <button class="btn btn-primary">vymazat učet</button>
            </form>
            </div>
            <form method="post" enctype="multipart/form-data" action="?c=pouzivatelia&a=upravFotku">
                <div class="col-md-5">
                    <input name="subor" class="form-control vyber-file " id="formFileLg" type="file">
                    <button class="btn btn-outline-success btn-zmenit">zmeniť fotku</button>
                </div>
            </form>

    </div>
</div>
</div>