<?php

$nombre = [200 , 204 , 173 , 98 , 171 , 404 , 459];

foreach ($nombre as $key => $value)
{   
    if ($value%2 == 1)
        echo "$value est impair" . "<br />";
    else
        echo "$value est pair" . "<br />";
}
?>