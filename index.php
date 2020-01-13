<?php
$fizzBuzz = [];

for ($i = 1; $i <= 100; $i++) {
  array_push($fizzBuzz, $i);
}

for ($i = 0; $i < 100; $i++) {
  if ($fizzBuzz[$i] % 3 === 0 && $fizzBuzz[$i] % 5 === 0) {
    $fizzBuzz[$i] = 'FizzBuzz';
  } else if ($fizzBuzz[$i] % 3 === 0) {
    $fizzBuzz[$i] = 'Fizz';
  } else if ($fizzBuzz[$i] % 5 === 0) {
    $fizzBuzz[$i] = 'Buzz';
  }
}

echo implode(', ', $fizzBuzz);