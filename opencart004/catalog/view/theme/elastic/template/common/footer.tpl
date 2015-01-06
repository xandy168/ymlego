<div id="footer" class="equalize row bounceInUp animated">
  <?php if ($informations) { ?>
  <div class="one fourth">
    <h3><i class="icon-info-sign icon-2x"></i> <?php echo $text_information; ?></h3>
	<nav class="nav vertical black" title="<?php echo $text_information; ?>">
		<ul>
			<?php foreach ($informations as $information) { ?>
				<li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
			<?php } ?>
		</ul>
	</nav>
  </div>
  <?php } ?>
  <div class="one fourth">
    <h3><i class="icon-cogs icon-2x"></i> <?php echo $text_service; ?></h3>
	<nav class="nav vertical pink" title="<?php echo $text_service; ?>">
		<ul>
			<li><a href="<?php echo $contact; ?>"><i class="icon-phone"></i> <?php echo $text_contact; ?></a></li>
			<li><a href="<?php echo $return; ?>"><i class="icon-mail-reply-all"></i> <?php echo $text_return; ?></a></li>
			<li><a href="<?php echo $sitemap; ?>"><i class="icon-sitemap"></i> <?php echo $text_sitemap; ?></a></li>
		</ul>
	</nav>
  </div>
  <div class="one fourth">
    <h3><i class="icon-magic icon-2x"></i> <?php echo $text_extra; ?></h3>
	<nav class="nav vertical black" title="<?php echo $text_extra; ?>">
		<ul>
			<li><a href="<?php echo $manufacturer; ?>"><i class="icon-building"></i> <?php echo $text_manufacturer; ?></a></li>
			<li><a href="<?php echo $voucher; ?>"><i class="icon-tags"></i> <?php echo $text_voucher; ?></a></li>
			<li><a href="<?php echo $affiliate; ?>"><i class="icon-smile"></i> <?php echo $text_affiliate; ?></a></li>
			<li><a href="<?php echo $special; ?>"><i class="icon-star-empty"></i> <?php echo $text_special; ?></a></li>
		</ul>
	</nav>
  </div>
  <div class="one fourth">
    <h3><i class="icon-user icon-2x"></i> <?php echo $text_account; ?></h3>
	<nav class="nav vertical pink" title="<?php echo $text_account; ?>">
		<ul>
		<li><a href="<?php echo $account; ?>"><i class="icon-user"></i> <?php echo $text_account; ?></a></li>
		<li><a href="<?php echo $order; ?>"><i class="icon-folder-open-alt"></i> <?php echo $text_order; ?></a></li>
		<li><a href="<?php echo $wishlist; ?>"><i class="icon-gift"></i> <?php echo $text_wishlist; ?></a></li>
		<li><a href="<?php echo $newsletter; ?>"><i class="icon-envelope-alt"></i> <?php echo $text_newsletter; ?></a></li>
		</ul>
	</nav>
  </div>
</div>
<hr/>
<div id="powered"><?php echo $powered; ?></div>
</div></div>

<script type="text/javascript" src="catalog/view/theme/elastic/groundwork/js/groundwork.all.js"></script>
</body></html>