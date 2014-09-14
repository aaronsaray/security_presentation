<?php
session_start();

$pageTitle = 'Term put back in search box';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <form>
        <div class="row">
            <div class="large-6 columns">
                <div class="row collapse">
                    <div class="large-9 columns">
                        <input type="text" name="q" placeholder="Search Term" value="<?php if (!empty($_GET['q'])) echo $_GET['q']; ?>">
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
                <blockquote>You might try <kbd>">&lt;script>alert(document.cookie)&lt;/script>&lt;r "</kbd> - but remember, share it with a firefox user!</blockquote>
            </div>
        </div>
        <hr style="margin: 3rem">
        <div class="row">
            <div class="large-12 columns">
                <p>Why does the example <kbd>">&lt;script>alert(document.cookie)&lt;/script>&lt;r "</kbd> work?</p>
                <p>The source code looks like this (user input highlighted):</p>
                <pre>&lt;input type="text" name="q" placeholder="Search Term" value="<strong style="background: #ffff00">">&lt;script>alert(document.cookie)&lt;/script>&lt;r "</strong>"></pre>
            </div>
        </div>
    </form>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
