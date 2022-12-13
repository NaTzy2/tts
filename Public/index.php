<?php

use Staditek\App\core\Router;
use Staditek\App\controller\Reviewer_controller;
use Staditek\App\controller\Games_controller;
use Staditek\App\controller\Reviews_controller;

require_once __DIR__ . '/../vendor/autoload.php';

Router::addRoute('GET', '/reviewer/view', Reviewer_controller::class, 'view', []);
Router::addRoute('GET', '/reviewer/save', Reviewer_controller::class, 'save', []);
Router::addRoute('GET', '/reviewer/edit/save', Reviewer_controller::class, 'update', []);
Router::addRoute('GET', '/reviewer/delete/:id', Reviewer_controller::class, 'delete', []);

Router::addRoute('GET', '/game/view', Games_controller::class, 'view', []);
Router::addRoute('GET', '/game/save', Games_controller::class, 'save', []);
Router::addRoute('GET', '/game/edit/save', Games_controller::class, 'update', []);
Router::addRoute('GET', '/game/delete/:id', Games_controller::class, 'delete', []);

Router::addRoute('GET', '/reviews/view', Reviews_controller::class, 'view', []);
Router::addRoute('GET', '/reviews/save', Reviews_controller::class, 'save', []);
Router::addRoute('GET', '/reviews/edit/save', Reviews_controller::class, 'update', []);
Router::addRoute('GET', '/reviews/delete/:id', Reviews_controller::class, 'delete', []);

Router::run();