<?php
if (!defined('ABSPATH')) exit;
get_header();

$path_parts = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('report-category') ? get_query_var('report-category') : "";

$nfirstdisply = 12; //setting value

$nrealnfirstdisply = 0; //getting value

?>

<main id="main" class="archive-report">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">ヨシカワレポート</h5>
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

    <section class="report-section">
        <div class="container">
            <?php
            $cats_args = [
                'taxonomy' => 'report-category',
                'hide_empty' => false,
            ];
            $cats = get_terms($cats_args);
            ?>
            <?php if ($cats) : ?>
                <div class="categories">
                    <a class="category font-12-500<?php echo $cat_slug ? '' : ' active'; ?>" href="<?php echo HOME; ?>report">全て</a>
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
                'post_type' => 'report',
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => $nfirstdisply,
                'orderby' => 'post_date',
                'order' => 'DESC'
            ];
            $tax_query = [];

            if ($cat_slug) {
                $tax_query[] = [
                    'taxonomy' => 'report-category',
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
                <ul class="report-list">
                    <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <li class="report-item">
                            <a href="<?php the_permalink(); ?>">
                                <img class="thumb" src="<?php echo catch_that_image(); ?>">
                                <h2 class="title font-15-400"><?php the_title(); ?></h2>
                            </a>
                        </li>
                        <?php $nrealnfirstdisply++; ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <a class="report-load-more load-more font-18-700" style="display: <?php if ($nrealnfirstdisply == $custom_query->found_posts) {
                                                                                    echo 'none';
                                                                                } else {
                                                                                    echo 'flex';
                                                                                } ?>">
                <div class="spinner-wrapper"><span class="spinner"></span></div>
                <span class="font-18-700">さらに読み込む</span>
                <i class="fa fa-angle-down"></i>
            </a>
        </div>
    </section>
</main>

<script type="text/javascript">
    $(document).ready(function() {
        var page = 3; //setting value
        var nposts = 6; //setting value

        var nfirstdisplay = "<?php echo $nfirstdisply; ?>";

        $('.report-load-more').click(function() {
            $('.spinner-wrapper').css('display', 'flex');
            var data = {
                'action': 'report_load_more',
                'page': page,
                'nposts': nposts,
                'cat_slug': "<?php echo $cat_slug; ?>",
            };

            $.ajax({
                url: ajax_object.ajax_url,
                data: data,
                type: 'POST',
                success: function(response) {
                    var cards_list = response.data['article_list_toadd'];
                    var narticles = response.data['narticles'];
                    var message = response.data['message'];
                    $('.report-list').append(cards_list);
                    page++;

                    if (narticles < nposts) {
                        $('.report-load-more').hide(); // Hide the "Show More" button when there are no more posts
                    }
                    console.log('succeed');
                    $('.spinner-wrapper').css('display', 'none');
                },
                error: function(response) {
                    console.log('failed');
                    $('.spinner-wrapper').css('display', 'none');
                }
            });
        });
    });
</script>

<?php get_footer(); ?>