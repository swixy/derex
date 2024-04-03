<?php
/**
 * Offices Block for Contact page
 * php version 8.3.3
 *
 * @category Component
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */
$offices_title = get_field('contact_offices_title');
$offices_text = get_field('contact_offices_text');
$offices = get_field('contact_offices_offices');
?>

<section class="offices">
    <div class="container">
        <div class="offices__head">
            <?php if ($offices_title): ?>
                <h2 class="h2">
                    <?php echo esc_html($offices_title) ?>
                </h2>
            <?php endif; ?>
            <?php if ($offices_text): ?>
                <p class="offices__text text--large">
                    <?php echo esc_html($offices_text) ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if ($offices): ?>
            <div class="offices__items">
                <?php
                foreach ($offices as $office) {
                    $image = $office['image'];
                    $info = $office['info'];
                    $country_name = $info['country_name'];
                    $country_info = $info['info'];
                    ?>
                    <div class="offices__item">
                        <?php if ($image): ?>
                            <div class="offices__image-wrapper">
                                <img class="offices__image"
                                     src="<?php echo esc_url($image['url']) ?>"
                                     alt="<?php echo esc_attr($image['alt']) ?>">
                            </div>
                        <?php endif; ?>
                        <?php if ($country_name): ?>
                            <div class="offices__country">
                                <?php echo esc_html($country_name) ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($country_info):
                            $contact = $country_info['contact'];
                            $requisites = $country_info['requisites'];
                            ?>
                            <div class="offices__info">
                                <?php if ($contact):
                                    $address = $contact['address'];
                                    $contacts = $contact['contacts'];
                                    ?>
                                    <div class="offices__info-row">
                                        <?php if ($address): ?>
                                            <div class="offices__address">
                                                <div>
                                                    <h4 class="offices__title">Address</h4>
                                                    <p class="text--small">
                                                        <?php wp_kses_post($address) ?>
                                                    </p>
                                                </div>
                                                <a href="#" class="offices__link offices__link--black">
                                                    View on map
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                                         viewBox="0 0 18 19"
                                                         fill="none">
                                                        <g clip-path="url(#clip0_120_1641)">
                                                            <path
                                                                d="M13.5 18.25V22.75C13.5 23.1478 13.342 23.5294 13.0607 23.8107C12.7794 24.092 12.3978 24.25 12 24.25H3.75C3.35218 24.25 2.97064 24.092 2.68934 23.8107C2.40804 23.5294 2.25 23.1478 2.25 22.75V14.5C2.25 14.1022 2.40804 13.7206 2.68934 13.4393C2.97064 13.158 3.35218 13 3.75 13H8.25"
                                                                stroke="#303033" stroke-width="1.5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                            <path d="M11.25 10.75H15.75V15.25" stroke="#303033"
                                                                  stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.5 19L15.75 10.75" stroke="#303033"
                                                                  stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_120_1641">
                                                                <rect width="18" height="18" fill="white"
                                                                      transform="translate(0 0.5)"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($contacts):
                                            $telephone = $contacts['telephone'];
                                            $email = $contacts['email'];
                                            ?>
                                            <div class="offices__contacts">
                                                <h4 class="offices__title">Address</h4>
                                                <?php if ($telephone): ?>
                                                    <a href="tel:<?php echo esc_html($telephone) ?>"
                                                       class="offices__phone">
                                                        <?php echo esc_html($telephone) ?>
                                                    </a>
                                                <?php endif; ?>
                                                <?php if ($email): ?>
                                                    <a href="email:<?php echo esc_html($email) ?>"
                                                       class="offices__link">
                                                        <?php echo esc_html($email) ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($requisites):?>
                                    <div class="offices__requisites">
                                        <button class="offices__accordion">Requisites</button>
                                        <div class="offices__panel text--small">
                                            <?php echo wp_kses_post($requisites) ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php } ?>

            </div>
        <?php endif; ?>
    </div>
</section>