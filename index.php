<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:- 
L’e-commerce vende **prodotti** per animali.
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php 
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Accessory.php';

$crocchini = new Food(new Category('Cat', 'catIcon'), 'Croccantini', 'Felix', 'Pepite', 101403, 6.99, true, './assets/crocchini.jpg', 950, 'Crunchy and soft', 'Delicious');

var_dump($crocchini);
var_dump($crocchini->category->name);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet E-Shop</title>
</head>
<body>
  
</body>
</html>