<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
    echo $i . ' FizzBuzz<br>';
    } elseif ($i % 3 == 0) {
    echo $i . ' Fizz<br>';
    } elseif ($i % 5 == 0) {
    echo $i . ' Buzz<br>';
    } else {
    echo $i .'<br>';
    }
    }
?>