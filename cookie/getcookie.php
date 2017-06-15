<?php

if (isset($_COOKIE['flavor'])) {
  echo "You ate a {$_COOKIE['flavor']} cookie";
}