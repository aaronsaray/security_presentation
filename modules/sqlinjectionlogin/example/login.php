<?php
session_start();

$pageTitle = 'Secure-ish Login';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<?php

    //silly stupid simple validation of post cuz this is a vulnerable site
    if (!empty($_POST['password'])) {
        if (!is_readable('user.sqlite3')) {
            touch('user.sqlite3');
            chmod('user.sqlite3', 0666);
        }

        $db = new PDO('sqlite:user.sqlite3');
        $db->exec('CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, email TEXT, password TEXT)');
        $db->exec('insert into users (email, password) values ("admin@admin.com", "complexPassword")');

        $query = "select * from users where email = '{$_POST['email']}' and password='{$_POST['password']}'";

        $result = $db->query($query);
        $user = $result->fetch();

        if (!empty($user)) {
            $_SESSION['sqlinjectionuser'] = $user;
        }
        else {
            echo '<div class="row"><div class="large-12 columns"><div class="alert-box warning">Invalid username or password.</div></div></div>';
        }
    }


    if (empty($_SESSION['sqlinjectionuser'])) {
?>
    <div class="row">
        <div class="large-9 columns">
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
        <div class="large-3 columns">
            <blockquote>Remember, admin users usually have full access and are user id #1.</blockquote>
            <blockquote>You might try this for the password: <kbd>X' or 1=1--</kbd></blockquote>
        </div>
    </div>
<?php
    } else {
       //authenticated
?>
    <div class="row">
        <div class="large-12 columns">
            <div data-alert class="alert-box">
                Welcome back <strong><?php echo htmlentities($_SESSION['sqlinjectionuser']['email']); ?></strong>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <h3 class="subheader">Edit Users</h3>
            <table>
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $users = array(
                        array('guy@smiley.com', 'Mr. Guy Smiley'),
                        array('staff@member.com', 'Your Boss'),
                        array('ceo@ourcompany.com', 'CEO George Bush'),
                    );
                    foreach ($users as $user) {
                        echo '<tr><td>' . $user[0] . '</td><td>' . $user[1] . '</td><td><a href="#"><i class="fi-list"></i> Edit</a> | <a href="#"><i class="fi-trash"></i> Delete</a></tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <hr style="margin: 3rem">
    <div class="row">
        <div class="large-12 columns">
            <p>Why does this work?</p>
            <p>The following is the example of the weak SQL.  Notice how the user input is not filtered:</p>
            <pre>$query = "select * from users where email = '{$_POST['email']}' and password='{$_POST['password']}'";</pre>
            <p>The rendered version of that SQL that was sent to the processor is the following (the userinput is highlighted):</p>
            <pre>select * from users where email = '<strong style="background: #ffff00">asdf@asdf.com</strong>' and password='<strong style="background: #ffff00">X' or id=1--</strong>'</pre>
            <p><kbd>--</kbd> is a SQL comment.  This allows the rest of the statement, or the trailing single quote, to be ignored.  If this was not done, the command would fail because of a syntax error.</p>
            <p>Here it reads: where email address is asdf@asdf.com and password is X or id equals 1 ignore everything after this.</p>
        </div>
    </div>



<?php } ?>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
