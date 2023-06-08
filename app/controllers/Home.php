<?php

class Home extends Controller        {
    public function index()
    {
        $this->view('templates/header', $data);
        $this->view('Home/index');
        $this->view('templates/footer');
    }
}