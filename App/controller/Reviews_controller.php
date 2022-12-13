<?php

namespace Staditek\App\controller;

use Staditek\App\core\Router;
use Staditek\App\model\Reviews_model;

class Reviews_controller
{
    public static $reviews;
    public static $reviewsData;

    public function __construct()
    {
        self::$reviews = new Reviews_model;
    }

    public function view()
    {
        $data = self::$reviewsData = self::$reviews->getAll();
        var_dump($data);
    }

    public function add()
    {
    }

    public function save()
    {
        $data = [
            'reviewer_id' => '1',
            'games_id' => '1',
            'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sequi ducimus possimus sed eius veniam eligendi dolorem temporibus magni perferendis voluptate repudiandae, dolores ex illum aliquam laborum est cupiditate architecto!',
            'verdict' => '9.2'
        ];

        if (self::$reviews->insert($data)) {
            Router::redirect('Public/reviews/view');
        }
    }

    public function edit($id)
    {
    }

    public function update()
    {
        $data = [
            'id' => '5',
            'reviewer_id' => '3',
            'games_id' => '5',
            'review' => 'test update no.1',
            'verdict' => '10',
            'updatedAt' => date('Y-m-d H:i:s')
        ];

        if (self::$reviews->update($data)) {
            Router::redirect('Public/reviews/view');
        }
    }

    public function delete($id)
    {
        if (self::$reviews->delete($id)) {
            Router::redirect('Public/reviews/view');
        }
    }
}