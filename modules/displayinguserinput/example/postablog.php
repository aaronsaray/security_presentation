<?php
session_start();

$pageTitle = 'Post a Blog Entry';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

// sets the user so that we have a session ID
if (empty($_SESSION['viewer'])) {
    $_SESSION['viewer'] = 'Poster Mc. Posterson';
}
?>
    <div class="row">
        <div class="large-12 columns">
            <div class="alert-box">Welcome Back <?= $_SESSION['viewer'] ?></div>
        </div>
    </div>
<?php
    if (isset($_GET['success'])) {
        echo '<div class="row"><div class="large-12 columns"><div class="alert-box success round">Congrats! The entry has been posted.</div></div></div>';
    }
?>
    <div class="row">
        <div class="large-9 columns">
            <form action="processpostablog.php" method="post">
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Title
                            <input type="text" name="title" required>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Body
                            <textarea required name="body" style="height: 10rem"></textarea>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <button type="submit">Post Entry</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="large-3 columns">
            <h3 class="subheader">Your Entries</h3>
            <?php
            try {
                $db = new PDO('sqlite:blog.sqlite3');
                $results = $db->query('select * from blog');
                if ($results) {
                    echo '<ul>';

                    foreach ($results as $row) {
                        echo '<li><a href="viewablog.php?id=' . $row['id'] . '">' . htmlentities($row['title']) . '</a></li>';
                    }

                    echo '</ul>';
                }
                else {
                    echo '<p>You currently have no entries.</p>';
                }
            }
            catch (PDOException $e) {
                echo '<p>You currently have no entries.</p>'; //lazy dupe
            }

            ?>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
