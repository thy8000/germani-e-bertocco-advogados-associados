<?php

if (!defined('ABSPATH')) exit;

wp_footer();

?>
</main>

<footer>
    <div class="bg-white">
        <div class="custom-container">
            <div class="lg:flex-row flex py-11 gap-4 flex-col">
                <div class="lg:w-3/4 w-full">
                    <div class="lg:flex-row flex gap-8 flex-col">
                        <?php wp_utils_get_component('footer/components/logo-and-social-links'); ?>

                        <div class="border border-midgray"></div>

                        <?php wp_utils_get_component('footer/components/business-address') ?>
                    </div>
                </div>

                <div class="lg:hidden block border border-midgray"></div>

                <div class="lg:w-1/4 w-full">
                    <?php wp_utils_get_component('footer/components/menu-items'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="custom-container">
            <div class="py-5 text-center text-midgray">
                <?php
                echo sprintf(
                    esc_html__('© %s - Site IT9 - Hospedado e monitorado pela %s - %s, todos os direitos reservados', 'it9'),
                    date('Y'),
                    '<a href="#">IT9</a>',
                    '<a href="#">ABCTudo</a>',
                );
                ?>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/owl.carousel.min.js"></script>
</body>