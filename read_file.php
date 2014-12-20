<?php
//$my_file = 'saimasarifa.txt';

//$handle = fopen($my_file, 'r');

//$data = fread($handle,filesize($my_file));

//echo $data;
//


$fp =fopen('saimasarifa.txt','r');
$data = fread($fp,filesize('saimasarifa.txt'));
echo $data;

?>