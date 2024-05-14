<?php
// Definizione dell'interfaccia Prestito solo se non è già stata definita
if (!interface_exists('Prestito')) {
    interface Prestito {
        public function presta();
        public function restituisci();
    }
}
?>
