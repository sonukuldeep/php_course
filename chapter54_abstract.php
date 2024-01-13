<?php
abstract class Shape
{
    protected $name;

    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{
    protected $radius;
    public function __construct($radius, $name)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    public function calculateArea()
    {
        return Pi() * $this->radius;
    }
}

$circle = new Circle(name: "Circle", radius: 5);

print_r($circle->calculateArea());
