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
    // auto-initialize plugin
    $('[data-equal]').each(function(){
        var $this = $(this),
            target = $this.data('equal');
        $this.find(target).equalHeights();
    });
	$(window).resize(function(){
		$('[data-equal]').each(function(){
			var $this = $(this),
				target = $this.data('equal');
			$this.find(target).equalHeights();
		});
	});
})(jQuery);