<?php

require "./Character.php";
require "./Mage.php";
require "./Warrior.php";

$Mage = new Mage('Gandald');
$Warrior = new Warrior('Achille');


echo "{$Mage->attack('wand')}\n";
echo "{$Warrior->attack('sword')}\n";

echo "{$Mage->moveRight()}\n";
echo "{$Mage->moveLeft()}\n";
echo "{$Warrior->moveForward()}\n";
echo "{$Warrior->moveBack()}\n";
