<?php
$pageTitle = 'This page is vardumping';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

?>
<div class="row">
    <div class="large-12 columns">
        <p>I know!  It looks like it's working perfectly.</p>
        <div>
            <span id="animatemedemo">There even is animation!</span>
        </div>
        <?php
            $ftp = new stdClass();
            $ftp->type = 'sftp';
            $ftp->user = 'user';
            $ftp->password = 'super hard to guess password';

            echo "<!--\n\n##############################################################################################\n";
            var_dump($ftp);
            echo "\n#############################################################################################\n\n-->";

        ?>
    </div>
</div>
<div class="row">
    <hr style="margin-top: 20rem">
    <h2 class="sectionheader subheader">How to See It</h2>
</div>
<div class="row">
    <div class="large-12 columns">
        <p>
            <strong>View Source</strong> of the page.
        </p>
    </div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
