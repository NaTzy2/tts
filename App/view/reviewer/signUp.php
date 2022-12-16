<?php
    use Staditek\App\core\Router;
?>

<link rel="stylesheet" href="<?= Router::url('/../Assets/css/signup.css') ?>">

<main class="container">
    <div class="rounded m-auto p-5 w-50 bg-dark">
        <form action="<?= Router::url('Public/sign-up/save') ?>" method="POST">
            <legend>Sign Up</legend>
            <hr>
            <div class="mb-3">
                <label for="exampleInputFirstName1" class="form-label">First Name</label>
                <input required type="text" name="firstName" class="form-control" id="exampleInputFirstName1">
            </div>
            <div class="mb-3">
                <label for="exampleInputLastName1" class="form-label">Last Name</label>
                <input required type="text" name="lastName" class="form-control" id="exampleInputLastName1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input required type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-5">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="text-center">
                <button type="submit" class="sbmt-signUp">Submit</button>
            </div>
        </form>
        <hr>
        <p class="form-link">Already have an account ?
            <a class="link" href="<?= Router::url('Public/log-in') ?>">Log In here!</a>
        </p>
    </div>
</main>