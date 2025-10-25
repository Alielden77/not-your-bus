<?php
$user = $_POST['new_user'];
$pass = $_POST['new_pass'];
$avatar = 'images/default.png';

file_put_contents('../data/users.txt', "$user|$pass|$avatar\n", FILE_APPEND);
header('Location:../home.html');
?>
