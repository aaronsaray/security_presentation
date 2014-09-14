<?php

$user = $_GET['user'];
$file = $_GET['file'];

unlink($user . '/' . $file);
die(header('Location: listmyfiles.php?user=' . $user . '&delete=success'));