<?php
require_once('quiz.php')

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Quiz 1</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Quiz de merde</h1>
  <?php
  echo openForm("script.php", "container" );
  echo questionTitle('Quel est le plus grand sportif français de tous les temps ?');
  echo createInput(['id' => 'z1','type' => 'radio','name' => 'q1','value' => 'a','checked' => 'checked','label' => 'Zidane.','position' => false,
]);
  echo createInput(['id' => 'z2','type' => 'radio','name' => 'q1','value' => 'b','checked' => '','label' => 'Zidane !!!!','position' => false,
]);
  echo createInput(['id' => 'z3','type' => 'radio','name' => 'q1','value' => 'c','checked' => '','label' => 'Zidane ?','position' => false,
]);
  echo createInput(['id' => 'z4','type' => 'radio','name' => 'q1','value' => 'd','checked' => '','label' => 'ZIDANE !!!!!!!!','position' => false,
]);

  echo questionTitle('Lesquelles de ces chansons sont présentes sur le premier album du groupe Daft Punk ?');
  echo createInput(['id' => 'df1','type' => 'checkbox','name' => 'q2','value' => 'a','checked' => 'checked','label' => 'Hot Fidelity','position' => false,
]);
  echo createInput(['id' => 'df2','type' => 'checkbox','name' => 'q2','value' => 'b','checked' => '','label' => 'Discovery','position' => false,
]);
  echo createInput(['id' => 'df3','type' => 'checkbox','name' => 'q2','value' => 'c','checked' => '','label' => "Rollin' and Scratchin'",'position' => false,
]);
  echo createInput(['id' => 'df4','type' => 'checkbox','name' => 'q2','value' => 'd','checked' => '','label' => 'Phoenix','position' => false,
]);

  echo questionTitle('Choisissez les noms des personnages principaux de Interstella 5555 dans la liste suivante');
  echo createInput(['id' => 'isc1','type' => 'checkbox','name' => 'q3','value' => 'a','checked' => 'checked','label' => 'Stella','position' => false,
]);
  echo createInput(['id' => 'isc2','type' => 'checkbox','name' => 'q3','value' => 'b','checked' => '','label' => 'Shep','position' => false,
]);
  echo createInput(['id' => 'isc3','type' => 'checkbox','name' => 'q3','value' => 'c','checked' => '','label' => 'Chora','position' => false,
]);
  echo createInput(['id' => 'isc4','type' => 'checkbox','name' => 'q3','value' => 'd','checked' => '','label' => 'Fortae','position' => false,
]);
  echo createInput(['id' => 'isc5','type' => 'checkbox','name' => 'q3','value' => 'e','checked' => '','label' => 'Arpegius','position' => false,
]);
  echo createInput(['id' => 'isc6','type' => 'checkbox','name' => 'q3','value' => 'f','checked' => '','label' => 'Baryl','position' => false,
]);
  echo createInput(['id' => 'isc7','type' => 'checkbox','name' => 'q3','value' => 'g','checked' => '','label' => 'Octave','position' => false,
]);
  echo createInput(['id' => 'isc8','type' => 'checkbox','name' => 'q3','value' => 'h','checked' => '','label' => 'Swan','position' => false,
]);

  echo questionTitle('Quel est le nom du dessinateur de Interstella 5555 ?');
  echo createInput(['id' => 'i5','type' => 'text','name' => 'q4','value' => '','checked' => '','label' => 'Entrez le nom ici','position' => true,
]);

  echo questionTitle("Combien d'albums comporte la discographie de Daft Punk ? (studio & B.O.)");
  echo createInput(['id' => 'd1','type' => 'number','name' => 'q5','value' => '0','checked' => '','label' => 'albums','position' => false,
]);

  echo createSubmit("Let 's go !!!!!!!");

  echo closeTag("form");


?>
<!-- <h3>Qui est le plus grand sportif francais de tous les temps ?</h3> -->


<!-- <input id="z1" type="radio" name="q1" value="a" checked>
<label for="z1">Zidane.</label><br>
<input id="z2" type="radio" name="q1" value="b">
<label for="z2">Zidane !</label><br>
<input id="z3" type="radio" name="q1" value="c">
<label for="z3">Zidane !!!</label><br>
<input id="z4" type="radio" name="q1" value="d">
<label for="z4">ZIDANE !!!!</label><br> -->

<!-- <h3>Qui c'est les plus forts ?</h3>
<input id="f1" type="radio" name="q2" value="a" checked>
<label for="f1">Mister Cocktail</label><br>
<input id="f2" type="radio" name="q2" value="b">
<label for="f2">Un millefeuille</label><br>
<input id="f3" type="radio" name="q2" value="c">
<label for="f3">Evidemment c'est les verts !</label><br>
<input id="f4" type="radio" name="q2" value="d">
<label for="f4">Le slip de Musclor</label><br>

<h3>Et ta soeur ?</h3>
<input id="s1" type="radio" name="q3" value="a" checked>
<label for="s1">Elle va bien, merci</label><br>
<input id="s2" type="radio" name="q3" value="b">
<label for="s2">J'ai un petit frère qui veut grandir trop vite</label><br>
<input id="s3" type="radio" name="q3" value="c">
<label for="s3">Rien.</label><br>
<input id="s4" type="radio" name="q3" value="d">
<label for="s4">Elle bat le beurre à 90 à l'heure sur la machine à vapeur entre les fesses du percepteur.</label><br>
<br>
<input type="submit" value="Valide moi !!!!"> -->
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
