<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'World News';
        view('page', compact('title'));
    }

    public function us()
    {
        $title = 'World News';
        view('page', compact('title'));
    }
    
    public function tech()
    {
        $title = 'World News';
        view('page', compact('title'));
    }

    public function templating()
    {
        $name = 'Ken';
        $age = 31;
        view('templating',compact('age','name'));
    }

    public function form()
    {
        $name = $_POST['name'] ?? 'Nameless';
        $age = $_POST['age'] ?? 'Ageless';    
        
        view('form',compact('name','age'));
    }

    public function answer()
    {
        dump($_POST, $_GET, $_REQUEST);
    }
}