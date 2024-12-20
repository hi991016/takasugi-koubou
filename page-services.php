<?php 
    get_header();
    $services = get_field('services_fields', 14);
    $table = $services['table_top_sign'];
    $inline = $services['inline_fd'];
    $freestand = $services['free_stand'];
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
                            <div class="services_heading is-heading">
                                <h2 class="neue-fonts fw-500">
                                    <div class="animate-text">
                                        <div class="txt">
                                            DISPLAY
                                        </div>
                                    </div>
                                    <br />
                                    <div class="animate-text text2 ml">
                                        <div class="txt">
                                            & SIGN
                                        </div>
                                    </div>
                                </h2>
                            </div>

                            <div class="services_thumb thumb-display">
                                <picture>
                                    <source media="(max-width:1023px)"
                                        srcset="<?= get_template_directory_uri() ?>/assets/img/services/services_display_sp.webp">
                                    <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/services/services_display.webp"
                                        alt="DISPLAY & SIGN" loading="lazy" width="1005" height="788.37">
                                </picture>
                            </div>

                            <div class="services_overview">
                                <div class="content">
                                    <p>
                                        他社との差別化を図りたい。 自社製品のメリットを的確にエンドユーザーに伝えたい。<br class="pc-only" />
                                        店頭における商品のプレゼンテ－ションは、自社製品をアピールする絶好の機会。<br class="pc-only" />
                                        売り上げに直結する重要なポイントです。
                                    </p>
                                    <p>
                                        当社ではブランドや商品特性に合わせて素材を組み合わせ、形状を吟味し、<br class="pc-only" />
                                        売り場スペースの活性化を考慮したオリジナル・ディスプレイをご提案いたします。<br class="pc-only" />
                                        小さなスペースでブランドの価値を確実に伝え、<br class="pc-only" />
                                        どんな売り場でも合わせられるよう量産化いたします。
                                    </p>
                                </div>

                                <div class="title">
                                    <h2 class="neue-fonts fw-400">OVERVIEW</h2>
                                </div>
                            </div>

                            <div class="services_group display_tab">
                                <div class="services_nav">
                                    <ul class="thumb">
                                        <li class="active" data-services-tabs="tab1">
                                            <picture>
                                                <source media="(max-width:1023px)"
                                                    srcset="<?= get_template_directory_uri() ?>/assets/img/services/tab_display_table.webp">
                                                <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/services/tab_display_table.webp"
                                                    alt="TABLE TOP / SIGN" loading="lazy" width="165" height="195.45">
                                            </picture>
                                        </li>
                                        <li data-services-tabs="tab2">
                                            <picture>
                                                <source media="(max-width:1023px)"
                                                    srcset="<?= get_template_directory_uri() ?>/assets/img/services/tab_display_inline.webp">
                                                <img draggable="false"
                                                    src="<?= get_template_directory_uri() ?>/assets/img/services/tab_display_inline.webp" alt="INLINE"
                                                    loading="lazy" width="165" height="132.4">
                                            </picture>
                                        </li>
                                        <li data-services-tabs="tab3">
                                            <picture>
                                                <source media="(max-width:1023px)"
                                                    srcset="<?= get_template_directory_uri() ?>/assets/img/services/tab_display_free.webp">
                                                <img draggable="false" src="<?= get_template_directory_uri() ?>/assets/img/services/tab_display_free.webp"
                                                    alt="FREE STAND" loading="lazy" width="165" height="134.16">
                                            </picture>
                                        </li>
                                    </ul>

                                    <ul class="title">
                                        <li>
                                            <h3>TABLE TOP <br class="sp-only" /> / SIGN</h3>
                                        </li>
                                        <li>
                                            <h3>INLINE</h3>
                                        </li>
                                        <li>
                                            <h3>FREE STAND</h3>
                                        </li>
                                    </ul>
                                    <span class="indicator"></span>
                                </div>

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

                                    <div class="services_content tab-content-2" id="tab2">
                                        <div class="services_masonary">
                                            <?php 
                                                if (!empty($inline)) :
                                                    foreach ($inline as $key => $value) :
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
                                                            if (!empty($inline)) :
                                                                foreach ($inline as $key => $value) :
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

                                    <div class="services_content" id="tab3">
                                        <div class="services_masonary">
                                            <?php 
                                                if (!empty($freestand)) :
                                                    foreach ($freestand as $key => $value) :
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
                                                            if (!empty($freestand)) :
                                                                foreach ($freestand as $key => $value) :
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
