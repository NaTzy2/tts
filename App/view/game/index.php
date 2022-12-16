<?php
    use Staditek\App\core\Router;
    header("Access-Control-Allow-Origin: *");
?>

<link rel="stylesheet" href="<?= Router::url('/../Assets/css/index.css') ?>">

<main class="container">
    <div class="genre">
        <p>Action</p>
        <hr>
        <div class="games-wrapper">
            <?php
            foreach ($data as $games) {
                $action = $games->genre;
                if (preg_match('/Action/', $action)) {
            ?>
            <div class="container games">
                <div class="card bg-dark">
                    <img title=" <?= $games->title ?>" src="<?= $games->cover ?>" class="card-img-top card-layout"
                        alt="<?= $games->title ?>" style="width: 222px;height: 333px">
                    <div class="card-body">
                        <h5 class="card-title ttl" title="<?= $games->title ?>">
                            <?= $games->title ?>
                        </h5>
                        <a href="<?= Router::url('Public/details') . "/$games->id" ?>" class="btn-details">Reviews</a>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <div class="genre">
        <p>Adventure</p>
        <hr>
        <div class="games-wrapper">
            <?php
            foreach ($data as $games) {
                $adventure = $games->genre;
                if (preg_match('/Adventure/', $adventure)) {
            ?>
            <div class="container games">
                <div class="card bg-dark" id="<?= $games->id ?>">
                    <img title=" <?= $games->title ?>" src="<?= $games->cover ?>" class="card-img-top card-layout"
                        alt="<?= $games->title ?>" style="width: 222px;height: 333px">
                    <div class="card-body">
                        <h5 class="card-title ttl" title="<?= $games->title ?>">
                            <?= $games->title ?>
                        </h5>
                        <a href="<?= Router::url('Public/details') . "/$games->id" ?>" class="btn-details">Reviews</a>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <div class="genre">
        <p>RPG</p>
        <hr>
        <div class="games-wrapper">
            <?php
            foreach ($data as $games) {
                $rpg = $games->genre;
                if (preg_match('/RPG/', $rpg)) {
            ?>
            <div class="container games">
                <div class="card bg-dark" id="<?= $games->id ?>">
                    <img title=" <?= $games->title ?>" src="<?= $games->cover ?>" class="card-img-top card-layout"
                        alt="<?= $games->title ?>" style="width: 222px;height: 333px">
                    <div class="card-body">
                        <h5 class="card-title ttl" title="<?= $games->title ?>">
                            <?= $games->title ?>
                        </h5>
                        <a href="<?= Router::url('Public/details') . "/$games->id" ?>" class="btn-details">Reviews</a>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <div class="genre">
        <p>JRPG</p>
        <hr>
        <div class="games-wrapper">
            <?php
                foreach ($data as $games) {
                    $jrpg = $games->genre;
                    if (preg_match('/JRPG/', $jrpg)) {
                ?>
            <div class="container games">
                <div class="card bg-dark" id="<?= $games->id ?>">
                    <img title=" <?= $games->title ?>" src="<?= $games->cover ?>" class="card-img-top card-layout"
                        alt="<?= $games->title ?>" style="width: 222px;height: 333px">
                    <div class="card-body">
                        <h5 class="card-title ttl" title="<?= $games->title ?>">
                            <?= $games->title ?>
                        </h5>
                        <a href="<?= Router::url('Public/details') . "/$games->id" ?>" class="btn-details">Reviews</a>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
                ?>
        </div>
    </div>
</main>

<script src="<?= Router::url('/../Assets/js/index.js') ?>"></script>