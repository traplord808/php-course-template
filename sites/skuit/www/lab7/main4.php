<?php
$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(-10, 10);
}

$plus = 0;
$minus = 0;

foreach ($numbers as $n) {
    if ($n > 0) {
        $plus++;
    } elseif ($n < 0) {
        $minus++;
    }
}


echo implode(", ", $numbers);
echo "Положительных: $plus ";
echo "Отрицательных: $minus";
