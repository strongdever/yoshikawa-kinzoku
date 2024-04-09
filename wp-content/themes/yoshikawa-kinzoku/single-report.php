<?php get_header(); ?>

<main id="main" class="single-report">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?php echo HOME . 'report'; ?>" class="link">ヨシカワレポート</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page"><?php the_title(); ?></h5>
        </div>
    </div>
    <div class="page-title report">
        <div class="container">
            <div class="page-title-wrapper">
                <h2 class="en-text1">YOSHIKAWA</h2>
                <h1 class="en-text2">REPORT</h1>
                <p class="desc font-28-700">吉川金属工業が発送する未来と取り組みを発信</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="date-category">
            <div class="date font-24-500"><?php echo the_time('Y.m.d'); ?></div>
            <?php
            $post_cats = get_the_terms(get_the_ID(), "report-category");
            if ($post_cats) :
                foreach ($post_cats as $post_cat) :
            ?>
                    <div class="category font-12-500"><?php echo $post_cat->name; ?></div>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <h2 class="title font-30-500"><?php the_title(); ?></h2>

        <div class="content">
            <?php the_content();?>
        </div>

        <a class="href-btn right-btn font-15-400" href="<?php echo HOME . 'report'; ?>">
            <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
            <span>ヨシカワレポート一覧に戻る</span>
        </a>
    </div>
</main>

<?php get_footer(); ?>