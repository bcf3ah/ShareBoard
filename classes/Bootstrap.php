<?php
/**
 * Created by PhpStorm.
 * UserModel: Brian
 * Date: 9/20/2017
 * Time: 8:02 AM
 */

class Bootstrap
{
    private $controller;
    private $action;
    private $request;

    /**
     * Bootstrap constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $this->request = $request;
        if ($this->request['controller'] == '') {
            //basically, if we have no params, so if we're at the root url, need to load home page
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }

        if ($this->request['action'] == '') {
            //if no action specified, use index action like ASP.NET
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }
    }

    public function createController()
    {
        //check class
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            //check if extended
            if (in_array("Controller", $parents)) {
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
                    //Inform user that that method doesn't exist
                    echo '<h1>Method does not exist</h1>';
                    return;
                }
            } else {
                //Inform user that that controller doesn't exist
                echo '<h1>Controller does not exist</h1>';
                return;
            }
        } else {
            //Inform user that that whole friggin class doesn't exist
            echo '<h1>Class does not exist</h1>';
            return;
        }
    }
}