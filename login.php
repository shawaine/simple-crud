<?php
include_once 'user.php';

class Login extends User
{
    public function verify($username, $password)
    {
        // positional statement
        try {
            $sql = 'SELECT * FROM users WHERE username = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$username]);
            $user = $stmt->fetch();
            $rowCount  = $stmt->rowCount();
            //check if theres a row found
            if ($rowCount == 0) {
                print '<script type="text/javascript">';
                print 'alert("Account not found!");';
                print 'window.location.assign("index.php");';
                print '</script>';
            }
            // dehash password and check 
            if (password_verify($password,  $user->password) == 1) {
                // save to user session
                $_SESSION['user'] = $user;
                header("Location:home.php");
            } else {
                print '<script type="text/javascript">';
                print 'alert("Account not found!");';
                print 'window.location.assign("index.php");';
                print '</script>';
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function getUsername()
    {
        return $this->username;
    }
}

// instantiate login then call verify method
$login = new Login();
$login->verify($_POST['username'], $_POST['password']);
