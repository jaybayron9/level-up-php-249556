<?php

$b = '1, 2, 3, 4';

$result1 = str_replace(' ', '', $b);

$result = explode(',', $result1);
echo array_sum($result);
