<?php
/*
 *Base controller
 *Loads models, views and helpers
 */
class Controller
{
    //load model
    public function model($model)
    {
        //require model file
        require_once '../app/model/' . $model . '.php';

        //instantiate model
        return new $model();
    }
    //load view
    public function view($view, $data = [])
    {
        //check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            //views does not exist
            die('view does not exist');
        }
    }
    // public function helpers($helper)
    // {
    //     //require helper file
    //     require_once '../app/helpers/' . $helper . '.php';

    //     //instantiate helper
    //     return new $helpers;
    // }
}
