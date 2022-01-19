<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php 

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/PremiumUser.php";

$new_user = new User("Matteo", "Fabio");
$new_user->age = 28;
$new_user->address = "Via Roma";
$new_user->language = "Italian";
$new_user->country = "Italy";
var_dump($new_user);

$new_premium_user = new PremiumUser("Davide", "Fabio");
var_dump($new_premium_user);

$new_product = new Product("1234", "Playstation 5", "Available");
$new_product->setPrice(499.99);


var_dump($new_product);

$new_credit_card = new CreditCard ("Matteo Fabio", "555");
var_dump($new_credit_card);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

 <!-- USER -->
 <h2>
   Utente:
   <?php echo $new_user -> getFirstname() ?>
   <?php echo $new_user -> getSurname() ?>
 </h2>
 
 <h2>
   Prodotto:
   <?php echo $new_product -> getName() ?>
 </h2>

 <h2>
    Sconto:
    <?php echo $new_user -> getDiscount() ?> &percnt;
 </h2>

 <h2>
   Prezzo:
   <?php echo $new_product -> getPrice() ?>
 </h2>

 

<hr>
 <!-- USER PREMIUM  -->

 <h2>
   Utente:
   <?php echo $new_premium_user -> getFirstname() ?>
   <?php echo $new_premium_user -> getSurname() ?>
 </h2>
 
 <h2>
   Prodotto:
   <?php echo $new_product -> getName() ?>
 </h2>

 <h2>
    Sconto:
    <?php echo $new_premium_user -> getDiscount() ?> &percnt;
 </h2>

 <h2>
   Prezzo:
   <?php echo $new_premium_user -> getFinalPrice($new_product) ?>
 </h2>


</body>
</html>