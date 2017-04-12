<?php
if ( ! function_exists( 'charitize_home_donate_section' ) ) :
    /**
     * Featured Slider
     *
     * @since Charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_home_team_section() {
    ?>
        <section class="wrapper wrapper-callback">
            <div class="thumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                        <h2>Our Team</h2>
                        <div class="text-content">
                            Lorem Ipsum ..............................
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
}
endif;
add_action( 'charitize_action_front_page', 'charitize_home_team_section', 40 );