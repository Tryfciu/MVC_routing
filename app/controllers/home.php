<?php

class Home extends Controller
{
    public function index($name='')
    {
        $user = $this->loadModel("User");
        $user->name = $name;

        $this->loadView('home/index', ['name'=>$user->name]);
    }
}

?>