<style type="text/css">
#autor{margin:0;position: fixed;bottom:0px;left:0px;clear:both;color:#ddd;font-family:Arial, Helvetica, sans-serif;font-size:8px;z-index:0;text-align:left;}#autor p{margin:0;padding:0;}#autor a{color:#ddd;font-family:Arial, Helvetica, sans-serif;font-size:8px;text-decoration:none;}#autor a:hover{color:#fff;}
</style>
<?php $sys = "</div><script>
$(function() {
$( '#autor_info' ).dialog({
autoOpen: false,
show: {
effect: 'blind',
duration: 1000
},
hide: {
effect: 'explode',
duration: 1000
}
});
$( '#opener' ).click(function() {
$( '#autor_info' ).dialog( 'open' );
});
});
</script>
<script> $(function() { $( '#autor_info' ).dialog({ position: { my: 'center', at: 'top+240px', of: window, } }); }); </script>
<script> $(function() { $( '#autor_info' ).dialog({ width: 700, }); }); </script>
<div id='autor_info' title='Design Studio WWW' style='text-align:justify;'>
	<p>
		<a href='http://www.graphic-studio.net/'><img src='http://www.dswww.pl/templates/dswww/images/logo.png'/ alt='Tworzenie stron WWW - GS'></a><br/>
	</p>
	<p>
		Images: <a href='http://www.holztreppen-konrad.de/' title='konrad  holztreppen'>konrad holztreppen</a>
	</p>
</div>
<div id='autor'><button id='opener' style='background:none; border:none; font-size:10px; color:#cdcdcd; padding:0px; margin:0px;'>Author</button></div>
"; ?>



