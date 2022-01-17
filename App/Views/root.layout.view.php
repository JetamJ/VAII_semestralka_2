<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="semestralka/public/css.css">
    <script src="semestralka/public/Galery.js"></script>
    <script src="semestralka/public/jquery-3.6.0.min.js"></script>
    <script src="semestralka/public/Main.js"></script>
    <title>Best burger</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#">Best burger</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="?c=home">Domov</a></li>
                <li class="nav-item"><a class="nav-link" href="?c=home&a=menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="?c=kontakt&a=kontakt">Kontakt</a></li>
                <?php if(\App\Prihlasenie::jePrihlaseny()){?>
                    <?php if(\App\Prihlasenie::jePrihlaseny() && \App\Prihlasenie::jeAdmin()){?>
                        <li class="nav-item"><a class="nav-link" href="?c=pouzivatelia&a=zoznamPouzivatelov">Pouzivatelia</a></li>
                    <?php } ?>
                    <li class="nav-item"><a class="nav-link" href="?c=pouzivatelia&a=profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="?c=pouzivatelia&a=odhlasenie">Odhlasit</a></li>
                <?php } else {?>
                    <li class="nav-item"><a class="nav-link" href="?c=pouzivatelia&a=login">Prihlasit</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
    <?php if(\App\Prihlasenie::jePrihlaseny()){?>
        <p class="prihlasenieInfo">Ste prihlaseny ako <?= \App\Prihlasenie::getMeno() ?></p>
    <?php } ?>
</nav>
<header class="masthead">
    <div class="container">
        <h1 class="main-heading">BEST BURGER</h1>
    </div>
</header>
<?= $contentHTML ?>
</body>
</html>

