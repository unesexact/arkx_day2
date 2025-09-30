<?php

function calculTotal($cart)
{
    $totalBeforeGlobalDiscount = 0;

    foreach ($cart as $item) {
        $itemTotal = $item['price'] * $item['quantity'];

        if ($item['quantity'] > 5) {
            $itemTotal *= 0.95;
        }
        $totalBeforeGlobalDiscount += $itemTotal;
    }

    $totalAfterDiscounts = $totalBeforeGlobalDiscount;
    if ($totalBeforeGlobalDiscount > 100) {
        $totalAfterDiscounts *= 0.9;
    }

    return [
        'before_global_discount' => $totalBeforeGlobalDiscount,
        'after_discount' => $totalAfterDiscounts
    ];
}

$cart = [
    ["name" => "Laptop", "price" => 40, "quantity" => 3],
    ["name" => "Mouse", "price" => 10, "quantity" => 6],
    ["name" => "Keyboard", "price" => 20, "quantity" => 2]
];

$total = calculTotal($cart);

echo "Total before global discount: " . $total['before_global_discount'] . "\n";
echo "Total after discounts: " . $total['after_discount'] . "\n";
?>