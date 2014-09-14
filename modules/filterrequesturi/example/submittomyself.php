<?php
session_start();

$pageTitle = 'Unfiltered URL Search Submitted to Self';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div id="watermark">
        This Doesn't<br>
        Work Anymore
    </div>
    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>">
        <div class="row">
            <div class="large-6 columns">
                <div class="row collapse">
                    <div class="large-9 columns">
                        <input type="text" name="q" placeholder="Search Term">
                    </div>
                    <div class="large-2 large-offset-1 columns">
                        <button type="submit" class="tiny">Search</button>
                    </div>
                </div>
                <?php
                if (!empty($_GET['q'])) {
                    echo '<div class="row"><div class="large-12 columns">';

                    $rows = rand(3, 7);
                    echo '<ul>';
                    for ($i = 0; $i<$rows; $i++) {
                        echo '<li><strong>Random thing</strong><br>Here is the information to support that result.</li>';
                    }
                    echo '</ul>';
                    echo '</div></div>';
                }
                ?>
            </div>
            <div class="large-4 large-offset-2 columns">
                <blockquote>You might try adding the following to the current URL: <kbd>?q=">&lt;script>alert(document.cookie)&lt;/script>&lt;r "</kbd></blockquote>
            </div>
        </div>
        <hr style="margin: 3rem">
        <div class="row">
            <div class="large-12 columns">
                <p>Why does this work?</p>
                <p>The following is the example of the weak PHP:</p>
                <pre>&lt;form action="&lt;?php echo $_SERVER['REQUEST_URI'] ?>"></pre>
                <p>The rendered source of the form tag now looks like this (user input highlighted):</p>
                <pre>&lt;form action="<strong style="background: #ffff00"><?php echo $_SERVER['PHP_SELF'] ?>?q=">&lt;script>alert(document.cookie)&lt;/script>&lt;r "</strong>"></pre>
            </div>
        </div>
    </form>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
