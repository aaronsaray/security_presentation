<?php
$pageTitle = 'List my files';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

$user = $_GET['user'];

?>
    <div class="row">
        <div class="large-9 columns">
            <h3 class="subheader">Welcome back <?= $user ?></h3>
            <?php
                if (!empty($_GET['delete'])) {
                    echo '<div class="alert-box">Successfully deleted image.</div>';
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="large-9 columns">
            <?php
                $files = glob($user . '/*');
                if (!$files) {
                    echo '<div class="alert-box warning">You have no images.</div>';
                }
                else {
                    echo '<table><thead><tr><th>Image</th><th></th></tr></thead><tbody>';
                    foreach ($files as $file) {
                        echo '<tr><td><img src="' . $file . '" style="height: 100px"></td>';
                        echo '<td><a href="delete.php?user=' . $user . '&file=' . basename($file) . '" onclick="return false">Delete</a></td>';
                        echo '</tr>';
                    }
                    echo '</tbody></table>';
                }
            ?>
        </div>
        <div class="large-3 columns">
            <blockquote>The URL has the username as the <kbd>user</kbd> parameter and the filename as the <kbd>file</kbd> parameter.</blockquote>
        </div>
    </div>

<?php
    if ($user == 'attacker') {
        // display this info only to our attacking user for help
?>
    <div class="row">
        <h2 class="sectionheader subheader">What to Share</h2>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <p>The victim's username is <strong>victim</strong> and they have a file called <strong>usatbeach.jpg</strong>.</p>
            <p>First, look at list of victim's images in <strong>another browser</strong> using this link: <a href="?user=victim">Victim's Page</a></p>
            <p>Now convince them to use the link with the delete command: <a href="delete.php?user=victim&file=usatbeach.jpg">Victim's Delete Link</a></p>
        </div>
    </div>

<?php
    } else {
?>
    <div class="row">
        <div class="large-12 columns">
            <p>Maybe you're bored?  Try visiting <a href="http://google.com?q=starfish#q=starfish">Google</a>.</p>
        </div>
    </div>
<?php
    }
?>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
