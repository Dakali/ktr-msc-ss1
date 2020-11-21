<?php


class Mage extends Character
{
    const RPGCLASS = 'Mage';

    public function __construct($name)
    {
        parent::__construct($name);
        $this->setLife(70);
        $this->setStrenght(3);
        $this->setAgility(10);
        $this->setWit(10);

        echo '[', $this->getName(), ']:', 'May the god be with me.';

    }

    public function attack($weapon)
    {
        parent::attack($weapon);
        if ($weapon = "magic" || $weapon = "wand") {
            echo '[', $this->getName(), ']:', 'Feel the power of my ', $weapon;
        }
        if (isEmpty($weapon)) {
            throw new WeaponException('[' . $this->getName() . ']:' . 'I don\'t need this stupid' . $weapon . 'Don\'t misjudge my powers!');
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
        echo '[', $this->getName(), ']:', 'move back furtively';
    }

    public function moveLeft()
    {
        echo '[', $this->getName(), ']:', 'move left furtively';
    }

    public function moveRight()
    {
        echo '[', $this->getName(), ']:', 'move right furtively';
    }

    public function moveForward()
    {
        echo '[', $this->getName(), ']:', 'move forward furtively';
    }

}