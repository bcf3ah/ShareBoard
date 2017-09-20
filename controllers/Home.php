<?php
/**
 * Created by PhpStorm.
 * UserModel: Brian
 * Date: 9/20/2017
 * Time: 8:41 AM
 */

class Home extends Controller
{
    protected function Index()
    {
        $viewModel = new HomeModel();
        $this->returnView($viewModel->Index(), true);
    }
}