<?php

class Home extends Controller
{
    public function index() 
    {
        $this->view('home/index', []);
    }
    public function users()
    {
        $users = $this->model('User')->get();
        $this->view('home/users', ['users' => $users]);
    }
    public function advertisements()
    {
        $advertisements = $this->model('Advertisement')->getWithUsers();
        $this->view('home/advertisements', ['advertisements' => $advertisements]);
    }      
}
?>