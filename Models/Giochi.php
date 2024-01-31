<?php 
    require_once __DIR__.'/Prodotti.php';

    // Definizione classe Giochi ereditiera della classe Prodotti 
    class Giochi extends Prodotti{
        public $materiale;

        function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere, $_materiale){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere);
            $this->materiale = $_materiale;
        }
    }
?>