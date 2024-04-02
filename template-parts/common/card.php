<?php
/**
 * Cards element
 * php version 8.3.3
 * 
 * @category Element
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */

$intro_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
$excerpt = get_the_excerpt();
if (mb_strlen($excerpt) > 20) {
    $excerpt = mb_substr($excerpt, 0, 78) . "...";
}
?>

<div class="card ">
    <a href="<?php the_permalink(); ?>">
        <img class="card__thumb"
             src="<?php echo get_template_directory_uri() ?>/src/image/projectsHome1.webp"
             alt="Holder">
    </a>
    <div class="card__meta">
        <?php $date = get_the_date( 'd.m.Y / H:i' );
        echo $date;

        ?>
    </div>
    <a href="<?php the_permalink(); ?>">
        <h3 class="card__title text-default">
            <?php the_title(); ?>
        </h3>
    </a>
    <p class="card__description text--small">
        <?php echo $excerpt ?>
    </p>
</div>