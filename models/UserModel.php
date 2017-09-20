<?php
/**
 * Created by PhpStorm.
 * UserModel: Brian
 * Date: 9/20/2017
 * Time: 9:13 AM
 */

class UserModel extends Model
{
    public function Register()
    {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = sha1($post['password']);

        if ($post['submit']) {
            // Insert into MySQL
            $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();
            // Verify
            if ($this->lastInsertId()) {
                // Redirect
                header('Location: ' . ROOT_URL . 'users/login');
            }
        }
        return;
    }

    public function Login()
    {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = sha1($post['password']);

        if ($post['submit']) {
            //Compare login
            $this->query("SELECT * FROM users WHERE email = :email AND password = :password");
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);

            $user = $this->single();
            if ($user) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $user['id'],
                    "name" => $user['name'],
                    "email" => $user['email']
                );
                header('Location: ' . ROOT_URL . 'shares');
            } else {
                Message::setMessage("Incorrect email or password", 'error');
            }
        }
        return;
    }

}