<?php
$my_file = 'saimasarifa.txt';

$handle = fopen($my_file, 'w') ;

$data = 'This is the data';


fwrite($handle, $data);
?>
