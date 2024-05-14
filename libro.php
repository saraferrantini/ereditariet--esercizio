<?php
// Includi il file che contiene la classe MaterialeBibliotecario
include_once 'materiale_bibliotecario.php';

// Sottoclasse Libro di MaterialeBibliotecario
class Libro extends MaterialeBibliotecario {
    private $titolo;
    private $autore;
    private $annoPubblicazione;

    public function __construct($titolo, $autore, $annoPubblicazione) {
        parent::__construct();
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->annoPubblicazione = $annoPubblicazione;
    }

    public static function contaLibri() {
        return self::getContatoreMateriali();
    }
}
?>
