<?php

class Beverage
{
    // Properties
    protected $color; // Changed to protected
    protected $price; // Changed to protected
    protected $temperature; // Changed to protected

    function __construct()
    {
        $this->temperature = "cold";
    }

    // Methods

    function setColor(string $color): void
    {
        $this->color = $color;
    }

    function setPrice(float $price): void
    {
        $this->price = $price;
    }

    function setTemperature(string $temperature = 'cold'): void
    {
        $this->temperature = $temperature;
    }

    function getInfo()
    {
        echo "This beverage is {$this->temperature} and {$this->color}. {$this->price}€";
    }
}

class Beer extends Beverage
{
    // Properties
    private $name; // Changed to private
    private $alcoholPercentage; // Changed to private

    function __construct(string $name, float $alcoholPercentage)
    {
        parent::__construct();
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // Methods

    function setName(string $name): void
    {
        $this->name = $name;
    }

    function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    function setAlcoholPercentage(float $alcoholPercentage): void
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    function getBeerInfo()
    {
        // Accessing protected properties directly
        echo "This beer is named {$this->name}, has a temperature of {$this->temperature} and is {$this->color}, the alcohol percentage is {$this->alcoholPercentage}%. {$this->price}€";
    }
}

// Create an instance of Beverage
$cola = new Beverage();
$cola->setColor('black');
$cola->setPrice(2);
$cola->getInfo();

echo '<br><br>';

// Create an instance of Beer
$duvel = new Beer('Duvel', 8.5);
$duvel->setPrice(3.5);
$duvel->setColor('blond');
$duvel->getBeerInfo();