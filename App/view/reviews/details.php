<?php

use Staditek\App\core\Router;
?>

<link rel="stylesheet" href="<?= Router::url('/../Assets/css/details.css') ?>">

<main class="container">
    <div class="container-sm" style="max-height:680px">
        <div class=" row">
            <div class="col-4">
                <div class="card bg-dark" id="<?= $data->games_id ?>">
                    <img title='<?= $data->title ?>' src="<?= $data->cover ?>" class="card-img-top"
                        alt="<?= $data->title ?>">
                    <div class="card-body">
                        <h5 class="card-title ttl">
                            <?= $data->title ?>
                        </h5>
                        <p class="card-text txt mb-1">Genre:
                            <?= $data->genre ?>
                        </p>
                        <p class="card-text txt mb-1">Developer:
                            <?= $data->developer ?>
                        </p>
                        <p class="card-text txt mb-1">Publisher:
                            <?= $data->publisher ?>
                        </p>
                        <p class="card-text txt">Release Date:
                            <?= $data->release_date ?>
                        </p>
                        <a href="<?= Router::url('Public/') ?>" class="btn btn-outline-danger">Go Back</a>
                        <a href="<?= Router::url('Public/post') . "/$data->games_id" ?>" class="btn btn-outline-warning"
                            style="width: 79px;">Rate</a>
                    </div>
                </div>
            </div>
            <div class="col-8" id="<?= $data->games_id ?>">
                <div class="row review-container">
                    <?php
                    // foreach($data as $reviews){
                    ?>
                    <div class="col">
                        <div class="review-body">
                            <p class="mb-0"><big><strong>Review:</strong></big></p>
                            <p><?= $data->review ?></p>
                            <p class="mb-0"><big><strong>Verdict:</strong></big></p>
                            <p><?= $data->verdict ?>/10</p>
                            <p class="reviewer-name">
                                -
                                <?= $data->firstName ?>
                                <?= $data->lastName ?>
                            </p>
                        </div>
                    </div>
                    <?php
                    // }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>