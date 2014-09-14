<?php
session_start();

// sets the user so that we have a session ID
if (empty($_SESSION['viewer']) && $_SESSION['viewer'] != 'Poster Mc. Posterson') {
    die('Not logged in.  Cmon man.  Get it together.');
}

// remember, not filtering on purpose!

$title = $_POST['title'];
$body = $_POST['body'];

if (!is_readable('blog.sqlite3')) {
    touch('blog.sqlite3');
    chmod('blog.sqlite3', 0666);
}

$db = new PDO('sqlite:blog.sqlite3');
$result = $db->exec('CREATE TABLE IF NOT EXISTS blog (id INTEGER PRIMARY KEY, title TEXT, body TEXT)');

$statement = $db->prepare('insert into blog (title, body) values (:title, :body)');

$statement->bindParam(':title', $title);
$statement->bindParam(':body', $body);
$statement->execute();

die(header('location: postablog.php?success'));