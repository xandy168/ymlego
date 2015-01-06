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
		<a href='http://www.graphic-studio.net/' title='Tworzenie stron WWW'>Tworzenie stron WWW</a> 
	</p>
</div>
<div id='autor'><button id='opener' style='background:none; border:none; font-size:10px; color:#888; padding:0px; margin:0px;'>Author</button></div>
"; ?>
