<?php

use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/us', [PublicController::class, 'us']);

Router::get('/tech', [PublicController::class, 'tech']);

Router::get('/templating', [PublicController::class, 'templating']);
Router::get('/form', [PublicController::class, 'form']);
Router::post('/answer', [PublicController::class, 'answer']);

Router::get('/posts', [PostsController::class, 'index']);