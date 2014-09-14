<?php
session_start();

$pageTitle = 'Viewing an Entry';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

// sets the user so that we have a session ID
if (empty($_SESSION['viewer'])) {
    $_SESSION['viewer'] = 'Viewer Guy Smiley';
}
?>
    <div class="row">
        <div class="large-12 columns">
            <div class="alert-box">Welcome Back <?= $_SESSION['viewer'] ?></div>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <?php
            try {
                $db = new PDO('sqlite:blog.sqlite3');
                $results = $db->query('select * from blog where id=' . intval($_GET['id']));
                $blog = $results->fetch();
                if ($blog) {
                    // not filtering for demonstration purposes
                    echo '<h3 class="subheader">' . $blog['title'] . '</h3>';
                    echo '<p>' . $blog['body'] . '</p>';
                }
                else {
                    echo '<p>Not Found.</p>';
                }
            }
            catch (PDOException $e) {
                echo '<p>Not Found.</p>'; //lazy dupe
            }

            ?>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
