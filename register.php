<?php
require_once 'user.php';

class Register extends User
{
    public function save($username, $password)
    {
        try {
            //check if user already exists
            $sql = 'SELECT * FROM users WHERE username = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$username]);
            $user = $stmt->rowCount();
            if ($user >= 1) {
                print '<script type="text/javascript">';
                print 'alert("Account already exists!");';
                print 'window.location.assign("index.php");';
                print '</script>';
            }
            // hash password
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = 'INSERT INTO users (username,password) VALUES (?,?)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$username, $password]);
            $sql = 'SELECT * FROM users WHERE username = ? AND  password = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$username, $password]);
            $user = $stmt->fetch();
            // save to user session
            $_SESSION['user'] = $user;
            print '<script type="text/javascript">';
            print 'alert("Successfully Registered!");';
            print 'window.location.assign("home.php");';
            print '</script>';
        } catch (PDOException $e) {
            echo $e;
        }
    }
}

$register = new Register();
$register->save($_POST['username'], $_POST['password']);
