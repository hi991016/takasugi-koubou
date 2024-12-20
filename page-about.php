<?php get_header(); ?>

    <!-- @main -->
    <main class="aboutpage" id="aboutpage">
        <!-- layout// -->
        <div class="layout about">
            <div class="layout_container --padd">
                <div class="layout_left">
                    <div class="layout_sticky is-nav">
                        <h2>ABOUT US</h2>

                        <div class="pc-only">
                            <a class="active" href="#philosophy">PHILOSOPHY</a>
                            <a href="#sustainability">SUSTAINABILITY</a>
                            <a href="#company">COMPANY INFO</a>
                        </div>
                    </div>
                </div>

                <div class="layout_right js-section">
                    <section class="about_section philosophy" id="philosophy">
                        <div class="philosophy_container">
                            <h2 class="about_title is-heading">
                                <div class="animate-text">
                                    <div class="txt">
                                        PHILOSOPHY
                                    </div>
                                </div>
                            </h2>

                            <div class="about_content">
                                <p>
                                    お客さまの多様なご注文にフレキシブルに対応するためには。<br class="pc-only" />
                                    また、小ロットのご発注にもスムーズに対応し、ご満足していただくためには－。
                                </p>
                                <p>
                                    「自社工場による生産体制」<br>
                                    それがその問いに対する私たちの答えでした。
                                </p>
                                <p>
                                    弊社では20余年のディスプレイ製作のキャリアにおいて、<br class="pc-only" />
                                    ものづくりの最終段階を見届けデリバリーに至る「生産の一本化」の重要性を実感。 <br class="pc-only" />
                                    生産の拠点を海外に求めるメーカーが多いなか、あえて自社工場での製造にこだわり、<br class="pc-only" />
                                    多くのお客さまから信頼を寄せられています。 <br class="pc-only" />
                                    <br class="pc-only" />
                                    製品のクオリティはもちろん、ご予算や納期にも柔軟に対応し、<br class="pc-only" />
                                    コストパフォーマンスに優れた製品をお届けいたしております。
                                </p>
                            </div>

                            <figure class="philosophy_thumb">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/about_1.webp" alt="PHILOSOPHY" loading="lazy" width="1035"
                                    height="600">
                            </figure>
                        </div>
                    </section>

                    <section class="about_section sus" id="sustainability">
                        <div class="sus_container">
                            <h2 class="about_title">
                                <div class="animate-text js-animate">
                                    <div class="txt">
                                        SUSTAINABILITY
                                    </div>
                                </div>
                            </h2>

                            <div class="about_content">
                                <p>
                                    高杉工房では、以下の観点で地球環境に配慮した取り組みを行なっています。
                                </p>
                            </div>

                            <div class="sus_group">
                                <div class="sus_list">
                                    <div class="sus_items">
                                        <h3>MINIMUM NECESSARY</h3>
                                        <p>見えないところに無駄な材料を使用せず、<br class="sp-only" />必要最低限の材料での制作・梱包を徹底しています。</p>
                                    </div>
                                    <div class="sus_items">
                                        <h3>REUSE</h3>
                                        <p>コストダウンを重要視した強度のない使い捨ての<br class="sp-only" />什器ではなく、回収・再利用にも耐え得る強度のある<br
                                                class="sp-only" />什器の提案をおこなってます。</p>
                                    </div>
                                </div>

                                <div class="sus_list">
                                    <div class="sus_items">
                                        <h3>ECO-FRIENDLY MATERIALS</h3>
                                        <p>紙製・植物由来の梱包材や、リサイクルプラスチック、<br
                                                class="sp-only" />環境に優しいシートやインクなど、環境に配慮した材料選定を<br
                                                class="sp-only" />おこなっています。</p>
                                    </div>
                                    <div class="sus_items">
                                        <h3>RECYCLE</h3>
                                        <p>プラスチック製材料の端材は、<br class="sp-only" />提携工場にてリサイクルを行なっています。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="about_section company" id="company">
                        <div class="company_container">
                            <h2 class="about_title">
                                <div class="animate-text js-animate">
                                    <div class="txt">
                                        COMPANY INFO
                                    </div>
                                </div>
                            </h2>

                            <div class="company_group">
                                <div class="company_list">
                                    <div class="company_items">
                                        <div class="title">
                                            <h3>商号</h3>
                                        </div>
                                        <div class="content">
                                            <p>
                                                株式会社 高杉工房
                                            </p>
                                        </div>
                                    </div>
                                    <div class="company_items">
                                        <div class="title">
                                            <h3>所在地</h3>
                                        </div>
                                        <div class="content">
                                            <p>
                                                〒116-0013 東京都荒川区西日暮里4-9-6 <br />
                                                TEL: +81 3 3823 0268 / FAX: +81 3 3821 4667
                                            </p>
                                        </div>
                                    </div>
                                    <div class="company_items">
                                        <div class="title" class="title">
                                            <h3>創業</h3>
                                        </div>
                                        <div class="content">
                                            <p>1965年（昭和40年3月）</p>
                                        </div>
                                    </div>
                                    <div class="company_items">
                                        <div class="title">
                                            <h3>代表者</h3>
                                        </div>
                                        <div class="content">
                                            <p>高杉 裕（Yutaka Takasugi）</p>
                                        </div>
                                    </div>
                                    <div class="company_items">
                                        <div class="title">
                                            <h3>取引銀行</h3>
                                        </div>
                                        <div class="content">
                                            <p>みずほ銀行 動坂支店</p>
                                        </div>
                                    </div>
                                    <div class="company_items">
                                        <div class="title">
                                            <h3>営業品目</h3>
                                        </div>
                                        <div class="content">
                                            <ul>
                                                <li>店舗ディスプレイの企画、設計、管理及び製作、施工</li>
                                                <li>イベント、展示会ブースの企画、設計、管理及び製作、施工</li>
                                                <li>商業施設、文化施設の室内外装飾の企画、設計、管理及び製作、施工</li>
                                                <li>店舗内外のサイン、シート工事の製作、施工、管理</li>
                                                <li>店舗内工事の展示台などの什器の企画、設計、製作</li>
                                                <li>インテリア雑貨、実用品の企画、開発</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="company_list">
                                    <div class="company_items">
                                        <div class="title">
                                            <h3>主要取引先</h3>
                                        </div>
                                        <div class="content">
                                            <p>
	                                            ダイソン株式会社<br />
												株式会社ディーアンドエムホールディングス<br />
												AB InBev Japan合同会社<br />
												ハーマンインターナショナル株式会社<br />
												スケッチャーズジャパン合同会社<br />
												ビクトリノックス･ジャパン株式会社<br />
												株式会社コロンビアスポーツウェア<br />
												完実電気株式会社<br />
												アツギ株式会社<br />
												株式会社ワコール<br />
												タワーレコード株式会社<br />
												クオバディス・ジャパン株式会社<br />
												株式会社ディスクユニオン<br />
												順不同・敬称略
                                            </p>
                                        </div>
                                    </div class="company_items">
                                </div>
                            </div>
                            <div class="bnr_poripori">
	                            <a href="https://poripori.base.shop/" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/img/home/bnr_poripori.webp"></a>
	                        </div>
                        </div>
                    </section>
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