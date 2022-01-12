<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-75">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black box" >
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Prihlasenie</p>

                                <form class="mx-1 mx-md-4" method="post" action="?a=prihlasenie">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name= "email" id="email" class="form-control" placeholder="Zadajte email" />
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name= "heslo" id="heslo" class="form-control" placeholder="Zadajte heslo" />
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                            <label class="form-check-label" for="form2Example3">Remember me</label>
                                        </div>
                                        <a href="#!" class="text-body">Forgot password?</a>
                                    </div>

                                    <div class="text-center text-lg-start mt-8 pt-2 ">
                                        <button type="prihlasenie" class="btn btn-primary btn-lg">Login</button>
                                        <p class="small fw-bold mt-2 pt-1 mb-0">Nemaš učet? <a href="?c=home&a=vytvorUcet"" class="link-danger">Zaregistruj sa</a></p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>