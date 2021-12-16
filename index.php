<?php

$test = 'Hello world this is my first try at PHP';
echo $test;
echo '<br>';
echo strlen($test);

echo '<br>';
$badWord = $_GET["badWord"];
echo $result = str_replace($badWord, '***', $test);
echo '<br>';
echo strlen($result);

?>