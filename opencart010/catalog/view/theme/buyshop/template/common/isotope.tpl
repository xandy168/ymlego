<?php
    if ($modules) :
    global $config;
    $theme_products = $config->get('bioproduct_products');
?>

<!-- Filters -->
<?php if (isset($theme_products["slider_mode"]) && ($theme_products["slider_mode"] != 'simple' && $theme_products["slider_mode"] != 'tabs_sliders')){ ?>
<!--isotope-->
    <section class="filters-by-category clearfix">
        <h6 style="display:none">isotope filter</h6>
        <ul class="option-set" data-option-key="filter">
            <li><a href="#filter" data-option-value="*" class="selected"><?php echo $title_all; ?></a></li>
            <li><a href="#filter" data-option-value=".category1"><?php echo $title_bestsellers; ?></a></li>
            <li><a href="#filter" data-option-value=".category2"><?php echo $title_latest; ?></a></li>
            <li><a href="#filter" data-option-value=".category3"><?php echo $title_specials; ?></a></li>
        </ul>
    </section>
<!--isotope-->
<?php } elseif (isset($theme_products["slider_mode"]) && $theme_products["slider_mode"] == 'tabs_sliders') { ?>
    <!--tabs sliders-->
    <h3 id="carousel_tabs" class="padding">
        <a href="#carousel_new"><?php echo $title_latest; ?></a> &nbsp;/&nbsp;
        <a href="#carousel_sale"><?php echo $title_specials; ?></a> &nbsp;/&nbsp;
        <a href="#carousel_bestseller"><?php echo $title_bestsellers; ?></a>
    </h3>
    <!--tabs sliders-->
<?php } ?>


<!-- end Filters -->
<?php if (isset($theme_products["slider_mode"]) && ($theme_products["slider_mode"] != 'simple' && $theme_products["slider_mode"] != 'tabs_sliders')){ ?>


<?php if ($theme_products["slider_mode"] == 'simple'): ?>
<div class="row">
    <?php endif; ?>

    <div class="product-listing">
        <div class="big_with_description <?php echo ((!isset($theme_products["slider_mode"]) || $theme_products["slider_mode"] != 'simple') ? 'row isotope-outer' : 'isotope-none'); ?>">
            <?php
               $category1 = 0;
               $category2 = 0;
               $category3 = 0;
            ?>
            <?php foreach ($modules as $module) { ?>
                <?php echo $module; ?>
            <?php } ?>


        </div>
    </div>
<?php if ($theme_products["slider_mode"] == 'simple'): ?>
</div>
<?php endif; ?>

<?php } elseif (isset($theme_products["slider_mode"]) && $theme_products["slider_mode"] == 'tabs_sliders') { ?>
<div id="carousel_tabs_content">
    <?php foreach ($modules as $module) { ?>
        <?php echo $module; ?>
    <?php } ?>
</div>
<?php } ?>

<?php endif; ?>
