<?php
$path = ini_get("session.save_path");
echo "Session save path: $path<br>";
echo is_writable($path) ? "Writable" : "Not writable";
?>
