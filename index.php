<!DOCTYPE html>
<html>
<title>JGreen Blog</title>
<h1>JGreen Blog</h1>
<p1>Welcome to my first (soon to be hosted) blog website!</p1><br>

<?php
$files = array_reverse(glob("posts/*.txt"));

foreach ($files as $file) {
    $lines = file($file);
    $title = htmlspecialchars(trim($lines[0]));
    echo "<h2><a href='view.php?file=" . urlencode(basename($file)) . "'>$title</a></h2>";
}
?>
<a href="new.php"> Add New Post </a>

</html>