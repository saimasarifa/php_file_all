<?php
$my_file = 'saima.txt';
$handle = fopen($my_file, 'a') ;
$data = 'New data line 1';
fwrite($handle, $data);
$new_data = "\n".'New data line 2';
fwrite($handle, $new_data);
?>