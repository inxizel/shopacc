(function($){
    $(document).ready(function () {
        
        if ($("#modal-ads").length > 0) {
            $('#modal-ads').modal('show');
        }
        // Show menu mobile
        $('.sa-imn').click(function(){
            $('.sa-menu').toggleClass('sa-mnshow');
        });
        
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 600) {
                $('.sa-filbox-random').addClass('sa-hdfix');
            } else {
                $('.sa-filbox-random').removeClass('sa-hdfix');
            }
        });
	});


})(window.jQuery);
