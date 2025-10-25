<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $id = $_GET['id'];
  $comments = file('../data/comments.txt');
  foreach ($comments as $c) {
    list($cid, $pid, $user, $text) = explode('|', $c);
    if (trim($pid) == $id) {
      echo "<div><strong>@$user:</strong> $text</div>";
}
}
} else {
  $pid = $_POST['id'];
  $user = $_POST['user'];
  $text = $_POST['comment'];
  $cid = uniqid();
  file_put_contents('../data/comments.txt', "$cid|$pid|$user|$text\n", FILE_APPEND);
}
?>
