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
$petFood = new Food(new Category('Dog', 'dogIcon'), 'Cibo secco', 'Monge', 'Superpemium', 100558, 57.99, true, './assets/agnello.jpg', 3950, 'Agnello & Riso', 'Agnello');

$cuccia = new Accessory(new Category('Dog', 'dogIcon'), 'Cuccia', 'Trixie', ' Natura Classic', 91034, 42.90, true, './assets/cuccia.jpg','plastic', '80x70x120');
$tiragraffi = new Accessory(new Category('Cat', 'catIcon'), 'Tiragraffi', 'Natural Paradise Orchid', 'L', 15200, 152.90, false, './assets/tiragraffi.jpg','wood', '40x60x100');

$palla = new Toy(new Category('Dog', 'dogIcon'), 'Chuckit!', 'Chuckit!', 'Chuckit!', 25228, 3.99, false, './assets/palla.jpg', 'caucciu', '10x10');
$pelouche = new Toy(new Category('Cat', 'catIcon'), 'KONG', 'Shells Turtle!', 'Turtle!', 78228, 9.99, true, './assets/turtle.jpg', 'nylon e TPR', '25x10');

$foods = [
  new Food(new Category('Cat', 'catIcon'), 'Croccantini', 'Felix', 'Pepite', 101403, 6.99, true, './assets/crocchini.jpg', 950, 'Crunchy and soft', 'Delicious'),
  $petFood = new Food(new Category('Dog', 'dogIcon'), 'Cibo secco', 'Monge', 'Superpemium', 100558, 57.99, true, './assets/agnello.jpg', 3950, 'Agnello & Riso', 'Agnello')
];

$accessories = [
  new Accessory(new Category('Dog', 'dogIcon'), 'Cuccia', 'Trixie', ' Natura Classic', 91034, 42.90, true, './assets/cuccia.jpg','plastic', '80x70x120'),
  new Accessory(new Category('Cat', 'catIcon'), 'Tiragraffi', 'Natural Paradise Orchid', 'L', 15200, 152.90, false, './assets/tiragraffi.jpg','wood', '40x60x100')
];

$toys = [
  new Toy(new Category('Dog', 'dogIcon'), 'Chuckit!', 'Chuckit!', 'Chuckit!', 25228, 3.99, false, './assets/palla.jpg', 'caucciu', '10x10'),
  new Toy(new Category('Cat', 'catIcon'), 'KONG', 'Shells Turtle!', 'Turtle!', 78228, 9.99, true, './assets/turtle.jpg', 'nylon e TPR', '25x10'),
  new Toy(new Category('Dog', 'dogIcon'), 'Chuckit!', 'Chuckit!', 'Chuckit!', 25228, 3.99, false, './assets/palla.jpg', 'caucciu', '10x10'),
  new Toy(new Category('Cat', 'catIcon'), 'KONG', 'Shells Turtle!', 'Turtle!', 78228, 9.99, true, './assets/turtle.jpg', 'nylon e TPR', '25x10')
]
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <style>
    img {
      max-width: 100%;
    }
    .red {
      color: red
    }
  </style>
  <title>Pet E-Shop</title>
</head>
<body>

<div class="container">
  <div class="row py-5 text-center">

    <h2 class="p-5">TOYS</h2>
    <?php foreach($toys as $toy): ?>
    <div class="col-3 mb-5">
      <div class="card" >
        <img src="<?php echo $toy->image ?>" class="card-img-top" alt="<?php echo $toy->name ?>">
        <div class="card-body">
          <h3 class="card-title py-3"><?php echo 'Product: <br/>' . '<strong>' . $toy->name . '</strong>'?></h3>
          <h4 class="card-title"><?php echo 'Brand: ' .$toy->brand ?></h4>
          <h4 class="card-title"><?php echo 'Model: ' .$toy->model ?></h4>
          <h5 class="card-title"><?php echo 'Feature: ' .$toy->feature ?></h5>
          <h5 class="card-title"><?php echo 'Size: ' .$toy->size ?></h5>
          <h5 class="card-title"><?php echo 'Price: ' .$toy->price ?></h5>
          <?php if ($toy->isAvailable) {
             echo '<h5 class="card-title"> Product Available </h5>';
            } else {
            echo '<h5 class="card-title red"> Product Not Available </h5>';
            };
           ?>
        </div>
      </div>
    </div>

    <?php endforeach; ?>
  </div>
</div>
  
</body>
</html>