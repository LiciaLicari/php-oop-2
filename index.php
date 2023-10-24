<?php
$debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
}



require __DIR__  . '/Models/Category.php';
require __DIR__  . '/Models/Product.php';
require __DIR__  . '/Models/Food.php';
require __DIR__  . '/Models/Toy.php';
require __DIR__  . '/Models/Kennel.php';
require __DIR__  . '/db.php';

/*  
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
        -L'e-commerce vende prodotti per animali.
        -I prodotti sono categorizzati, le categorie sono Cani o Gatti.
        -I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    Bonus (non opzionale):
    organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.
    */


?>

<!doctype html>
<html lang="en">

<head>
    <title>PetShop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-warning">
    <header>
        <ul class="nav justify-content-center p-2 bg-dark text-white shadow">
            <li class="nav-item">
                <a class="nav-link active text-uppercase text-white" href="#" aria-current="page">Boolplanet</a>
            </li>


        </ul>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($prodotti as $prodotto) : ?>
                    <div class="col-6 col-md-4 my-3">

                        <div class="card h-100">
                            <div class="card-header d-flex flex-column justify-content-between bg-white text-black h-25">
                                <h4 class="text-uppercase"><?= $prodotto->getName(); ?></h4>
                            </div>
                            <div class="card-body text-center h-50">
                                <img class="h-75 img-fluid" src="<?= $prodotto->product_img ?>" alt="xx">
                                <p class="mt-3"><?= $prodotto->getDetails(); ?></p>
                            </div>
                            <div class="card-footer h-25 d-flex justify-content-between align-items-center">

                                <h2 class="text-success"><?= $prodotto->getPrice($prodotto->product_price); ?> €</h2>

                                <span><?= $prodotto->product_icon->getCategoryIcon(); ?></span>
                                <span><?= $prodotto->product_brand; ?></span>
                                <p><?= $prodotto->product_description; ?></p>
                                <p><?= $prodotto->product_review; ?></p>
                            </div>




                        </div>
                    <?php endforeach; ?>
                    </div>
            </div>
    </main>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>