<?php
function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 0; $i <= 1000; $i++) {
    if (isPrime($i)) {
        echo "$i\n";
    }
}
?>
