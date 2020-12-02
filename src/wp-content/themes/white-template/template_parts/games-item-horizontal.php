<div class="games__horizontal-item">
<?php $game_parameter = get_field('game_parameter'); ?>

    <div class="games__horizontal-number">
        <?php echo $args + 1 ?>
    </div>

    <div class="games__horizontal-img">
        <img src="<?php echo $game_parameter['game_image']['url'] ?>" alt="<?php echo $game_parameter['game_image']['alt']; ?>">
    </div>

    <div class="games__horizontal-title">
        <span><?php echo $game_parameter['game_title']; ?></span>
    </div>

    <div class="games__horizontal-detail">
        <div class="games__horizontal-detail-top">
            <div class="games__horizontal-price">
                <span><?php echo $game_parameter['game_price']; ?></span>
            </div>
            <div class="games__horizontal-percent">
                <span><?php echo $game_parameter['game_percent']; ?></span>
            </div>
        </div>
        <div class="games__horizontal-detail-bottom">
            <div class="games__horizontal-freespin">
                <span><?php echo $game_parameter['game_freespin']; ?></span>
            </div>
        </div>
    </div>

    <div class="games__horizontal-btn">
        <a class="btn-main" href="<?php the_permalink(); ?>">Играть</a>
    </div>

</div>
