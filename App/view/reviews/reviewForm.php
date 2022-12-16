<main class="container">
    <div class="rounded m-auto p-5 w-50 bg-dark">
        <form action="" method="">
            <legend>Rate The Game</legend>
            <hr>
            <input type="hidden" name="id" id="mustId" value="<?= $data->reviewer_id;?>" class="form-control">
            <input type="hidden" name="id" id="mustId" value="<?= $data->games_id;?>" class="form-control">
            <div class="mb-3">
                <label for="gamesTitle">Game Title</label>
                <select disabled name="games_id" id="titleOption" class="form-control">
                    <option name='games_id' value="<?= $data-> game_id ?>">
                        <?= $data->title ?>
                    </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="critics">Critic</label>
                <textarea type="text" name="review" id="opinion" placeholder="Leave your thoughts on the game ;D"
                    class="form-control" rows="5">
                </textarea>
            </div>
            <div class="mb-3">
                <label for="verdict">Rate</label>
                <input type="range" name="verdict" id="stars" step="0.5" min='0' max='10' class="form-range rng">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-warning mt-5 px-5">Submit</button>
            </div>
        </form>
    </div>
</main>