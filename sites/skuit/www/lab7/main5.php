<?php
$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(-10, 10);
}

$min = $numbers[0];

foreach ($numbers as $n) {
    if ($n < $min) {
        $min = $n;
    }
}


echo "[". implode(", ", $numbers) . "] ";
echo "минимальный: $min ";

