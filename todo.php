<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="row">
    <h2>Upcoming and To-do</h2>
    <p>The following is a list of other security concerns that will be explained and demonstrated.</p>
    <dl>
        <dt>Email header injection</dt>
        <dd>Improperly filtered email addresses, subjects, etc, can allow additional headers to be added to an email, adding bcc values for example.</dd>
        <dt>Image upload modifications</dt>
        <dd>Submission can modify $_FILES['mimetype'], jhead program can add header instructions like __halt_compiler().</dd>
        <dt>Filtering across Character Sets</dt>
        <dd>It is possible to submit data in one character set that will be evaluated as safe in one charset but when converted to or stored as another, it renders a vulnerability.</dd>
        <dt>Alternate Data Streams</dt>
        <dd>Determine if the practice of alternate data streams on windows filesystems can affect PHP on IIS/Apache on a Microsoft platform.</dd>
        <dt>GIFAR</dt>
        <dd>Determine the impact of the GIFAR vulnerability.</dd>
        <dt>SVN Version Files</dt>
        <dd>If deploying with svn, can the cached files combined with a multi-views configuration show previous version source.</dd>
        <dt>LDAP Injection</dt>
        <dd>In an authentication service, when an OU is expecting an email address filter, using the * will return the whole tree.</dd>
        <dt>CRLF Injection</dt>
        <dd>Using HTTP Response Splitting, generate HTML from the server.  This may not necessarily be a PHP related security hole.</dd>
        <dt>Use CSS to determine a PHP misconfiguration</dt>
        <dd>Using the CSS document, determine an input field that might be vulnerable to a remote post.</dd>
        <dt>Enabling multi-views on apache to process image as PHP.</dt>
        <dd>A filename in the format of attack.php.jpg may be determined to be an image by a PHP script checking extensions, but multiews will treat this as a PHP script written in the language code 'jpg' (which falls back to en).</dd>
    </dl>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
