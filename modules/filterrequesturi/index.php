<?php
$pageTitle = 'Filter Server Variables';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Sometimes programmers may think that the information provided from PHP about the request itself is safe.
                    This not always the case.  An adept attacker can insert unfiltered header information.  Another common
                    oversight is the request URI variable.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h3>
            <dl>
                <dt>Attacker visits a site that doesn't filter the url of a submitted form.</dt>
                <dd>
                    Some sites take the current URL and put it as the form action when submitting to the same page.<br>
                    <a href="example/submittomyself.php" target="_blank">Click here</a> to see an example of this.
                </dd>
            </dl>
            <dl>
                <dt>Attacker modifies current URL to have encoded javascript.</dt>
                <dd>This information is decoded and rendered into the form tag.  <small>Note: most browsers now encode non-persistent xss attempts.</small></dd>
            </dl>
            <dl>
                <dt>The link is distributed or shared.</dt>
                <dd>When the victim loads the URL, the javascript is executed in their context.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
