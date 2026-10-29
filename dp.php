<?php
$mysqli = new mysqli("localhost","2350890","Kritiksapkota14","db2350890");
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}
?>