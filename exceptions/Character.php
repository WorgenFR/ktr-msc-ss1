<?php
require 'Movable.php';

abstract class Character implements Movable
{

    function __construct(string $name, string $rpgClass = null){
        $this->name = $name;
        $this->RPGClass = $rpgClass;
    }

    //---------- Character's attributes ---------------

    protected $RPGClass;
    protected $name;
    protected $life = 50;
    protected $agility = 2;
    protected $strength = 2;
    protected $wit = 2;

    //------------ Getters methods -----------------

    function getName(): string{
        return $this->name;
    }

    function getLife(): int{
        return $this->life;
    }

    function getAgility(): int{
        return $this->agility;
    }

    function getStrength(): int{
        return $this->strength;
    }

    function getWit(): int{
        return $this->wit;
    }

    function getRPGClass(): string{
        return $this->RPGClass;
    }

    //------------- actions methods ----------------

    function attack(string $weapon){
        echo "[$this->name]: Rrrrrrrrr ....\n";
    }

    function moveRight(): string{
        return "[$this->name]: moves right";
    }

    function moveLeft(): string{
        return "[$this->name]: moves left";
    }

    function moveForward(): string{
        return "[$this->name]: moves forward";
    }

    function moveBack(): string{
        return "[$this->name]: moves back";
    }

    final function unsheathe(): string{
        return "[$this->name]: unsheathes his weapon";
    }




}