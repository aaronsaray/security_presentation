<?php
$pageTitle = 'POST Method Does Not Stop CSRF';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Cross Site Request Forgery (CSRF) still exists when using forms with the POST method (instead of GET).
                    Because the browser retains your session cookie for a website even after you visit a different URL,
                    it is possible for an attacker to craft a form on a secondary site and convince the visitor to submit
                    that form (it can even be done automatically in the background with an AJAX call, although this can
                    be much more complex.  It might be easier to generate a popup window, submit the form, and use the
                    parent window to close the popup as soon as the page has finished loading the victim site).  The request goes
                    on as planned, the payload is delivered to the vulnerable site, and the session cookies are sent with
                    the request to authenticate the directions.  The victim may not even be aware that they have executed
                    an action on a different website.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h3>
            <dl>
                <dt>Attacker determines that a site allows CSRF.</dt>
                <dd>
                    For this example, the delete image form will be found to be vulnerable.<br>
                    <a href="example/explanation.php" target="_blank">Click here</a> to see this expained.
                </dd>
            </dl>
            <dl>
                <dt>The attacker creates a form on their website mimicking the form.</dt>
                <dd>The victim is convinced to visit the nefarious site and submit the form.</dd>
            </dl>
            <dl>
                <dt>The POST form is executed in the user context.</dt>
                <dd>The values were added by the attacker, and the victim executed the request in their context.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
