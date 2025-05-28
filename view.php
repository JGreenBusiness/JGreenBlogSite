<?php
$file = "posts/" . basename($_GET['file']);
if (file_exists($file)) {
    $lines = file($file);
    $title = htmlspecialchars(array_shift($lines));
    $content = nl2br(htmlspecialchars(implode("", $lines)));
    echo "<h1>$title</h1>";
    echo "<p>$content</p>";
    echo "<a href= 'index.php'>Back</a>";
} else {
    echo "Post Not Found";
}
