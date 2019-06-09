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