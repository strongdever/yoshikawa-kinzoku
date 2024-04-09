<?php
/*
Template Name: サステナビリティ Template
*/

if (!defined('ABSPATH')) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="main" class="sustainability-page">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">吉川金属工業TOP </a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?php echo HOME . 'company'; ?>" class="link">企業情報</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">サステナビリティ</h5>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <h2 class="jp-text font-40-700">サステナビリティ</h2>
            <h5 class="en-text font-32-600">Sustainability</h5>
        </div>
    </div>

    <div class="container">
        <div class="section1">
            <div class="left-part">
                <div class="title font-35-700">吉川金属工業の社会課題への取組み</div>
                <p class="desc font-18-500">
                    吉川金属工業株式会社は、エネルギー循環型社会の構築を目指し、廃棄物発電を利用したリサイクル事業を行っています。<br>
                    吉川金属工業株式会社は、エネルギー循環型社会の構築を目指し、廃棄物発電を利用したリサイクル事業を行っています。
                </p>
            </div>
            <div class="right-part">
                <img class="" src="<?php echo T_DIRE_URI; ?>/assets/img/sustainability-img01.png">
            </div>
        </div>
        <div class="section2">
            <div class="left-part">
                <img class="" src="<?php echo T_DIRE_URI; ?>/assets/img/sustainability-img02.png">
            </div>
            <div class="right-part">
                <div class="title font-35-700">SDGsへの取り組み</div>
                <p class="desc font-18-500">
                    持続可能な開発目標SDGs（Sustainable Development Goals）は、2015年9月に国連で採択された17のゴールと169のターゲットからなる国際目標です。<br>
                    途上国の課題解決のみならず、気候変動やエネルギー、健康や雇用といった先進国でも深刻化している課題も取り入れており、その達成のために先進国も途上国も含む各国政府や市民社会、企業など、さまざまな関係者による行動が求められています。
                </p>
            </div>
        </div>

        <div class="yrec-section">
            <div class="title font-35-700">YRec （ワイレック）</div>
            <h4 class="sub-title font-20-700">溶接ワイヤーの使用済みスプールを利用した廃棄物発電</h4>
            <p class="desc font-18-500">
                吉川金属工業株式会社は、エネルギー循環型社会の構築を目指し、廃棄物発電を利用したリサイクル事業を行っています。吉川金属工業株式会社は、エネルギー循環型社会の構築を目指し、廃棄物発電を利用したリサイクル事業を行っています。吉川金属工業株式会社は、エネルギー循環型社会の構築を目指し、廃棄物発電を利用したリサイクル事業を行っています。
            </p>
        </div>

        <div class="steps-wrapper">
            <ul class="step-list">
                <li class="step-item">
                    <div class="step-img">
                        <img class="" src="<?php echo T_DIRE_URI; ?>/assets/img/sustainability-step01.png">
                    </div>
                    <h4 class="title font-17-700">使用済スプールを回収します</h4>
                </li>
                <li class="step-item">
                    <div class="step-img">
                        <img class="" src="<?php echo T_DIRE_URI; ?>/assets/img/sustainability-step02.png">
                    </div>
                    <h4 class="title font-17-700">廃棄予定のスプールの焼却で水蒸気を発生</h4>
                </li>
                <li class="step-item">
                    <div class="step-img">
                        <img class="" src="<?php echo T_DIRE_URI; ?>/assets/img/sustainability-step03.png">
                    </div>
                    <h4 class="title font-17-700">水蒸気を使って発電します</h4>
                </li>
                <li class="step-item">
                    <div class="step-img">
                        <img class="" src="<?php echo T_DIRE_URI; ?>/assets/img/sustainability-step04.png">
                    </div>
                    <h4 class="title font-17-700">環境にやさしい電気を共有します</h4>
                </li>
            </ul>
            <a class="href-btn right-btn font-17-500" href="">
                <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                <span>廃棄発電用の溶接ワイヤーの販売について</span>
            </a>
        </div>

        <div class="section3">
            <h2 class="title font-35-700">吉川金属工業の具体的な取組みと活動目標</h2>
            <div class="table-wrapper">
                <h3 class="sub-title font-20-700">具体的なSDGsへの取り組み</h3>
                <div class="custom-table">
                    <div class="record">
                        <div class="th font-20-700">ゴール</div>
                        <div class="td font-18-700">
                            <div class="left-right">
                                <div class="left-part">
                                    <img class="" src="<?php echo T_DIRE_URI; ?>/assets/img/sustainability-table-img01.png">
                                </div>
                                <div class="right-part font-18-700">
                                    目標12. 持続可能な生産消費形態を確保する<br>
                                    目標13. 気候変動及びその影響を軽減するための緊急対策を講じる<br>
                                    に取り組みます。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="record">
                        <div class="th font-20-700">ターゲット</div>
                        <div class="td font-18-700">
                            12.42020 年までに、合意された国際的な枠組みに従い、製品ライフサイクルを通じ、環境上適正な化学物資やすべての廃棄物の管理を実現し、人の健康や環境への悪影響を最小
                            化するため、化学物質や廃棄物の大気、水、土壌への放出を大幅に削減する。12.52030 年までに、廃棄物の発生防止、削減、再生利用及び
                            再利用により、廃棄物の発生を大幅に削減する。12.6特に大企業や多国籍企業などの企業に対し、持続可能な取り組みを導入し、持続可能性に関する情報を定期報告に盛り込むよう奨励する。
                        </div>
                    </div>
                    <div class="record">
                        <div class="th font-20-700">指標</div>
                        <div class="td font-18-700">
                            12.42020 年までに、合意された国際的な枠組みに従い、製品ライフサイクルを通じ、環境上適正な化学物資やすべての廃棄物の管理を実現し、人の健康や環境への悪影響を最小
                            化するため、化学物質や廃棄物の大気、水、土壌への放出を大幅に削減する。12.52030 年までに、廃棄物の発生防止、削減、再生利用及び
                            再利用により、廃棄物の発生を大幅に削減する。12.6特に大企業や多国籍企業などの企業に対し、持続可能な取り組みを導入し、
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-wrapper">
                <h3 class="sub-title font-20-700">活動目標</h3>
                <div class="custom-table">
                    <div class="record">
                        <div class="th font-20-700">活動</div>
                        <div class="td font-18-700">
                            12.42020 年までに、合意された国際的な枠組みに従い、製品ライフサイクルを通じ、環境上適正な化学物資やすべての廃棄物の管理を実現し、人の健康や環境への悪影響を最小
                            化するため、化学物質や廃棄物の大気、水、土壌への放出を大幅に削減する。12.52030 年までに、廃棄物の発生防止、削減、再生利用及び
                            再利用により、廃棄物の発生を大幅に削減する。12.6特に大企業や多国籍企業などの企業に対し、持続可能な取り組みを導入し、
                        </div>
                    </div>
                    <div class="record">
                        <div class="th font-20-700">目標</div>
                        <div class="td font-18-700">
                            12.42020 年までに、合意された国際的な枠組みに従い、製品ライフサイクルを通じ、環境上適正な化学物資やすべての廃棄物の管理を実現し、人の健康や環境への悪影響を最小
                            化するため、化学物質や廃棄物の大気、水、土壌への放出を大幅に削減する。12.52030 年までに、廃棄物の発生防止、削減、再生利用及び
                            再利用により、廃棄物の発生を大幅に削減する。12.6特に大企業や多国籍企業などの企業に対し、持続可能な取り組みを導入し、
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="action-report">
        <div class="container">
            <div class="title font-35-700">活動報告</div>
            <p class="top-desc font-20-700">社会貢献活動についての報告は随時、ヨシカワレポートで行っていきます。</p>
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
            <a class="href-btn right-btn yoshika-report font-17-500" href="<?php echo HOME . 'report'; ?>">
                <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                <span>ヨシカワレポート</span>
            </a>
            <a class="href-btn right-btn return-company font-17-500" href="<?php echo HOME . 'company'; ?>">
                <img class="right-arrow" src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-icon.svg">
                <span>企業情報に戻る</span>
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>