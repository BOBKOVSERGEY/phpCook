<?php
setcookie('flavor', '', 1);
if (isset($_COOKIE['flavor'])) {
  echo "You ate a {$_COOKIE['flavor']} cookie<br>";
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