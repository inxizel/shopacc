
<!DOCTYPE html>
<html lang="vi">
<head> 
    <title>Shop Acc Liên Quân Giá Rẻ - lienquanmobile.shop</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link rel="icon" href="/lienquan_temp/images/favicon.ico">
    <!-- Css -->
    <link href="/lienquan_temp/vendor/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/lienquan_temp/css/style2.css?65fff" rel="stylesheet" />
    
    <!-- Js -->
    <script src="/lienquan_temp/vendor/jquery/jquery-1.11.2.js"></script>
     <!-- Sweetalert -->
    <script src="/lienquan_temp/vendor/sweetalert/sweetalert.min.js?65fff"></script> 
    <!-- Bootstrap-->
    <script src="/lienquan_temp/vendor/bootstrap/bootstrap.js"></script>
    <!-- wmuSlider -->
    <script src="/lienquan_temp/vendor/wmuSlider/jquery.wmuSlider.js"></script>
    <!-- Goi y text input form -->
    <!--<script src="/vendor/typeahead/bootstrap3-typeahead.min.js"></script>  -->
    
    <script src="/lienquan_temp/js/functions.js?65fff"></script>



    @yield('style')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-99024459-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-99024459-3');
    </script>
	<!-- Global site tag (gtag.js) - Google Ads: 963635797 --> 	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-963635797"></script> 	<script> 	  window.dataLayer = window.dataLayer || []; 	  function gtag(){dataLayer.push(arguments);} 	  gtag('js', new Date());  	  gtag('config', 'AW-963635797'); 	</script>
    <script>
        function setCookie(cname,cvalue,exdays) {
          var d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          var expires = "expires=" + d.toGMTString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        
        function getCookie(cname) {
          var name = cname + "=";
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(';');
          for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
              c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }
    
    
    </script>
</head>
<body>
    <div class="">
    <div class="sa-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" >
    <div class="container">
        <span class="sa-imn"><i class="glyphicon glyphicon-menu-hamburger"></i></span>
        <a class="sa-logo" href="{{ route('lienquan.home') }}" title=""><img src="/lienquan_temp/images/logo.png" alt="shop lien quan" data-pin-nopin="true"></a>
        <ul class="sa-menu clearfix">
            <!--<li><a class ="guide_buy" href="/">Trang chủ</a></li>-->
            <li><a href="{{route('lienquan.huongdanmua')}}" title="Hướng dẫn">Hướng Dẫn Mua Acc</a></li>                
            <li><a href="{{route('lienquan.dieukhoan')}}" title="Hướng dẫn">Điều Khoản</a></li> 
            <li><a href="{{$fb}}" title="Hướng dẫn" target="_blank">Facebook</a></li>
            <li><a class="nap_tien" href="{{route('lienquan.naptien')}}" title="Nạp tiền" >Nạp Thẻ</a></li>
            <!--<li><a class="btn btn-success" href="/nap-tien.html" title="Nạp tiền">Nạp tiền <sup class="sa-ic sa-mnhot"></sup></a></li>-->
        </ul>
        <div class="sa-user">
            <div class="dropdown">
                <button class="sa-usmoney btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><strong><span style="color:#00deff;"></span> {{number_format($member['cash_lienquan'])}} VNĐ</strong></button>
                <ul class="sa-usmenu dropdown-menu dropdown-menu-right">
		<li><a href="{{route('lienquan.naptien')}}" title="Nạp thẻ" style="color:#FFC107;">Nạp thẻ cào</a></li>
                    <li><a href="{{route('lienquan.lichsumua')}}" title="Tài khoản đã mua">Tài khoản đã mua</a></li>
                 
                    <!--<li><a href="/oauth?logout" title="Đăng xuất">Đăng xuất</a></li>-->
                </ul>
            </div>
        </div>    </div>
</div>    <div class="container">
        <div class="row" >
            <div class="col-md-4 topHeader">

          <div class="sa-bntbox">
            <ul class="sa-bnnav-tabs" role="tablist">
              <li role="presentation" class="active"><a role="tab" data-toggle="tab">NẠP THẺ</a></li>
              
            </ul>
            <div class="sa-bntcbox tab-content">
              <div role="tabpanel" class="tab-pane active" id="nap-the">
                  
                <div class="sa-bntabbox mcustomscrollbar">
                    <div role="tabpanel" class="tab-pane active" id="topnap">
                  
                                <form id="card-charing-home">
                  <ul class="sa-topthe">
                    <li >
                      <select name="card_type_id" class="form-control">
                        <option value="">Chọn loại thẻ</option>
                                    <option value="1">Viettel</option>
                                    <option value="2">Mobiphone</option>
                                    <option value="4">Vinaphone</option>
                                    <!--<option value="6">Vietnammobile</option>-->
                                    <!--<option value="9">Megacard</option>-->
                                    <!--<option value="4">FPT Gate</option>-->
                                    <!--<option value="10">Oncash</option>-->
                                    <!--<option value="7">Zing</option>-->
                                    <!--<option value="8">Bit</option>-->
                                    <!--<option value="5">VTC (vcoin)</option>-->
                      </select>
                
                    </li>
                    
                    
                    <li >
                      <select name="amount" class="form-control">
                        <option value="">Chọn mệnh giá</option>
                                    <option value="10000">10.000</option>
                                    <option value="20000">20.000</option>
                                    <option value="30000">30.000</option>
                                    <option value="50000">50.000</option>
                                    <option value="100000">100.000</option>
                                    <option value="200000">200.000</option>
                                    <option value="300000">300.000</option>
                                    <option value="500000">500.000</option>
                                    <option value="1000000">1.000.000</option>
                      </select>

                      
                      
                    </li>
                    
                    
                    
                    <li><input type="text" name="seri" class="form-control" placeholder="Nhập Serial"></li>
                    <li><input type="text" name="pin" class="form-control" placeholder="Nhập mã thẻ"></li>
                    <li class="sa-librow clearfix">
                      <span><div href="javascript:;" class="submit-nap-the-home sa-lib-nap btn btn-danger">NẠP THẺ</div></span>
                    </li>
                  </ul>
                </form>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        </div><div class="col-md-8 testimonials">
    <div class="test-inner">
		<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s" style="height: 282px;">
			<div class="wmuSliderWrapper">
				<article style=""> 
					<div class="banner-wrap">
						<img src="/lienquan_temp/images/bechanh.png" alt=" " class="img-responsive">
						<p>Shop bán acc liên quân rẻ nhất mà tôi từng gặp. Có dịp tôi sẽ ủng hộ tiếp!</p>
						<h4># Bé Chanh</h4>
					</div>
				</article>
				<article style=""> 
					<div class="banner-wrap">
						<img src="/lienquan_temp/images/kinas.png" alt=" " class="img-responsive">
						<p>Chủ shop nhiệt tình, chất lượng trên cả tuyệt vời. Đây đúng là shop acc số 1 Việt Nam!</p>
						<h4># Kinas</h4>
					</div>
				</article>
				<article style="">
					<div class="banner-wrap">
						<img src="/lienquan_temp/images/hhcc.png" alt=" " class="img-responsive">
						<p>Mua acc ở đây tôi không có gì phàn nàn, giá quá rẻ mà acc lại quá ngon! Sẽ tiếp tục ủng hộ nếu có cơ hội.</p>
						<h4># HHCC</h4>
					</div>
				</article>
			</div>
		<ul class="wmuSliderPagination"><li><a href="#" class="">0</a></li><li><a href="#" class="wmuActive">1</a></li><li><a href="#" class="">2</a></li></ul></div>
	</div>
	<script>
		$('.example1').wmuSlider();         
	</script> 
</div>        </div>
    </div>
    <div class="sa-banner">
        <div class="container">
            <div class= "row" style="padding-top:20px;">
    <div class="col-sm-12 lable-random text-center">
        <a href="/">
            <label class="license-premium" style="background-color: #A78D61;"><img src="/lienquan_temp/images/phuquy.png" class="icon-box-random"><b class="premium">Acc Liên Quân Ngon Giá Rẻ</b>
            </label>
        </a>
        <a href="/random.html">
            <label class="license-premium" style="background-color: #c50024;"><img src="/lienquan_temp/images/shuffle.png" class="icon-box-random"><b class="premium">Thử vận may với acc Random Vip</b>
            </label>
        </a>
        
    </div>
</div><div class= "row">
            <div class="col-sm-12 running">
                <marquee scrollamount="4"><img width="36" height="36" src="/lienquan_temp/images/run.gif" longdesc="36"> 

<a href="#" target="_blank"><span class="text-success">Người dùng 249002</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 249002</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 61545</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 61545</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 253800</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 144079</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 253800</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 249528</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 249528</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 249528</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 242729</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 249528</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 249528</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 163543</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 163543</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 250943</span></a> đã mua một tài khoản giá 50,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 250943</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 250943</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 163543</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

  

<a href="#" target="_blank"><span class="text-success">Người dùng 248980</span></a> đã mua một tài khoản giá 9,000<sup class="text-muted">đ</sup>     </i></span>

    </marquee>
            </div>
        </div>        </div>
    </div>
    <div class="sa-mainsa">
    <div class="container">
        <div class="sa-lprod">
            @yield('filter')


<div class="sa-lpmain">

@yield('main')


</div>
            <div id="loading" style="display: none; text-align: center; margin-bottom: 30px;">
                <img src="/lienquan_temp/images/run.gif">
            </div>
        </div>
    </div>
</div><div class="sa-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12 col-md-12 sa-lshare">
               
                <ul>
                    <li>
                        <a class="sa-ic sa-lsfb" href="" title="Fanpage"></a>
                        <p><span>Facebook</span></p>
                    </li>
                    <li class="sa-hidden">
                        <a class="sa-ic sa-lstw" href="" title=""></a>
                        <p><span>Twitter</span></p>
                    </li>
                    <li>
                        <a class="sa-ic sa-lsgg" href="/dieukhoan.php" title=""></a>
                        <p><span>Điều khoản</span></p>
                    </li>
                    
                    <li class="sa-hidden">
                        <a class="sa-ic sa-lsyou" href="#" title=""></a>
                        <p><span>Youtube</span></p>
                    </li>
                    
                    <div class="clear"></div>
                </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>

    <!-- Điều hướng mobile -->
    <div id="chat_adm">
            <a href="/nap-tien.html" class="chat_fb_adm" <img src="/lienquan_temp/images/ic_comment.png" alt = "comment icon"/>Nạp thẻ tại đây</a>
        
    </div>
</div>


<script type="text/javascript">

(function($){
    $(document).ready(function () {
        initEvent();
    });
})(window.jQuery);


function initEvent() {
    $(document).on("click", ".ac-buy-acc",function(e) {
        e.preventDefault();
        /*Hỏi điều khoản*/
        // swal({
        // title: "Xác nhận mua.",
        // text: "Bạn bấm xác nhận mua nghĩa là đồng ý với điều khoản của chúng tôi.",
        // icon: "warning",
        // buttons: true,
        // dangerMode: true,
        // })
        // .then((willDelete) => {
        // if (willDelete) {
        
        
        
        $.post('/lien-quan/ajax/buy', {
         accId: $(this).attr('data-id'), type :$(this).attr('type')
        }, function(res) {
        
        
         if (res.error) {
          if (res.isNotInput) {
           swal({
             title: 'OPP, Warning!',
             text: res.message, 
             icon: "warning",
             buttons: 'Done',
             dangerMode: true,
            })
          }
          if (res.isNotLogin) {
           swal({
             title: 'OPP, Warning!',
             text: res.message, 
             icon: "warning",
             buttons: 'Done',
             dangerMode: true,
            })
          }
          if (res.isNotMoney) {
           swal({
             title: "OPP, Warning!",
             text: res.message,
             icon: "warning",
             buttons: true,
             dangerMode: true,
            })
            .then((willDelete) => {
             if (willDelete) {
              document.location.href = "{{route('lienquan.naptien')}}";
             } else {
              swal("Bạn có thể nạp tiền tại mục nạp thẻ!");
             }
            });
          }
          if (res.isNotLive) {
           swal({
             title: "OPP, Warning!",
             text: res.message, 
             icon: "warning",
             buttons: true,
             dangerMode: true,
            })
            .then((willDelete) => {});
          }
          if (res.isBuyMax) {
           var show = "Hệ thống đã bán quá nhiều loại acc này trong hôm nay, vui lòng mua loại acc khác!";
           swal({
             title: "Dừng lại.",
             text: show,
             icon: "warning",
             buttons: true,
             dangerMode: true,
            })
            .then((willDelete) => {});
          }
          if (res.isBuyMaxUser) {
           var show = "Bạn chỉ được mua " + res.solanmua + " trong một ngày!";
           swal({
             title: "Dừng lại.",
             text: show,
             icon: "warning",
             buttons: true,
             dangerMode: true,
            })
            .then((willDelete) => {});
          }
          if (res.isNotActive) {
                swal({
                  title: "OPP, Warning!",
                  text: res.message,
                  icon: "warning",
                  buttons: "Xác nhận",
                  dangerMode: true,
                })
                .then((willDelete) => {
                });
            }
          if (res.isLoginFalse) {
           swal({
             title: "Tài khoản đã bị đổi mật khẩu.",
             text: "Tài khoản đã bị đổi mật khẩu, vui lòng mua acc khác!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
            })
            .then((willDelete) => {});
          }
          if (res.isException) {
           swal({
             title: "Hệ thống đang bận.",
             text: "Hệ thống đang quá tải, vui lòng bấm mua ngay sau 5s nữa!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
            })
            .then((willDelete) => {});
          }
          
         } else {
          swal({
            title: "Bạn đã mua thành công.",
            text: res.message, 
            icon: "success",
            buttons: true,
            dangerMode: true,
           })
           .then((willDelete) => {
            if (willDelete) {
             document.location.href = '{{route('lienquan.lichsumua')}}';
            } else {
             swal("Bạn có thể xem lại thông tin acc tại lịch sử mua!");
            }
           });
        
         }
        
        }, "json");
        
        
        // /*Hỏi điều khoản*/              
        // } else {
        // swal("Bạn mới hủy giao dịch!");
        // }
        // });
    
    
    
    });
    /*End buy */
    $('.submit-nap-the-page').click(function(e) {
        $('#card-charing-page .submit-nap-the-page').text('Loading ...');
        $.post('{{route('lienquan.charing')}}', $('#card-charing-page').serialize(), function(res) {
                    
              

             if (res.err) {
                  
                  swal({
                        title: "Thông báo!",
                        text: res.msg,
                        icon: "warning",
                        buttons: 'Xác nhận',
                        dangerMode: true,
                    })
                    .then((willDelete) => {});

              } else {
                  swal({
                        title: "Thông báo!",
                        text: res.msg,
                        icon: "success",
                        buttons: 'Xác nhận',
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        document.location.reload();
                    });

              }
              

          }, "json").complete(function() {
              $('#card-charing-page .submit-nap-the-page').text('Nạp Thẻ');
          });
    });
    $('.submit-nap-the-home').click(function(e) {
        $('#card-charing-home .submit-nap-the-home').text('Loading ...');
        $.post('{{route('lienquan.charing')}}', $('#card-charing-home').serialize(), function(res) {
                    
              if (res.err) {
                  
                  if (res.isNotLogin) {
                   swal({
                     title: "Bạn chưa đăng nhập.",
                     text: "Bấm xác nhận để đăng nhập bằng facebook!",
                     icon: "warning",
                     buttons: true,
                     dangerMode: true,
                    })
                    .then((willDelete) => {
                     if (willDelete) {
                      document.location.href = '/oauth?login';
                     } else {
                      swal("Bạn vừa hủy đăng nhập!");
                     }
                    });
                  }else{
                  
                  swal({
                        title: "Thông báo!",
                        text: res.msg,
                        icon: "warning",
                        buttons: 'Xác nhận',
                        dangerMode: true,
                    })
                    .then((willDelete) => {});
                      
                  }

              } else {
                  swal({
                        title: "Thông báo!",
                        text: res.msg,
                        icon: "success",
                        buttons: 'Xác nhận',
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        document.location.reload();
                    });

              }
            
          }, "json").complete(function() {
              $('#card-charing-home .submit-nap-the-home').text('Nạp Thẻ');
          });
          
    });
 
    /*Show model view random*/
    $(document).on("click", ".xem-acc-random",function(e) {
        
        swal({
            title: "Thông báo!",
            text: "Tài khoản Random. Thử vận may ngay nào!",
            icon: "success",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {});
    });
    /*End show view*/


    $('.sa-ptbtn').click(function (e) {
        e.preventDefault();

        $('#popImg .modal-title').html($(this).closest('li').find('label').html());

        $('.sa-popimg img').attr('src', $(this).attr('data-src'));

        $('#popImg').modal('show');

    });
    

}

</script>

@yield('js')

</body>
</html>
