<?php
$pageTitle = 'Consequences of Stealing a Cookie';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Authenticated sessions are usually tracked by a cookie named <kbd>PHPSESSID</kbd>.  PHP uses the value of this cookie to
                    associate the user with a current session.  This means that if an attacker can access that cookie value, they
                    can apply it to their browser and overtake the target's authenticated session.  Simply put, they can become the target.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Demonstration</h2>
            <dl>
                <dt>Create an authenticated session.</dt>
                <dd><a href="example/authenticate.php" target="_blank">Click here</a> to open a new tab and login to the website.</dd>
            </dl>
            <dl>
                <dt>Pass that cookie to an attacker.</dt>
                <dd>Use Chrome Developer Tools, open resources, and copy the cookie value.</dd>
            </dl>
            <dl>
                <dt>Cookie is now applied to an attacker's browser.</dt>
                <dd>Open Firefox, type <kbd>document.cookie="PHPSESSID=XXX"</kbd> in console.</dd>
            </dl>
            <dl>
                <dt>Attacker is now the target.</dt>
                <dd>Refresh the Firefox page.  Note that the authenticated information is now displayed.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
