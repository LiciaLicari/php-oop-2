<?php

$prodotti = [];

try {
    array_push(
        $prodotti,

        $carota = new Toy('carota gomma', 4, 20, new Category('Gatti'), "https://unsplash.it/300/300?image=20", 'cotone, catnip', 'brand', 'Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione', 'Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review '),

        $crocchette = new Food('crocchette per gatti', 50, 20, new Category('gatti'), "https://unsplash.it/300/300?image=142", 100, 'brand', 'Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione', 'Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review ', 90),

        $trasportino = new Kennel('trasportino', 80, 20, new Category('gatti'), "https://unsplash.it/300/300?image=44", 'brand', 'Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione', 'Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review ', 50, 40, 35, 'blu'),

        $osso = new Food('osso', 20, 20, new Category('cani'), "https://unsplash.it/300/300?image=242", 150, 'brand', 'Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione', 'Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review ', 40),

        $cuccia = new Kennel('cuccia indoor', 45, 20, new Category('gatti'), "https://unsplash.it/300/300?image=344", 'grigio', 40, 20, 40, 'brand', 'Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione', 'Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review '),

        $cuccia = new Kennel('cuccia indoor', 65, 20, new Category('cani'), "https://unsplash.it/300/300?image=344", 'blu', 90, 30, 50, 'brand', 'Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione Questa è una descrizione', 'Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review Questa è una review '),

    );
} catch (Exception $e) {
    echo $e->getMessage();
}
