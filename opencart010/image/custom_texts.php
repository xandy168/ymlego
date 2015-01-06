<!--some sql requests-->
<?php
global $config;
$theme_options = $config->get('bioproduct_general');

global $registry;
$user = $registry->get('user');
?>

UPDATE `oc_product_description` SET `description` = '&lt;p&gt;What it does:&lt;/p&gt;\r\n\r\n&lt;p&gt;Fusion Weight Loss contains scientifically researched ingredients to support&lt;/p&gt;\r\n\r\n&lt;p&gt;· Healthy weight loss&lt;/p&gt;\r\n\r\n&lt;p&gt;· Normal body composition&lt;/p&gt;\r\n\r\n&lt;p&gt;· Healthy metabolic function&lt;/p&gt;\r\n\r\n&lt;p&gt;· Energy production&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\nHow it works:&lt;/p&gt;\r\n\r\n&lt;p&gt;It works by&lt;/p&gt;\r\n\r\n&lt;p&gt;· Suppressing appetite&lt;/p&gt;\r\n\r\n&lt;p&gt;· Improving fat metabolism&lt;/p&gt;\r\n\r\n&lt;p&gt;· Supporting normal thyroid function&lt;/p&gt;\r\n\r\n&lt;p&gt;· Promoting normal blood sugar regulation&lt;/p&gt;\r\n\r\n&lt;p&gt;Recent scientific evidence demonstrates that up to 2800mg of HCA per day in divided doses for 8 weeks assists in weight management by curbing appetite and inhibiting body fat biosynthesis. Forskolin (the active constiuent of Coleus) is known to promote healthy thyroid function and stimulate fat metabolism in fat cells. Standardised Gymnema extract (equivalent to gymnemic acid 100mg per day) can promote normal blood sugar regulation (especially when combined with chromium) and improve outcomes in weight management. Cinnamon, an important Ayurvedic medicine, as a standardised extract has been shown to inhibit an enzyme called PTP-1B to support normal leptin and insulin action in maintaining healthy metabolic function and body weight.&lt;/p&gt;\r\n';
UPDATE `oc_product` SET `quantity` = '10';

CREATE TABLE IF NOT EXISTS `oc_bioproduct_products_options` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`product_id` int(11) NOT NULL,
`product_video` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM COLLATE=utf8_general_ci;

UPDATE `oc_category_description` SET `description` = '&lt;section class=&quot;slider&quot;&gt;\r\n&lt;h2 style=&quot;display:none&quot;&gt;Category description&lt;/h2&gt;\r\n\r\n&lt;div class=&quot;flexslider small&quot;&gt;\r\n&lt;ul class=&quot;slides&quot;&gt;\r\n	&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img alt=&quot;&quot; data-retina=&quot;true&quot; src=&quot;image/catalog/custom_blocks_images/slider1_sm.jpg&quot; /&gt;&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img alt=&quot;&quot; data-retina=&quot;true&quot; src=&quot;image/catalog/custom_blocks_images/slider2_sm.jpg&quot; /&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;\r\n&lt;/section&gt;\r\n\r\n&lt;div class=&quot;cleancode&quot;&gt;\r\n&lt;p&gt;Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum. et, egestas vitae, magna. Integer semper, velit ut interNam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. Nullam id justo sed labore diam diam aliquam nonumy. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. Vivamus euismod nulla vel nunc. Fusce tincidunt, justo congue egestas molestie, tortor tortor blandit erat, et scelerisque metus metus at ipsum.&lt;/p&gt;\r\n&lt;/div&gt;\r\n';
<!--//some sql requests-->


<!--header phone-->
<span><i class="icon-mobile-alt">&nbsp;</i>+1</span> 234 <span>5678900</span>

<!-- menu custom block -->
<h3>Lorem ipsum dolor</h3>
<div class="col-third">
    <img data-retina="true" width="180" height="135" src="image/catalog/custom_blocks_images/custom_block_img1.jpg" alt="">
    This is a HTML block; you can create it via admin panel. There are many blocks like this on site. They are created especially to set to everybody’s preferences. If you have any questions please make a request via our <a href="index.php?route=information/contact">contact form</a>
</div>
<div class="col-third">
    <img data-retina="true" width="180" height="135" src="image/catalog/custom_blocks_images/custom_block_img2.jpg" alt="">
    This is a HTML block; you can create it via admin panel. There are many blocks like this on site. They are created especially to set to everybody’s preferences. If you have any questions please make a request via our <a href="index.php?route=information/contact">contact form</a>
</div>
<!-- menu custom block -->

<!--welcome text-->
Welcome visitor you can <a href="index.php?route=account/login">login</a> or <a href="index.php?route=account/register">create an account</a>.

You are logged in <b>(</b> <a href="index.php?route=account/logout">Logout</a> <b>)</b>
<!--end welcome text-->

<!-- menu custom block -->
<div class="span4">
    <img src="image/catalog/custom_blocks_images/product_img-7.jpg" alt="" class="img-responsive">
</div>
<div class="custom_category_menu_text span8"> This is a HTML block; you can create it via admin panel. There are many blocks like this on site. They are created especially to set to everybody's preferences. If you have any questions please make a request via our <a class="custom_category_link" href="contact.html">contact form</a> </div>
<!-- end menu custom block -->

<!-- category page slider -->
<section class="slider">
    <h2 style="display:none">Category description</h2>
    <div class="flexslider small">
        <ul class="slides">
            <li><a href="index.php"><img data-retina="true" width="870" height="195" src="image/catalog/custom_blocks_images/slider1_sm.jpg" alt="" /></a> </li>
            <li><a href="index.php"><img data-retina="true" width="870" height="195" src="image/catalog/custom_blocks_images/slider2_sm.jpg" alt="" /></a> </li>
        </ul>
    </div>
</section>
<div class="cleancode">
    <p>Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum. et, egestas vitae, magna. Integer semper, velit ut interNam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. Nullam id justo sed labore diam diam aliquam nonumy. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. Vivamus euismod nulla vel nunc. Fusce tincidunt, justo congue egestas molestie, tortor tortor blandit erat, et scelerisque metus metus at ipsum.</p>
</div>
<!-- end category page slider -->

<!-- creative category page slider -->
<section class="slider">
    <h2 style="display:none">Category description</h2>
    <div class="flexslider small">
        <ul class="slides">
            <li><a href="index.php"><img data-retina="true" src="image/catalog/creative/slider1_sm.jpg" alt="" /></a> </li>
            <li><a href="index.php"><img data-retina="true" src="image/catalog/creative/slider2_sm.jpg" alt="" /></a> </li>
        </ul>
    </div>
</section>
<div class="cleancode">
    <p>Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum. et, egestas vitae, magna. Integer semper, velit ut interNam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. Nullam id justo sed labore diam diam aliquam nonumy. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. Vivamus euismod nulla vel nunc. Fusce tincidunt, justo congue egestas molestie, tortor tortor blandit erat, et scelerisque metus metus at ipsum.</p>
</div>
<!-- end creative category page slider -->


<!--product custom block-->
<div class="box">
    <h3>Product Custom Block</h3>
    <p>You can add your content here, like promotions<br> or some additional info</p>
    <div class="promo_box">
        <div class="middle_icon_color pull-left"><i class="icon-tag-1">&nbsp;</i></div>
        <span> <strong>Special offer: 1+1=3</strong> Get a gift!</span> </div>
    <div class="promo_box">
        <div class="middle_icon_color pull-left"><i class="icon-credit-card">&nbsp;</i></div>
        <span><strong>Free Reward Card </strong>Worth $10, $50, $100</span></div>
    <div class="promo_box">
        <div class="middle_icon_color pull-left"><i class="icon-users">&nbsp;</i></div>
        <span><a href="index.php"><strong>Join to our Club</strong></a></span></div>
    <div class="promo_box">
        <div class="middle_icon_color pull-left"><i class="icon-truck">&nbsp;</i></div>
        <span> <strong><a href="index.php">Free shipping</a></strong></span> </div>
</div>
<!--end product custom block-->

<!--static image-->
<a href="index.php?route=product/category&amp;path=20">
    <img data-retina="true" width="1600" height="497" alt="" src="image/catalog/custom_blocks_images/static-banner.jpg">
</a>
<!--end static image-->

<!-- footer copyright -->
&copy; 2014 <a href="index.php"><span class="custom_color">Medstore</span></a>. All Rights Reserved.

<!-- footer socials -->
<a href="https://www.facebook.com/" target="_blank" class="tooltip-top" data-original-title="Facebook"><i class="icon-Facebook">&nbsp;</i></a>
<a href="https://twitter.com/" target="_blank" class="tooltip-top" data-original-title="Twitter"><i class="icon-twitter-bird">&nbsp;</i></a>
<a href="//www.linkedin.com/" target="_blank" class="tooltip-top" data-original-title="Linkedin"><i class="icon-linkedin">&nbsp;</i></a>
<a href="https://pinterest.com" target="_blank" class="tooltip-top" data-original-title="Pininterest"><i class="icon-pinterest">&nbsp;</i></a>
<a href="//www.google.com/" target="_blank" class="tooltip-top" data-original-title="Google"><i class="icon-gplus">&nbsp;</i></a>
<!-- end footer socials -->

<!--product tab custom block-->
<p>Quisque tincidunt lorem eu augue vestibulum a tincidunt arcu blandit. Curabitur rhoncus viverra sapien, et dapibus urna dignissim aliquam. Integer a tortor et elit condimentum luctus sed et risus. Sed ut nisl leo. Morbi vestibulum pharetra mi sit amet iaculis. Nullam commodo, sapien eu fringilla mattis, neque nulla euismod ipsum, ut mollis nulla ante et nibh. Pellentesque scelerisque ultricies ante quis ultricies. Nulla faucibus accumsan diam, sit amet lacinia lacus porttitor ac. Duis mollis interdum nisl et sodales.</p>
<p>Phasellus quis erat libero. Sed aliquet hendrerit arcu, at sagittis eros consectetur dapibus. Nulla pharetra lectus ut ligula elementum eleifend at at eros. Aliquam diam felis, mollis eu congue nec, euismod vel felis. Vivamus eleifend mollis rhoncus. Praesent at sem at tortor lacinia sodales congue non ipsum. Nullam hendrerit, nisl non rhoncus lacinia, velit neque interdum orci, non mollis lectus neque sit amet erat. Ut convallis nulla in urna sagittis ornare. </p>
<!--end product tab custom block-->


<!--payment icons-->
   <img data-retina="true" width="30" height="19" src="image/catalog/payment_icons/payment1.png" class="tooltip-top" data-original-title="Paypal" alt="">
   <img data-retina="true" width="30" height="19" src="image/catalog/payment_icons/payment2.png" class="tooltip-top" data-original-title="Visa" alt="">
   <img data-retina="true" width="30" height="19" src="image/catalog/payment_icons/payment3.png" class="tooltip-top" data-original-title="Mastercard" alt="">
   <img data-retina="true" width="30" height="19" src="image/catalog/payment_icons/payment4.png" class="tooltip-top" data-original-title="American-Express" alt="">
   <img data-retina="true" width="30" height="19" src="image/catalog/payment_icons/payment5.png" class="tooltip-top" data-original-title="Discover" alt="">
<!--end payment icons-->

<!--revolution new lifestore-->
    <ul>
        <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"   data-saveperformance="off"  data-title="Slide"  data-link="index.php?route=product/category&amp;path=20">
            <img src="image/revolution/slider1_1.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <div class="tp-caption lfl fadeout  rs-parallaxlevel-1"
                 data-x="-200"
                 data-y="0"
                 data-speed="1000"
                 data-start="500"
                 data-easing="Power3.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 1;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider1_3.png"> </div>
            <div class="tp-caption lfr fadeout  rs-parallaxlevel-2"
                 data-x="1000"
                 data-y="50"
                 data-speed="1000"
                 data-start="1000"
                 data-easing="Power3.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 1;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider1_4.png"> </div>
            <div class="tp-caption lfb fadeout  rs-parallaxlevel-3"
                 data-x="300"
                 data-y="400"
                 data-speed="1000"
                 data-start="1500"
                 data-easing="Power3.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider1_2.png"> </div>
            <div class="tp-caption slider-text1  randomrotate rs-parallaxlevel-0"
                 data-x="450"
                 data-y="70"
                 data-speed="500"
                 data-start="1500"
                 data-easing="Power3.easeInOut"
                 data-splitin="chars"
                 data-splitout="none"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Let food be </div>
            <div class="tp-caption slider-text2  sfl rs-parallaxlevel-0"
                 data-x="500"
                 data-y="200"
                 data-speed="500"
                 data-start="2500"
                 data-easing="Power3.easeInOut"
                 data-splitin="line"
                 data-splitout="none"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">thy medicine </div>
            <div class="tp-caption slider-text3  sfr rs-parallaxlevel-0"
                 data-x="700"
                 data-y="210"
                 data-speed="500"
                 data-start="3000"
                 data-easing="Power3.easeInOut"
                 data-splitin="line"
                 data-splitout="none"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">and medicine </div>
            <div class="tp-caption slider-text4  randomrotate rs-parallaxlevel-0"
                 data-x="600"
                 data-y="270"
                 data-speed="500"
                 data-start="3500"
                 data-easing="Power3.easeInOut"
                 data-splitin="chars"
                 data-splitout="none"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">be thy food </div>
        </li>
        <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"   data-saveperformance="off"  data-title="Slide" data-link="index.php?route=product/category&amp;path=20_67_68">
            <img src="image/revolution/slider2_1.jpg"  alt="fullslide2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <div class="tp-caption lfr fadeout  rs-parallaxlevel-9"
                 data-x="1000"
                 data-y="0"
                 data-speed="1000"
                 data-start="500"
                 data-easing="Power3.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 1;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider2_2.png"> </div>
            <div class="tp-caption lft fadeout  rs-parallaxlevel-1"
                 data-x="700"
                 data-y="0"
                 data-speed="1000"
                 data-start="1000"
                 data-easing="Power3.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 1;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider2_3.png"> </div>
            <div class="tp-caption lfl fadeout  rs-parallaxlevel-8"
                 data-x="20"
                 data-y="500"
                 data-speed="1000"
                 data-start="1500"
                 data-easing="Power3.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider2_4.png"> </div>
            <div class="tp-caption customin  fadeout  rs-parallaxlevel-1"
                 data-x="1150"
                 data-y="700"
                 data-speed="2000"
                 data-start="2500"
                 data-customin="x:500;y:-1000;opacity:1;"
                 data-easing="Sine.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider2_5.png"> </div>

            <div class="tp-caption slider-text1  randomrotate rs-parallaxlevel-0"
                 data-x="0"
                 data-y="70"
                 data-speed="500"
                 data-start="2500"
                 data-easing="Power3.easeInOut"
                 data-splitin="words"
                 data-splitout="words"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Health food</div>
            <div class="tp-caption slider-text3  sft rs-parallaxlevel-0"
                 data-x="250"
                 data-y="200"
                 data-speed="500"
                 data-start="3000"
                 data-easing="Power3.easeInOut"
                 data-splitin="line"
                 data-splitout="none"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">is the key</div>
            <div class="tp-caption slider-text4  randomrotate rs-parallaxlevel-0"
                 data-x="100"
                 data-y="280"
                 data-speed="500"
                 data-start="3500"
                 data-easing="Power3.easeInOut"
                 data-splitin="words"
                 data-splitout="words"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">to healthy living</div>
        </li>
        <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"   data-saveperformance="off"  data-title="Slide"  data-link="index.php?route=product/category&amp;path=20_26">
            <img src="image/revolution/slider3_1.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <div class="tp-caption lfl fadeout  rs-parallaxlevel-9"
                 data-x="-550"
                 data-y="0"
                 data-speed="1000"
                 data-start="500"
                 data-easing="Power3.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 1;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider3_3.png"> </div>
            <div class="tp-caption lfr fadeout  rs-parallaxlevel-8"
                 data-x="1000"
                 data-y="50"
                 data-speed="1000"
                 data-start="1000"
                 data-easing="Power3.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 1;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider3_2.png"> </div>
            <div class="tp-caption lfb fadeout  rs-parallaxlevel-3"
                 data-x="200"
                 data-y="400"
                 data-speed="1000"
                 data-start="1500"
                 data-easing="Power3.easeInOut"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5;"><img src="image/revolution/dummy.png" alt="" data-lazyload="image/revolution/slider3_4.png"> </div>
            <div class="tp-caption slider-text1  skewfromleft rs-parallaxlevel-0"
                 data-x="400"
                 data-y="60"
                 data-speed="500"
                 data-start="1500"
                 data-easing="Power3.easeInOut"
                 data-splitin="word"
                 data-splitout="none"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Health</div>
            <div class="tp-caption slider-text2  skewfromright  rs-parallaxlevel-0"
                 data-x="500"
                 data-y="210"
                 data-speed="500"
                 data-start="2500"
                 data-easing="Power3.easeInOut"
                 data-splitin="line"
                 data-splitout="none"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">is not appreciated </div>
            <div class="tp-caption slider-text3  skewfromleft rs-parallaxlevel-0"
                 data-x="830"
                 data-y="190"
                 data-speed="500"
                 data-start="3000"
                 data-easing="Power3.easeInOut"
                 data-splitin="word"
                 data-splitout="none"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">until</div>
            <div class="tp-caption slider-text4  skewfromright  rs-parallaxlevel-0"
                 data-x="600"
                 data-y="270"
                 data-speed="500"
                 data-start="3500"
                 data-easing="Power3.easeInOut"
                 data-splitin="line"
                 data-splitout="none"
                 data-elementdelay="0.1"
                 data-endelementdelay="0.1"
                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Sickness comes</div>
        </li>
    </ul>
<!--end revolution new lifestore-->

<!--pin it button product page-->
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<script type="text/javascript">
    (function(d){
        var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
        p.type = 'text/javascript';
        p.async = true;
        p.src = '//assets.pinterest.com/js/pinit.js';
        f.parentNode.insertBefore(p, f);
    }(document));
</script>
<a href="//pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="beside">
    <img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt="" />
</a>
<!--end pin it button product page-->

<!--google map-->
<iframe style="width:100%; height: 400px; margin: 0; border: 0; overflow:hidden;" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=New+York,+NY,+United+States&amp;aq=1&amp;oq=new&amp;sll=37.0625,-95.677068&amp;sspn=51.754532,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;t=m&amp;z=10&amp;ll=40.714353,-74.005973&amp;output=embed"></iframe><br /><small><a target="_blank" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=New+York,+NY,+United+States&amp;aq=1&amp;oq=new&amp;sll=37.0625,-95.677068&amp;sspn=51.754532,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;t=m&amp;z=10&amp;ll=40.714353,-74.005973" style="text-align:left">View Larger Map</a></small>
<!--end google map-->


<!--********************************************************************PAGES-->

<!--about us page-->
        <div>
            <img src="image/catalog/custom_blocks_images/about_us_img.jpg" alt=""><br>
            <br>
            <br>
            <div class="row">
                <div class="span6">
                    <h3>OUR COMPANY</h3>
                    <p>Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam erat volutpat. Nulla porttitor tortor at nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis.</p>
                    <ul class="styled-list arrow">
                        <li><strong>Donec et mi eu massa ultrices scelerisque. </strong></li>
                        <li><strong> Nullam ac nisi non eros gravida venenatis sollicitudin lobortis </strong></li>
                    </ul>
                    <p>Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis.</p>
                </div>
                <div class="span6">
                    <h3>COMPANY ABILITIES</h3>
                    <div class="progress-label">Cum sociis natoque penatibus et magnis </div>
                    <div class="progress">
                        <div class="bar" data-width="80" ></div>
                    </div>
                    <div class="progress-label">Maecenas eu enim in lorem</div>
                    <div class="progress">
                        <div class="bar" data-width="60" ></div>
                    </div>
                    <div class="progress-label">Suspendisse fermentum posuere lectus</div>
                    <div class="progress">
                        <div class="bar" data-width="40" ></div>
                    </div>
                    <div class="progress-label">Fusce vulputate nibh egestas orci</div>
                    <div class="progress">
                        <div class="bar" data-width="25" ></div>
                    </div>
                    <br>
                </div>
            </div>
            <h2>Our team</h2>
            <div class="row animate-delay-outer">
                <div class="span3">
                    <div class="thumbnail team-member-box">
                        <img src="image/catalog/custom_blocks_images/team_members_img.jpg" alt="" class="border animate-delay scale">
                        <div class="info">
                            <div class="name">John Smith</div>
                            <div class="position">Designer and Developer</div>
                            <div class="divider"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, adipiscing diam, sit amet dictum sem nisi ut sapien. </p>
                            <br>
                            <a href="index.php" class="icon-Facebook icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-twitter-bird icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-pinterest icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-linkedin icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-youtube icon-color squared">&nbsp;</a>
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <div class="thumbnail team-member-box">
                        <img src="image/catalog/custom_blocks_images/team_members_img-02.jpg" alt="" class="border animate-delay scale">
                        <div class="info">
                            <div class="name">Jodie Smith</div>
                            <div class="position">Designer and Developer</div>
                            <div class="divider"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, adipiscing diam, sit amet dictum sem nisi ut sapien. </p>
                            <br>
                            <a href="index.php" class="icon-Facebook icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-twitter-bird icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-pinterest icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-linkedin icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-youtube icon-color squared">&nbsp;</a>
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <div class="thumbnail team-member-box">
                        <img src="image/catalog/custom_blocks_images/team_members_img-03.jpg" alt="" class="border animate-delay scale">
                        <div class="info">
                            <div class="name">John Foster</div>
                            <div class="position">Designer and Developer</div>
                            <div class="divider"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, adipiscing diam, sit amet dictum sem nisi ut sapien. </p>
                            <br>
                            <a href="index.php" class="icon-Facebook icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-twitter-bird icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-pinterest icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-linkedin icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-youtube icon-color squared">&nbsp;</a>
                        </div>
                    </div>
                </div>
                <div class="span3">
                    <div class="thumbnail team-member-box">
                        <img src="image/catalog/custom_blocks_images/team_members_img-04.jpg" alt="" class="border animate-delay scale">
                        <div class="info">
                            <div class="name">Mike Anderson</div>
                            <div class="position">Designer and Developer</div>
                            <div class="divider"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, adipiscing diam, sit amet dictum sem nisi ut sapien. </p>
                            <br>
                            <a href="index.php" class="icon-Facebook icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-twitter-bird icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-pinterest icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-linkedin icon-color squared">&nbsp;</a>&nbsp;
                            <a href="index.php" class="icon-youtube icon-color squared">&nbsp;</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

<!--end about us page-->

<!--delivery page-->
        <div>
            <div class="row">
                <div class="span5"><img src="image/catalog/custom_blocks_images/delivery_img.jpg" alt="" class="border img-rounded"></div>
                <div class="span7">
                    <h3>ORDER CONFIRMATION</h3>
                    <p>Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam erat volutpat. Nulla porttitor tortor at nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis.</p>
                    <ul class="styled-list arrow">
                        <li><strong>Nulla ornare. Nulla libero. </strong></li>
                        <li><strong> Donec et mi eu massa ultrices scelerisque. </strong></li>
                        <li><strong> Nullam ac nisi non eros gravida venenatis sollicitudin lobortis </strong></li>
                    </ul>
                    <p>Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis.</p>
                </div>
            </div>
            <br>
            <br>
            <div class="line"></div>
            <br>
            <br>
            <div class="row">
                <div class="span6">
                    <h3>DELIVERY OPTIONS</h3>
                    <p><strong>Free Delivery.</strong> Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. </p>
                    <p><strong>Standard Mainland Delivery.</strong> Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae.</p>
                    <p><strong>Express Delivery. </strong>Mauris lacinia lectus sit amet felis. Aliquam erat volutpat. Nulla porttitor tortor at nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor.</p>
                    <br>
                    <p><a href="index.php" class="btn_small button">more info</a> </p>
                </div>
                <div class="span6">
                    <h3>RETURNS AND EXCHANGES</h3>
                    <p>Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam erat volutpat. Nulla porttitor tortor at nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis.</p>
                    <ul class="styled-list arrow">
                        <li><strong>Nulla ornare. Nulla libero. </strong></li>
                        <li><strong> Donec et mi eu massa ultrices scelerisque. </strong></li>
                        <li><strong> Nullam ac nisi non eros gravida venenatis sollicitudin lobortis </strong> </li>
                    </ul>
                </div>
            </div>

        </div>
<!--end delivery page-->



<!--custom block in Blog listing-->
<div class="block">
    <div class="block-content">
        <div class="block-title"><h2>Text Widget</h2></div>
        <p>Maecenas eu enim in lorem scelerisque auctor. Ut non erat. Suspendisse fermentum posuere lectus. Fusce vulputate nibh egestas orci. Aliquam lectus. Morbi eget dolor ullamcorper massa pellentesque sagittis. Morbi sit amet quam. </p>
    </div>
</div>
<!--end custom block in Blog listing-->

<!--post content-->
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Cum sociis non erat. Suspendisse fermentum posuere lectus. Fusce vulputate nibh egestas orci. Aliquam lectus. Morbi eget dolor ullamcorper massa pellentesque sagittis. Morbi sit amet quam. </p>
<div class="blockquote"><i class="icon-quote-left-1"></i>
    <div>
        <p>Fusce eu dui. Integer vel nibh sit amet turpis vulputate aliquet. Phasellus id nisi vitae odio pretium aliquam. Pellentesque a leo. Donec consequat lectus sed felis. Quisque vestibulum massa. Nulla ornare. Nulla libero. Donec et mi eu massa ultrices scelerisque. Nullam ac nisi non eros gravida v, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu dictum justo urna et mi. Integer dictum est vitae sem. </p>
        <p><span class="color-light">- Mauris aliquet ultricies ante, non faucibus </span></p>
    </div>
</div>
<p>Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae commodo orci nisi et sem. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam erat volutpat. Nulla porttitor tortor at nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis, mi risus sagittis odio, vel ultrices enim sem ut pede. Aenean quam. Nulla neque purus, ullamcorper nec, eleifend at, fermentum ut, turpis. Mauris et ligula quis erat dignissim imperdiet. Integer ligula magna, dictum et, pulvinar non, ultricies ac, nibh. </p>
<div class="post-tags"><i class="icon-tag-1">&nbsp;</i><a href="index.php">Web Design</a>, <a href="index.php">Wordpress</a>, <a href="index.php">Animation</a></div>
<!--end post content-->

<!--twitter data-tweet-limit="2"-->
<div class="block">
    <div class="block-content">
        <div class="block-title">Latest Tweets</div>
        <a class="twitter-timeline" data-widget-id="375593032344563712"
           height="300"
           data-dnt="true"
           data-theme="light"
           data-link-color="orangered"
           data-screen-name="themeforest"
           data-aria-polite="assertive"
           data-chrome="noheader nofooter noborders noscrollbar transparent">
            &nbsp;
        </a>
    </div>
</div>
<!--end twitter-->
<!------------------------------------------------------------------------------new pages-->


<div class="fb-post" style="overflow-x: auto; max-width: 100%;" data-href="https://www.facebook.com/olga.chegryntseva/posts/231431907046200">
    <div class="fb-xfbml-parse-ignore">
        <a href="https://www.facebook.com/olga.chegryntseva/posts/231431907046200">Post</a> by <a href="https://www.facebook.com/olga.chegryntseva">Snezanna Borisova</a>.
    </div>
</div>

<div>


</div>


<!--welcome slider-->
    <div class="carousel-testimonials">
        <div class="quotes">“</div>
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, magnis dis parturient nibh egestas orci. Aliquam lectus. Morbi eget dolor ullamcorper massa pellentesque sagittis. Morbi sit amet quam. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi.</p>
                    <p><span>John Doe, Manager</span></p>
                </li>
                <li>
                    <p>Etiam vel odio a urna sagittis pharetra in nec orci. Phasellus volutpat eu lorem non rhoncus. Aenean elementum turpis ac justo posuere ultricies. Donec in orci erat. Duis bibendum euismod tortor quis placerat.</p>
                    <p><span>John Smith, Director of Marketing </span></p>
                </li>
                <li>
                    <p>Morbi pharetra ac tellus sed blandit. Sed consequat felis nec nulla euismod imperdiet. Sed id feugiat diam. Aenean purus dui, imperdiet vitae sollicitudin at, vehicula ut quam. Quisque sodales diam nec pellentesque faucibus. Donec volutpat rutrum metus, vel ullamcorper urna rhoncus laoreet.</p>
                    <p><span>Jodie Smith, Designer and Developer</span></p>
                </li>
            </ul>
        </div>
    </div>
<!--end welcome slider-->

<!--contacts-->
        <h3 class="title"><i class="icon-vcard">&nbsp;</i>Contact Info</h3>

        <div class="cleancode footer_contact_info">
            <ul class="icons">
                <li><i class="icon-phone">&nbsp;</i><strong>CONTACT PHONE:</strong><br>
                    321321321, 321321321, 321321321</li>
                <li><i class="icon-mobile-alt">&nbsp;</i><strong>CELL PHONE:</strong><br>
                    123123123,  123123123, 321321321</li>
                <li><i class="icon-email">&nbsp;</i><strong>E-MAIL ADDRESSES:</strong><br>
                    <a href="mailto:sales@mydomain.com">SALES@MYDOMAIL.COM</a> <br>
                    <a href="mailto:info@mydomain.com">INFO@MYDOMAIN.COM</a> </li>
                <li><i class="icon-skype">&nbsp;</i><strong>SKYPE:</strong><br>
                    TESTS.SHOP,   SHOPPING.TEST</li>
            </ul>
        </div>
<!--end contacts-->


<!--about us-->
        <h3 class="title"><i class="icon-briefcase">&nbsp;</i>About <span class="theme_color">Medstore</span></h3>

        <div class="cleancode">
            <p><strong>Fusce eu dui. Integer vel nibh sit amet turpis vulputate aliquet.</strong> Phasellus id tesque a leo. Donec consequat lectus sed felis. Quisque vestibulum massa. Nulla ornare. Nulla libero.</p>
            <p>Nullam ac nisi non eros gravida venenatis. tesque, libero massa dapibus dui, eu dictum justo urna et mi. Integer dictum est vitae sem.</p>
            <p>Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros</p>
        </div>
<!--end about us-->

<!--html content in Contacts Popup-->
<div class="span6">
    <div class="row">
        <div class="span3">
            <ul class="icons">
                <li><i class="icon-call">&nbsp;</i><strong>CONTACT PHONE:</strong><br>
                    321321321, 321321321 </li>
            </ul>
        </div>
        <div class="span3">
            <ul class="icons">
                <li><i class="icon-mobile-alt">&nbsp;</i><strong>CELL PHONE:</strong><br>
                    123123123,  123123123 </li>
            </ul>
        </div>
    </div>
</div>
<div class="span6">
    <div class="row">
        <div class="span3">
            <ul class="icons">
                <li><i class="icon-mail-1">&nbsp;</i><strong>E-MAIL ADDRESSES:</strong><br>
                    <a href="mailto:sales@mydomain.com">SALES@MYDOMAIL.COM</a> <br>
                    <a href="mailto:info@mydomain.com">INFO@MYDOMAIN.COM</a> </li>
            </ul>
        </div>
        <div class="span3">
            <ul class="icons">
                <li><i class="icon-skype">&nbsp;</i><strong>SKYPE:</strong><br>
                    TEST.SHOP,   SHOP.TEST </li>
            </ul>
        </div>
    </div>
</div>

<!--end html content in Contacts Popup-->

<!--layout panel -->
<div id="themeDemos"><a><span class="arrow"> <i class="icon-up-2"></i> <i class="icon-down-2"></i> </span> theme demos </a>
    <div class="demoViewsOuter">
        <div class="demoViews">
            <div class="item" data-img="image/panel/01.jpg" data-title="Creative Layout">
                <img src="image/panel/themedemos0.jpg" alt="">
                <div class="title">CREATIVE</div>
                <a class="launch launch_creative" href="http://www.tonytheme.com/buyshop/demo">LAUNCH</a>
            </div>
            <div class="item" data-img="image/panel/themedemos1-big.jpg" data-title="Lifestore Layout">
                <img src="image/panel/themedemos1.jpg" alt="">
                <div class="title">LIFESTORE</div>
                <a class="launch launch_lifestore" href="http://www.tonytheme.com/buyshop/demo-lifestore/">LAUNCH</a>
            </div>
            <div class="item" data-img="image/panel/themedemos2-big.jpg" data-title="Medstore Layout">
                <img src="image/panel/themedemos2.jpg" alt="">
                <div class="title">MEDSTORE</div>
                <a class="launch launch_medstore" href="http://www.tonytheme.com/buyshop/demo-medstore/">LAUNCH</a>
            </div>
            <div class="item" data-img="image/panel/themedemos3-big.jpg" data-title="Cosmetic Layout">
                <img src="image/panel/themedemos3.jpg" alt="">
                <div class="title">COSMETIC</div>
                <a class="launch launch_cosmetic" href="http://www.tonytheme.com/buyshop/demo-cosmetic/">LAUNCH</a>
            </div>


            <div class="item non-active" data-img="image/panel/themesoon-big-01.jpg" data-title="Kidsland Layout (html version)">
                <img src="image/panel/themesoon01.jpg" alt="">
                <div class="title">
                    Kidsland<br>
                    <small class="html_version">(html version)</small>
                </div>


                <a class="launch launch_kidsland" href="http://www.tonytheme.com/buyshop/soon/kidsland/">LAUNCH</a>
            </div>
            <div class="item non-active" data-img="image/panel/themesoon-big-02.jpg" data-title="Decorhouse Layout (html version)">
                <img src="image/panel/themesoon02.jpg" alt="">
                <div class="title">Decorhouse<br>
                    <small class="html_version">(html version)</div>
                <a class="launch launch_decorhouse" href="http://www.tonytheme.com/buyshop/soon/decoration/">LAUNCH</a>
            </div>
            <div class="item non-active" data-img="image/panel/themesoon-big-03.jpg" data-title="Diamond Layout (html version)">
                <img src="image/panel/themesoon03.jpg" alt="">
                <div class="title">Diamond<br>
                    <small class="html_version">(html version)</div>
                <a class="launch launch_diamond" href="http://www.tonytheme.com/buyshop/soon/jewelry/lifestore_jewelry.jpg">LAUNCH</a>
            </div>
            <div class="item non-active" data-img="image/panel/themesoon-big-04.jpg" data-title="Shopsecret Layout (html version)">
                <img src="image/panel/themesoon04.jpg" alt="">
                <div class="title">Shopsecret<br>
                    <small class="html_version">(html version)</div>
                <a class="launch launch_shopsecret" href="http://www.tonytheme.com/buyshop/soon/lingerie/">LAUNCH</a>
            </div>
            <div class="item non-active" data-img="image/panel/themesoon-big-05.jpg" data-title="Hightech Layout (html version)">
                <img src="image/panel/themesoon05.jpg" alt="">
                <div class="title">Hightech<br>
                    <small class="html_version">(html version)</div>
                <a class="launch launch_hightech" href="http://www.tonytheme.com/buyshop/soon/hightech/">LAUNCH</a>
            </div>
            <div class="item non-active" data-img="image/panel/themesoon-big-06.jpg" data-title="Sportage Layout (html version)">
                <img src="image/panel/themesoon06.jpg" alt="">
                <div class="title">Sportage<br>
                    <small class="html_version">(html version)</div>
                <a class="launch launch_sportage" href="http://www.tonytheme.com/buyshop/soon/sportage">LAUNCH</a>
            </div>
        </div>
    </div>
    <div class="demoView" style="display: none;"><img src="image/panel/themedemos1-big.jpg" alt="">
        <div class="title">LIFESTORE</div>
    </div>
</div>

<!--end layout panel -->
