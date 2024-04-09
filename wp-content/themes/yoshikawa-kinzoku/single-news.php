<?php get_header(); ?>

<main id="main" class="single-news">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?PHP echo HOME . 'news'; ?>" class="link">ニュース</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page"><?php the_title(); ?></h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">ニュース</h2>
            <h5 class="en-text font-32-600">News</h5>
        </div>
    </div>

    <div class="container">
        <div class="date-category">
            <div class="date font-24-500"><?php the_time("Y.m.d"); ?></div>
            <?php
            $post_cats = get_the_terms(get_the_ID(), "news-category");
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
            <?php the_content(); ?>
        </div>

        <a class="href-btn right-btn font-15-400" href="<?php echo HOME . 'news'; ?>">
            <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
            <span>ニュース一覧に戻る</span>
        </a>
    </div>
</main>

<?php get_footer(); ?>