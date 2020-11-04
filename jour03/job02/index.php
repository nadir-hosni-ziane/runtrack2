<?php

$str= array('Tous ', 'ces ' , 'instants ' ,'seront ' , 'perdus ' , 'dans ' , 'le temps ' , 'comme ' , 'les ' , 'larmes' , 'sous ' , 'la ' , 'pluie.');

foreach ($str as $key => $value) {
    if ($key%2==0)
        echo "$value";

}

?> 