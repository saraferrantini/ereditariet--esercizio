<?php
// Includi il file che contiene l'interfaccia Prestito
include_once 'prestito.php';

// Classe astratta MaterialeBibliotecario che implementa l'interfaccia Prestito
abstract class MaterialeBibliotecario implements Prestito {
    protected static $contatoreMateriali = 0;

    public function __construct() {
        self::$contatoreMateriali++;
    }

    public function presta() {
        // Decrementa il numero disponibile di materiali
        self::$contatoreMateriali--;
        // Qui potrebbe essere implementata la logica per gestire il prestito
    }

    public function restituisci() {
        // Incrementa il numero disponibile di materiali
        self::$contatoreMateriali++;
        // Qui potrebbe essere implementata la logica per gestire la restituzione
    }

    public static function getContatoreMateriali() {
        return self::$contatoreMateriali;
    }
}
?>
