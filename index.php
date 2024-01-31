<?php 
    // Definizione classe padre Prodotti
    class Prodotti{
        public $nome;
        public $immagine;
        public $descrizione;
        public $prezzo;
        public $disponibilita;

        public function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita){
            $this->nome = $_nome;
            $this->immagine = $_immagine;
            $this->descrizione = $_descrizione;
            $this->prezzo = $_prezzo;
            $this->disponibilita = $_disponibilita;
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
        public $ingredienti;
        public $proteine;

        public function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $ingredienti, $proteine){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita);
            $this->ingredienti = $_ingredienti;
            $this->proteine = $_proteine;
        }
    }

    // Definizione classe Giochi ereditiera della classe Prodotti 
    class Giochi extends Prodotti{
        public $materiale;
        public $dimensione;

        public function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $materiale, $dimensione){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita);
            $this->materiale = $_materiale;
            $this->dimensione = $_dimensione;
        }
    }

    // Definizione classe Accessori ereditiera della classe Prodotti 
    class Accessori extends Prodotti{
        public $necessita;

        public function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $necessita){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita);
            $this->necessita = $_necessita;
        }
    }

    // Definizione dei generi di animale
    $cane = new Genere('cane');
    $gatto = new Genere('gatto');
    $pesce = new Genere('pesce');
    $uccello = new Genere('uccello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet eCommerce</title>
</head>
<body>
    
</body>
</html>