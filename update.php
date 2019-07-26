<?php

require_once 'user.php';

class Update extends User
{
    public function save($username, $password, $currentpassword)
    {
        try {
            // checks if user and password match
            $sql = 'SELECT * FROM users WHERE username = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$_SESSION['user']->username]);
            $user = $stmt->fetch();
            // dehash password and check 
            if (password_verify($currentpassword,  $user->password) == 1) {
                // update the user info

                // check which to update
                if ($username != "" && $password != "") {
                    $sql = 'UPDATE users SET username=?,password=? WHERE id=?';
                    $stmt = $this->conn->prepare($sql);
                    // hash password then update
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->execute([$username, $password, $_SESSION['user']->id]);
                } else if ($username && !$password) {
                    $sql = 'UPDATE users SET username=? WHERE id=?';
                    $stmt = $this->conn->prepare($sql);
                    $stmt->execute([$username, $_SESSION['user']->id]);
                } else {
                    $sql = 'UPDATE users SET password=? WHERE id=?';
                    $stmt = $this->conn->prepare($sql);
                    // hash password then update
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->execute([$password, $_SESSION['user']->id]);
                }

                $sql = 'SELECT * FROM users WHERE username = ? AND  password = ?';
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([$username, $password]);
                $user = $stmt->fetch();
                // save to user session
                $_SESSION['user'] = $user;
                print '<script type="text/javascript">';
                print 'alert("Successfully Edited!");';
                print 'window.location.assign("index.php");';
                print '</script>';
            } else {
                print '<script type="text/javascript">';
                print 'alert("Invalid Password!");';
                print 'window.location.assign("edit.php");';
                print '</script>';
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }
}

$update = new Update();
$update->save($_POST['username'], $_POST['password'], $_POST['currentpassword']);
