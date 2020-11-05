<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelle = "aeiouyI";
$x = 0;
while (isset($str[$x])) {
    $i = 0;
    while (isset($voyelle[$i])) {
        if ($str[$x] == $voyelle[$i]) 
            echo $str[$x];
            $i = $i + 1;
        }
        $x = $x + 1;
}
