<div class="games__vertical">
<?php $game_parameter = get_field('game_parameter'); ?>
    <div class="games__vertical-img">
        <img src="<?php echo $game_parameter['game_image']['url'] ?>" alt="<?php echo $game_parameter['game_image']['alt'] ?>">
    </div>
    <div class="games__vertical-title">
        <span><?php echo $game_parameter['game_title']; ?></span>
    </div>
    <div class="games__vertical-price">
        <span><?php echo $game_parameter['game_price']; ?></span>
    </div>
    <div class="games__vertical-percent">
        <span><?php echo $game_parameter['game_percent']; ?></span>
    </div>
    <div class="games__vertical-freespin">
        <span><?php echo $game_parameter['game_freespin']; ?></span>
    </div>
    <a class="btn-main" href="<?php the_permalink(); ?>">
        Играть
    </a>
</div>
