<!DOCTYPE html>
<html lang="da-DK">
<head>
   <title>Grødberegner til tukanmorgenmad</title>
   <!-- META TAGS -->
   <meta charset="UTF-8">
   <meta name="description" content="Grødberegner til din sultne tukan">
   <meta name="author" content="N4.DK">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap 4.0 -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
   <style>
   body {
      padding: 25px;
      background-image: url("bgOpacity.png");
      text-shadow:
      -1px -1px 0 white,
      1px -1px 0 white,
      -1px 1px 0 white,
      1px 1px 0 white;
   }
   input {
      padding: 10px;
      margin: 3px;
   }
   #navneBox {
      position: fixed;
      right: 15px;
      bottom: 5px;
      color: yellow;
      font-size: 50px;
      font-weight: bold;
      text-shadow:
      -1px -1px 0 black,
      1px -1px 0 black,
      -1px 1px 0 black,
      1px 1px 0 black;
   }
   </style>
   <h1>Grødberegner</h1>
   <p style="max-width: 650px;">
      Står du også hver morgen med lommeregneren fremme, fordi du skal finde den helt rigtige opskrift til det antal
      af dine tukaner, der er sultne? Her er løsningen, der kan spare dig tid! Indtast antallet af sultne tukaner,
      og grødopskriften ændrer sig efter dit behov.
   </p>
   <form class="form-inline" action="<?php $_PHP_SELF ?>" method="POST">
      <input type="text" class="form-control" placeholder="Indtast dit navn" name="navnIndtastet" required>
      <input type="number" class="form-control" placeholder="Antal sultne tukaner" name="antalTukanerIndtastet" required>
      <input type="submit" class="btn btn-primary mb-2" value="Beregn!">
   </form>
   <br>
   <?php
   $navn = $_POST["navnIndtastet"];
   $antalTukaner = $_POST["antalTukanerIndtastet"];

   $antalBananer = 2;
   $antalRosiner = 16;
   $antalMelonskiver = 4;
   $mlKokosmaelk = 300;

   echo '<h4>Du skal bruge</h4>';
   echo '<ul>';
   echo '<li>Antal bananer: ' . $antalBananer * $antalTukaner . '</li>';
   echo '<li>Antal rosiner: ' . $antalRosiner * $antalTukaner . '</li>';
   echo '<li>Antal melonskiver: ' . $antalMelonskiver * $antalTukaner . '</li>';
   echo '<li>Ml. kokosmælk: ' . $mlKokosmaelk * $antalTukaner . '</li>';
   echo '</ul>';

   echo '<h4>Fremgangsmåde</h4>';
   echo '<ol>';
   echo '<li>Tag de ' . $antalBananer * $antalTukaner . ' bananer og mos dem med en gaffel.</li>';
   echo '<li>Fjern skrællen fra alle ' . $antalMelonskiver * $antalTukaner . ' melonskiver og hak dem groft.</li>';
   echo '<li>Hæld de ' . $mlKokosmaelk * $antalTukaner . ' ml kokosmælk op i en skål, tilsæt mos, melon samt rosiner.</li>';
   echo '</ol>';

   echo '<div id="navneBox">' . $navn . '</div>'
   ?>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>