<!DOCTYPE html>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<?php include "catalog/view/theme/elastic/template/common/include_header.tpl"; ?>
<meta charset="UTF-8" />
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>

<!--SHOP STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/stylesheet/stylesheet.css" />

<!-- SLIDER -->
<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/stylesheet/responsiveslides.css" />
<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/js/responsiveslides.min.js"></script>

<!-- groundwork -->
<script src="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/groundwork/js/libs/modernizr-2.6.2.min.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/groundwork/css/groundwork.css"><!--<![endif]-->
  
<!--[if gt IE 9]>
<link type="text/css" rel="stylesheet" href="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/groundwork/css/groundwork.css"><![endif]--><!--[if lte IE 9]>
<link type="text/css" rel="stylesheet" href="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/groundwork/css/groundwork-core.css">
<link type="text/css" rel="stylesheet" href="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/groundwork/css/groundwork-type.css">
<link type="text/css" rel="stylesheet" href="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/groundwork/css/groundwork-ui.css">
<link type="text/css" rel="stylesheet" href="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/groundwork/css/groundwork-anim.css"><![endif]--><!--[if IE]>
<link type="text/css" rel="stylesheet" href="<?php echo HTTP_SERVER; ?>/catalog/view/theme/elastic/groundwork/css/groundwork-ie.css"><![endif]-->
<!-- //groundwork -->

<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->
<?php if ($stores) { ?>
<script type="text/javascript"><!--
$(document).ready(function() {
<?php foreach ($stores as $store) { ?>
$('body').prepend('<iframe src="<?php echo $store; ?>" style="display: none;"></iframe>');
<?php } ?>
});
//--></script>
<?php } ?>
<?php echo $google_analytics; ?>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 540
      });

      // Slideshow 3
      $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 1200
      });

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
</head>
<body>
<div id="body-shop">
<?php echo $sys; ?>
<div class="top-header">
	<div class="header-content">
		<div class="row">
			<div class="one half left bounceInDown animated">
				<?php if ($logo) { ?>
					<a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a>
				<?php } ?> 
			</div>
			<div class="one half bounceInLeft animated">
				<div class="row padded">
					<div class="one third"><?php echo $language; ?></div>
					<div class="one third"><?php echo $currency; ?></div>
					<div class="one third"><?php echo $cart; ?></div>
				</div>
				<div class="row padded">
					<div id="search">
						<div class="row">
							<div class="four mobile fifths">
								<input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
							</div>
							<div class="one mobile fifths">
								<span class="suffix button-search button pink"><i class="icon-search"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="container">
	<div class="row">
		<div class="one third padded bounceInRight animated">
			<div id="welcome">
				<?php if (!$logged) { ?>
					<?php echo $text_welcome; ?>
				<?php } else { ?>
					<?php echo $text_logged; ?>
				<?php } ?>
			</div>
		</div>
		<div class="two thirds">
			<div class="links bounceInDown animated">
				<nav title="Top menu" role="navigation" class="nav pink">
					<ul>
						<li><a href="<?php echo $home; ?>"><i class="icon-home"></i> <?php echo $text_home; ?></a></li>
						<li><a href="<?php echo $wishlist; ?>" id="wishlist-total"><i class="icon-gift"></i> <?php echo $text_wishlist; ?></a></li>
						<li><a href="<?php echo $account; ?>"><i class="icon-user"></i> <?php echo $text_account; ?></a></li>
						<li><a href="<?php echo $shopping_cart; ?>"><i class="icon-shopping-cart"></i> <?php echo $text_shopping_cart; ?></a></li>
						<li><a href="<?php echo $checkout; ?>"><i class="icon-money"></i> <?php echo $text_checkout; ?></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div id="menu">
		<div class="menu">
			<?php if ($categories) { ?>
				<nav title="Menu" role="navigation" class="nav gap-top black bounceInLeft animated">
					<ul>
						<?php foreach ($categories as $category) { ?>
							<li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
								<?php if ($category['children']) { ?>
      
									<?php for ($i = 0; $i < count($category['children']);) { ?>
										<ul>
											<?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
												<?php for (; $i < $j; $i++) { ?>
												<?php if (isset($category['children'][$i])) { ?>
													<li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a></li>
												<?php } ?>
											<?php } ?>
										</ul>
									<?php } ?>
      
								<?php } ?>
							</li>
						<?php } ?>
					</ul>
				</nav>
			<?php } ?>
		</div>
	</div>
<div id="notification"></div>

