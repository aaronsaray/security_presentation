<?php
$pageTitle = 'Upload and Store User Assets';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

if (!empty($_FILES)) {
    echo '<div class="row"><div class="large-12 columns">';

    if (pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION) == 'php') {
        echo '<div class="alert-box warning">PHP files are not allowed.</div>';
    }
    else {
        $destination = 'useruploads/' . basename($_FILES['myfile']['name']);
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $destination)) {
            echo '<p>Your file has been uploaded.  <a href="';
            echo $destination;
            echo '" target="_blank">Click here</a> to see it</p>';
        }
        else {
            echo '<div class="alert-box warning">Unable to upload file.</div>';
        }
    }

    echo '</div></div>';
}

?>
<div class="row">
    <div class="large-9 columns">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="large-9 columns">
                    <p>Upload your image file!</p>
                    <label>
                        <input type="file" required name="myfile">
                    </label>
                    <button type="submit" class="tiny">upload</button>
                </div>
            </div>
        </form>
    </div>
    <div class="large-3 columns">
        <blockquote>Try uploading a .php file first. <small><a href="rename_me_to_php.txt">this one</a></small></blockquote>
        <blockquote>Next, upload the <a href="phpinfo.jpg">phpinfo.jpg</a> file and the <a href="htaccess">.htaccess</a> file.</blockquote>
        <blockquote>Surf to the phpinfo.jpg link.</blockquote>
    </div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
