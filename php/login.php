<?php
$user = $_POST['username'];
$pass = $_POST['password'];
$lines = file('../data/users.txt');

foreach ($lines as $line) {
  list($u, $p) = explode('|', $line);
  if (trim($u) == $user && trim($p) == $pass) {
    header('Location:../home.html');
    exit;
}
}
echo "Invalid login.";
?>
