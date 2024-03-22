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
?>

<div class="card <?php echo $args['type']; ?>">
    <img class="card__thumb" src="<?php echo get_template_directory_uri(); ?>/src/image/project.jpg" alt="Holder">
    <div class="card__meta">
        16.03.2024 / 15:59
    </div>
    <h3 class="card__title text-default">
        Lorem ipsum dolor
    </h3>
    <p class="card__description text--small">
        Lorem ipsum dolor sit amet consectetur. Sed volutpat leo id elit urna purus odio.Lorem ipsum dolor sit amet
        consectetur.
    </p>
</div>