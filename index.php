<?php 
    // Classse padre dei prodotti
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