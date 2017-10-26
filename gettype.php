<?php
  $int = 10;
  $float = 1.2;
  $string = "Ceci est une chaine";
  $array = array(
    "clé" => "valeur"
  );
  $bool = TRUE;

  testType($array);

  function testType($var)
  {
    if (gettype($var) == "array") {
    echo "This variable is a ".gettype($var)." and contains one array";
    } else {
    echo "This variable is a ".gettype($var)." and contains : ".$var;
  }
  };
