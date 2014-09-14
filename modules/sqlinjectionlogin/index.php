<?php
$pageTitle = 'Filter Input Going to Other Systems';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Whether it's going to an internal api, a third party, or your database, you should filter or escape
                    user input that is being processed.  In this example, the focus will be on SQL injection.  If an
                    attacker can guess your underlying SQL statements and determine the pattern of your database, they
                    can authenticate as any user they'd like.  Or worse - delete all your data.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h3>
            <dl>
                <dt>Attacker visits a site that doesn't filter login username or password.</dt>
                <dd>
                    The user notices that it is not filtered (probably by seeing an error message if they send special characters)<br>
                    <a href="example/login.php" target="_blank">Click here</a> to see an example of an unfiltered login form.
                </dd>
            </dl>
            <dl>
                <dt>Attacker posts the proper combination of data and server commands</dt>
                <dd>The attacker can modify the SQL in real time to authorize them as a specific user.  For example, most sites have an admin user and it's user ID #1.</dd>
            </dl>
            <dl>
                <dt>The posted data modifies the SQL and authorizes the attacker.</dt>
                <dd>Havoc ensues.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
