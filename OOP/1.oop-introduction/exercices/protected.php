<?php

class Beverage
{
    // Properties
    private $color;
    private $price;
    private $temperature;

    public function __construct()
    {
        $this->temperature = "cold";
    }

    // Methods

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function setTemperature(string $temperature = 'cold'): void
    {
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}. Price: {$this->price}€";
    }
}

class Beer extends Beverage
{
    // Properties
    private $name;
    private $alcoholPercentage;

    public function __construct(string $name, float $alcoholPercentage)
    {
        parent::__construct();
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // Methods

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function setAlcoholPercentage(float $alcoholPercentage): void
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getBeerInfo(): string
    {
        return "This beer is named {$this->name}, is {$this->getTemperature()} and {$this->getColor()}, the alcohol percentage is {$this->alcoholPercentage}%. Price: {$this->getPrice()}€";
    }
}

$duvel = new Beer('Duvel', 8.5);
$duvel->setPrice(3.5);
$duvel->setColor('blond');

echo $duvel->getBeerInfo();

echo '<br><br>';

$duvel->setColor('light');
echo $duvel->getBeerInfo();