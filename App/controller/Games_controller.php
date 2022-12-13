<?php

namespace Staditek\App\controller;

use Staditek\App\core\Router;
use Staditek\App\model\Games_model;

class Games_controller
{
    public static $game;
    public static $gameData;

    public function __construct()
    {
        self::$game = new Games_model;
    }

    public function view()
    {
        $data = self::$gameData = self::$game->getAll();
        var_dump($data);
    }

    public function add()
    {
    }

    public function save()
    {
        $data = [
            'title' => 'God Of War: Ragnarok',
            'genre' => 'Action, RPG',
            'cover' => 'https://godofwar.fandom.com/wiki/God_of_War_Ragnar%C3%B6k?file=GODRagnarokCover1.jpg',
            'developer' => 'Santa Monica Studios',
            'publisher' => 'Sony Interactive Entertainment',
            'release_date' => '2022-11-09',
            'platform' => 'PS'
        ];

        if (self::$game->insert($data)) {
            Router::redirect('Public/game/view');
        }
    }

    public function edit($id)
    {
    }

    public function update()
    {
        $data = [
            'id' => '5',
            'title' => 'The Witcher 3: Wild Hunt',
            'genre' => 'Action, RPG',
            'cover' => 'https://witcher.fandom.com/wiki/The_Witcher_3:_Wild_Hunt?file=TheWitcher3BoxArt.png',
            'developer' => 'CD Project Red',
            'publisher' => 'WB Games',
            'release_date' => '2015-05-19',
            'platform' => 'PC',
            'updatedAt' => date('Y-m-d H:i:s')
        ];

        if (self::$game->update($data)) {
            Router::redirect('Public/game/view');
        }
    }

    public function delete($id)
    {
        if (self::$game->delete($id)) {
            Router::redirect('Public/game/view');
        }
    }
}