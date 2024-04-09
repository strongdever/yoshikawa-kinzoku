<?php
/*
Template Name: 沿革 Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="main" class="history-page">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?php echo HOME . 'company'; ?>" class="link">企業情報</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">沿革</h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">沿革</h2>
            <h5 class="en-text font-32-600">History</h5>
        </div>
    </div>

    <?php if (have_rows('history')) : ?>
        <div class="container">
            <div class="custom-table history-table">
                <?php while (have_rows('history')) : the_row(); ?>
                    <div class="record">
                        <?php $year = get_sub_field('year'); ?>
                        <?php if ($year) : ?>
                            <div class="th font-20-400">
                                <?php echo $year['jp_year']; ?><br>
                                <span><?php echo $year['gl_year']; ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="td font-20-500">
                            <?php echo get_sub_field('content'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <a class="href-btn right-btn font-17-500" href="<?php echo HOME . 'company'; ?>">
                <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                <span>企業情報に戻る</span>
            </a>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>