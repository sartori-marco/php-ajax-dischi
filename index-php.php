<?php
  include 'db.php';
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <header>

  </header>

  <main>
    <?php
    foreach ($dischi as $disco){
      $img = $disco['img'];
      $titolo = $disco['titolo'];
      $autore = $disco['autore'];
      $genere = $disco['genere'];
      $anno = $disco['anno'];
      ?>
      <div class="cd">
        <img src="<?= $img ?>" alt="immagine">
        <h3 class="titolo"> <?= $titolo ?> </h3>
        <h4 class="autore"> <?= $autore ?> </h4>
        <h5 class="anno"> <?= $anno ?> </h5>
      </div>
    <?php  } ?>


  </main>

  <footer>

  </footer>



</body>
</html>
