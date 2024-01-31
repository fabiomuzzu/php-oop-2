<?php 
    require_once __DIR__.'/Prodotti.php';

    // Definizione classe Accessori ereditiera della classe Prodotti 
    class Accessori extends Prodotti{
        public $necessita;

        function __construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita,$_genere, $_necessita){
            parent::__construct($_nome, $_immagine, $_descrizione, $_prezzo, $_disponibilita, $_genere);
            $this->necessita = $_necessita;
        }
    }
?>