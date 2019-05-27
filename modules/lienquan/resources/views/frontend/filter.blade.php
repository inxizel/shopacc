<div class="sa-lprow clearfix">

@foreach($lienquans as $lienquan)
<div class="sa-lpcol">
	<div class="sa-lpi">
	    <img src="/lienquan_temp/images/price-percent-br-2.png" class="promotion_label" />
		<span class="text_promotion">
			<b>-{{$lienquan->giamgia}}%</b>
		</span>
		<a class="sa-lpimglq" href="/acc-lien-quan-646.html">
			<div class="sa-lpcode">
			    <img src="/lienquan_temp/images/star-green.png" class="vip-icon" />			    
			    Acc #{{$lienquan->id}}	 - Dư 5 Đá Quý			
			</div>
			<div class="sa-lpping">
				<img src="/lienquan_temp/images/crop/20308858271232501_5321_1.jpg?65fff" alt="mua acc646" />
			</div>
		</a>
		<div class="sa-lpbott clearfix">
			<div class="sa-rate">
				<p class="sa-cash">
				    <span class="price_promotion">
				    	{{number_format($lienquan->gia)}}<sup>đ</sup>
				    </span>
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
					{{$lienquan->rank_name}}	
				</p>
			</div>
			<div class="sa-info">
				<div class="sa-lpbif">
					<p class="sa-lpbpice">
						<a href="/acc-lien-quan-646.html" class="xem-acc" title="XEM ACC">XEM ACC</a>
					</p>
				</div>
				<div class="sa-lpbpri">
					<p class="sa-lpbpice">
						<a class="sa-lpbbtn ac-buy-acc" href="javascript:;" title="MUA NGAY" data-id="646" type="lq">MUA NGAY</a>
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