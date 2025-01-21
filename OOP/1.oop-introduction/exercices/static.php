<?php

class Beverage
{
    // Propeties

    const BARNAME = 'Het Vervolg';
    public static $adress = "Melkmarkt 9, 2000 Antwerpen";
    protected $color;
    protected $price;
    protected $temperature;

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
        echo "Welcome to the " . self::BARNAME . ". This beverage is {$this->temperature} and {$this->color}. {$this->price}€";
    }
}

class Beer extends beverage
{
    // Properties

    private $name;
    private $alcoholPercentage;

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
        echo "Welcome to the " . self::BARNAME . ".This beer is named {$this->name}, has a temperature of {$this->temperature} and is {$this->color}, the alcohol percentage is {$this->alcoholPercentage}%. {$this->price}€";
    }
}

$cola = new Beverage();

$cola->setColor('black');
$cola->setPrice(2);

$cola->getInfo();

echo '<br><br>';

$duvel = new Beer('Duvel', 8.5);
$duvel->setPrice(3.5);
$duvel->setColor('blond');

$duvel->getBeerInfo();

echo '<br><br>';

echo Beverage::BARNAME;

echo '<br><br>';

echo Beverage::$adress;