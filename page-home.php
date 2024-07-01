<?php get_header(); ?>

    <!-- @main -->
    <main class="homepage" id="homepage">
        <!-- firstview// -->
        <section class="first">
            <div class="first_container">
                <div class="first_thumb">
                    <picture>
                        <source media="(max-width:1023px)" srcset="<?= get_template_directory_uri() ?>/assets/img/home/firstview_sp.webp">
                        <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/home/firstview.webp" alt="Takasugi Koubou Inc."
                            loading="lazy" width="905" height="738">
                    </picture>
                </div>

                <div class="first_heading is-heading">
                    <div class="first_desc sp-only">
                        <div class="animate-text">
                            <div class="txt">
                                <p>WE DESIGN STORE FIXTURES</p>
                            </div>
                        </div>
                        <br />
                        <div class="animate-text">
                            <div class="txt">
                                <p>THAT LOOKS COOL, HIT YOUR BUDGET</p>
                            </div>
                        </div>
                        <br />
                        <div class="animate-text">
                            <div class="txt">
                                <p>AND SELL MERCHANDISE.</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="first_title neue-fonts fw-500">
                        <div class="animate-text">
                            <div class="txt">
                                TAKASUGI
                            </div>
                        </div>
                        <br />
                        <div class="animate-text">
                            <div class="txt">
                                KOUBOU Inc.
                            </div>
                        </div>
                    </h2>
                </div>
            </div>
        </section>
        <!-- //firstview -->

        <!-- about// -->
        <section class="about">
            <div class="about_container --padd">
                <h2 class="c-tl">ABOUT US</h2>

                <div class="about_content">
                    <p>
                        高杉工房は、荒川区西日暮里にある創業1965年の小さな町工場です。 店舗や商業施設などの什器・ディスプレイの製造・施工やオリジナル家具、アクリル展示品の製作などで空間を演出する製品を提供しております。 <br><br>
						長年の経験で培ったデザイン力とプロジェクト推進力を強みに、最適な空間演出・販売促進を提案しております。 生産拠点を海外に求めることが多い昨今でも、あえて自社工場での製造にこだわり、多くのお客様から信頼をいただいております。
                    </p>

                    <a href="<?= home_url(); ?>/about/" class="c-view">VIEW MORE</a>
                </div>
            </div>
        </section>
        <!-- about// -->

        <!-- services// -->
        <section class="services">
            <div class="services_container">

                <div class="services_list">
                    <div class="services_left">
                        <h2 class="c-tl">SERVICES</h2>

                        <ul class="services_tab">
                            <li class="active">
                                <div class="animate-text js-animate">
                                    <div class="txt">
                                        DISPLAY & SIGN
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="animate-text js-animate">
                                    <div class="txt">
                                        BESPOKE, SHOP IN SHOP
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="animate-text js-animate">
                                    <div class="txt">
                                        EXHIBITION, EVENT
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="services_right">
                        <ul class="services_thumb">
                            <li class="active services_img img-display">
                                <picture>
                                    <source media="(max-width:1023px)" srcset="<?= get_template_directory_uri() ?>/assets/img/home/display_sp.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/home/display.webp" alt="DISPLAY & SIGN"
                                        loading="lazy" width="760" height="760">
                                </picture>
                            </li>
                            <li class="services_img img-exhibition">
                                <picture>
                                    <source media="(max-width:1023px)" srcset="<?= get_template_directory_uri() ?>/assets/img/home/exhibition_sp.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/home/exhibition.webp"
                                        alt="EXHIBITION, EVENT" loading="lazy" width="785" height="780">
                                </picture>
                            </li>
                            <li class="services_img img-exhibition2">
                                <picture>
                                    <source media="(max-width:1023px)" srcset="<?= get_template_directory_uri() ?>/assets/img/home/exhibition2_sp.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/home/exhibition2.webp"
                                        alt="EXHIBITION, EVENT" loading="lazy" width="785" height="780">
                                </picture>
                            </li>
                        </ul>

                        <div class="services_bar sp-only">
                            <div class="bar" id="bar"></div>
                        </div>
                    </div>

                    <ul class="services_content">
                        <li class="active">
                            <p>
                                ブランドや商品特性に合わせて素材を組み合わせ、形状を吟味し、<br class="pc-only" />
                                限られたスペースの中で最大限の商品アプローチをおこないます。
                            </p>

                            <a href="<?= home_url(); ?>/services/" class="c-view">VIEW MORE</a>
                        </li>
                        <li>
                            <p>
                                通常の陳列棚よりも、立体的な構造で訴求を高め、<br class="pc-only" />
                                さらなる認知向上を目指し、ブランドの世界観を演出します。
                            </p>

                            <a href="<?= home_url(); ?>/services/bespoke/" class="c-view">VIEW MORE</a>
                        </li>
                        <li>
                            <p>
                                数万人のユーザーやバイヤーが集まる展示会にて、<br class="pc-only" />
                                最適な空間をデザインし、よりクリエイティブな商談スペースを実現します。
                            </p>

                            <a href="<?= home_url(); ?>/services/exhibition" class="c-view">VIEW MORE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //services -->

        <!-- factory// -->
        <section class="factory">
            <div class="factory_container --padd">
                <h2 class="c-tl">FACTORY</h2>

                <div class="factory_list">
                    <div class="factory_items items-1">
                        <div class="factory_swiper is-factorySwiper sp-only">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure class="c-img factory_img">
                                        <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/gray.webp" alt="FACTORY" width="384"
                                            height="512" loading="lazy">
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="c-img factory_img">
                                        <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/gray.webp" alt="FACTORY" width="384"
                                            height="512" loading="lazy">
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="factory_items items-1 pc-only">
                            <figure class="c-img factory_img img-1">
                                <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/gray.webp" alt="FACTORY" width="345"
                                    height="460" loading="lazy">
                            </figure>
                        </div>

                        <div class="factory_content">
                            <p>
                                私たちはオフィス併設の自社工場でデザイン・強度の検証をおこなっており、圧倒的にスピーディかつ安定した進行を可能としています。 細かな要望にもフレキシブルにお応えできる自社工場の強みを活かし、ご担当者様のこだわりの製品を実現いたします。
                            </p>
                            <a href="<?= home_url(); ?>/factory/" class="c-view">VIEW MORE</a>
                        </div>
                    </div>

                    <div class="factory_items items-2 pc-only">
                        <figure class="c-img factory_img img-2">
                            <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/gray.webp" alt="FACTORY" width="690" height="690"
                                loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- //factory -->

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