<?php
/*
Template Name: Yrec（ワイレック） Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="main" class="yrec-page">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?php echo HOME . 'products'; ?>" class="link">製品・サービス</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">Yrec（廃棄発電用溶接ソリッドワイヤーの販売）</h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">Yrec（ワイレック）</h2>
            <h5 class="en-text font-32-600">Yoshikawa Reuse Energy Circulation</h5>
        </div>
    </div>

    <div class="firstview">
        <div class="container">
            <div class="left-right">
                <div class="left-part">
                    <h2 class="title font-35-700">
                        廃棄発電対応の溶接ワイヤーを購入し、<br>
                        社会課題の解決に貢献
                    </h2>
                    <p class="desc font-18-700">
                        YRec（ワイレック）とは、購入した溶接ワイヤーのスプールを<br>
                        回収し廃棄物発電つぃて再利用する環境問題に対応したサービスです。<br>
                        SDGsへの取組みをお考えの企業様に活用いただきたいサービスです。
                    </p>
                </div>
                <div class="right-part">
                    <div class="item font-40-700">Y Yoshikawa</div>
                    <div class="item font-40-700">R Reuse</div>
                    <div class="item font-40-700">e Energy</div>
                    <div class="item font-40-700">c Circulation</div>
                </div>
            </div>
        </div>
    </div>

    <section class="section1">
        <div class="container">
            <div class="title font-30-700">
                ヨシカワロード ＹRシリーズをはじめ、<span class="red-color">すべての</span>溶接用ソリッドワイヤのスプールが廃棄発電のための回収対象になります<span class="red-color">（吉川金属工業で購入のもの）</span>
            </div>
            <img class="yrec-product-img" src="<?php echo T_DIRE_URI; ?>/assets/img/yrec-product-img.png">
            <a class="href-btn right-btn font-29-500" href="<?php echo HOME . 'products'; ?>">
                <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon-1.svg">
                <span>製品・サービス</span>
            </a>
        </div>
    </section>

    <section class="section2">
        <div class="container">
            <h2 class="title font-35-700">廃棄発電用の溶接ワイヤー購入証明書の発行</h2>
            <div class="left-right">
                <div class="left-part">
                    <div class="desc font-18-500">
                        製品購入時に廃棄発電の溶接ワイヤーを購入しているという証明書の発行を行います。製品購入時に廃棄発電の溶接ワイヤーを購入しているという証明書の発行を行います。製品購入時に廃棄発電の溶接ワイヤーを購入しているという証明書の発行を行います。製品購入時に廃棄発電の溶接ワイヤーを購入しているという証明書の発行を行います。
                    </div>
                </div>
                <div class="right-part">
                    <img class="" src="<?php echo T_DIRE_URI; ?>/assets/img/yrec-section2-img01.png">
                </div>
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="container">
            <h2 class="title font-35-700">
                企業としてSDGsに取組む
            </h2>
            <div class="left-right">
                <div class="left-part">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/yrec-section3-img01.png">
                </div>
                <div class="right-part">
                    <p class="desc1 font-18-500">
                        SDGsとは・・<br>
                        これらに企業が取り組むことが需要です。
                    </p>
                    <p class="desc2 font-23-500">
                        企業としての社会的責任を果たす取り組みによる<br class="pc">
                        取引先や雇用の創出に貢献します。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section4">
        <div class="container">
            <h2 class="title font-35-700">YRecのしくみ</h2>
            <img class="main-img" src="<?php echo T_DIRE_URI; ?>/assets/img/yrec-section4-img01.svg">
        </div>
    </section>
</main>

<?php get_footer(); ?>