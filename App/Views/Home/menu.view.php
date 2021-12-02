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
            <div class="col-md-4 menu">
                <img class="picture-burger" src=<?= $menu->img?> alt="burger">
                <h4 class="my-3"><?= $menu->nazov?></h4>
                <p class="text-muted"><?= $menu->zlozenie?></p>
                <p class="text-muted"><?= $menu->cena?> €</p>
                <div class="btn-group">
                    <a class="btn btn-uprav" href="?c=home&a=upravPolozku&id=<?= $menu->id ?>&nazov=<?= $menu->nazov ?>&zlozenie=<?= $menu->zlozenie ?>&img=<?= $menu->img ?>&cena=<?= $menu->cena ?>">Uprav</a>
                    <a class="btn btn-vymaz" onclick="return confirm('Ste si isty, že chcete vymazať túto položku?');" href="?a=vymaz&id=<?=$menu->id?>">Vymaž</a>
                </div>
            </div>
            <?php } ?>
            <div class="col-md-12">
                <form action="">
                    <form action="">
                        <a class="btn btn-primary nav-link" href="?c=home&a=pridajPolozku">Pridaj Polužku</a>
                    </form>
                </form>
            </div>
        </div>
    </div>
</section>

