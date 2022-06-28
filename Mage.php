<?php

class Mage extends Character{

    //----------- Mage's attributes -----------

    protected $life = 70;
    protected $strength = 3;
    protected $agility = 10;
    protected $wit = 10;

    function __construct(string $name){
        parent::__construct($name, 'Mage');
        echo "[$name] May the gods be with me.\n";
    }

    //--------------- Action methods ----------------

    function attack(string $weapon){
        parent::attack($weapon);
        if($weapon === 'magic' || $weapon === 'wand'){
            return "[$this->name]: Feel the power of my $weapon!";
        }
    }

    function moveRight(): string{
        return "[$this->name]: moves right furtively";
    }

    function moveLeft(): string{
        return "[$this->name]: moves left furtively";
    }

    function moveForward(): string{
        return "[$this->name]: moves forward furtively";
    }

    function moveBack(): string{
        return "[$this->name]: moves back furtively";
    }

    function tryToAttack(string $weapon){
        try{
            $this->attack($weapon);
        }
        catch(WeaponException $e){
            echo($e->getMessage());
        }
    }



}