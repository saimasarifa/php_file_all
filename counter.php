<?php
$counter = file_get_contents('counter.txt');

echo $counter  ;

$counter1 = $counter+1;

//echo ($counter1) ;
file_put_contents('counter.txt',$counter1);


?>

