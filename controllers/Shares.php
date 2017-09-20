<?php
/**
 * Created by PhpStorm.
 * UserModel: Brian
 * Date: 9/20/2017
 * Time: 8:50 AM
 */

class Shares extends Controller
{
    protected function Index()
    {
        $viewModel = new ShareModel();
        $this->returnView($viewModel->Index(), true);
    }

    protected function Add()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: ' . ROOT_URL . 'shares');
        }
        $viewModel = new ShareModel();
        $this->returnView($viewModel->Add(), true);
    }
}