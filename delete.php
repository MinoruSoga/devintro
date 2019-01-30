<?php

include 'User.php';
$id = $_GET['id'];

$user = new User;

$user->delete($id);


  ?>