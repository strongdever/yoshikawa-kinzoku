<?php
/*
Template Name: 企業情報 Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="main" class="company-page">
        <div class="bread-crump">
            <div class="container">
                <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
                <i class="fas fa-chevron-right"></i>
                <h5 class="current-page">企業情報</h5>
            </div>
        </div>
        <div class="page-title">
            <div class="container">
                <h2 class="jp-text font-40-700">企業情報</h2>
                <h5 class="en-text font-32-600">About</h5>
            </div>
        </div>

        <div class="container">
            <div class="left-right">
                <div class="left-part">
                    <div class="title font-35-700">溶接ひと筋 100年</div>
                    <p class="desc font-18-500">
                        吉川金属工業株式会社は、大正8年創業以来、溶接ひと筋に仕事に励んでまいりました。また、溶材商としてはいち早く溶接棒の生産に着手し、
                        業界においても足跡を残してきたと自負しております。溶材商としての伝統を守り、常に顧客の立場でのサービスにますます努めてまいりたいと思っております
                    </p>
                </div>
                <div class="right-part">
                    <img class="" src="<?php echo T_DIRE_URI; ?>/assets/img/about-img01.png">
                </div>
            </div>
            <ul class="item-list">
                <li class="item">
                    <img class="item-img" src="<?php echo T_DIRE_URI; ?>/assets/img/about-img02.png">
                    <a class="href-btn right-btn font-17-500" href="<?php echo HOME . 'company/greeting'; ?>">
                        <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                        <span>代表あいさつ</span>
                    </a>
                </li>
                <li class="item">
                    <img class="item-img" src="<?php echo T_DIRE_URI; ?>/assets/img/about-img03.png">
                    <a class="href-btn right-btn font-17-500" href="<?php echo HOME . 'company/overview'; ?>">
                        <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                        <span>会社概要</span>
                    </a>
                </li>
                <li class="item">
                    <img class="item-img" src="<?php echo T_DIRE_URI; ?>/assets/img/about-img04.png">
                    <a class="href-btn right-btn font-17-500" href="<?php echo HOME . 'company/history'; ?>">
                        <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                        <span>沿革</span>
                    </a>
                </li>
                <li class="item">
                    <img class="item-img" src="<?php echo T_DIRE_URI; ?>/assets/img/about-img05.png">
                    <a class="href-btn right-btn font-17-500" href="<?php echo HOME . 'company/greeting'; ?>">
                        <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                        <span>社会課題への取組み</span>
                    </a>
                </li>
                <li class="item">
                    <img class="item-img" src="<?php echo T_DIRE_URI; ?>/assets/img/about-img06.png">
                    <a class="href-btn right-btn font-17-500" href="<?php echo HOME . 'company/sponsorship'; ?>">
                        <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                        <span>スポンサーシップ</span>
                    </a>
                </li>
            </ul>
        </div>
    </main>

<?php get_footer(); ?>