<?php
class User extends Dbh {
    // Error handler
    public function createErrors($username, $email, $password, $password_confirm) {
        if (empty($username) || empty($email) || empty($password) || empty($password_confirm)) {
            $_SESSION['message'] = 'Please fill all fields!';
            header('Location: register.php');
            exit();
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['message'] = 'Email is not valid!';
            header('Location: register.php');
            exit();
        } else if(strlen($password) < 5 && strlen($password_confirm) < 5) {
            $_SESSION['message'] = 'Short password!';
            header('Location: register.php');
            exit();
        } else if (strlen($password) > 20 && strlen($password_confirm) > 20)  {
            $_SESSION['message'] = 'Long password';
            header('Location: register.php');
            exit();
        } else if ($password !== $password_confirm) {
            $_SESSION['message'] = 'Password mismatch!';
            header('Location: register.php');
            exit();
        } else {
            $_SESSION['message_success'] = 'Account created!';
            header('Location: login.php');
        }
    }

    // Insert user in database
    public function createUser($username, $email, $password) {
        $sql = "INSERT INTO users(username, email, password) VALUES(?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $email, $password]);
    }

    // Sign In
    public function userSignIn($username, $password) {
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $password]);

        if (empty($username) || empty($password)) {
            $_SESSION['message'] = 'Fill all fields!';
            header('Location: login.php');
            exit();
        } else {
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch();

                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email']
                ];
                header('Location: profile.php');
            } else {
                $_SESSION['message'] = 'Username or password incorrect!';
                header('Location: login.php');
                exit();
            }
        }
    }
}
