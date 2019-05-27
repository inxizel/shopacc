$(document).ready(function() {
    $('#skinFilter').on('change', function(){
        var item;
        if(item === '')
            item = $(".dropdown[data-filter='trang-phuc'] ul.typeahead li.active").data('value');
        else 
            item = item + ", " + $(".dropdown[data-filter='trang-phuc'] ul.typeahead li.active").data('value');
        skin_str = item;
        
        $(".dropdown[data-filter='trang-phuc'] button").html(skin_str);
        $(".dropdown[data-filter='trang-phuc']").toggleClass("open");
    });
    $('#champFilter').on('change', function(){
        var item = $(".dropdown[data-filter='tim-theo-tuong'] ul.typeahead li.active").data('value');
        champ_str = item;
       
        $(".dropdown[data-filter='tim-theo-tuong'] button").html(item);
        $(".dropdown[data-filter='tim-theo-tuong']").toggleClass("open");
    });
  
});

