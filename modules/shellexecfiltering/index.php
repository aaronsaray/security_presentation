<?php
$pageTitle = 'Filter System Commands';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    From time to time, it may be necessary to execute a system command via PHP.  Sometimes this is done
                    because a library offers many more options via the command line than the PHP module for it (or in some
                    cases, there is no PHP module for the library.)  Other times, the PHP script's sole purpose may be
                    to interact with the system directly.  This attack vector relies on the fact that more than one
                    shell command can be executed on a single line.  Without filtering user input, the shell command
                    arguments can invoke a secondary command.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h2>
            <dl>
                <dt>Attacker visits a website that executes a system command.</dt>
                <dd>
                    In this case, the website is going to attempt to show if a visitor specified user is logged in.<br>
                    <a href="example/w.php" target="_blank">Click here</a> to see this example.
                </dd>
            </dl>
            <dl>
                <dt>The attacker notices that the command isn't filtered.</dt>
                <dd>This could be displayed from some mistaken data being entered and a subsequent error message being displayed.</dd>
            </dl>
            <dl>
                <dt>The input is modified to have a second command.</dt>
                <dd>Now, the attacker has access to the system and can run any command as the web server.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
