<div class="row">
  <div class="row bounceInRight animated">
	<h2 data-scrollable="true"><?php echo $heading_title; ?></h2>
  </div>
  <div class="row">

	<ul class="products bounceInLeft animated">
        <?php foreach ($products as $product) {?>
			<li>
				<div class="product">
					<div class="row"><span class="button" style="display:block; width:100%;"><h2 class="responsive" data-scrollable="true"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h2></span></div>
					<?php if ($product['thumb']) { ?>
						<div class="row"><a href="<?php echo $product['href']; ?>"><img class="thumb" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></a></div>
					<?php } ?>
					<div class="row">
						<div class="one half">
							<div class="row">
								<?php if ($product['price']) { ?>
										<?php if (!$product['special']) { ?>
											<span class="price_module button pink"><?php echo $product['price']; ?></span>
										<?php } else { ?>
											<span class="price_module button yellow"><?php echo $product['special']; ?> <span class="price-old"><?php echo $product['price']; ?></span></span>
										<?php } ?>
								<?php } ?>
							</div>
						</div>
						<div class="one half">
							<div class="row">
								<span><button type="button" class="button black" value="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');"><i class="icon-shopping-cart"></i> <?php echo $button_cart; ?></button></span>
							</div>
						</div>
					</div>

					<?php if ($product['rating']) { ?>
						<div class="row"><img src="catalog/view/theme/default/image/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></div>
					<?php } ?>
				</div>
			</li>
		<?php } ?>
	</ul>
  </div>
</div>
<div class="clr"></div>