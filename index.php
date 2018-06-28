<?php
require_once('templates/header.html');
require_once('templates/nav.html');
require_once('templates/slider.html');
?>

<main class="container">
    <section id="products" class="row">
        <div class="title"><h1>Featured products</h1></div>
        <div class="cards row">
            <div class="card col-lg-4" style="">
                <img class="card-img-top" src="https://fakeimg.pl/330x250/" alt="Card image cap">
                <div class="card-body">
                    <div class="row card-details">
                        <h5 class="col-lg-6 card-title">Product title</h5>
                        <div class="col-lg-4 offset-lg-2 price"><span>20 €</span></div>
                    </div>
                    <a href="#" class="btn btn-outline-secondary">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-lg-4" style="">
                <img class="card-img-top" src="https://fakeimg.pl/330x250/" alt="Card image cap">
                <div class="card-body">
                    <div class="row card-details">
                        <h5 class="col-lg-6 card-title">Product title</h5>
                        <div class="col-lg-4 offset-lg-2 price"><span>20 €</span></div>
                    </div>
                    <a href="#" class="btn btn-outline-secondary">Ajouter au panier</a>
                </div>
            </div>
            <div class="card col-lg-4" style="">
                <img class="card-img-top" src="https://fakeimg.pl/330x250/" alt="Card image cap">
                <div class="card-body">
                    <div class="row card-details">
                        <h5 class="col-lg-6 card-title">Product title</h5>
                        <div class="col-lg-4 offset-lg-2 price"><span>20 €</span></div>
                    </div>
                    <a href="#" class="btn btn-outline-secondary">Ajouter au panier</a>
                </div>
            </div>

        </div>
    </section>
</main>

<?php require_once('templates/footer.html'); ?>