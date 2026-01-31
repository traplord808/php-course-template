<?
$number1 = rand(0,100);
$number2 = rand(0, 100);
$numbers = [$number1, $number2];
if ($number1 == $number2) {
    echo("равны");
} else {
    echo ("большее число:");
    echo max($numbers);
}