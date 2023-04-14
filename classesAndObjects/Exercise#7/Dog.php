<?php

class Dog
{
    private $name;
    private $sex;
    private $mother;
    private $father;

    public function __construct($name, $sex, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function getMother()
    {
        return $this->mother;
    }

    public function getFather()
    {
        return $this->father;
    }

    public function setMother($mother)
    {
        $this->mother = $mother;
    }

    public function setFather($father)
    {
        $this->father = $father;
    }

    public function fathersName()
    {
        if ($this->father) {
            return $this->father->getName();
        } else {
            return "Unknown";
        }
    }

    public function hasSameMotherAs($otherDog)
    {
        if ($this->mother && $otherDog->getMother()) {
            return $this->mother->getName() == $otherDog->getMother()->getName();
        } else {
            return false;
        }
    }
}
