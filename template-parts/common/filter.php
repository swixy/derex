<?php
/**
 * Filters for News page
 * php version 8.3.3
 * 
 * @category Component
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 * 
 * @var array $args
 */
?>

<section class="filter">
    <div class="container">
        <div class="filter__items">
            <?php foreach($args['items'] as $key => $item):?>
                <button class="filter__item <?php echo $key === array_key_first($args['items']) ? 'active' : '';?>">
                    <?php echo $item; ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>