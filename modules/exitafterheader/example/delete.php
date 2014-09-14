<?php
session_start();

if (empty($_SESSION['do_not_delete_the_chicken'])) {
    header('Location: listfiles.php?invalid');
}

unlink('images/' . $_GET['picid']);
header('Location: listfiles.php?deleted=ok');