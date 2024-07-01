<?php get_header(); ?>

    <!-- @main -->
     <main class="factorypage" id="factorypage">
        <!-- custom cursor// -->
        <div class="cursor cursor-prev">
            <svg role="img" aria-label="cursor prev" xmlns="http://www.w3.org/2000/svg" width="46.828" height="29.657" viewBox="0 0 46.828 29.657">
                <g id="cursor_prev" data-name="Group 341" transform="translate(2.828 2.828)">
                    <line id="Line_103022" data-name="Line 103022" x1="40" transform="translate(2 12)" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="4"/>
                    <line id="Line_103023" data-name="Line 103023" x1="12" y2="12" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="4"/>
                    <line id="Line_103024" data-name="Line 103024" x1="12" y1="12" transform="translate(0 12)" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="4"/>
                </g>
            </svg>
        </div>
        <div class="cursor cursor-next">
            <svg role="img" aria-label="cursor next" xmlns="http://www.w3.org/2000/svg" width="46.828" height="29.657" viewBox="0 0 46.828 29.657">
                <g id="cursor_next" data-name="Group 340" transform="translate(-991 -3477.172)">
                    <line id="Line_103022" data-name="Line 103022" x2="40" transform="translate(993 3492)" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="4"/>
                    <line id="Line_103023" data-name="Line 103023" x2="12" y2="12" transform="translate(1023 3480)" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="4"/>
                    <line id="Line_103024" data-name="Line 103024" y1="12" x2="12" transform="translate(1023 3492)" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="4"/>
                </g>
            </svg>
        </div>
        <!-- //custom cursor -->

        <!-- top// -->
        <section class="top">
            <div class="top_container --padd">
                <h2 class="top_title is-heading neue-fonts fw-500">
                    <div class="animate-text">
                        <div class="txt">
                            Factory
                        </div>
                    </div>
                </h2>
                <p class="top_desc">
                    高杉工房では、オフィス併設の自社工場にて <br />
                    デザインから制作まで「生産の一本化」を実現しています。
                </p>
            </div>
        </section>
        <!-- //top -->
        
        <!-- mainvisual// -->
        <section class="mainvisual">
            <div class="mainvisual_container --padd">
                <picture class="mainvisual_picture">
                    <source media="(max-width:1023px)" srcset="<?= get_template_directory_uri() ?>/assets/img/factory/mainvisual_sp.webp">
                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/factory/mainvisual_pc.webp" alt="Factory"
                        loading="lazy" width="1380" height="690">
                </picture>

                <div class="mainvisual_content">
                    <p>
                        私たちは、直接工場へ頼みたい・中間に入る余計なコストを省きたいというお客様のニーズを多く感じてまいりました。<br class="pc-only" />
                        自社工場のある弊社はその点を強みとしており、低コスト化の実現により多くのお客様よりご依頼をいただいております。
                    </p>
                    <p>
                        また、私たちはオフィス併設の自社工場でデザイン・強度の検証をおこなっており、圧倒的にスピーディかつ安定した進行を可能としています。<br class="pc-only" />
                        細かな要望にもフレキシブルにお応えできる自社工場の強みを活かし、ご担当者様のこだわりの製品を実現いたします。
                    </p>
                </div>
            </div>
        </section>
        <!-- //mainvisual -->

        <!-- showcase// -->
        <section class="showcase">
            <div class="showcase_container --padd">
                <div class="showcase_wrapper">
                    <div class="showcase_swiper">
                        <div class="swiper-wrapper">
                            <div class="showcase_slide swiper-slide">
                                <picture class="c-img showcase_picture">
                                    <source media="(max-width:1023px)" srcset="<?= get_template_directory_uri() ?>/assets/img/factory/slide_1_pc.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/factory/slide_1_pc.webp" alt="SPEED"
                                        loading="lazy" width="780" height="520">
                                </picture>
                                <div class="showcase_content">
                                    <h2>SPEED</h2>
                                    <p>
                                        デザイナーがオフィス併設の自社工場へダイレクトに指示を出し、その場で試作を進めるため構造や仕様確認に時間を要しません。デザイン決定後、すぐに自社工場で量産を開始。スピーディに完成品をお届けできます。
                                    </p>
                                </div>
                            </div>
                            <div class="showcase_slide swiper-slide">
                                <picture class="c-img showcase_picture">
                                    <source media="(max-width:1023px)" srcset="<?= get_template_directory_uri() ?>/assets/img/factory/slide_2_pc.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/factory/slide_2_pc.webp" alt="LOW-COST"
                                        loading="lazy" width="780" height="520">
                                </picture>
                                <div class="showcase_content">
                                    <h2>LOW-COST</h2>
                                    <p>
                                        デザインと工場生産、どちらの工程も自社でおこなうことで様々な中間マージンを省き、低コストを実現します。いわば産地直売所で野菜を購入できるような感覚です。
                                    </p>
                                </div>
                            </div>
                            <div class="showcase_slide swiper-slide">
                                <picture class="c-img showcase_picture">
                                    <source media="(max-width:1023px)" srcset="<?= get_template_directory_uri() ?>/assets/img/factory/slide_3_pc.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/factory/slide_3_pc.webp" alt="FLEXIBLE"
                                        loading="lazy" width="780" height="520">
                                </picture>
                                <div class="showcase_content">
                                    <h2>FLEXIBLE</h2>
                                    <p>
                                        急ぎの案件であっても、優先度合いによって可能な限りスケジュールを調整できます。
                                        また、小ロットのご注文にも対応できるだけでなく、特殊な加工であっても試行錯誤しながら進めることができます。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <button class="button-swiper swiper-button-next"></button>
                        <button class="button-swiper swiper-button-prev"></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- //showcase -->

        <!-- access// -->
        <section class="access">
            <div class="access_container --padd">
                <h2 class="access_title sp-only">Access</h2>

                <div class="access_wrapper">
                    <div class="access_right">
                        <figure class="access_figure">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/factory/access.webp" alt="Access" width="840" height="560" loading="lazy">
                        </figure>
                    </div>
                    <div class="access_left">
                        <h2 class="access_title pc-only">Access</h2>

                        <div class="access_info">
                            <p class="address">
                                〒116-0013 <br />
                                東京都荒川区西日暮里4-9-6
                            </p>
                            <p class="notes">JR西日暮里駅より徒歩7分</p>
                        </div>

                        <div class="access_map">
                            <a href="https://maps.app.goo.gl/amwAwteLCgNoEWW1A" target="_blank" class="c-view">Google Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //access -->

        <!-- orderflow// -->
        <section class="c-orderflow">
            <div class="c-orderflow_container --padd">
                <div class="c-orderflow_heading">
                    <p>ご相談から納品までの流れはこちら</p>

                    <a href="<?= home_url(); ?>/order-contact/" class="c-orderflow_title">
                        <div class="animate-text js-animate">
                            <div class="txt">
                                <h2 class="neue-fonts fw-500">ORDER FLOW</h2>
                            </div>
                        </div>
                        <div class="arrow">
                            <div class="animate-text js-animate">
                                <div class="txt">
                                    <svg role="img" aria-label="ORDER FLOW" xmlns="http://www.w3.org/2000/svg"
                                        width="46.828" height="29.657" viewBox="0 0 46.828 29.657">
                                        <g id="Group_127" data-name="Group 127" transform="translate(-991 -3477.172)">
                                            <line id="Line_103022" data-name="Line 103022" x2="40"
                                                transform="translate(993 3492)" fill="none" stroke="#000"
                                                stroke-linecap="square" stroke-width="4" />
                                            <line id="Line_103023" data-name="Line 103023" x2="12" y2="12"
                                                transform="translate(1023 3480)" fill="none" stroke="#000"
                                                stroke-linecap="square" stroke-width="4" />
                                            <line id="Line_103024" data-name="Line 103024" y1="12" x2="12"
                                                transform="translate(1023 3492)" fill="none" stroke="#000"
                                                stroke-linecap="square" stroke-width="4" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- //orderflow -->
     </main>
    <!-- @@main -->

<?php get_footer(); ?>