@extends('lienquan::frontend.master')

@section('filter')
<div class="sa-filter text-center">
    <div class="sa-filbox">
        <div class="dropdown" data-filter="tim-theo-rank">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Tìm Theo Rank <span class="caret"></span>
            </button>
            <ul class="dropdown-menu select">
                <li onclick="rank=2;"><a href="javascript:;" class="acfiit">Rank Đồng</a></li>
                <li onclick="rank=3;"><a href="javascript:;" class="acfiit">Rank Bạc</a></li>
                <li onclick="rank=4;"><a href="javascript:;" class="acfiit">Rank Vàng</a></li>
                <li onclick="rank=5;"><a href="javascript:;" class="acfiit">Rank Bạch Kim</a></li>
                <li onclick="rank=6;"><a href="javascript:;" class="acfiit">Rank Kim Cương</a></li>
                <li onclick="rank=7;"><a href="javascript:;" class="acfiit">Rank Cao Thủ</a></li>
            </ul>
        </div>
        <div class="dropdown" data-filter="tim-theo-gia">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Tìm Theo Giá <span class="caret"></span>
            </button>
            <ul class="dropdown-menu select">
                <li onclick="price=1;"><a href="javascript:;" class="acfiit">Giá 50k</a></li>
                <li onclick="price=2;"><a href="javascript:;" class="acfiit">Từ 50k - 100k</a></li>
                <li onclick="price=3;"><a href="javascript:;" class="acfiit">Từ 100k - 200k</a></li>
                <li onclick="price=4;"><a href="javascript:;" class="acfiit">Từ 200k - 300k</a></li>
                <li onclick="price=5;"><a href="javascript:;" class="acfiit">Từ 300k - 400k</a></li>
                <li onclick="price=6;"><a href="javascript:;" class="acfiit">Từ 400k - 500k</a></li>
                <li onclick="price=7;"><a href="javascript:;" class="acfiit">Từ 500k - 999k</a></li>
                <li onclick="price=8;"><a href="javascript:;" class="acfiit">Acc vip</a></li>
            </ul>
        </div>
        <div class="dropdown" data-filter="sap-xep">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Sắp Xếp Theo <span class="caret"></span>
            </button>
            <ul class="dropdown-menu select">
                <li onclick="order=1;"><a href="javascript:;" class="acfiit">Tướng nhiều nhất</a></li>
                <li onclick="order=2;"><a href="javascript:;" class="acfiit">Giá cao nhất</a></li>
                
            </ul>
        </div>


        <button class="sa-ftbtndel btn btn-default">XÓA</button>
    </div>
</div> 
@endsection


@section('main')
<div class="sa-lprow clearfix">

@foreach($lienquans as $lienquan)
<div class="sa-lpcol">
	<div class="sa-lpi">
        @if($lienquan->giamgia != 0)
	    <img src="/lienquan_temp/images/price-percent-br-2.png" class="promotion_label" />
		<span class="text_promotion">
			<b>-{{$lienquan->giamgia}}%</b>
		</span>
        @endif
		<a class="sa-lpimglq" href="/lien-quan/acc-{{$lienquan->id}}.html">
			<div class="sa-lpcode">
			    <img src="/lienquan_temp/images/star-green.png" class="vip-icon" />			    
			    Acc #{{$lienquan->id}}	 - 
                @if($lienquan->title != ''){{$lienquan->title}} @else {{'Shop Liên Quân'}} @endif
			</div>
			<div class="sa-lpping">
                @foreach($lienquan->images as $key => $image)
                    @if($key == 0)
				    <img src="/storage/{{$image->lienquan_image}}" alt="thumb" />
                    @endif
                @endforeach
			</div>
		</a>
		<div class="sa-lpbott clearfix">
			<div class="sa-rate">
				<p class="sa-cash">
                    @if($lienquan->giamgia != 0)
				    <span class="price_promotion">
				    	{{number_format($lienquan->gia)}}<sup>đ</sup>
				    </span>
                    @endif
					{{number_format($lienquan->gia - $lienquan->gia*$lienquan->giamgia/100)}}<sup>đ</sup>				
				</p>
			</div>
			<div class="gg-info">
				<div class="gg-lpbif">
					<p class="hero"> Tướng: {{$lienquan->count_champs}}</p>
					<p class="skin"> Trang phục: {{$lienquan->count_skins}}</p>
				</div>
				<div class="gg-lpbpri">
					<p class="hero">
						Vàng: {{$lienquan->ip}}	
					</p>
					<p class="skin">
						Điểm ngọc: {{$lienquan->diemngoc}}					
					</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="sa-rank">
				<p class="sa-lpbpice">
					{{$lienquan->rank->rank_name}}	
				</p>
			</div>
			<div class="sa-info">
				<div class="sa-lpbif">
					<p class="sa-lpbpice">
						<a href="/lien-quan/acc-{{$lienquan->id}}.html" class="xem-acc" title="XEM ACC">XEM ACC</a>
					</p>
				</div>
				<div class="sa-lpbpri">
					<p class="sa-lpbpice">
						<a class="sa-lpbbtn ac-buy-acc" href="javascript:;" title="MUA NGAY" data-id="{{$lienquan->id}}" type="lq">MUA NGAY</a>
					</p>
				</div>		    
			</div>
		</div>
	</div>
</div>                                                     
@endforeach

</div>

<div class="text-center">
{{$lienquans->links()}}
</div>
@endsection
@section('js')
<script>

    

    function depTrai(str){
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
        str = str.replace(/đ/g,"d");
        str = str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
        str = str.replace(/-+-/g,"-");
        str = str.replace(/^\-+|\-+$/g,"");
        return str;
    }
    
    var page = 1, rank = 1, frame = 1, price = 0, order = 0, champ_str = "", skin_str = "";
    
    $(document).ready(function() {
        $('#skinFilter').on('change', function(){
            var item = $(".dropdown[data-filter='trang-phuc'] ul.typeahead li.active").data('value');
            skin_str = item;
            load_account_list();
            $(".dropdown[data-filter='trang-phuc'] button").html(item);
            $(".dropdown[data-filter='trang-phuc']").toggleClass("open");
        });
        $('#champFilter').on('change', function(){
            var item = $(".dropdown[data-filter='tim-theo-tuong'] ul.typeahead li.active").data('value');
            champ_str = item;
            load_account_list();
            $(".dropdown[data-filter='tim-theo-tuong'] button").html(item);
            $(".dropdown[data-filter='tim-theo-tuong']").toggleClass("open");
        });
        $(document).on('click', '.acfiit', function (e) {
            e.preventDefault();
    
            if (!$(this).closest('li').hasClass('is-multi')) {
                $(this).closest('ul').find('a.acfiitac').removeClass('acfiitac');
            }
    
            $(this).closest('li').find('i').addClass('show-remove');
            $(this).addClass('acfiitac');
    
            var _name = '';
    
            $(this).closest('ul').find('li').each(function (i) {
                if ($(this).find('a').hasClass('acfiitac')) {
                    _name += (_name === '' ? '' : ', ') + $(this).find('a').text();
                }
            });
    
            $(this).closest('.dropdown').find('.dropdown-toggle').html(_name + '<span class="caret"></span>');
    
            if ($(this).closest('li').hasClass('is-multi')) {
                return false;
            }
    
        });
    
        $(".dropdown ul.dropdown-menu.select li").click(function() {
            page = 1;
            load_account_list();
        });
    
        $('.sa-ftbtndel').click(function (e) {
            e.preventDefault();
            order = 0;
            page = 1;
            rank = 1;
            frame = 1;
            price = 0;
            champ_str = "";
            skin_str = "";
            $(".dropdown[data-filter='tim-theo-rank'] button").html("Tìm Theo Rank <span class='caret'></span>");
            $(".dropdown[data-filter='tim-theo-khung'] button").html("Tìm Theo Khung <span class='caret'></span>");
            $(".dropdown[data-filter='tim-theo-gia'] button").html("Tìm Theo Giá <span class='caret'></span>");
            $(".dropdown[data-filter='sap-xep'] button").html("Sắp Xếp Theo <span class='caret'></span>");
            $(".dropdown[data-filter='tim-theo-tuong'] button").html("Nhập tên tướng");
            $(".dropdown[data-filter='trang-phuc'] button").html("Nhập tên trang phục");
            $("#skinFilter").val('');
            $("#champFilter").val('');
            $(".txt-filter ul").empty().hide();
            load_account_list();
        });
    
        $(".dropdown-menu.filter-clothes").on('click', function(event){
            event.stopPropagation();
        });
    
        $(".sa-lpmain").on("click", "ul.pagination li", function() {
            page = $(this).text();
            
            load_account_list();
            return false
        })
    });
    
    
    function load_account_list() {
        var data_post = {page : page, rank : rank, frame : frame, price : price, order : order, champ_str : champ_str, skin_str : skin_str};
        $(".sa-lpmain").empty();
        $("#loading").show();
        $.post("/lien-quan/ajax/filter", data_post, function(data) {
            $(".sa-lpmain").html(data);
            $("#loading").hide();
            var newUri = {};
            if (rank != 1) {
                newUri.rank = depTrai(($(".dropdown[data-filter='tim-theo-rank'] button").text()).trim());
            }
            if (frame != 1) {
                newUri.khung = depTrai(($(".dropdown[data-filter='tim-theo-khung'] button").text()).trim());
            }
            if (price != 0) {
                newUri.gia = depTrai(($(".dropdown[data-filter='tim-theo-gia'] button").text()).trim()).replace("nick-", "");
            }
            if (order != 0) {
                newUri.sapxep = depTrai(($(".dropdown[data-filter='sap-xep'] button").text()).trim());
            }
            if (champ_str != "") {
                newUri.tuong = depTrai(($(".dropdown[data-filter='tim-theo-tuong'] button").text()).trim());
            }
            if (skin_str != "") {
                newUri.trangphuc = depTrai(($(".dropdown[data-filter='trang-phuc'] button").text()).trim());
            }
            
            if (page != 1) {
                newUri.page = page;
            }
            if (jQuery.isEmptyObject(newUri)) {
                history.pushState({}, null, '{{route('lienquan.home')}}');
            } else {
                history.pushState({}, null, '?' + $.param(newUri));
            }
        });
    }
</script>
@endsection