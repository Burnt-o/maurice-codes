
$(document).ready(function() {
    //Preloader
    function hidePreloader() {
    var spinbg = $('.spinner-background');
    spinbg.fadeOut(500);

    var spin = $('.spinner-container');
    
    spin.fadeOut(1000);
    }
    hidePreloader();
    });