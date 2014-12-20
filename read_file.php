<?php
$my_file = 'saimasarifa.txt';

$handle = fopen($my_file, 'r');

$data = fread($handle,filesize($my_file));

echo $data;
?>