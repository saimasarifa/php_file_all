<?php
$fp =fopen('forRead.txt','r');
$data = fread($fp,filesize('forRead.txt'));
echo $data;
?>