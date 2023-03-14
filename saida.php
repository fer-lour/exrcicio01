<?php
include_once('funcoes.php');

if (isset($_GET['submit'])) {
  $new_array = extractSubmit($_GET);
  if (validateAllInput($new_array)) {
    $negativos = negativos($new_array);

    $intervalo = intervalo($new_array);

    $media_aritmetica = media($new_array);
  }else {
    header('location: index.php');
    exit();
  }
}

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
  <h4>Valores digitados</h4>
  
<?php for ($i=1; $i <=sizeof($new_array) ; $i++): ?>
<?= $new_array['entrada_'.$i] ?>, 
<?php endfor ?>

  <h3>Valores negativos:  <?= $negativos?></h3>
  <h3>Valores entre 10 e 20 : <?= $intervalo?>    - fora do intervalo: <?= 10 - $intervalo ?></h3>
  <h3>media aritmetica: <?= $media_aritmetica ?></h3>
  <br><br>
  <a href="index">Voltar</a>
</body>
</html>