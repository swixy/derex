<?php
$projects_items = get_sub_field('project');
$title = get_sub_field('title');
?>
<section class="projects">
    <div class="container">

        <?php if ($title): ?>
            <h2 class="projects__title">
                <?php echo esc_html($title) ?>
                <a class="projects__link" href="/projects">
                    See More
                </a>
            </h2>
        <?php endif; ?>

        <?php if ($projects_items): ?>
            <div class="projects__items">
                <?php
                foreach ($projects_items as $item) {
                    $title = get_the_title($item->ID);
                    $image = get_the_post_thumbnail_url($item->ID);
                    $excerpt = get_the_excerpt($item->ID);
                    if (mb_strlen($excerpt) > 20) {
                        $excerpt = mb_substr($excerpt, 0, 78) . "...";
                    }
                    ?>
                    <div class="projects__item swiper-slide">
                        <img class="projects__item__img"
                             src="<?php echo esc_url($image) ?>">
                        <a href="<?php the_permalink($item->ID); ?>">
                            <h3 class="projects__item__title">
                                <?php echo esc_html($title) ?>
                            </h3>
                        </a>
                        <p class="projects__item__text">
                            <?php echo $excerpt ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
            <a class="projects__link projects__link-mob" href="/projects">
                See More
            </a>
        <?php endif; ?>
    </div>
</section>