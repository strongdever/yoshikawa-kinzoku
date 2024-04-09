<?php
/*
Template Name: 資料ダウンロード Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="main" class="archive-data">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">資料ダウンロード</h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">資料ダウンロード</h2>
            <h5 class="en-text font-32-600">Download</h5>
        </div>
    </div>

    <?php
    $data_page = get_page_by_path('data');
    if ($data_page) : //if data page is exsisted.
        $data_page_id = $data_page->ID;
    ?>

        <section class="data-section">
            <div class="container">
                <?php if (get_field('head_text', $data_page_id)) : ?>
                    <div class="top-desc font-18-500">
                        <?php echo get_field('head_text', $data_page_id); ?>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('data', $data_page_id)) : ?>
                    <ul class="data-list">
                        <?php while (have_rows('data', $data_page_id)) : the_row(); ?>
                            <li class="data-item">
                                <a href="<?php echo esc_attr(get_sub_field('pdf_file'), $data_page_id); ?>" download>
                                    <div class="title font-17-500"><?php echo get_sub_field('title', $data_page_id); ?></div>
                                    <img class="thumb" src="<?php echo esc_attr(get_sub_field('image', $data_page_id)); ?>">
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <div class="top-wrapper pdf-desc">
                    <a class="adobe-logo-wrapper" href="<?php echo T_DIRE_URI; ?>/assets/files/Reader_en_install.exe" download><img class="adobe-logo" src="<?php echo T_DIRE_URI; ?>/assets/img/adobe-logo.svg"></a>
                    <p class="desc font-15-400">
                        サイト内のコンテンツ閲覧にはAdobe Acrobat Readerが必要です。お持ちでない方はAdobeのサイトから無料で配布されておりますので、そちらからダウンロードし、ご利用ください。
                    </p>
                </div>
            </div>
        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>