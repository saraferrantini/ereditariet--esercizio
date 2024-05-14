<?php
// Includi il file che contiene la classe Libro
include_once 'libro.php';
// Includi il file che contiene la classe DVD
include_once 'dvd.php';

// Esempio di utilizzo
$libro1 = new Libro("Il Signore degli Anelli", "J.R.R. Tolkien", 1954);
$libro2 = new Libro("Cronache del ghiaccio e del fuoco", "George R.R. Martin", 1996);

$dvd1 = new DVD("Inception", "Christopher Nolan", 2010);
$dvd2 = new DVD("Interstellar", "Christopher Nolan", 2014);

$libro1->presta();
$libro2->presta();
$dvd1->presta();

$libro1->restituisci();
$dvd1->restituisci();


echo "Numero totale di libri nella biblioteca: " . Libro::contaLibri() . "<br>"; // Output: 1
echo "Numero totale di DVD nella biblioteca: " . DVD::contaDVD(); // Output: 1
?>
