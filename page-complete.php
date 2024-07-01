<?php get_header(); ?>

    <!-- @main -->
    <main class="contactpage" id="contactpage">
        <!-- layout// -->
        <div class="layout ordercontact">
            <div class="layout_container --padd">
                <div class="layout_left">
                    <div class="layout_sticky">
                        <h2>ORDER / CONTACT</h2>

                        <div class="pc-only">
                            <a href="<?= home_url(); ?>/order-contact/#order-contact">ORDER FLOW</a>
                            <a class="active" href="/order-contact/contact">CONTACT</a>
                        </div>
                    </div>
                </div>

                <div class="layout_right">
                    <div class="complete">
                        <div class="complete_container">
                            <h2 class="ordercontact_title neue-fonts fw-500">
                                <div class="animate-text js-animate">
                                    <div class="txt">
                                        COMPLETE
                                    </div>
                                </div>
                            </h2>

                            <p class="complete_desc">
                                お問い合わせいただきありがとうございます。送信が完了いたしました。<br class="pc-only" />
                                担当より追ってご連絡させていただきますので、今しばらくお待ちください。
                            </p>

                            <a href="<?= home_url(); ?>" class="c-view">BACK TO TOP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //layout -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>