<?php
/*
Template Name: 会社概要 Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="main" class="contact-page">
        <div class="bread-crump">
            <div class="container">
                <a href="./index.html" class="link">吉川金属工業TOP </a>
                <i class="fas fa-chevron-right"></i>
                <h5 class="current-page">お問い合わせ</h5>
            </div>
        </div>
        <div class="page-title">
            <div class="container">
                <h2 class="jp-text font-40-700">お問い合わせ</h2>
                <h5 class="en-text font-32-600">Contact</h5>
            </div>
        </div>

        <div class="container">
            <p class="top-desc font-18-500">
                お問い合わせは下記の入力フォームに必要事項をご入力いただき、内容を確認のうえ、送信ください。<br>
                ご入力されたメールアドレスへ、担当よりお問い合わせ内容についてご連絡いたします。
            </p>
            <p class="required-label font-18-400"><span class="required-symbol">※</span> は必ずご入力ください</p>

            <div class="form-wrapper">
                <?php echo do_shortcode('[contact-form-7 id="6b29753" title="お問い合わせ"]'); ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>