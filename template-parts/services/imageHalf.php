<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$content = get_sub_field('Info');
$image = $content['image'];
$info = $content['info'];
?>
<section class="imageHalf">
    <div class="container">
        <?php if ($image): ?>
            <img src="<?php echo esc_url($image['url']) ?>"
                 alt="<?php echo esc_attr('alt') ?>"
                 class="imageHalf__img">
        <?php endif; ?>
        <div class="imageHalf__info">
            <?php
            $detail_content = $info['detail_content'];
            //            var_dump($detail_content);
            foreach ($detail_content as $item) {
                if ($item['acf_fc_layout'] === 'title') {
                    ?>
                    <h3 class="imageHalf__info__title">
                        <?php echo $item['title']; ?>
                    </h3>
                <?php } elseif ($item['acf_fc_layout'] === 'list') {
                    ?>
                    <div class="imageHalf__info__lists">
                        <?php
                        foreach ($item['list'] as $items) {
                            ?>
                            <p class="imageHalf__info__list">
                                <?php echo $items['item']; ?>
                            </p>
                        <?php } ?>

                    </div>
                <?php } elseif ($item['acf_fc_layout'] === 'text') { ?>
                    <p class="imageHalf__info__text">
                        <?php echo wp_kses_post($item['text']) ?>
                    </p>
                <?php }
            } ?>

        </div>
    </div>
</section>