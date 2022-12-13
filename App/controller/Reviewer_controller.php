<?php

namespace Staditek\App\controller;

use Staditek\App\core\Router;
use Staditek\App\model\Reviewer_model;

class Reviewer_controller
{
    public static $reviewer;
    public static $reviewerData;

    public function __construct()
    {
        self::$reviewer = new Reviewer_model;
    }

    public function view()
    {
        $data = self::$reviewerData = self::$reviewer->getAll();
        var_dump($data);
    }

    public function add()
    {
    }

    public function save()
    {
        $data = [
            'firstName' => 'Ucup',
            'lastName' => 'Ucub',
            'email' => 'ucup_bin_ucub1403@gmail.com',
            'password' => '12345654'
        ];

        if (self::$reviewer->insert($data)) {
            Router::redirect('Public/reviewer/view');
        }
    }

    public function edit($id)
    {
    }

    public function update()
    {
        $data = [
            'id' => '5',
            'firstName' => 'testUpdate',
            'lastName' => 'updateOne',
            'email' => 'update@example.com',
            'password' => 'up2date',
            'updatedAt' => date('Y-m-d H:i:s')
        ];

        if (self::$reviewer->update($data)) {
            Router::redirect('Public/reviewer/view');
        }
    }

    public function delete($id)
    {
        if(self::$reviewer->delete($id)){
            Router::redirect('Public/reviewer/view');
        }
    }
}