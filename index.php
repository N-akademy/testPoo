<?php

spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.php';
});

$lucie = new Warrior ("Lucie");
$anto = new Mage("Anto");
$jon= new Archer("Jon");

// Characters attacking while both alive
while ($lucie->isAlive() && $anto->isAlive() && $jon->isAlive()) {
    // First Character attacking the 2nd
    echo $lucie->action($anto);
    // Check if target is alive
    if (!$anto->isAlive()) {
        echo '<br>';
        echo "$anto->pseudo est KO!";
        break;
    };
    echo '<br>';
    echo '<br>';


    // Second Character attaking the first
    echo $anto->action($lucie);
    // Check if target is alive and make the third Character fight with the winner
    if (!$lucie->isAlive()) {
        echo '<br>';
        echo "$lucie->pseudo est KO!";
        break;
    };
    echo '<br>';
    echo '<br>';
    
}

while ($lucie->isAlive()&& $jon->isAlive()) {
    echo '<br>';
    echo $lucie->action($jon);
    if (!$jon->isAlive()) {
        echo '<br>';
        echo "$jon->pseudo est KO!";
    break;
    };
    echo '<br>';

    echo $jon->action($lucie);
    if(!$lucie->isAlive()) {
        echo '<br>';
        echo "$lucie->pseudo est KO!";
    break;
    };
    echo '<br>';
    echo '<br>';
}
while ($anto ->isAlive()&& $jon->isAlive()) {
    echo '<br>';
    echo $anto->action($jon);
    if (!$jon->isAlive()) {
        echo '<br>';
        echo "$jon->pseudo est KO!";
    break;
    };
    echo '<br>';

    echo $jon->action($anto);
    if(!$anto->isAlive()) {
        echo '<br>';
        echo "$anto->pseudo est KO!";
    break;
    };
    echo '<br>';
    echo '<br>';
}









