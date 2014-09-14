<?php
$pageTitle = 'Page has an error';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

//GENERATES AN ERROR
$d = new PDO('mysql:host=localhost', 'root', 'SUPER SECRET PASSWORD');

?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
