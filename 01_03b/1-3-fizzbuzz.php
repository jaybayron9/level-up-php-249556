<?php
$i = 1;
while (100 >= $i) {
  if (0 == $i % 15) {
    echo 'FizzBuzz';
  } else if (0 == $i % 3) {
    echo 'Fizz';
  } else if (0 == $i % 5) {
    echo 'Buzz';
  } else {
    echo $i;
  }

  echo '<br/>';
  $i++;
}
