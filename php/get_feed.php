<?php
$posts = file('data/posts.txt');
foreach ($posts as $post) {
  echo "<div class='container'>". htmlspecialchars($post). "</div>";
}
?>
