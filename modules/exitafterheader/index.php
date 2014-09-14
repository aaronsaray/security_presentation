<?php
$pageTitle = 'Exit after header';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Most attacks on a website are avoidable by filtering, validating, and logical architecture.  This is
                    an example of a situation where the code is nearly perfect, but a misunderstanding of how the protocols
                    work (or sloppy coding) allows an avenue for attack.  The attacker will attempt to delete an image
                    from a user account via a properly formed URL.  (This particular scenario is used because of the
                    visibility of the consequence.  Deleting a resource should never be done via a GET request.  Perhaps
                    a better, less visible scenario would be a GET request that is limited based on the user to reduce server
                    load.)  In this scenario, if the user is NOT authenticated, it should halt and redirect to a login page.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h2>
            <dl>
                <dt>Attacker visits a website that doesn't properly handle header redirects.</dt>
                <dd>
                    The page the attacker is trying to view should redirect the visitor to a login page.<br>
                    <?php
                    if (!is_readable('example/images/chicken1.jpg')) {
                        echo '<div id="data-warning">';
                        echo '<span class="warning label round">User Data Missing</span> <a href="example/restoreimage.php" class="button tiny ajax-and-delete" data-to-delete="data-warning">Restore Image</a>';
                        echo '</div>';
                    }
                    ?>

                    <a href="example/listfiles.php" target="_blank">Click here</a> to see this example.
                </dd>
            </dl>
            <dl>
                <dt>The attacker executes the delete and then redirects to login.</dt>
                <dd>Because the script isn't properly stopped, it executes fully, and then the browser processes the header.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
