<?php 
    // Definizione classe padre Prodotti
    class Prodotti{
        public $nome;
        public $immagine;
        public $descrizione;
        public $prezzo;
        public $disponibilità;

        public function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilità){
            $this->nome = $_nome;
            $this->immagine = $_immagine;
            $this->descrizione = $_descrizione;
            $this->prezzo = $_prezzo;
            $this->disponibilità = $_disponibilità;
        }
    }

    // Definizione classe Cibi ereditiera della classe Prodotti 
    class Cibo extends Prodotti{
        public $ingredienti;
        public $proteine;

        public function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilità, $ingredienti, $proteine){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilità);
            $this->ingredienti = $_ingredienti;
            $this->proteine = $_proteine;
        }
    }


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