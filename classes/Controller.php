<?php
/**
 * Created by PhpStorm.
 * UserModel: Brian
 * Date: 9/20/2017
 * Time: 8:33 AM
 */

abstract class Controller
{
    protected $request;
    protected $action;

    /**
     * Controller constructor.
     * @param $request
     * @param $action
     */
    public function __construct($action, $request)
    {
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction()
    {
        return $this->{$this->action}();
    }

    protected function returnView($viewModel, $fullView)
    {
        $view = 'views/' . get_class($this) . '/' . $this->action . '.php';
        if ($fullView) {
            require('views/main.php');
        } else {
            require($view);
        }
    }
}