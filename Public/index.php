<?php

use Staditek\App\core\Router;
use Staditek\App\controller\Reviewer_controller;
use Staditek\App\controller\Games_controller;
use Staditek\App\controller\Reviews_controller;
use Staditek\App\model\Games_model;

require_once __DIR__ . '/../vendor/autoload.php';

// Home Page
Router::addRoute('GET', '/', Games_controller::class, 'index', []);

// Reviewers Account
Router::addRoute('GET', '/sign-up', Reviewer_controller::class, 'signUP', []);
Router::addRoute('POST', '/sign-up/save', Reviewer_controller::class, 'save', []);
Router::addRoute('GET', '/log-in', Reviewer_controller::class, 'Login', []);

// Reviews
Router::addRoute('GET', '/details/:id', Reviews_controller::class, 'detail', []);
Router::addRoute('GET', '/post/:id', Reviews_controller::class, 'addReview', []);

Router::run();