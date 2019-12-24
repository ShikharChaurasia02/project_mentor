<?php
$url = 'file.json';
$JSON = file_get_contents($url);

// echo the JSON (you can echo this to JavaScript to use it there)
echo $JSON;

// You can decode it to process it in PHP
$data = json_decode($JSON);
var_dump($data);
?>