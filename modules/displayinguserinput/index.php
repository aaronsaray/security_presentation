<?php
$pageTitle = 'Displaying User Input';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    It is important to filter user input before you display it back to the user.  One user's input could
                    be viewed by another user to generate a security issue.  These security issues include taking over
                    a session or repeatedly loading the page, causing a loop and Denial of Service.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h3>
            <dl>
                <dt>Attacker visits a site that doesn't filter.</dt>
                <dd>
                    Perhaps a blogging website.  The site displays the information back to the user unfiltered.  Anyone can visit the page.<br>
                        <?php
                            if (is_readable('example/blog.sqlite3')) {
                                echo '<div id="data-warning">';
                                echo '<span class="warning label round">User Data Exists</span> <a href="example/deletedata.php" class="button tiny ajax-and-delete" data-to-delete="data-warning">Delete Data</a>';
                                echo '</div>';
                            }
                        ?>

                    <a href="example/postablog.php" target="_blank">Click here</a> to post to the blog.
                </dd>
            </dl>
            <dl>
                <dt>Attacker posts javascript</dt>
                <dd>This javascript is then displayed as user content.  For any viewer, it executes an attack.</dd>
            </dl>
            <dl>
                <dt>The link is distributed or shared.</dt>
                <dd>The attacker convinces the target to visit their page on the site.  The site then retrieves the current viewers cookie and sends it offsite to the attacker.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
