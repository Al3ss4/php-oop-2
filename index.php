<?php
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce. Il focus è sulla parte di slide condivisa oggi su Drive.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/
require_once __DIR__ . '/utent.php';
require_once __DIR__ . '/registered.php';


$userOne = new utent('luca', 'rossi', 'userOne@gmail.com' , true);


$userOne->email();
$userOne -> validCard ('2020');
$userOne-> getDiscount();

echo var_dump($userOne) . "</br>"; 

$userTwo = new utent('paolo', 'verdi', 'userTwo@gmail.com' , true);


$userTwo->email();
$userTwo -> validCard ('2025');
$userTwo-> getDiscount();

echo var_dump($userTwo) . "</br>";


$userThree = new utent('alessandro', 'barca', 'userThree@gmail.com' , false);


$userThree->email();
$userThree -> validCard ('2020');
$userThree-> getDiscount();

echo var_dump($userThree) . "</br>";

$userFour = new utent('paolo', 'russo', 'userFour@gmail.com' , false);


$userFour->email();
$userFour -> validCard ('2025');
$userFour-> getDiscount();

echo var_dump($userFour) . "</br>";

?>