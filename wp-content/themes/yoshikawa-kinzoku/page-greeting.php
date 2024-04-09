<?php
/*
Template Name: 代表あいさつ Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="main" class="greeting-page">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?php echo HOME . 'company'; ?>" class="link">企業情報</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">代表あいさつ</h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">代表あいさつ</h2>
            <h5 class="en-text font-32-600">Greetings</h5>
        </div>
    </div>

    <div class="container">
        <h2 class="title font-35-700">みなさまと苦楽をともにできることに感謝して</h2>
        <p class="main-desc font-18-500">
            当社の沿革は、大正8年の吉川酸素商会にまでさかのぼります。<br>
            創業者は、酸素カーバイト、溶接器具・材料などの販売に携わる一方、電気溶接棒の開発・製造分野にも取り組み、昭和16年から生産を始めました。<br>
            そして戦後間もなく、米英の関係船級協会の資格認定を取得、技術的裏付けを確かなものとしてまいりました。<br>
            現在、当社の業務内容を大きく分類すれば卸売業といえますが、これまで培ってきた、ものづくりの歴史を生かしつつ、一貫して、産業の基礎素材である鉄に必ず関わりをもつ溶接材料とともに生きてまいりました。<br>
            当社は、メーカーとユーザー層をつなぐ良いパイプ役を果たし、みなさまのご要望により広く応えるべく、中国・台湾製溶接材料の輸入をも手がけてまいりました。<br>
            私たちは、これからも日本のものづくりと産業・生活基礎充実の一翼を担っていることの幸せと自負を忘れることなく、みなさまの声に機敏に反応、行動し、ご要望の掘り起こしに努めてまいります。<br>
            何卒、みなさま方のお励ましとご鞭撻をよろしくお願い申し上げます。
        </p>

        <div class="company-name">
            <h3 class="company font-20-700">吉川金属工業 株式会社</h3>
            <div class="position-name font-20-700">代表取締役社長　吉川大介</div>
        </div>

        <a class="href-btn right-btn font-17-500" href="<?php echo HOME; ?>">
            <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
            <span>企業情報に戻る</span>
        </a>
    </div>
</main>

<?php get_footer(); ?>