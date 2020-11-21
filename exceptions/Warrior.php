<?php


class Warrior extends Character implements Movable
{
    const RPGCLASS = 'Warrior';

    public function __construct($name)
    {
        parent::__construct($name);
        $this->setLife(100);
        $this->setStrenght(10);
        $this->setAgility(8);
        $this->setWit(3);

        echo '[', $this->getName(), ']:', 'My name wil go down in history! ';
    }

    public function attack($weapon)
    {
        parent::attack($weapon);
        if ($weapon = "hammer" || $weapon = "sword") {
            echo '[', $this->getName(), ']:', 'I\'ll crush you with my ', $weapon;
        }
        if (isEmpty($weapon)) {
            throw new WeaponException('[' . $this->getName() . ']:' . 'A' . $weapon . '??? What sould i do with this?!');
        }
    }
    public function tryToAttack($weapon){
        try{
            $this->attack($weapon);
        }catch(WeaponException $weaponerror){
            echo $weaponerror;
        }
    }

    public function moveBack()
    {
        echo '[', $this->getName(), ']:', 'move back like a bad boy';
    }

    public function moveLeft()
    {
        echo '[', $this->getName(), ']:', 'move left like a bad boy';
    }

    public function moveRight()
    {
        echo '[', $this->getName(), ']:', 'move right like a bad boy';
    }

    public function moveForward()
    {
        echo '[', $this->getName(), ']:', 'move forward like a bad boy';
    }
}