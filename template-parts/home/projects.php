<?php
$projects_title = get_field('home_projects_title');
$projects_items = get_field('home_projects_items');
?>
<section class="projects">
    <div class="container">
        <?php if ($projects_title): ?>
            <h2 class="projects__title">
                <?php echo esc_html($projects_title) ?>
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
                    ?>
                    <div class="projects__item swiper-slide">
                        <img class="projects__item__img"
                             src="<?php echo esc_url($image) ?>">
                        <h3 class="projects__item__title">
                            <?php echo esc_html($title) ?>
                        </h3>
                        <p class="projects__item__text">
                            Lorem ipsum dolor sit amet consectetur. Sed volutpat leo id elit urna purus odio.Lorem ipsum
                            dolor sit amet consectetur. Sed volutpat leo id elit urna purus odio.
                        </p>
                    </div>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</section>