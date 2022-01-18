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
var_dump($new_user);

$new_premium_user = new PremiumUser("Davide", "Fabio");
var_dump($new_premium_user);

$new_product = new Product("Playstation 5", "Available");
$new_product->setPrice(499.99);
$new_product->setDiscount(10);
var_dump($new_product);

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
  Prodotto: <?php echo $new_product->getName() ?>
 </h2>

 <h3>
  Prezzo: <?php echo $new_product->getPrice() ?>
 </h3>

 <h4>
  Sconto: <?php echo $new_product->getDiscount() ?> %
 </h4>

 <h2>
  Prezzo scontato: <?php echo $new_product->getFinalPrice();?> €
 </h2>


 <!-- PREMIUM USER -->
 <h2>
  Prodotto: <?php echo $new_premium_user->getName() ?>
 </h2>

 <h3>
  Prezzo: <?php echo $new_premium_user->getPrice() ?>
 </h3>

 <h4>
  Sconto: <?php echo $new_premium_user->getDiscount() ?> %
 </h4>

 <h2>
  Prezzo scontato: <?php echo $new_premium_user->setPremiumDiscount();?> €
 </h2>


</body>
</html>