<?php
$pageTitle = 'Forbes Richest People';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <hr>
    </div>
    <div class="row">
        <div class="large-4 columns">
            <h5>Pick a Person</h5>
            <ul class="side-nav">
                <li><a href="template.php?include=carlosslim.php">Carlos Slim</a></li>
                <li><a href="template.php?include=billgates.php">Bill Gates</a></li>
                <li><a href="template.php?include=warrenbuffet.php">Warren Buffet</a></li>
                <li><a href="template.php?include=amancioortega.php">Armancio Ortega</a></li>
            </ul>
        </div>
        <div class="large-8 columns">
            <?php include $_GET['include']; ?>
        </div>
    </div>

    <hr style="margin: 3rem">
    <div class="row">
        <div class="large-12 columns">
            <p>What alteration should be attempted?</p>
            <p>First, change the include file GET parameter to something known to break to see if you can see the display errors.</p>
            <p>Then, try changing the included file GET parameter to <kbd>../config.ini</kbd></p>
        </div>
    </div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
