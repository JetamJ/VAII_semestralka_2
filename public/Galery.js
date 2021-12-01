var cisloObrazku = 1;
showSlides(cisloObrazku);

function posun(n) {
    showSlides(cisloObrazku += n);
}

function aktualny(n) {
    showSlides(cisloObrazku = n);
}

function showSlides(n) {
    var i;
    var obrazky = document.getElementsByClassName("restaurant-photo");
    if (n > obrazky.length)
    {
        cisloObrazku = 1
    }
    if (n < 1)
    {
        cisloObrazku = obrazky.length
    }
    for (i = 0; i < obrazky.length; i++) {
        obrazky[i].style.display = "none";
    }
    obrazky[cisloObrazku-1].style.display = "block";
}
