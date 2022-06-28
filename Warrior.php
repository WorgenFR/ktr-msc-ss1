<?php

class Warrior extends Character{

    //----------- Warrior's attributes -----------

    protected $life = 100;
    protected $strength = 10;
    protected $agility = 8;
    protected $wit = 3;

    function __construct(string $name){
        parent::__construct($name, 'Warrior');
        echo "[$name] My name will go down in history !\n";
    }

    //--------------- Action methods ----------------

    function attack(string $weapon){
        parent::attack($weapon);
        if($weapon === 'hammer' || $weapon === 'sword'){
            return "[$this->name]: I'll crush you with my $weapon!";
        }
    }

    function moveRight(): string{
        return "[$this->name]: moves right like a bad boy";
    }

    function moveLeft(): string{
        return "[$this->name]: moves left like a bad boy";
    }

    function moveForward(): string{
        return "[$this->name]: moves forward like a bad boy";
    }

    function moveBack(): string{
        return "[$this->name]: moves back like a bad boy";
    }



}