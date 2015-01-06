<?php
global $config, $loader, $registry;
$theme_options = $config->get('bioproduct_general');
$theme_products = $config->get('bioproduct_products');
/* output for labels */

if (isset($theme_products["sale_status"])) {$sale = $theme_products["sale_status"];}  else {$sale = '';}
if (isset($theme_products["new_status"])) {$new = $theme_products["new_status"];}  else {$new = '';}

if (isset($theme_products["sale_position"])) {$saleposition = $theme_products["sale_position"];}  else {$saleposition = '';}
if (isset($theme_products["new_position"])) {$newposition = $theme_products["new_position"];}  else {$newposition = '';}

if (isset($theme_products["newlabel_period"])) {
$days = $theme_products["newlabel_period"];
} else {
$days = 10;
}
/* end output for labels */


if (!empty($theme_products["product_image_size"]) && $theme_products["product_image_size"] == 'small' ) {
$product_block_width = 2;
} else {
$product_block_width = 3;
}

if (!empty($theme_products["product_image_size"]) && $theme_products["product_image_size"] == 'small' ) {
$columns_count = 6;
} else {
$columns_count = 4;
}

if (!isset($theme_products["rollover_effect"]) || $theme_products["rollover_effect"] == 1) {
$image_rotate = 1;
}  else {
$image_rotate = $theme_products["rollover_effect"];
}


?>
<?php echo $header; ?>
<?php echo $content_top; ?>

<div class="page_category">
    <?php
    global $loader, $registry;
    $loader->model('custom/general');
    $model = $registry->get('model_custom_general');
    $class = $model->getCssClass($column_left,$column_right,1);
    ?>

    <div id="content" class="<?php echo $class; ?> rollover_none">

    <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
    </ul>

    <h1><?php echo $heading_title; ?></h1>
        <label class="control-label" for="input-search"><?php echo $entry_search; ?></label>
        <div class="row search_head">
            <div class="span4">
                <input type="text" name="search" value="<?php echo $search; ?>" placeholder="<?php echo $text_keyword; ?>" id="input-search" class="form-control" />
            </div>
            <div class="span3">
                <select name="category_id" class="form-control">
                    <option value="0"><?php echo $text_category; ?></option>
                    <?php foreach ($categories as $category_1) { ?>
                    <?php if ($category_1['category_id'] == $category_id) { ?>
                    <option value="<?php echo $category_1['category_id']; ?>" selected="selected"><?php echo $category_1['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $category_1['category_id']; ?>"><?php echo $category_1['name']; ?></option>
                    <?php } ?>
                    <?php foreach ($category_1['children'] as $category_2) { ?>
                    <?php if ($category_2['category_id'] == $category_id) { ?>
                    <option value="<?php echo $category_2['category_id']; ?>" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_2['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $category_2['category_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_2['name']; ?></option>
                    <?php } ?>
                    <?php foreach ($category_2['children'] as $category_3) { ?>
                    <?php if ($category_3['category_id'] == $category_id) { ?>
                    <option value="<?php echo $category_3['category_id']; ?>" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_3['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $category_3['category_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_3['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="span3">
                <label class="checkbox-inline">
                    <?php if ($sub_category) { ?>
                    <input type="checkbox" name="sub_category" value="1" checked="checked" />
                    <?php } else { ?>
                    <input type="checkbox" name="sub_category" value="1" />
                    <?php } ?>
                    <?php echo $text_sub_category; ?></label>
            </div>
        </div>
        <p>
            <label class="checkbox-inline">
                <?php if ($description) { ?>
                <input type="checkbox" name="description" value="1" id="description" checked="checked" />
                <?php } else { ?>
                <input type="checkbox" name="description" value="1" id="description" />
                <?php } ?>
                <?php echo $entry_description; ?></label>
        </p>
        <input type="button" value="<?php echo $button_search; ?>" id="button-search" class="button" />

        <h2><?php echo $text_search; ?></h2>


  <?php if ($products) { ?>

    <!-- pager block -->
        <div class="listing_header_row1">
            <div class="pull-left">
                <label class="label_sort"><?php echo $text_sort; ?></label>
                <div class="select_wrapper width1">
                    <select class="custom sort-by" onchange="location = this.value;" tabindex="1">
                        <?php foreach ($sorts as $sorts) { ?>
                        <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
                        <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
                        <?php } else { ?>
                        <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="pull-left aligncenter hidden-phone">
                <label> <span class="hidden-tablet">View as:</span></label>
                <a href="#" class="icon-th view-grid"></a><a href="#" class="icon-th-list view-list"></a>
            </div>
            <div class="pull-right alignright">
                <label><span class="hidden-phone"><?php echo $text_limit; ?></span></label>
                <div class="select_wrapper width3">
                    <select class="custom" onchange="location = this.value;">
                        <?php foreach ($limits as $limits) { ?>
                        <?php if ($limits['value'] == $limit) { ?>
                        <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
                        <?php } else { ?>
                        <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                per&nbsp;page</div>
        </div>
        <div class="product-compare">
            <a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a>
        </div>
        <div class="line1"></div>
        <div class="pagination listing_header_row2"><?php echo $pagination; ?></div>
        <!-- end pager block -->


    <!--changed listings-->
    <div class="product-listing product-grid">
        <div class="row <?php echo ((!empty($theme_products["product_image_size"]) && $theme_products["product_image_size"] == 'small' ) ? 'small' : 'big'); ?>_<?php echo ((empty($theme_products["product_listing"]) || $theme_products["product_listing"] !== 'simple' ) ? 'with' : 'without'); ?>_description <?php echo ((!empty($theme_products["product_catalog_mode"]) && $theme_products["product_catalog_mode"] == 'enable' ) ? 'catalog_mode' : 'usual_mode');  ?> isotope-outer">
        <?php include('catalog/view/theme/listing_view.php'); ?>
    </div>
</div>
<!--changed listings-->






<?php } else { ?>
  <div class="content">
      <?php echo $text_empty; ?>
  </div>
  <?php }?>
  <?php echo $content_bottom; ?>

</div>
<?php echo $column_left; echo $column_right; ?>
</div>
<script type="text/javascript"><!--
$('#content input[name=\'search\']').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#button-search').trigger('click');
	}
});

$('select[name=\'category_id\']').bind('change', function() {
	if (this.value == '0') {
		$('input[name=\'sub_category\']').attr('disabled', 'disabled');
		$('input[name=\'sub_category\']').removeAttr('checked');
	} else {
		$('input[name=\'sub_category\']').removeAttr('disabled');
	}
});

$('select[name=\'category_id\']').trigger('change');

$('#button-search').bind('click', function() {
	url = 'index.php?route=product/search';
	
	var search = $('#content input[name=\'search\']').attr('value');
	
	if (search) {
		url += '&search=' + encodeURIComponent(search);
	}

	var category_id = $('#content select[name=\'category_id\']').attr('value');
	
	if (category_id > 0) {
		url += '&category_id=' + encodeURIComponent(category_id);
	}
	
	var sub_category = $('#content input[name=\'sub_category\']:checked').attr('value');
	
	if (sub_category) {
		url += '&sub_category=true';
	}
		
	var filter_description = $('#content input[name=\'description\']:checked').attr('value');
	
	if (filter_description) {
		url += '&description=true';
	}

	location = url;
});

//--></script>
<?php echo $footer; ?>