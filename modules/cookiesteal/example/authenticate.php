<?php
session_start();

if (!empty($_POST['email'])) {
    // horrible authentication ;)

    $_SESSION['user'] = array('email'=>$_POST['email']);

    die(header('Location: /modules/cookiesteal/example/authenticate.php'));
}


$pageTitle = 'American Bank';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php
    if (empty($_SESSION['user'])) {
?>
    <div class="row">
        <div class="large-6 columns">
            <div class="panel">
                <p>We manage your entire portfolio.  Since 1901.</p>
                <ul class="checkmarks">
                    <li>Savings</li>
                    <li>Checking</li>
                    <li>Mortgage</li>
                    <li>Credit Cards</li>
                    <li>Investments</li>
                </ul>
            </div>
            <p>
                <img src="bank.jpg" alt="bank" style="width: 175px">
                <img src="card.png" alt="card" style="width: 185px">
            </p>
        </div>
        <div class="large-6 columns">
            <h2 class="subheader">Login</h2>
            <form method="post">
                <div class="row">
                    <div class="large-6 columns">
                        <label>
                            Email <input type="email" name="email" required>
                        </label>
                    </div>
                    <div class="large-6 columns">
                        <label>
                            Password <input type="password" name="password" required>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <button type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
    } else {
       //authenticated
?>
    <div class="row">
        <div class="large-12 columns">
            <div data-alert class="alert-box">
                Welcome back <strong><?php echo htmlentities($_SESSION['user']['email']); ?></strong>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="large-6 columns">
            <table>
                <caption>Checking</caption>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Transaction</th>
                        <th>Amount</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo date('m/d/y') ?></td>
                        <td>Gas Station</td>
                        <td>$44.06</td>
                        <td>$2401.22</td>
                    </tr>
                    <tr>
                        <td><?php echo date('m/d/y', strtotime('yesterday')) ?></td>
                        <td>Grocery Store</td>
                        <td>$96.47</td>
                        <td>$2357.16</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <ul class="inline-list">
                <li><a href="#">Change Address</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="#">Change PIN</a></li>
            </ul>
        </div>
        <div class="large-6 columns">
            <ul class="pricing-table">
                <li class="title">Total Account Balances</li>
                <li class="price">$9,942.07</li>
                <li class="bullet-item"><strong>$2401.22</strong> Checking</li>
                <li class="bullet-item"><strong>$1004.21</strong> Savings</li>
                <li class="bullet-item"><strong>($955.73)</strong> Credit Card</li>
                <li class="description">Managed Accounts</li>
                <li class="bullet-item"><strong>$7492.37</strong> 401k</li>
            </ul>
        </div>
    </div>


<?php } ?>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
