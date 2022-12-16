<?php

namespace Staditek\App\controller;

use Staditek\App\core\Router;
use Staditek\App\core\View;
use Staditek\App\model\Reviews_model;

class Reviews_controller
{
    public static $reviews;
    public static $reviewsData;

    public function __construct()
    {
        self::$reviews = new Reviews_model;
    }

    public function detail($id)
    {
        self::$reviewsData = self::$reviews->whereId($id);
        View::render('reviews/details', self::$reviewsData);
    }

    public function addReview($id)
    {
        self::$reviewsData = self::$reviews->whereId($id);
        View::render('reviews/reviewForm', self::$reviewsData);
    }

    public function saveReview(){
        $data = [
            'reviewer_id'=>$_POST['reviewer_id'],
            'games_id'=>$_POST['games_id'],
            'review'=>$_POST['review'],
            'verdict'=>$_POST['verdict']
        ];

        if(self::$reviews->insert($data)){
            Router::redirect('Public/');
        }
    }
}