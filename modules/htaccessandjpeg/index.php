<?php
$pageTitle = 'Uploading File Types with Different Extensions';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Any file can contain any data.  Complex filtering scenarios will interpret the file before storage,
                    but not every script has such an extensive mechanism for storage.  Some will interpret MIME type or
                    even worse, just the extension of the file.  In cases where a blacklist is used, especially to stop
                    PHP file uploads, a jpg file can contain only PHP, and an .htaccess handler could be applied to run
                    that as a different type.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h2>
            <dl>
                <dt>Attacker is presented with a file upload screen.</dt>
                <dd>
                    This particular upload system only checks to make sure that the file doesn't end in .php<br>
                    <?php
                    if (is_readable('example/useruploads/phpinfo.jpg')) {
                        echo '<div id="data-warning">';
                        echo '<span class="warning label round">User Data Exists</span> <a href="example/deletedata.php" class="button tiny ajax-and-delete" data-to-delete="data-warning">Delete Data</a>';
                        echo '</div>';
                    }
                    ?>
                    <a href="example/upload.php" target="_blank">Click here</a> to see this example.
                </dd>
                <dt>A jpg file is uploaded with commands to execute on the system.</dt>
                <dd>For this demonstration, it will only be a phpinfo() call, but anything from shell_exec to displaying other PHP could be ran.</dd>
                <dt>An .htaccess file is uploaded</dt>
                <dd>This adds a type to the jpg file to be ran as a PHP file</dd>
                <dt>The jpg file is requested.</dt>
                <dd>It runs as PHP code now.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
