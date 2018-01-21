<?php

class Controller
{
    public function loadModel($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function loadView($viewName, $data = [])
    {
        require_once '../app/views/' . $viewName . '.php';
    }
}

?>