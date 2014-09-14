<?php
session_start();
$pageTitle = 'Login to Secure Site';
$examplePage = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email']) && !empty($_POST['password'])) {
    $db = new PDO('mysql:dbname=mywebsite;host=127.0.0.1', 'root', 'superComplexPassword');

    $statement = $db->prepare('select * from users where email = :email and password = :password');
    $statement->bindParam(':email', $_POST['email']);
    $statement->bindParam(':password', $_POST['password']);
    $statement->execute();

    $user = $statement->fetchObject();

    if (!empty($user)) {
        $_SESSION['authorizedUser'] = $user;
        die(header('Location: dashboard.php'));
    }
}

include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
    <div class="row">
        <div class="large-6 large-offset-3 columns">
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
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
