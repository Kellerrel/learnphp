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
}