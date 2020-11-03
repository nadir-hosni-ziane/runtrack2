<?php 

    $i = 0;

    while ( $i <= 100)
    {   
        if ($i%3 == 0 && $i%5 == 0)
            echo 'fizzbuzz' . "<br />";
        elseif ($i%3 == 0)
            echo 'fizz' . "<br />";
        elseif ($i%5 == 0)
            echo 'buzz' . "<br />";
        else
            echo $i . "<br />";
        $i++;
    }

?>