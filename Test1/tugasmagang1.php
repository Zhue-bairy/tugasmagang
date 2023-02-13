<?php

function sloane_sequence($n) {
    $a = array(0, 1);
    for ($i = 2; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $a[] = $a[$i / 2];
        } else {
            $a[] = $a[$i - 1] + $a[($i - 1) / 2];
        }
    }
    return $a;
}

$num = readline("Enter a positive integer: ");
$result = sloane_sequence($num);
print_r($result);

?>