<?php
$pageTitle = 'Validating File Inclusion';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    When including files, it is important to protect against directory traversal.  In the following example,
                    there are legitimate files that may be included.  However, because of a lack of filtering, the attacker
                    can alter the URL, thereby including a different and potentially sensitive file.  Since this is
                    an example about the richest people on the earth, perhaps the attacker can find banking information
                    or at least private contact information.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h2>
            <dl>
                <dt>Attacker visits a website that appears to use a non-validated include file and path blindly.</dt>
                <dd>
                    This is sometimes a method to create a template or surrounding scaffolding for a website.<br>
                    <a href="example/public_html/template.php?include=billgates.php" target="_blank">Click here</a> to see this example.
                </dd>
            </dl>
            <dl>
                <dt>The attacker modifies the URL to include a different file.</dt>
                <dd>In this case, one level up contains a ini file that has database credentials.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
