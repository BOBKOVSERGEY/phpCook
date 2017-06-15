<?php

if (isset($_COOKIE['flavor'])) {
  echo "You ate a {$_COOKIE['flavor']} cookie<br>";
}

foreach ($_COOKIE as $cookie_name => $cookie_value) {
  echo "$cookie_name = $cookie_value <br>";
}