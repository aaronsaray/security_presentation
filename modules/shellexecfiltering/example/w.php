<?php
$pageTitle = 'Show If User is Logged In';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

?>
<div class="row">
    <div class="large-9 columns">
        <form>
            <div class="row">
                <div class="large-9 columns">
                    <label>System username
                        <input type="text" required name="name">
                    </label>
                    <button type="submit" class="tiny">w them</button>
                </div>
            </div>
        </form>
        <?php
            if (!empty($_GET['name'])) {
                echo '<hr>';
                echo '<h3 class="subheader">w results for ' . htmlentities($_GET['name']) . '</h3>';
                echo '<pre>';
                echo shell_exec('w ' . $_GET['name']); // yay unfiltered!
                echo '</pre>';
            }
        ?>
    </div>
    <div class="large-3 columns">
        <blockquote>Try <kbd>root</kbd> or <kbd>aaron</kbd></blockquote>
        <blockquote>Next, try to access the credential file called <kbd>database.inc.php</kbd> in this directory.</blockquote>
        <blockquote>Try <kbd>x && cat database.inc.php</kbd> - but don't forget to view the source!</blockquote>
    </div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
