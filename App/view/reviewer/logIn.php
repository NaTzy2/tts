<?php

use Staditek\App\core\Router;
?>

<link rel="stylesheet" href="<?= Router::url('/../Assets/css/login.css') ?>">

<main class="container">
    <div class="rounded m-auto p-5 w-50 bg-dark">
        <form action="<?= Router::url('Public/') ?>">
            <legend>Log In</legend>
            <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-5">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input required type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="text-center">
                <button type="submit" class="sbmt-login">Submit</button>
            </div>
        </form>
        <hr>
        <p class="form-link">Doesn't have an account?
            <a class="link" href="<?= Router::url('Public/sign-up') ?>">Sign Up here!</a>
        </p>
    </div>
</main>