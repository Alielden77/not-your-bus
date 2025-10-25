<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $lines = file('../data/chats.txt');
  foreach ($lines as $line) {
    list($from, $to, $msg) = explode('|', $line);
    echo "<div><strong>@$from:</strong> $msg</div>";
}
} else {
  $from = $_POST['from'];
  $to = $_POST['to'];
  $msg = $_POST['message'];
  file_put_contents('../data/chats.txt', "$from|$to|$msg\n", FILE_APPEND);
}
?>
