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
?>