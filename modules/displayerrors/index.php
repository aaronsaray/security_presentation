<?php
$pageTitle = 'Problems with Display Errors';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    When errors are displayed in production, there are a number of things that can be made visible to
                    an attacker that may be sensitive.  These include server filesystem paths as well as credentials or
                    variable names.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h2>
            <dl>
                <dt>Attacker visits a page that has an error.</dt>
                <dd>
                    The attacker could have caused the error from exploiting a bug or a programmer could have uploaded a broken piece of code.<br>
                    <a href="example/haserror.php" target="_blank">Click here</a> to see this example.
                </dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
