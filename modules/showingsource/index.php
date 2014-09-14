<?php
$pageTitle = 'Exposing PHP Source Files';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Because PHP is open source, there is always going to be a lean towards displaying and distributing
                    source code.  This is great from a shared product distribution point, but it is not good in scenarios
                    where the PHP code may have proprietary information.  This information could include credentials or
                    expose vulnerable commands that may lead to other vulnerabilities like SQL injection.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h3>
            <dl>
                <dt>Attacker visits a website with PHP source viewing turned on / allowed.</dt>
                <dd>
                    The page looks like it might contain sensitive information in its content.<br>
                    <a href="example/authenticate.php" target="_blank">Click here</a> to see an example.<br>
                    <a href="example/authenticate.phps" target="_blank">Click here</a> to see the source file.<br>
                </dd>
            </dl>
            <dl>
                <dt>The attacker appends the letter <kbd>s</kbd> on the php extension in the URL.</dt>
                <dd>This envokes the PHP Source display</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
