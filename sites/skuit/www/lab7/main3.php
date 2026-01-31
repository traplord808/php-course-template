<?
$N = rand(0,100);
$sumnumbers = 0;
for ($num = 1; $num <= $N; $num++) {
    $sumnumbers += $num;
}
echo ("сумма = $sumnumbers");