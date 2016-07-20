<?php
function plus($a, $b) {
	$plus = $a + $b;
	return $plus;
}
$result = plus(10, 2);
echo $result . "<br /><br /> \r\n";

function minus($a, $b) {
    $minus = $a - $b;
    return $minus;
}
$result = minus(10, 2);
echo $result . "<br /><br /> \r\n";

function multiply($a, $b) {
    $multiply = $a * $b;
    return $multiply;
}
$result = multiply(10, 2);
echo $result . "<br /><br /> \r\n";

function divide($a, $b) {
        if ($b > 0) {
            $divide = $a / $b;
            return $divide;
        } else {
            echo 'Слушай, зачем на ноль делишь?';
        }
}
$result = divide(10, 0);
echo $result . "<br /><br /> \r\n";