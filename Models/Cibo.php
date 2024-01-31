<?php 
    require_once __DIR__.'/Prodotti.php';
    
    // Definizione classe Cibi ereditiera della classe Prodotti 
    class Cibo extends Prodotti{
        public $proteine;

        function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere, $_proteine){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere);
            $this->proteine = $_proteine;
        }
    }
?>