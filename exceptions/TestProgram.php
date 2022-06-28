<?php
require 'Mage.php';
require 'Warrior.php';

$Mage = new Mage('Gandalf');
$Warrior = new Warrior('Achille');

echo "{$Mage->moveRight()}\n";
echo "{$Mage->moveLeft()}\n";
echo "{$Warrior->moveForward()}\n";
echo "{$Warrior->moveBack()}\n";

echo "{$Warrior->attack('hammer')}\n";
echo "{$Mage->attack('sword')}\n";

