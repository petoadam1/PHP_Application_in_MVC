<?php

class Controller
{
    public function model($model)
    {
        if(file_exists('app/models/' . $model . '.php')) 
        {
            require_once 'app/models/' . $model . '.php';
            return new $model();
        } else {
            return null;
        }
        
    }

    public function view($view, $data = [])
    {
        if(file_exists('app/views/' . $view . '.php')) 
        {
            include 'app/views/' . $view . '.php';
            
        } else {
            echo "ERROR: the view $view does not exist!";
        }
    }
}