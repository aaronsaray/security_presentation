<?php
$pageTitle = 'How to Steal a Cookie';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Remember, with a stolen cookie the attacker can take over the session.  They may be able to access
                    other information or change behavior as well.  It may even reveal some sensitive user information.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Ways to Steal the Cookie</h3>
            <dl>
                <dt>Social Engineering</dt>
                <dd>Like what we just did.  Convince the user to go into the console and give you the value.</dd>
            </dl>
            <dl>
                <dt>Get a Visual</dt>
                <dd>Modify the site to display the cookie value either inline or with alert.  Then get a visual, screenshot, etc.</dd>
            </dl>
            <dl>
                <dt>Send it via a JS Request</dt>
                <dd><a href="example/sendcookiewithimage.php" target="_blank">Click here</a> to see an example of inserting javascript and sending it a remote server.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
