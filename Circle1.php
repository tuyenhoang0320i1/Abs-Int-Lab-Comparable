<?php



class Circle1
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;

    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

}