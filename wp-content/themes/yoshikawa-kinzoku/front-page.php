<?php

/*
	Template Name: Front Page Template
	*/

if (!defined('ABSPATH')) exit;
get_header();

?>

<main id="main" class="top-page">
    <div class="mainview">
        <div id="container">
            <!-- slide show -->
            <!-- https://codepen.io/seanfree/pen/LxPBZy -->
            <ul id="slides">
                <li class="slide">
                    <div class="slide-partial slide-left">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/main_img_1-left.jpg">
                    </div>
                    <div class="slide-partial slide-right">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/main_img_1-right.jpg">
                    </div>
                    <div class="title">
                        <div class="title-text">
                            <h1 class="main-title font-46-700">新しい未来を発送し、発信する</h1>
                            <h2 class="sub-title font-28-700">
                                溶接ひと筋100年 吉川金属工業
                            </h2>
                            <h3 class="bottom-title font-24-700">
                                ヨシカワロード
                            </h3>
                        </div>
                    </div>
                </li>
                <li class="slide">
                    <div class="slide-partial slide-left">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/main_img_2-left.jpg">
                    </div>
                    <div class="slide-partial slide-right">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/main_img_2-right.jpg">
                    </div>
                    <div class="title">
                        <div class="title-text">
                            <h1 class="main-title font-46-700">新しい未来を発送し、発信する</h1>
                            <h2 class="sub-title font-28-700">
                                溶接ひと筋100年 吉川金属工業
                            </h2>
                            <h3 class="bottom-title font-24-700">
                                ヨシカワロード
                            </h3>
                        </div>
                    </div>
                </li>
                <li class="slide">
                    <div class="slide-partial slide-left">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/main_img_3-left.jpg">
                    </div>
                    <div class="slide-partial slide-right">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/main_img_3-right.jpg">
                    </div>
                    <div class="title">
                        <div class="title-text">
                            <h1 class="main-title font-46-700">新しい未来を発送し、発信する</h1>
                            <h2 class="sub-title font-28-700">
                                溶接ひと筋100年 吉川金属工業
                            </h2>
                            <h3 class="bottom-title font-24-700">
                                ヨシカワロード
                            </h3>
                        </div>
                    </div>
                </li>
            </ul>
            <ul id="slide-select">
                <li class="selector"></li>
                <li class="selector"></li>
                <li class="selector"></li>
            </ul>
        </div>
    </div>

    <section class="news-section">
        <div class="container">
            <div class="wrapper">
                <div class="news-title">
                    <h2 class="jp-title font-30-700">ニュース</h2>
                    <h3 class="en-title font-24-600">News</h3>
                </div>
                <?php
                $args = [
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 2,
                    'orderby' => 'post_date',
                    'order' => 'DESC'
                ];
                $tax_query = [];

                if ($cat_slug) {
                    $tax_query[] = [
                        'taxonomy' => 'news-category',
                        'field' => 'slug',
                        'terms' => $cat_slug
                    ];
                }

                if (!empty($tax_query)) {
                    $args['tax_query'] = $tax_query;
                }

                $custom_query = new WP_Query($args);
                ?>

                <?php if ($custom_query->have_posts()) : ?>
                    <ul class="news-list">
                        <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                            <li class="news-item">
                                <a class="" href="<?php the_permalink(); ?>">
                                    <div class="date font-17-500"><?php the_time('Y.m.d'); ?></div>

                                    <?php
                                    $post_cats = get_the_terms(get_the_ID(), "news-category");
                                    if ($post_cats) :
                                    ?>
                                        <div class="category-wrapper">
                                            <?php foreach ($post_cats as $post_cat) : ?>
                                                <div class="category font-12-500"><?php echo $post_cat->name; ?></div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                    <h2 class="title font-17-500"><?php the_title(); ?></h2>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <a class="href-btn right-btn font-17-500" href="<?php echo HOME . 'news'; ?>">
                <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                <span>これまでのニュース</span>
            </a>
            <ul class="bottom-wrapper">
                <li class="item">
                    <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/news01.jpg">
                    <a class="href-btn right-btn font-17-500" href="">
                        <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                        <span>吉川金属工業について</span>
                    </a>
                    <p class="desc font-15-400">
                        創業1919年 溶接ひと筋 100年以上の<br>
                        吉川金属工業の理念や歴史を紹介します。
                    </p>
                </li>
                <li class="item">
                    <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/news02.jpg">
                    <a class="href-btn right-btn font-17-500" href="">
                        <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                        <span>製品情報</span>
                    </a>
                    <p class="desc font-15-400">
                        低価格で高品質のマグ溶接用ソリッドワイヤを提供しています。
                    </p>
                </li>
                <li class="item">
                    <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/news03.jpg">
                    <a class="href-btn right-btn font-17-500" href="">
                        <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                        <span>サステナビリティ</span>
                    </a>
                    <p class="desc font-15-400">
                        使用済みスプールを無料回収し、環境にやさしい電力を生み出し提供しています。
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <?php
    $args = [
        'post_type' => 'report',
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 5,
        'orderby' => 'post_date',
        'order' => 'DESC'
    ];

    $custom_query = new WP_Query($args);
    ?>

    <?php if ($custom_query->have_posts()) : ?>
        <section class="report-section">
            <div class="container">
                <ul class="report-list">
                    <li class="report-item">
                        <h2 class="small-en-label font-32-600">YOSHIKAWA</h2>
                        <h1 class="big-en-label font-50-600">REPORT</h1>
                        <a class="href-btn right-btn font-15-400" href="">
                            <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                            <span>吉川金属の取組み</span>
                        </a>
                    </li>
                    <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <li class="report-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="thumb" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                <?php else : ?>
                                    <img class="thumb" src="<?php echo catch_that_image(); ?>">
                                <?php endif; ?>
                                <h2 class="title font-15-400"><?php the_title(); ?></h2>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>

    <section class="company-contents">
        <div class="container">
            <div class="top-wrapper pdf-desc">
                <a class="adobe-logo-wrapper" href="<?php echo T_DIRE_URI; ?>/assets/files/Reader_en_install.exe" download><img class="adobe-logo" src="<?php echo T_DIRE_URI; ?>/assets/img/adobe-logo.svg"></a>
                <p class="desc font-15-400">
                    サイト内のコンテンツ閲覧にはAdobe Acrobat Readerが必要です。お持ちでない方はAdobeのサイトから無料で配布されておりますので、そちらからダウンロードし、ご利用ください。
                </p>
            </div>
            <div class="bottom-wrapper">
                <img class="logo" src="<?php echo T_DIRE_URI; ?>/assets/img/tochigocily-icon.svg">
                <p class="desc font-20-500">
                    吉川金属工業およびGranArcは、サッカーチーム栃木シティの<br>
                    オフィシャルギアパートナーです。
                </p>
            </div>
        </div>
    </section>

    <?php
    $overview_page = get_page_by_path('company/overview');
    if ($overview_page) : //if overview page is exsisted.
        $overview_page_id = $overview_page->ID;
    ?>
        <section class="base-section">
            <div class="container">
                <h2 class="top-label font-30-500">吉川金属工業 全国拠点</h2>
                <?php if (have_rows('location', $overview_page_id)) : ?>
                    <ul class="base-list">
                        <?php while (have_rows('location', $overview_page_id)) : the_row(); ?>
                            <li class="base-item">
                                <div class="category font-12-500"><?php echo get_sub_field('office_name', $overview_page_id); ?></div>
                                <div class="address font-15-500">
                                    <?php echo get_sub_field('post_code', $overview_page_id); ?> <?php echo get_sub_field('address', $overview_page_id); ?><br>
                                    <?php if (get_sub_field('phone', $overview_page_id)) : ?> 電話：<?php echo get_sub_field('phone', $overview_page_id);
                                                                                                endif; ?>　<?php if (get_sub_field('fax', $overview_page_id)) : ?>FAX：<?php echo get_sub_field('fax', $overview_page_id);
                                                                                                                                                                    endif; ?><?php if (get_sub_field('map_url', $overview_page_id)) : ?><a class="map-btn font-15-500" href="<?php echo esc_attr(get_sub_field('map_url', $overview_page_id)); ?>" target="_blank">地図</a><?php endif; ?>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>