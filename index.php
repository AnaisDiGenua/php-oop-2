<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Product.php';

//creazione prodotti
$products = [
    new Product("Felpa oversize con motivi", 24.99, "Maglia oversize in tessuto felpato di misto cotone con motivo davanti. Scollo arrotondato, spalle basse, maniche lunghe. Bordi a costine sullo scollo, a fondo manica e in basso. Morbido interno spazzolato." ,"Felpe", "Rosa chiaro/Boston", 1029275008),
    new Product("Camicia sciancrata", 19.99, "Camicia in tessuto, linea aderente con sciancrature sul davanti. Maniche lunghe con polsino alto, spacchetto e bottone in fondo. Colletto a punta, bottoni sul davanti, linea dritta in basso con angoli arrotondati." ,"Felpe", "bianco", 1026637001),
    new Product("Cappotto dritto con cintura da annodare", 59.99, "Cappotto al polpaccio in tessuto dalla linea dritta. Spalle bassissime, cintura staccabile da annodare in vita. Tasche oblique laterali, spacchi sui lati. Foderato." ,"cappotti", "crema", 1028364001)
];

//var_dump($products);




?>