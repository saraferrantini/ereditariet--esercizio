<?php
// Includi il file che contiene la classe MaterialeBibliotecario
include_once 'materiale_bibliotecario.php';

// Sottoclasse DVD di MaterialeBibliotecario
class DVD extends MaterialeBibliotecario {
    private $titolo;
    private $regista;
    private $annoPubblicazione;

    public function __construct($titolo, $regista, $annoPubblicazione) {
        parent::__construct();
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->annoPubblicazione = $annoPubblicazione;
    }

    public static function contaDVD() {
        return self::getContatoreMateriali();
    }
}
?>
