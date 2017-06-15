<?php
class User
{
  public function __construct($username, $password)
  {
    
  }

  function loadInfo($username)
  {
    echo $username;
  }
}

$user = new User();
$user->loadInfo($_GET['username']);

$adam = new User();
$adam->loadInfo('adam');