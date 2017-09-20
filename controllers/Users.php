<?php
/**
 * Created by PhpStorm.
 * UserModel: Brian
 * Date: 9/20/2017
 * Time: 8:50 AM
 */

class Users extends Controller
{
    protected function register()
    {
        $viewModel = new UserModel();
        $this->returnView($viewModel->register(), true);
    }

    protected function login()
    {
        $viewModel = new UserModel();
        $this->returnView($viewModel->login(), true);
    }

    protected function logout()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        header("Location: " . ROOT_URL);
    }
}