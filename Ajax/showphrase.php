<?php
    $adjs = array("funny", "smart", "talented", "nerdy", "gifted");
    $names = array("Ben", "Melissa", "Joe", "Matt", "Aman");
    
    $name = $names[rand(0, count($names)-1)];
    $adj = $adjs[rand(0, count($adjs)-1)];
    $phrase =  "<h3>$name is very $adj.</h3>";
    echo $phrase;
?>