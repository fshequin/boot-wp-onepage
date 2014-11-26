jQuery( document ).ready(function() {
    //console.log( "ready!" );
    var s = skrollr.init();

	// close the drop down if on small mobile devices after user clicks on link in dropdown
    
    if ( jQuery(window).width() <= 768 ) {
        jQuery('.navbar-collapse a').click(function () {
            jQuery('.navbar-collapse').collapse('toggle');
        });
    }
    
});