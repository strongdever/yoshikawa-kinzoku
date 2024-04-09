<?php
/*
Template Name: 会社概要 Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="main" class="overview-page">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?php echo HOME . 'company'; ?>" class="link">企業情報</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">会社概要</h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">会社概要</h2>
            <h5 class="en-text font-32-600">Overview</h5>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <?php the_content(); ?>
        </div>
        <div class="custom-table overview-table">
            <?php if (have_rows('overview')) : ?>
                <?php while (have_rows('overview')) : the_row(); ?>
                    <div class="record">
                        <div class="th font-20-700"><?php echo get_sub_field('classification'); ?></div>
                        <div class="td font-20-500">
                            <?php echo get_sub_field('content'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('location')) : ?>
                <div class="record">
                    <div class="th font-20-700">所在地</div>
                    <div class="td font-20-500">
                        <?php while (have_rows('location')) : the_row(); ?>
                            <div class="left-right">
                                <div class="left-part">
                                    <div class="category font-14-500"><?php echo get_sub_field('office_name'); ?></div>
                                </div>
                                <div class="right-part font-17-500">
                                    <?php echo get_sub_field('post_code', $overview_page_id); ?> <?php echo get_sub_field('address'); ?><br>
                                    <?php if (get_sub_field('phone')) : ?> 電話：<?php echo get_sub_field('phone');
                                                                            endif; ?>　<?php if (get_sub_field('fax')) : ?>FAX：<?php echo get_sub_field('fax');
                                                                                                                            endif; ?><?php if (get_sub_field('map_url')) : ?><a class="map-btn font-17-500" href="<?php echo esc_attr(get_sub_field('map_url')); ?>" target="_blank">地図</a><?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <a class="href-btn right-btn font-17-500" href="<?php echo HOME . 'company'; ?>">
            <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
            <span>企業情報に戻る</span>
        </a>
    </div>
</main>

<?php get_footer(); ?>