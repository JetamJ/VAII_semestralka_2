<?php if (isset($_GET['error'])) {?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <?= $_GET['error'] ?>
    </div>
<?php } ?>
<section class="page-section">
    <div class="container">
        <div class="row text-center">
            <h2>Burgre</h2>
            <?php /** @var \App\Models\MenuModel[] $data */
            foreach ($data as $menu) { ?>
            <div class="col-md-4 menu vymaz_<?= $menu->id ?>">
                <img class="picture-burger" src=<?= $menu->img?> alt="burger">
                <h4 class="my-3"><?= $menu->nazov?></h4>
                <p class="text-muted"><?= $menu->zlozenie?></p>
                <p class="text-muted"><?= $menu->cena?> €</p>
                <div class="btn-group">
                    <?php if(\App\Prihlasenie::jePrihlaseny() && \App\Prihlasenie::jeAdmin()){?>
                    <a class="btn btn-uprav" href="?c=home&a=upravPolozku&id=<?= $menu->id ?>">Uprav</a>
                        <a class="btn btn-vymaz" itemid="<?= $menu->id ?>">Vymaž</a>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <?php if(\App\Prihlasenie::jePrihlaseny() && \App\Prihlasenie::jeAdmin()){?>
            <div class="col-md-12">
                <form action="">
                    <form action="">
                        <a class="btn btn-primary nav-link" href="?c=home&a=pridajPolozku">Pridaj Polužku</a>
                    </form>
                </form>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

