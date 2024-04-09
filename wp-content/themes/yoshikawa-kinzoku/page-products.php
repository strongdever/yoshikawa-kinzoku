<?php
/*
Template Name: 製品・サービス Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="main" class="product-page">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">製品・サービス</h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">製品・サービス</h2>
            <h5 class="en-text font-32-600">Product</h5>
        </div>
    </div>

    <div class="container">
        <div class="top-part left-right reverse">
            <div class="left-part">
                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/product01.jpg">
            </div>
            <div class="right-part">
                <h3 class="font-35-700 title">
                    ヨシカワブランド<br>
                    溶接棒・溶接ソリッドワイヤー</h3>
                <p class="font-18-500 desc">
                    昭和10年被覆アーク溶接棒の製造を開始して以来優秀なる技術と不断の研究とにより一意製品の向上に邁進してまいりました。造船、車輌、製缶等関係者各需要家より絶大なる好評をいただいている「ヨシカワロード」に加え、新たに弊社オリジナル商品である、軟鋼及び490MPa級高張力鋼ソリッドワイヤ「YRシリーズ」を開発いたしました。その他、お取り扱い海外メーカーの製品情報も掲載しております。
                </p>
                <a class="href-btn right-btn font-17-500" href="">
                    <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                    <span>溶接棒・溶接ワイヤー比較用っ全製品一覧</span>
                </a>
            </div>

        </div>

        <div class="left-right">
            <div class="left-part">
                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/yr-img.jpg">
            </div>
            <div class="right-part">
                <h3 class="font-35-700 title">YRシリーズ（マグ溶接用ソリッドワイヤ）</h3>
                <h4 class="font-20-700 sub-title">
                    吉川金属工業オリジナルの軟鋼及び490MPa級<br class="pc">
                    高張力鋼ソリッドワイヤ
                </h4>
                <p class="font-18-500 desc">
                    炭酸ガス及び混合ガスで使用し、中高電流域での溶接においてアークが安定、厚板のすみ肉及び重ねすみ肉溶接において低スパッタの溶接スピードを形成します。ロボットや自動溶接において優れた性能を発揮します。
                </p>
                <p class="model-number font-18-500">YR-11 / YR-12 / YR-15 / YR-16</p>
                <a class="href-btn right-btn font-17-500" href="">
                    <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                    <span>YRシリーズ製品ラインナップと詳細</span>
                </a>
            </div>
        </div>

        <div class="left-right">
            <div class="left-part">
                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/yoshikawa-img.jpg">
            </div>
            <div class="right-part">
                <h3 class="font-35-700 title">ヨシカワロード</h3>
                <h4 class="font-20-700 sub-title">
                    強くて美しいビード 軟鋼用溶接棒
                </h4>
                <p class="font-18-500 desc">
                    「ヨシカワロード」は、アメリカ船級協会の認定試験合格
                    （昭和26年）、ついでイギリス、ロイド船級協会(27年）、日本海事協会の規格に合格（29年）、JIS規格の表示許可を昭和32年に取得しました。また、ISO9001：2000認定取得（平成19年）し、徹底した品質管理のもと、常に均一な品質を保っております。造船、車両、製缶等関係各需要家より好評をいただいております。
                </p>
                <p class="model-number font-18-500">Y-100 / LY-3 / Y-10 / YL-50 / YL-50V</p>
                <a class="href-btn right-btn font-17-500" href="">
                    <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                    <span>ヨシカワロード製品ラインナップと詳細</span>
                </a>
            </div>
        </div>

        <div class="left-right">
            <div class="left-part">
                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/hiroyasu-img.jpg">
            </div>
            <div class="right-part">
                <h3 class="font-35-700 title">
                    廣泰EZシリーズ<br>
                    （廣泰金属工業（生産国：台湾））
                </h3>
                <h4 class="font-20-700 sub-title">
                    吉川金属専売の490MPa級高張力鋼用ソリッドワイヤ
                </h4>
                <p class="font-18-500 desc">
                    吉川金属工業が廣泰金属工業へ特別にオーダーし生産しているシリーズです。Tiを含有し大電流域でのアーク安定性が良好で溶け込みも深く高能率溶接ができるEZ-11と、全姿勢溶接が容易で特に薄板高速溶接に適しているEZ-12をラインナップしています。
                </p>
                <p class="model-number font-18-500">EZ-11 / EZ-12 </p>
                <a class="href-btn right-btn font-17-500" href="">
                    <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                    <span>廣泰EZシリーズ製品ラインナップと詳細</span>
                </a>
            </div>
        </div>

        <div class="left-right">
            <div class="left-part">
                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/hiroyasu-img.jpg">
            </div>
            <div class="right-part">
                <h3 class="font-35-700 title">
                    廣泰EZシリーズ<br>
                    （廣泰金属工業（生産国：台湾））
                </h3>
                <h4 class="font-20-700 sub-title">
                    吉川金属専売の490MPa級高張力鋼用ソリッドワイヤ
                </h4>
                <p class="font-18-500 desc">
                    吉川金属工業が廣泰金属工業へ特別にオーダーし生産しているシリーズです。Tiを含有し大電流域でのアーク安定性が良好で溶け込みも深く高能率溶接ができるEZ-11と、全姿勢溶接が容易で特に薄板高速溶接に適しているEZ-12をラインナップしています。
                </p>
                <p class="model-number font-18-500">EZ-11 / EZ-12 </p>
                <a class="href-btn right-btn font-17-500" href="">
                    <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                    <span>廣泰EZシリーズ製品ラインナップと詳細</span>
                </a>
            </div>
        </div>

        <div class="gran-arc left-right reverse">
            <div class="left-part">
                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/gran-img.jpg">
            </div>
            <div class="right-part">
                <h3 class="font-35-700 title">
                    GRAN Arc<br>
                    デジタルインバータ溶接機
                </h3>
                <p class="font-18-500 desc">
                    複雑な操作を必要としないシンプルな前面パネル。溶接に不慣れな方でも簡単な設定で上質な溶接結果を得られるデジタルインバータ溶接機です。<br>
                    低電流・高電流問わず滑らかでスパッタの少ない溶接。さらに溶込制御やアーク特性機能などデジタル波形制御によって一段と高品質な溶接が可能。<br>
                    CO² / MAG溶接のほか、ステンレスソリッドワイヤによるMIG溶接にも対応。さらに溶接棒ホルダを接続すれば直流手棒(アーク)溶接も可能な正に1台2役のマルチな溶接機です。
                </p>
            </div>
        </div>

        <div class="left-right">
            <div class="left-part">
                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/ya400-img.jpg">
            </div>
            <div class="right-part">
                <h3 class="font-35-700 title">
                    YA400
                </h3>
                <h4 class="font-20-700 sub-title">
                    400A｜C02 / MAGデジタルインバータ溶接機
                </h4>
                <p class="font-18-500 desc">
                    説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明
                </p>
                <p class="model-number font-18-500">型番型番型番</p>
                <a class="href-btn right-btn font-17-500" href="">
                    <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                    <span>ヨシカワロード製品ラインナップと詳細</span>
                </a>
            </div>
        </div>

        <div class="left-right">
            <div class="left-part">
                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/ya350.jpg">
            </div>
            <div class="right-part">
                <h3 class="font-35-700 title">
                    YA350
                </h3>
                <h4 class="font-20-700 sub-title">
                    350A｜C02 / MAGデジタルインバータ溶接機
                </h4>
                <p class="font-18-500 desc">
                    吉川金属工業が廣泰金属工業へ特別にオーダーし生産しているシリーズです。Tiを含有し大電流域でのアーク安定性が良好で溶け込みも深く高能率溶接ができるEZ-11と、全姿勢溶接が容易で特に薄板高速溶接に適しているEZ-12をラインナップしています。
                </p>
                <p class="model-number font-18-500">型番型番</p>
                <a class="href-btn right-btn font-17-500" href="">
                    <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                    <span>廣泰EZシリーズ製品ラインナップと詳細</span>
                </a>
            </div>
        </div>
    </div>

    <div class="yrec-section">
        <div class="container">
            <a href="<?php echo HOME . 'products/yrec'; ?>" class="yrec-href">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/yrec-img.png">
            </a>
            <a class="href-btn right-btn font-17-500" href="">
                <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                <span>吉川金属工業について</span>
            </a>
            <p class="desc font-15-400">
                創業1919年 溶接ひと筋 100年以上の<br>
                吉川金属工業の理念や歴史を紹介します。
            </p>
        </div>
    </div>
</main>

<?php get_footer(); ?>