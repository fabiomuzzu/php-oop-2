<?php 
    require_once __DIR__.'/Models/Accessori.php';
    require_once __DIR__.'/Models/Cibo.php';
    require_once __DIR__.'/Models/Giochi.php';
    require_once __DIR__.'/Models/Prodotti.php';


    // Definizione dei generi di animale
    $cane = new Genere('Cane');
    $gatto = new Genere('Gatto');
    $pesce = new Genere('Pesce');
    $uccello = new Genere('Uccello');

    $articoliCibo = 
    [
        new Cibo('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'Crocchette energetiche', 5, 'Disponibile', $cane, '1200'),
        new Cibo('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Crocchette tonno e riso', 30, 'Disponibile', $cane, '1200'),
        new Cibo('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Bocconcini con vitello', 3, 'Disponibile', $gatto, '1200'),
        new Cibo('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per pesci', 7, 'Non disponibile', $pesce, '1200'),
    ];
    $articoliGiochi = 
    [
        new Giochi('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Giocattolo per cani', 10, 'Non disponibile', $cane, 'Gomma'),
        new Giochi('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Giocattolo per gatti', 7, 'Disponibile', $gatto, 'Plastica'),
    ];
    $articoliAccessori = 
    [
        new Accessori('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera per uccelli', 3, 'Non disponibile', $uccello, 'Consigliata per i volatili di piccola/media taglia'),
        new Accessori('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Filtro per acquari', 19, 'Disponibile', $pesce, 'Obbligatoria la sostituzione ogni 3 mesi'),
    ];

?>