<?php
/*
Template Name: スポンサーシップ Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="main" class="sponsorship-page">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?php echo HOME . 'company'; ?>" class="link">企業情報</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">スポンサーシップ</h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">スポンサーシップ</h2>
            <h5 class="en-text font-32-600">Sponsorship</h5>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <?php the_content(); ?>
        </div>
        <a class="href-btn right-btn font-17-500" href="<?php echo HOME . 'company'; ?>">
        <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
        <span>企業情報に戻る</span>
    </a>
    </div>

</main>

<?php get_footer(); ?>