<?php


abstract class Character implements Movable
{
    protected $name;
    protected $life;
    protected $agility;
    protected $strenght;
    protected $wit;


    const RPGCLASS = '';


    public function __construct($name)
    {
        $this->setName($name);
        $this->setLife(50);
        $this->setAgility(2);
        $this->setStrenght(2);
        $this->setWit(2);
    }

    public function attack($weapon)
    {
        echo '[', $this->getName(), ']:', 'Rrrrrrrrr ....';
        if (isEmpty($weapon)) {
            throw new WeaponException('[' . $this->getName() . ']:' . 'I refuse to fight with my bare hands');
        }
    }

    final public function unsheathe()
    {
        echo '[', $this->getName(), ']:', 'unsheathes his weapon';
    }

    public function moveBack()
    {
        echo '[', $this->getName(), ']:', 'move back';
    }

    public function moveLeft()
    {
        echo '[', $this->getName(), ']:', 'move left';
    }

    public function moveRight()
    {
        echo '[', $this->getName(), ']:', 'move right';
    }

    public function moveForward()
    {
        echo '[', $this->getName(), ']:', 'move forward';
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        if (is_string($name))
            $this->name = $name;
    }


    public function getLife()
    {
        return $this->life;
    }


    public function setLife($life): void
    {
        if (is_int($life))
            $this->life = $life;
    }


    public function getAgility()
    {

        return $this->agility;
    }


    public function setAgility($agility): void
    {
        if (is_int($agility))
            $this->agility = $agility;
    }


    public function getStrenght()
    {
        return $this->strenght;
    }


    public function setStrenght($strenght): void
    {
        if (is_int($strenght))
            $this->strenght = $strenght;
    }


    public function getWit()
    {
        return $this->wit;
    }


    public function setWit($wit): void
    {
        if (is_int($wit))
            $this->wit = $wit;
    }
}