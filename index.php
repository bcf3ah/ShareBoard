<?php
/**
 * Created by PhpStorm.
 * UserModel: Brian
 * Date: 9/20/2017
 * Time: 8:00 AM
 */
//start sessions
session_start();

require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('classes/Message.php');

require('controllers/Home.php');
require('controllers/Users.php');
require('controllers/Shares.php');

require('models/HomeModel.php');
require('models/ShareModel.php');
require('models/UserModel.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if (isset($controller)) {
    $controller->executeAction();
}