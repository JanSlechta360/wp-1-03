
<!DOCTYPE html>
<html lang="en">
<?php
      $a=10;
      $b=5;

      $sumarry = $a + $b;
      $difference = $a - $b;
      $product = $a * $b;

      if ($b != 0) {
          $portion = $a / $b;
      } else {
          $portion = "nelze dělit nulou"
?>]
      <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <p> A = <?= $a ?> </p>
     <p> B = <?= $b ?> </p>

     <p>Součet <?= $a ?> + <?= $b ?> = <?= $sumarry ?> </p>
     <p>Rozdíl <?= $a ?> - <?= $b ?> = <?= $difference ?> </p>
     <p>Součin <?= $a ?> * <?= $b ?> = <?= $product ?> </p>
     <p>Podíl  <?= $a ?> / <?= $b ?> = <?= $portion ?> </p> 

</body>
</html>
