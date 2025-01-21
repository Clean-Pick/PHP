<?php

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

    public function fruitSales()
    {
        echo "<h3>SPECIAL OFFER !</h3>";
        echo "<h3>50% OFF FOR FRUITS</h3>";

        $totalCostSales = 0;

        foreach ($this->items as $item => $details) {
            if ($item === 'Banana' || $item === 'Apple') {
                $total = $details['number'] * $details['price'];
                $totalWithDiscount = $total * 0.5;
                $totalCostSales += $totalWithDiscount;
                echo "The total price of $item with a 50% discount is €$totalWithDiscount<br>";
            } else {
                $total = $details['number'] * $details['price'];
                $totalCostSales += $total;
                echo "The total price of $item without discount is €$total<br>";
            }
        }

        echo "<br>The total cost of the whole basket with discounts is €$totalCostSales<br>";
    }
}

$basket = new Basket();

$basket->addItem('Banana', 6, 1);
$basket->addItem('Apple', 3, 1.5);
$basket->addItem('Bottle of wine', 2, 10);

$basket->displayBasket();

echo '<br><br>';
echo '<hr>';
echo '<br><br>';

$basket->calculateTotal();

echo '<br><br>';
echo '<hr>';
echo '<br><br>';

$basket->fruitSales();

?>