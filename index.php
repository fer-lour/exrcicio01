<?php

$enter="";

for ($i=1; $i <= 10; $i++) { 
  $enter .= <<<END
    <label for="entrada_$i">Input $i: </label>
    <input type="number" name="entrada_$i" id="entrada_$i"><br><br>
  END;
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
  <form action="saida.php" method="get">
    <?= $enter ?>
    <input type="submit" name="submit" value="Submit">
  </form>
  
</body>
</html>