<?php

$vars = [
          'name' => 'Oscar the Grouch',
          'color' => 'green',
          'favorite_punctuation' => '#'
];

$queryString = http_build_query($vars);

echo $url = 'muppet/select.php?' . $queryString;