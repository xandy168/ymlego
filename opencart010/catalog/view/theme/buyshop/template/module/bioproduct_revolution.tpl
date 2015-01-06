<?php
global $config, $loader, $registry;
$theme_options = $config->get('bioproduct_general');
?>


<section class="slider">
    <h2 style="display:none">Top Slider</h2>

    <div class="<?php echo (isset($slider_width_settings["revolution_width"]) && $slider_width_settings["revolution_width"] == 'boxed' ? 'container' : 'full_width_revolution'); ?>">

    <?php if (!isset($theme_options["layout_skin"]) || $theme_options["layout_skin"] == 'skin_creative' || $theme_options["layout_skin"] == 'skin_hightech') { ?>

        <div id="layerslider-container">
            <?php if (!isset($theme_options["layout_skin"]) || $theme_options["layout_skin"] == 'skin_creative') { ?>

            <div id="layerslider" style="width: 1600px; height: 500px; margin: 0 auto;">
                <?php } else { ?>
                <div id="layerslider" style="width: 1170px; height: 500px; margin: 0 auto;">
                <?php } ?>

                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>
                <!-- end Preloader -->
                <?php echo $message; ?>
            </div>
        </div>

    <?php } elseif (isset($theme_options["layout_skin"]) && $theme_options["layout_skin"] == 'skin_decoration') { ?>
    <div class="bannercontainer" >
        <div class="banner">
            <?php echo $message; ?>
        </div>
    </div>

    <?php } else { ?>
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <?php echo $message; ?>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    <?php }  ?>

    </div>
</section>





