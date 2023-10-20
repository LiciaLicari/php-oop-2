<?php

$prodotti = [];

array_push(
    $prodotti,

    $carota = new Toy('carota gomma', 4, new Category('Gatti'), "https://unsplash.it/300/300?image=20", 'cotone, catnip'),

    $crocchette = new Food('crocchette per gatti', 50, new Category('gatti'), "https://unsplash.it/300/300?image=142", 100),

    $trasportino = new Kennel('trasportino', 80, new Category('gatti'), "https://unsplash.it/300/300?image=44", 50, 40, 35),

    $osso = new Food('osso', 20, new Category('cani'), "https://unsplash.it/300/300?image=242", 150),

    $cuccia_gatto = new Kennel('cuccia indoor', 45, new Category('gatti'), "https://unsplash.it/300/300?image=344", 40, 20, 40),

    $cuccia_cane = new Kennel('cuccia indoor', 65, new Category('cani'), "https://unsplash.it/300/300?image=344", 90, 30, 50),

);
