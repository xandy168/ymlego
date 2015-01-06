<?php
global $config;
$theme_options = $config->get('bioproduct_general');
$theme_products = $config->get('bioproduct_products');

if (isset($theme_options["sidebar"]) && $theme_options["sidebar"] == 1) {
$class = 'span9';
} elseif (isset($theme_options["layout_skin"]) && $theme_options["layout_skin"] == 'skin_cosmetic') {
$class = 'span6';
} else {
$class = 'span12';
}

?>

<?php if (isset($theme_products["slider_mode"]) && $theme_products["slider_mode"] == 'simple'): ?>
<div class="<?php echo $class; ?> carousel_slider slider_latest">
    <h3 class="main_slider_title latest_title"><?php echo $heading_title; ?></h3>
    <div class="carousel es-carousel-wrapper style0 small_slider latest_slider">


        <!--common wrappers-->
        <div class="es-carousel">
            <div class="row <?php echo (isset($theme_options["layout_skin"])&& $theme_options["layout_skin"] == 'skin_cosmetic' ? 'small_with_description' : 'big_with_description'); ?>">
                <div class="product_outer carousel_items">
                    <?php endif; ?>

                    <!--tabbed sliders-->
                    <?php if (isset($theme_products["slider_mode"]) && $theme_products["slider_mode"] == 'tabs_sliders'): ?>
                    <div class="carousel es-carousel-wrapper style0"  id="carousel_new">

                        <div class="es-carousel">
                            <div class="row">
                                <div class="product_outer carousel_items">
                    <?php endif; ?>
                    <!--end tabbed sliders-->



                    <?php
if (!isset($theme_products["rollover_effect"]) || $theme_products["rollover_effect"] == 1) {
$image_rotate = 1;
}  else {
$image_rotate = $theme_products["rollover_effect"];
}

if (!isset($theme_products["product_catalog_mode"])) {
$product_catalog_mode = 'disable';
} else {
$product_catalog_mode = $theme_products["product_catalog_mode"];
}

if (isset($theme_products["quick_status"])) {
$quick_status = $theme_products["quick_status"];
}

$category1 = 0;
$category2 = 1;
$category3 = 0;

$slider = 3;
        $small = 1;

include('catalog/view/theme/theme_slider_model.php');
?>

                    <!--tabbed sliders-->
                    <?php if (isset($theme_products["slider_mode"]) && $theme_products["slider_mode"] == 'tabs_sliders'): ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!--end tabbed sliders-->



                    <?php if (isset($theme_products["slider_mode"]) && $theme_products["slider_mode"] == 'simple'): ?>
                </div>

            </div>
        </div>
    <!--common wrappers-->

</div>

</div>
<?php endif; ?>





