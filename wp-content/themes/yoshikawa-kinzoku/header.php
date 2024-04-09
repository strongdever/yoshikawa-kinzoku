<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="金属工業, ヨシカワロード" />
    <meta name="description" content="新しい未来を発送し、発信する。溶接ひと筋100年 吉川金属工業。ヨシカワロード" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="吉川金属工業株式会社" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="金属工業" />
    <meta property="og:description" content="吉川金属工業株式会社" />

    <title>
        <?php
        if (is_front_page() || is_home()) {
            echo get_bloginfo('name');
        } else {
            wp_title('|', true, 'right');
            echo bloginfo('name');
        }
        ?>
    </title>
    <link rel="shortcut icon" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <link rel="icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <link rel="apple-touch-icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <?php wp_head(); ?>
</head>

<?php
global $post;

if ($post->post_type != "page") {
    $post_slug = $post->post_type;
} else {
    $post_slug = $post->post_name;
}
if (is_single()) {
    $category_arr = get_the_category($post->ID);
    $post_slug = $category_arr[0]->slug;
}
?>

<?php
$path_parts = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);
?>
<?php if (is_single()) : ?>

    <body <?php body_class(); ?> id="body<?php echo get_post_type(); ?>">
    <?php else : ?>

        <body <?php body_class(); ?> id="body<?php echo $path_parts['filename']; ?>">
        <?php endif; ?>

        <header class="header">
            <div class="header-wrapper container">
                <h1 class="header-logo">
                    <a href="<?php echo HOME; ?>">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.svg" alt="">
                    </a>
                </h1>
                <nav class="header-nav">
                    <div class="search-bar">
                        <form class="search-form" action="<?php echo HOME; ?>" method="get">
                            <button class="search-btn submit" type="submit">
                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/search-icon.svg">
                            </button>
                            <button class="search-btn button" type="button">
                                <img src="<?php echo T_DIRE_URI; ?>/assets/img/search-icon.svg">
                            </button>
                            <input type="text" class="search-keys font-15-500" placeholder="キーワード" name="s">
                        </form>
                        <a class="href-btn site-search font-15-500">サイト内検索</a>
                    </div>
                    <ul class="nav-menu">
                        <li>
                            <a href="<?php echo HOME . 'products'; ?>" class="menu-link">
                                <span>製品・サービス</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'company'; ?>" class="menu-link">
                                <span>企業情報</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'data'; ?>" class="menu-link">
                                <span>資料ダウンロード</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'company/sustainability'; ?>" class="menu-link">
                                <span>サステナビリティ</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOME . 'contact'; ?>" class="menu-link">
                                <span>お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="mobile-nav">
            <nav class="mobile-nav-container">
                <ul class="mobile-nav-menu">
                    <li>
                        <a href="<?php echo HOME . 'products'; ?>" class="menu-link active">
                            <span>製品・サービス</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'company'; ?>" class="menu-link">
                            <span>企業情報</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'data'; ?>" class="menu-link">
                            <span>資料ダウンロード</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'company/sustainability'; ?>" class="menu-link">
                            <span>サステナビリティ</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'contact'; ?>" class="menu-link">
                            <span>お問い合わせ</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>