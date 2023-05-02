<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Menú</title>
  <link rel="stylesheet" href="style.css">
</head>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<body>

<?php

$xml = simplexml_load_file('menu.xml');

$menu = $xml->menu;
?>

<div class="container">
  <h1>Restaurante Jheferson</h1>
  <h1>Menú</h1>

  <div>
    <a href="#platos">Platos</a>
    <a href="#postres">Postres</a>
    <a href="#bebidas">Bebidas</a>
  </div>

  <h2 id="platos">Platos</h2>

  <?php foreach ($menu->plato as $plato): ?>
    <div class="menu-item plato">
      <h3><?php echo $plato->nombre; ?></h3>
      <div class="price">$<?php echo $plato->precio; ?></div>
      <p><?php echo $plato->descripcion; ?></p>
      <p><?php echo $plato->calorias; ?></p>
      <ul>
        <?php foreach ($plato->caracteristicas->ingredientes->ingrediente as $ingrediente): ?>
          <li><?php echo $ingrediente; ?></li>
        <?php endforeach; ?>
      </ul>
      <p><?php echo $plato->caracteristicas->gluten; ?></p>
      <img src="<?php echo $plato->imagen; ?>" alt="<?php echo $plato->nombre; ?>">
    </div>
  <?php endforeach; ?>

  <h2 id="postres">Postres</h2>

  <?php foreach ($menu->postre as $postre): ?>
    <div class="menu-item postre">
      <h3><?php echo $postre->nombre; ?></h3>
      <div class="price">$<?php echo $postre->precio; ?></div>
      <p><?php echo $postre->descripcion; ?></p>
      <p><?php echo $postre->calorias; ?></p>
      <ul>
        <?php foreach ($postre->caracteristicas->ingredientes->ingrediente as $ingrediente): ?>
          <li><?php echo $ingrediente; ?></li>
        <?php endforeach; ?>
      </ul>
      <p><?php echo $postre->caracteristicas->gluten; ?></p>
      <img src="<?php echo $postre->imagen; ?>" alt="<?php echo $postre->nombre; ?>">
    </div>
  <?php endforeach; ?>

  <h2 id="bebidas">Bebidas</h2>

  <?php foreach ($menu->bebida as $bebida): ?>
    <div class="menu-item bebida">
      <h3><?php echo $bebida->nombre; ?></h3>
      <div class="price">$<?php echo $bebida->precio; ?></div>
      <p><?php echo $bebida->descripcion; ?></p>
      <p><?php echo $bebida->calorias; ?></p>
      <p><?php echo $bebida->caracteristicas->alcohol; ?></p>
      <img src="<?php echo $bebida->imagen; ?>" alt="<?php echo $bebida->nombre; ?>">
    </div>
  <?php endforeach; ?>
</div>

</body>
</html>






