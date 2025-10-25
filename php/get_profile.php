<?php
$user = $_GET['user'];
$lines = file('../data/users.txt');
foreach ($lines as $line) {
  list($u, $p, $avatar) = explode('|', $line);
  if (trim($u) == $user) {echo "<img src='$avatar' width='100' style='border-radius:50%;'><h2>@$u</h2>";
    break;
}
}
$posts = file('../data/posts.txt');
foreach ($posts as $post) {
  list($pid, $pu, $content) = explode('|', $post);
  if (trim($pu) == $user) {
    echo "<div class='container'><p>$content</p></div>";
}
}
?>
