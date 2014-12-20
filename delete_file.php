<?php
$my_file = 'new.txt';

$fp = unlink($my_file);
if ($fp){
    echo "its deleted" ;

}else {
    echo "its not deleted";
}

?>