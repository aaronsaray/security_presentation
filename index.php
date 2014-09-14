<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="row">
    <h2>PHP Security Demonstration</h2>
    <p>Demonstration of methods and consequences of common security vulnerabilities.</p>
    <h3 class="subheader">Different Security Consequences</h3>
    <p>There are a number of different things an attacker can accomplish based on exploiting the vulnerabilities being discussed.  These may include:</p>
    <ul>
        <li>Stealing a Cookie
        <ul>
            <li>Takes over an authenticated user session - becoming the victim user themselves.</li>
            <li>Retrieving some personally identifiable information or sensitive user information.</li>
            <li>Changing the functionality of the site based on the cookie values.</li>
        </ul>
        </li>
        <li>Injecting Javascript
            <ul>
                <li>An avenue to steal cookies</li>
                <li>Change the functionality of the site for a specific user</li>
                <li>Perform competitive defacement of website content (remove all references of a competing product, for example)</li>
                <li>Create denial of service loops (repeatedly loading the page)</li>
                <li>Executing DDOS attacks (making each individual visitor of this website run an attack against another site)</li>
            </ul>
        </li>
        <li>Accessing the filesystem
            <ul>
                <li>Accessing stored user information from a database (getting credentials from the code)</li>
                <li>Accessing remote systems using a stolen protected API key (or private key)</li>
                <li>Hosting unauthorized content on a trusted source (.edu source serving stolen music, porn, etc)</li>
                <li>Changing the functionality of the source code of the website (retrieving user actions, changing their content, etc)</li>
            </ul>
        </li>
        <li>Accessing Third Party Systems
            <ul>
                <li>Using a third party system authenticated as the victim's trusted system</li>
                <li>Using Credit Card processing systems to test stolen credit cards (and in turn, increasing fees on the victim merchant account)</li>
            </ul>
        </li>
    </ul>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
