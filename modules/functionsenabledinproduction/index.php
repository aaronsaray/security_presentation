<?php
$pageTitle = 'Debug Functions in Production';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Some PHP functions allow information to be displayed for debugging purposes.  While using these
                    functions may be against best practices of debugging PHP code, some programmers will still use them
                    for quick actions.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h2>
            <dl>
                <dt>Attacker visits a page that has debugging function running.</dt>
                <dd>
                    The debugging information may be displayed to the visitor.  Sometimes, obscurity is thought to be a security measure, so the output may be hidden with HTML comments.<br>
                    <a href="example/vardump.php" target="_blank">Click here</a> to see this example.
                </dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
