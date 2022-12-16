<?php

namespace Staditek\App\controller;

use Staditek\App\core\Router;
use Staditek\App\core\View;
use Staditek\App\model\Games_model;

class Games_controller
{
    public static $game;
    public static $gameData;

    public function __construct()
    {
        self::$game = new Games_model;
    }

    public function index()
    {
        self::$gameData = self::$game->getAll();
        View::render('game/index', self::$gameData);
    }
}