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
        <div class="filter__items filter__items-years">
            <?php
            $terms = get_terms([
                'taxonomy' => 'year_cat',
                'hide_empty' => false,
            ]);
            $i = 1;
            foreach ($terms as $term) {
                ?>
                <button class="filter__item <?php if ($i == 1) {
                    echo "active";
                } ?>" data-term="<?php echo $term->slug; ?>">
                    <?php echo $term->name; ?>
                </button>
                <?php $i++;
            }
            ?>
        </div>
    </div>
</section>