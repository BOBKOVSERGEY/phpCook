<?php

if (isset($_COOKIE['next_station'])) {
  echo "You ate a {$_COOKIE['next_station']} cookie<br>";
}


foreach ($_COOKIE as $cookie_name => $cookie_value) {
  echo "$cookie_name = $cookie_value <br>";
}

function debug($arr)
{
  echo '<pre>';
    print_r($arr);
  echo '</pre>';
}

debug($_COOKIE);

echo '<a href="getcookieStep.php">Link</a>';