<?php
$pageTitle = 'Receive and Displaying Unfiltered User Input';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-10 columns">
            <div class="panel">
                <p>
                    Even if the information is not being stored, it is required to filter the user input before displaying it again.
                    You may not be aware of all the ways to share or trick another user into executing commands on the website.
                    Perhaps the parameters are in the URL and it is as easy as sharing a URL.  With social engineering,
                    the attacker could convince the victim to type anything into a user input field, too.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <h2 class="subheader">Steps to this attack</h3>
            <dl>
                <dt>Attacker visits a site that doesn't filter search terms.</dt>
                <dd>
                    A common user experience choice is to redisplay the user search terms in the search box or on the screen.<br>
                    <a href="example/restateterm.php" target="_blank">Click here</a> for an example of restating the search term on the screen.<br>
                    <a href="example/terminbox.php" target="_blank">Click here</a> for an example of displaying it in the search box.
                </dd>
            </dl>
            <dl>
                <dt>Attacker posts javascript in search box</dt>
                <dd>Once again, stealing a cookie or perhaps altering the search results.  Remember, this is because the input is directly applied as if the programmer had written that html or script.</dd>
            </dl>
            <dl>
                <dt>The link is distributed or shared.</dt>
                <dd>When the victim loads the attack, the javascript is executed in their context.</dd>
            </dl>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
