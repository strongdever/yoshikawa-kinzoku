<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

<main id="main" class="archive-news">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">ニュース</h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">ニュース</h2>
            <h5 class="en-text font-32-600">News</h5>
        </div>
    </div>

    <section class="news-section">
        <div class="container">
            <?php
            $cats_args = [
                'taxonomy' => 'news-category',
                'hide_empty' => false,
            ];
            $cats = get_terms($cats_args);
            ?>
            <?php if ($cats) : ?>
                <div class="categories">
                    <a class="category font-12-500<?php echo $cat_slug ? '' : ' active'; ?>" href="<?php echo HOME; ?>news">全て</a>
                    <?php foreach ($cats as $cat) : ?>
                        <a class="category font-12-500<?php if ($cat_slug == $cat->slug) {
                                                            echo ' active';
                                                        } else {
                                                            echo '';
                                                        } ?>" href="<?php echo get_term_link($cat); ?>">
                            <?php echo $cat->name; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php
            $args = [
                'post_type' => 'news',
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => -1,
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
    </section>
</main>

<?php get_footer(); ?>