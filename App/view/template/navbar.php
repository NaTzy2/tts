<?php

use Staditek\App\core\Router;
?>
<link rel="stylesheet" href="<?= Router::url('/../Assets/css/navbar.css') ?>">

<header class="navbar">
    <a href="<?= Router::url('Public/') ?>">
        <h5 class="nav-logo">game
            <b style="background-color:#F08000; padding:2px;border-radius:2px">HUB</b>
        </h5>
    </a>
    <nav>
        <div class="input-group">
            <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
            <button type="button" class="btn btn-warning">search</button>
        </div>
    </nav>
    <a href="<?= Router::url('/../Public/log-in') ?>"><button class="btn-login">Login</button></a>
</header>