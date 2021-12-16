<?php

$prova = 'Hello world this is my first try at PHP';
echo $prova;
echo '<br>';
echo strlen($prova);

echo '<br>';
$censura = $_GET["censura"];
echo $risultato = str_replace($censura, '***', $prova);
echo '<br>';
echo strlen($risultato);

?>