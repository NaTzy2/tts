<?php

namespace Staditek\App\controller;

use Staditek\App\core\Router;
use Staditek\App\core\View;
use Staditek\App\model\Reviewer_model;

class Reviewer_controller
{
    public static $reviewer;
    public static $reviewerData;

    public function __construct()
    {
        self::$reviewer = new Reviewer_model;
    }

    public function signUp()
    {
        View::only('reviewer/signUp', self::$reviewerData);
    }

    public function save()
    {
        $data = [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];

        if (self::$reviewer->insert($data)) {
            Router::redirect('Public/log-in');
        }
    }

    public function logIn()
    {
        View::only('reviewer/logIn', self::$reviewerData);
    }

    public function verif()
    {
    }

    public function logOut()
    {
    }
}