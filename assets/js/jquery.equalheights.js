/*!
 * Simple jQuery Equal Heights
 *
 * Copyright (c) 2013 Matt Banks
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 1.6.0 (MODIFIED)
 */

$("[am-Grid='table'] [am-Row]").attr('data-equal','[am-Col] .wrap');

(function($) {

    $.fn.equalHeights = function() {
        var maxHeight = 0,
            $this = $(this);

        $this.each( function() {
            var height = $(this).innerHeight();
            var cWidth = $(this).width();
            var pWidth = $(this).offsetParent().width();
            var width  = ( 100*cWidth/pWidth );
            if ( height > maxHeight ) { maxHeight = height; }
        });

        return $this.css({'height' : maxHeight});
    };

    // auto-initialize plugin with data-equal attribute
    $('[data-equal]').each(function(){
        var $this = $(this),
            target = $this.data('equal');
        return $this.find(target).equalHeights();
    });

	// re-initialize on window resize
	$(window).resize(function(){
		$('[data-equal]').each(function(){
			var $this = $(this),
				target = $this.data('equal');
			return $this.find(target).equalHeights();
		});
	});

})(jQuery);