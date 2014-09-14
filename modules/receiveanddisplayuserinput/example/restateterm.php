<?php
session_start();

$pageTitle = 'Restate Term of Search';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <form class="">
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

                    echo '<h3 class="subheader">You searched for ' . $_GET['q'] . '</h3>';
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
                <blockquote>You might try <kbd>&lt;script>alert(document.cookie)&lt;/script></kbd> - but remember, share it with a firefox user!</blockquote>
            </div>
        </div>
    </form>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
