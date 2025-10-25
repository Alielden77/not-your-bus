<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $id = $_GET['id'];
  $posts = file('../data/posts.txt');
  foreach ($posts as $post) {
    list($pid, $user, $content) = explode('|', $post);
    if (trim($pid) == $id) {
      echo "<h3>@$user</h3><p>$content</p>";
}
}
} else {
  $user = $_POST['user'];
  $content = $_POST['content'];
  $id = uniqid();
  file_put_contents('../data/posts.txt', "$id|$user|$content\n", FILE_APPEND);
}
?>
