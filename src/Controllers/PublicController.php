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
}