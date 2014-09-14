<?php
$pageTitle = 'List my files';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

?>
    <div class="row">
        <div class="large-9 columns">
            <ul class="small-block-grid-5">
                <?php
                    foreach (glob('images/*.jpg') as $file) {
                        echo '<li><img src="' . $file . '"></li>';
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <hr style="margin-top: 10rem">
        <h2 class="sectionheader subheader">What to Exploit</h2>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <p>By viewing the files in the public list, the attacker can guess the image identifier and deletion url.  (Sometimes, the attacker signs up for the site themselves to understand what URLs are available.)</p>
            <p>Try the following URL: <a target="_blank" href="delete.php?picid=chicken1.jpg">Delete Chicken 1 Image</a></p>
        </div>
    </div>
    <div class="row">
        <h2 class="sectionheader subheader">Why this works</h2>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <p>When a location header is used in PHP code, PHP must be immediately told to halt execution.  If it does not, it continues to process the request and send the header to the browser.  All of PHP executes, and THEN the browser processes the header.</p>
            <p>
                An example of the weak PHP code:
            </p>
<pre>
if (!isset($_SESSION['user'])) {
    header('Location: /login.php');
}

unlink('sourcefiles/' . $_GET['pictureID']);
header('Location: /fileslist.php');
</pre>
        </div>
    </div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
