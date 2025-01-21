<?php

// Without class

$basket = [
    'Banana' => [
        'number' => 6,
        'price' => 1
    ],
    'Apple' => [
        'number' => 3,
        'price' => 1.5
    ],
    'Bottle of wine' => [
        'number' => 2,
        'price' => 10
    ]
];

function sum($basket)
{
    $totalCost = 0;
    $totalCostWithTaxes = 0;
    foreach ($basket as $item => $details) {
        $total = $details['number'] * $details['price'];
        $totalCost += $total;
        echo "The total price of $item <b>without</b> taxes is $total €<br>";

        if ($item === 'Banana' || $item === 'Apple') {
            $totalWithTaxes = $total * 1.06;
            $totalCostWithTaxes += $totalWithTaxes;
            echo "The total price of $item <b>with</b> taxes is $totalWithTaxes €<br>";

        } elseif ($item === 'Bottle of wine') {
            $totalWithTaxes = $total * 1.21;
            $totalCostWithTaxes += $totalWithTaxes;
            echo "The total price of $item <b>with</b> taxes is $totalWithTaxes €<br>";
        }
    }
    echo "<br>The total price of the basket <b>without</b> taxes is " . $totalCost . " €<br>";
    echo "The total price of the basket <b>with</b> taxes is " . $totalCostWithTaxes . " €";
}


sum($basket);

echo "<br>";
echo "<br>";
echo "<hr>";


// With class

class Basket
{
    // Properties
    private $items = [];

    // Methods

    function addItem(string $name, int $number, float $price): void
    {
        $this->items[$name] = [
            'number' => $number,
            'price' => $price
        ];
    }

    public function calculateTotal()
    {
        $totalCost = 0;

        foreach ($this->items as $item => $details) {
            $total = $details['number'] * $details['price'];
            $totalCost += $total;

            echo "The total price of $item without taxes is €$total<br>";

            // Calculate total with taxes
            if ($item === 'Banana' || $item === 'Apple') {
                $totalWithTax = $total * 1.06; // 6% tax for fruits
                echo "The total price of $item with taxes is €$totalWithTax<br>";
            } elseif ($item === 'Bottle of wine') {
                $totalWithTax = $total * 1.21; // 21% tax for wine
                echo "The total price of $item with taxes is €$totalWithTax<br>";
            }
        }

        echo "<br>The total price of the basket without taxes is €$totalCost<br>";

        // Calculate total with taxes for the entire basket
        $totalWithTaxes = 0;
        foreach ($this->items as $item => $details) {
            $total = $details['number'] * $details['price'];
            if ($item === 'Banana' || $item === 'Apple') {
                $totalWithTaxes += $total * 1.06; // 6% tax for fruits
            } elseif ($item === 'Bottle of wine') {
                $totalWithTaxes += $total * 1.21; // 21% tax for wine
            }
        }

        echo "The total price of the basket with taxes is €$totalWithTaxes<br>";
    }

    public function displayBasket()
    {
        echo "<h2>Basket Contents:</h2>";
        foreach ($this->items as $item => $details) {
            echo "<b>$item:</b> {$details['number']} pieces at €{$details['price']} each<br>";
        }
    }
}

$basket = new Basket();

$basket->addItem('Banana', 6, 1);
$basket->addItem('Apple', 3, 1.5);
$basket->addItem('Bottle of wine', 2, 10);

$basket->displayBasket();

echo '<br>';
echo '<br>';

$basket->calculateTotal();