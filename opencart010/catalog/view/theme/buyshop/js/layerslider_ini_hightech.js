$(window).load(function() { /* makes sure the whole site is loaded */
    $("#status").fadeOut(); /* will first fade out the loading animation */
    $("#preloader").delay(350).fadeOut("slow"); /* will fade out the white DIV that covers the website. */
});

$(document).ready(function(){
    $('#layerslider').layerSlider({
        skinsPath : 'image/skins/',
        skin : 'borderlessdark3d',
        thumbnailNavigation : 'hover',
        showCircleTimer : false,
        showBarTimer : false,
        navStartStop: false,
        navButtons: false,
        keybNav   : false,
        cbInit      : function(element){
            $('.ls-nav-prev').append('<i class="icon-left-thin"></i>');
            $('.ls-nav-next').append('<i class="icon-right-thin"></i>')
        }
    });
});