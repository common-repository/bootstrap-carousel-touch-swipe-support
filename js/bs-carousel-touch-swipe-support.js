
/*jQuery anonymous function calls*/
(function($) {

/*
 * =============================================================================
 * =============================================================================
 * =============================================================================
 * =============================================================================
 * =============================================================================
 * =============================================================================
 * =============================================================================
 * Document Ready
 * =============================================================================
 * =============================================================================
 * =============================================================================
 * =============================================================================
 * =============================================================================
 * =============================================================================
 * =============================================================================
 */

$(function() {

/*
 * =============================================================================
 * Touch Support for Bootstrap 3 carousel using jQuery Mobile
 * =============================================================================
 * =============================================================================
 */

if( $('.carousel').length ){

  $( '.carousel' ).on( 'swipeleft', qt_carousel_swipeleft );
	$( '.carousel' ).on( 'swiperight', qt_carousel_swiperight );

  function qt_carousel_swipeleft( event ){
		$(this).carousel('next');
  }

	function qt_carousel_swiperight( event ){
		$(this).carousel('prev');
  }

}

/*
 * =============================================================================
 * End: Document Ready
 * =============================================================================
 * =============================================================================
 */

});


/*
 * =============================================================================
 * =============================================================================
 * =============================================================================
 */

})(jQuery);
