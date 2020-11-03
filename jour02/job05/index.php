<?php
$nbr = 0;
$nb = 2;
while ($nbr <= 1000) { 
    if ($nbr != 1)
    {
        while ($nbr % $nb != 0) 
        {
            $nb++;
        }
        if ($nbr == $nb) {
            echo ($nbr . "<br/>");
        }
        $nb = 2;
    }
    $nbr++;
}
?>