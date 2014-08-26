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
 
$(".grid.table .row").attr('data-equal','.block');

(function($) {

    $.fn.equalHeights = function() {
        var maxHeight = 0,
            $this = $(this);

        $this.each( function() {
            var height = $(this).innerHeight();
			var width = ( 100 * parseFloat($(this).css('width')) / parseFloat($(this).parent().css('width')) ) + '%';
            if ( height > maxHeight && width != '100%' ) { maxHeight = height; }
        });

        return $this.css('height', maxHeight);
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