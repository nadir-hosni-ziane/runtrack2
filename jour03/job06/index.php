<?php

$str = "Les choses que l'on possede finissent par nous posseder";
$i = 0;

while (isset($str[$i])) {
    $i++;
    
}

while ($i >= 0) {
    echo $str[$i];
    $i -- ;
    
}

?>