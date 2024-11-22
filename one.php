<?php
function isPrime($number) {
    if ($number <= 1) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

echo "Prime numbers between 1 and 50 are:<br>";
for ($i = 1; $i <= 50; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>
