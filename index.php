<?php

$test = '"Hello world this is my first try at PHP"';
echo 'La frase iniziale è: ' . $test;
echo '<br>';
echo 'La lunghezza della frase è: ' . strlen($test);

echo '<br>';
$badWord = $_GET["badWord"];
echo 'La frase censurata è: ' . $result = str_replace($badWord, '***', $test);
echo '<br>';
echo 'La lunghezza della frase censurata è: ' . strlen($result);

?>