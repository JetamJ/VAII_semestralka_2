<?php if (isset($_GET['error'])) {?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <?= $_GET['error'] ?>
    </div>
<?php } ?>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-75">
            <form method="post" action="?c=pouzivatelia&a=upravUcet&id=<?= $_GET['id']?>">
                <?php $data = \App\Models\RegistraciaModel::getOne($_GET['id']);
                $meno = $data->getMeno();
                $priezvisko = $data->getPriezvisko();
                $email = $data->getEmail();
                $telefon = $data->getTelefon();
                $adresa = $data->getAdresa();
                ?>
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black box" >
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Zmena udajov</p>

                                <form class="mx-1 mx-md-4" method="post" action="?c=pouzivatelia&a=zaregistruj">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="meno" id="meno" class="form-control" value="<?= $meno?>" required/>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="priezvisko" id="priezvisko" class="form-control" value="<?= $priezvisko?>" required/>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="email" id="email" class="form-control" value="<?= $email?>" required/>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="telefon" id="telefon" class="form-control" value="<?= $telefon?>" placeholder="tel. čislo(nepovinne)"/>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="adresa" id="adresa" class="form-control" value="<?= $adresa?>" placeholder="adresa(nepovinne)"/>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="upravUcet" class="btn btn-primary btn-lg">Zmenit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
</section>