<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>RamdonKeyGen</title>
</head>
<body>
  <h3>Cada vez que le des a F5 esto te va a escupir una clave alfanumerica de 40 digitos, mas bonica que todas las cosas. Ej: Para que no te roben en wifi </h3>
  <?php
function keygen($length=10)
{
  $key = '';
  list($usec, $sec) = explode(' ', microtime());
  mt_srand((float) $sec + ((float) $usec * 100000));
  
    $inputs = array_merge(range('z','a'),range(0,9),range('A','Z'));

    for($i=0; $i<$length; $i++)
  {
        $key .= $inputs{mt_rand(0,61)};
  }
  return $key;
}


echo keygen(40);
?>
</body>
</html>
