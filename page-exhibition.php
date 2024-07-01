<?php 
    get_header(); 
    $services = get_field('exhibition_fields', 18);
    $table = $services['exhibition'];
?>

    <!-- @main -->
    <main class="servicespage" id="servicespage">
        <!-- layout// -->
        <div class="layout">
            <div class="layout_container --padd">
                <div class="layout_left">
                    <div class="layout_sticky">
                        <h2>SERVICES</h2>

                        <a href="<?= home_url(); ?>/services/">DISPLAY & SIGN</a>
                        <a href="<?= home_url(); ?>/services/bespoke">BESPOKE, SHOP IN SHOP</a>
                        <a class="active" href="<?= home_url(); ?>/services/exhibition">EXHIBITION, EVENT</a>
                    </div>
                </div>

                <div class="layout_right">
                    <div class="services">
                        <div class="services_container">
                            <div class="services_heading heading-exhibition2 is-heading">
                                <h2 class="neue-fonts fw-500">
                                    <div class="animate-text">
                                        <div class="txt">
                                            EXHIBITION,
                                        </div>
                                    </div>
                                    <br />
                                    <div class="animate-text text2">
                                        <div class="txt">
                                            EVENT
                                        </div>
                                    </div>
                                </h2>
                            </div>

                            <div class="services_thumb thumb-exhibition2">
                                <picture>
                                    <source media="(max-width:1023px)"
                                        srcset="<?= get_template_directory_uri() ?>/assets/img/services/services_exhibition2_sp.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/services/services_exhibition2.webp"
                                        alt="DISPLAY & SIGN" loading="lazy" width="1065" height="1045">
                                </picture>
                            </div>

                            <div class="services_overview">
                                <div class="content">
                                    <p>
                                        数万人のユーザーやバイヤーが集まる展示会。商品情報が氾濫する現代にあって、<br class="pc-only" />
                                        その正否は1年間の売り上げを左右するほど重要なポジションを担っています。<br vlass="pc-only" />
                                        当社では、お客様のイメージを的確に把握した上で、「人の集まる場」創りを基本理念に、<br class="pc-only" />
                                        企画から設計・施工までトータルに、より効果的な演出をご提案。<br class="pc-only" />
                                        入場者の導線を熟慮した空間は、販促活動を成功へと導くものと確信いたしております。
                                    </p>
                                </div>

                                <div class="title">
                                    <h2 class="neue-fonts fw-400">OVERVIEW</h2>
                                </div>
                            </div>

                            <div class="services_group">
                                <div class="services_tab">
                                    <div class="services_content tab-content-1 active" id="tab1">
                                        <div class="services_masonary">
                                            <?php 
                                                if (!empty($table)) :
                                                    foreach ($table as $key => $value) :
                                                        $thumbnail = $value["thumbnail"];
                                            ?>
                                            <figure class="services_img">
                                                <img src="<?= $thumbnail["url"] ?>"
                                                    alt="<?= $value["title"] ?>" loading="lazy" width="236" height="314"
                                                    key-items="<?= $key ?>">
                                            </figure>
                                            <?php 
                                                    endforeach;
                                                endif;
                                            ?>
                                        </div>

                                        <div class="services_lightbox">
                                            <div class="services_top">
                                                <p class="neue-fonts fw-400 services_close">CLOSE</p>
                                            </div>
                                            <div class="services_mid">
                                                <div class="services_swiper">
                                                    <div class="swiper-wrapper">
                                                        <?php 
                                                            if (!empty($table)) :
                                                                foreach ($table as $key => $value) :
                                                                    $thumbnail = $value["thumbnail"];
                                                        ?>
                                                        <div class="swiper-slide" key-items="<?= $key ?>" 
                                                            data-title="<?= $value["title"] ?>"
                                                            data-company="<?= $value["company"] ?>" data-size="<?= $value["size"] ?>">
                                                            <figure>
                                                                <img src="<?= $thumbnail["url"] ?>"
                                                                    alt="<?= $value["title"] ?>" loading="lazy" width="236"
                                                                    height="314">
                                                            </figure>
                                                        </div>
                                                        <?php 
                                                                endforeach;
                                                            endif;
                                                        ?>
                                                    </div>

                                                    <div class="services_control">
                                                        <button class="button-swiper swiper-button-prev">PREV</button>
                                                        <button class="button-swiper swiper-button-next">NEXT</button>
                                                    </div>
                                                </div>

                                                <div class="services_caption">
                                                    <p class="title"></p>
                                                    <p>
                                                        <span class="company"></span>
                                                        <span class="size"></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //layout -->

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