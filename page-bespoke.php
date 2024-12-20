<?php 
    get_header(); 
    $services = get_field('bespoke_fields', 16);
    $bespoke = $services['bespoke'];
    $shop = $services['shop_in_shop'];
?>
    
    <!-- @main -->
    <main class="servicespage" id="servicespage">
        <!-- layout// -->
        <div class="layout">
            <div class="layout_container --padd">
                <div class="layout_left">
                    <div class="layout_sticky">
                        <h2>SERVICES</h2>

                        <a class="active" href="<?= home_url(); ?>/services/">DISPLAY & SIGN</a>
                        <a class="active" href="<?= home_url(); ?>/services/bespoke">BESPOKE, SHOP IN SHOP</a>
                        <a class="active" href="<?= home_url(); ?>/services/exhibition">EXHIBITION, EVENT</a>
                        <a class="active" href="https://poripori.base.shop/" target="_blank">ORIGINAL BRAND</a>
                    </div>
                </div>

                <div class="layout_right">
                    <div class="services">
                        <div class="services_container">
                            <div class="services_heading heading-exhibition is-heading">
                                <h2 class="neue-fonts fw-500">
                                    <div class="animate-text">
                                        <div class="txt">
                                            BESPOKE,
                                        </div>
                                    </div>
                                    <br />
                                    <div class="animate-text text2">
                                        <div class="txt">
                                            SHOP IN SHOP
                                        </div>
                                    </div>
                                </h2>
                            </div>

                            <!--<div class="services_thumb thumb-bespoke">
                                <picture>
                                    <source media="(max-width:1023px)"
                                        srcset="<?= get_template_directory_uri() ?>/assets/img/services/services_bespoke_sp.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/services/services_bespoke.webp"
                                        alt="DISPLAY & SIGN" loading="lazy" width="922" height="1062.83">
                                </picture>
                            </div>-->

                            <div class="services_thumb thumb-exhibition">
                                <picture>
                                    <source media="(max-width:1023px)"
                                        srcset="<?= get_template_directory_uri() ?>/assets/img/services/services_exhibition_sp.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/services/services_exhibition.webp"
                                        alt="DISPLAY & SIGN" loading="lazy" width="1065" height="1045">
                                </picture>
                            </div>


                            <div class="services_group">
                                <div class="services_nav two-column">
                                    <ul class="thumb">
                                        <li class="active" data-services-tabs="tab1">
                                            <picture>
                                                <source media="(max-width:1023px)"
                                                    srcset="<?= get_template_directory_uri() ?>/assets/img/services/tab_bespoke_bespoke.webp">
                                                <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/services/tab_bespoke_bespoke.webp"
                                                    alt="BESPOKE" loading="lazy" width="165" height="195.45">
                                            </picture>
                                        </li>
                                        <li data-services-tabs="tab2">
                                            <picture>
                                                <source media="(max-width:1023px)"
                                                    srcset="<?= get_template_directory_uri() ?>/assets/img/services/tab_bespoke_shop.webp">
                                                <img draggable="false"
                                                    src="<?= get_template_directory_uri() ?>/assets/img/services/tab_bespoke_shop.webp" alt="SHOP IN SHOP"
                                                    loading="lazy" width="165" height="132.4">
                                            </picture>
                                        </li>
                                    </ul>

                                    <ul class="title">
                                        <li>
                                            <h3>BESPOKE</h3>
                                        </li>
                                        <li>
                                            <h3>SHOP IN SHOP</h3>
                                        </li>
                                    </ul>
                                    <span class="indicator"></span>
                                </div>

                                <div class="services_tab">
                                    <div class="services_content tab-content-1 active" id="tab1">
                                        <div class="overview">
                                            <p>
                                                徐々に売上が上がってきているブランドであるが、他ブランドと同じ場所に陳列させられて埋もれてしまっている。 定番棚から飛び出して、目立つスペースに移したらどういった反応が出るのか。 そんな時に壁や柱などを使用し、そのスペースに合わせた BESPOKE 什器を施工すれば、小さなブランド専用売り場を作ることができます。 来客数の多い都市型主要店であれば、尚更効果を発揮します。 店舗の要望と、ブランドの要望を汲み取った最適なプランを提案致します。
                                            </p>
                                        </div>

                                        <div class="services_masonary">
                                            <?php 
                                                if (!empty($bespoke)) :
                                                    foreach ($bespoke as $key => $value) :
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
                                                            if (!empty($bespoke)) :
                                                                foreach ($bespoke as $key => $value) :
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

                                    <div class="services_content tab-content-2" id="tab2">
                                        <div class="overview">
                                            <p>
                                                直営店を持っていない、もしくは直営店の店舗数が限られているものの、ブランド独自の空間演出を行いたい場合、量販店の中で SHOP IN SHOP を施工しブランド専用売り場を設けることは、商品比較、メーカー比較がなされる際に、他の追随を許さぬ大きなアドバンテージを得ることができます。 ブランドの世界観をダイレクトに伝え、製品本来の魅せ方を自由に表現できます。 一見ブランドコーナーを設けることが難しそうな場所でも、弊社の長年の経験から適切なプランを提案いたします。
                                            </p>
                                        </div>

                                        <div class="services_masonary">
                                            <?php 
                                                if (!empty($shop)) :
                                                    foreach ($shop as $key => $value) :
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
                                                            if (!empty($shop)) :
                                                                foreach ($shop as $key => $value) :
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
                                                        <span class="size">m</span>
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