@extends('lienquan::frontend.master')

@section('main')
<div class="container">
        <div class="sa-lprod">
            <div class="sa-lpmain">
                <div class="sa-lsnmain clearfix">
                    <div class="sa-ttacc">
                        <div class="sa-ttactit clearfix">
                            <h1 class="sa-ttacc-tit"><span class="title-acc-view">Mua Acc Lien Quan </span>Acc #{{$lienquan->id}} - Rank : {{$lienquan->rank_name}}</h1>
                            <ul class="sa-ttactul">
                                                                <li class="sa-ttac-pri">{{number_format($lienquan->gia -$lienquan->gia*$lienquan->giamgia/100)}}<sup>đ</sup></li>
                                <li class="sa-ttac-btn"><a class="ac-buy-acc" href="javascript:;" title="Mua ngay" data-id="646" type="lq">MUA NGAY</a></li>
                                                            </ul>
                        </div>
                        <ul class="sa-ttacc-tabs clearfix" role="tablist">
                            <li class="active" role="presentation">

                                <a href="#ct-trang-phuc" role="tab" data-toggle="tab">
                                    TRANG PHỤC
                                        <span>{{$lienquan->count_skins}}</span>
                                </a>

                            </li>
                            <li role="presentation">
                                <a href="#ct-tuong" role="tab" data-toggle="tab">
                                    TƯỚNG
                                        <span>{{$lienquan->count_champs}}</span> - Còn <span>{{$lienquan->ip}}</span> Vàng
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#ct-ngoc-bo-tro" role="tab" data-toggle="tab">
                                    NGỌC HỖ TRỢ
                                        <span>{{$lienquan->diemngoc}}</span>
                                </a>
                            </li>
               
                            
                                                    

                                                            <li role="presentation">
                                    <a href="#ct-ngoc-bo-tro" role="tab" data-toggle="tab">
                                       TÀI KHOẢN LOẠI C
                                    </a>
                                </li>
                                        
                            
                    </ul>
  

    <div class="alert alert-warning" role="alert">
		<div class="row text-center">
			<div class="col-xs-12 col-md-12">
    			Acc dư 5 viên đá quý, full tướng gần full skin cực vip nhé anh em.    		</div>
		</div>
	</div>


                                                    
<ul class="show_info">                                                                    
                                                                    <li>
                                        <img src="/lienquan_temp/images/crop/20308858271232501_5321_1.jpg?65fff" alt="img champ">
                                    </li>
                                                                    <li>
                                        <img src="/lienquan_temp/images/crop/20308858271232501_5321_2.jpg?65fff" alt="img champ">
                                    </li>
                                                                    <li>
                                        <img src="/lienquan_temp/images/crop/20308858271232501_5321_3.jpg?65fff" alt="img champ">
                                    </li>
                                                                    <li>
                                        <img src="/lienquan_temp/images/crop/20308858271232501_5321_4.jpg?65fff" alt="img champ">
                                    </li>
                                                                    <li>
                                        <img src="/lienquan_temp/images/crop/20308858271232501_5321_5.jpg?65fff" alt="img champ">
                                    </li>
                                         
                                			  					
</ul>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                       
                                                         
                    </div>
                                        <div class="sa-ttmore">
                        <h2 class="sa-ttmoretit">ACC CÙNG ĐƠN GIÁ</h2>




<div class="sa-lpcol">
	<div class="sa-lpi">
	    		<img src="/lienquan_temp/images/price-percent-br-2.png" class="promotion_label">
		<span class="text_promotion">
			<b>-50%</b>
		</span>
				<a class="sa-lpimglq" href="/acc-lien-quan-646.html">
			<div class="sa-lpcode">
			    <img src="/lienquan_temp/images/star-green.png" class="vip-icon">			    
				Acc #646 - Dư 5 Đá Quý			
			</div>
			<div class="sa-lpping">
				<img src="/lienquan_temp/images/crop/20308858271232501_5321_1.jpg?65fff" alt="mua acc646">
			</div>
		</a>
		<div class="sa-lpbott clearfix">
			<div class="sa-rate">
				<p class="sa-cash">
				    <span class="price_promotion">
				    2.000.000<sup>đ</sup>
				    </span>
					1.000.000<sup>đ</sup>				
				</p>
			</div>
			<div class="gg-info">
				<div class="gg-lpbif">
					<p class="hero"> Tướng: 81</p>
					<p class="skin"> Trang phục: 200</p>
				</div>
				<div class="gg-lpbpri">
					<p class="hero">
						Vàng: 6000	
					</p>
					<p class="skin">
						Điểm ngọc: 90					</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="sa-rank">
				<p class="sa-lpbpice">
					Cao Thủ 
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




           
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection