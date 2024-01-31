<?php 
    // Definizione classe padre Prodotti
    class Prodotti{
        public $nome;
        public $immagine;
        public $descrizione;
        public $prezzo;
        public $disponibilita;
        public $genere;

        public function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, Genere $_genere){
            $this->nome = $_nome;
            $this->immagine = $_immagine;
            $this->descrizione = $_descrizione;
            $this->prezzo = $_prezzo;
            $this->disponibilita = $_disponibilita;
            $this->genere = $_genere;
        }
    }

    // Definizione classe Genere per gli animali
    class Genere{
        public $genere;

        function __construct($_genere){
            $this->genere = $_genere;
        }
    }

    // Definizione classe Cibi ereditiera della classe Prodotti 
    class Cibo extends Prodotti{
        public $proteine;

        function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere, $_proteine){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere);
            $this->proteine = $_proteine;
        }
    }

    // Definizione classe Giochi ereditiera della classe Prodotti 
    class Giochi extends Prodotti{
        public $materiale;

        function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere, $_materiale){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere);
            $this->materiale = $_materiale;
        }
    }

    // Definizione classe Accessori ereditiera della classe Prodotti 
    class Accessori extends Prodotti{
        public $necessita;

        function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita,$_genere, $_necessita){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere);
            $this->necessita = $_necessita;
        }
    }

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Pet eCommerce</title>
</head>
<body>
    <div class="container">
        <div class="row">

            <!-- Print dell'array degli articoli di cibo -->
            <?php foreach($articoliCibo as $item) { ?>
                <div class="col-3 py-2">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item->immagine ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->nome ?></h5>
                            <p class="card-text"><?php echo $item->descrizione ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo '€'.$item->prezzo ?></li>
                            <li class="list-group-item"><?php echo $item->genere->genere ?></li>
                            <li class="list-group-item"><?php echo $item->disponibilita ?></li>
                            <li class="list-group-item"><?php echo $item->proteine ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <!-- Print dell'array degli articoli giochi -->
            <?php foreach($articoliGiochi as $item) { ?>
                <div class="col-3 py-2">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item->immagine ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->nome ?></h5>
                            <p class="card-text"><?php echo $item->descrizione ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo '€'.$item->prezzo ?></li>
                            <li class="list-group-item"><?php echo $item->genere->genere ?></li>
                            <li class="list-group-item"><?php echo $item->disponibilita ?></li>
                            <li class="list-group-item"><?php echo $item->materiale ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <!-- Print dell'array degli articoli accessori -->
            <?php foreach($articoliAccessori as $item) { ?>
                <div class="col-3 py-2">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item->immagine ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->nome ?></h5>
                            <p class="card-text"><?php echo $item->descrizione ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo '€'.$item->prezzo ?></li>
                            <li class="list-group-item"><?php echo $item->genere->genere ?></li>
                            <li class="list-group-item"><?php echo $item->disponibilita ?></li>
                            <li class="list-group-item"><?php echo $item->necessita ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>