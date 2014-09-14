<?php
$pageTitle = 'Use Post to Alter Data';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    According to RFC 2616, when retrieving data, use the GET method.  When altering data (insert, edit, delete),
                    use the POST method.  (Actually, the RFC says it in terms of safe and unsafe actions.)
                    In this example, deleting a file is done via a GET request without the knowledge of the visitor.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h3>
            <dl>
                <dt>Attacker determines that a resource can be deleted with the GET method</dt>
                <dd>
                    The attacker crafts a URL to delete resources of a the victim.<br>
                    <?php
                    if (!is_readable('example/victim/usatbeach.jpg')) {
                        echo '<div id="data-warning">';
                        echo '<span class="warning label round">User Data Missing</span> <a href="example/restoreimage.php" class="button tiny ajax-and-delete" data-to-delete="data-warning">Restore Image</a>';
                        echo '</div>';
                    }
                    ?>

                    <a href="example/listmyfiles.php?user=attacker" target="_blank">Click here</a> to see this example.
                </dd>
            </dl>
            <dl>
                <dt>The attacker shares the URL with the victim.</dt>
                <dd>Through social engineering, the victim will be convinced to click on the URL or paste it into their address bar.</dd>
            </dl>
            <dl>
                <dt>The GET requests runs as the authenticated user.</dt>
                <dd>Basically, the victim has probably skipped a confirm method and has just executed a content delete on their own content.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
