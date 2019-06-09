@extends('lienquan::frontend.master')

@section('main')
<div class="container">
    <div class="sa-logmain sa-themain">
        <div class="alert alert-success" role="alert">
			<div class="row">
				<div class="col-xs-12 col-md-12">
        			<h5><span style="color:red;">Nạp chậm</span>, vui lòng đợi thẻ duyệt</h5><hr>
        			<h5><a href="page/dieu-khoan.html"> Quy định </a> khi nạp thẻ.</h5><hr>
        			<h5>Nạp thẻ chờ duyệt 1-10 phút.</h5><hr>
        			<h5>Có thể nạp nhiều thẻ liên tục.</h5>
        		</div>
			</div>
		</div>
      <div class="row">
        
        
        <div class="col-md-4 col-md-4 col-md-offset-4">

          <div class="sa-logbox">
            <ul class="sa-lognav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#nap-the" role="tab" data-toggle="tab">NẠP THẺ</a></li>
              
            </ul>
            <div class="sa-logtct tab-content">
              <div role="tabpanel" class="tab-pane active" id="nap-the">
                                <form id="card-charing-page">
                  <ul>
                    <li class="sa-logse">
                      <select name="card_type_id" class="form-control">
                        <option value="">Chọn loại thẻ</option>
                                    <option value="1">Viettel - nhanh</option>
                                    <option value="2">Mobiphone - chậm</option>
                                    <option value="3">Vinaphone - chậm</option>
                                    <!--<option value="6">Vietnammobile</option>-->
                                    <!--<option value="9">Megacard</option>-->
                                    <!--<option value="4">FPT Gate</option>-->
                                    <!--<option value="10">Oncash</option>-->
                                    <!--<option value="7">Zing</option>-->
                                    <!--<option value="8">Bit</option>-->
                                    <!--<option value="5">VTC (vcoin)</option>-->
                      </select>
                
                    </li>
                    
                    
                    <li class="sa-logse">
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
                    
                    
                    
                    <li class="sa-lichek"><input type="text" name="seri" class="form-control" placeholder="Nhập Serial"></li>
                    <li class="sa-lichek"><input type="text" name="pin" class="form-control" placeholder="Nhập mã thẻ"></li>
                    <li class="sa-librow clearfix">
                      <span><div href="javascript:;" class="submit-nap-the-page sa-lib-dk btn btn-danger">NẠP THẺ</div></span>
                      <span><button type="reset" class="sa-lib-del btn btn-default">NHẬP LẠI</button></span>
                    </li>
                  </ul>
                </form>
                              </div>
            </div>
          </div>
        </div>
       
        
       
       
       
       
       
       
       
      </div>
    </div>


    <!--Show nạp-->
<div class="sa-lprod">
            <div class="sa-lpmain">
                <div class="sa-lsnmain clearfix">
                    <h1 class="sa-ls-tit">Lịch sử nạp thẻ</h1>
                    <div class="sa-ls-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>TRẠNG THÁI</td>
                                    <td>MÃ THẺ</td>
                                    <td>SERIAL</td>
                                    <td>LOẠI THẺ</td>
                                    <td>MỆNH GIÁ</td>
                                    <td>NGÀY NẠP</td>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($napthes as $napthe)
                                    <tr>
                                        @if($napthe['trangthai'] == 0)
                                        <td class="napthe-warning">
                                            {{$napthe['trangthai_string']}}
                                        </td>
                                        @elseif($napthe['trangthai'] == 1)
                                        <td class="napthe-success">
                                            {{$napthe['trangthai_string']}}
                                        </td>
                                        @elseif($napthe['trangthai'] == 2)
                                        <td class="napthe-danger">
                                            {{$napthe['trangthai_string']}}
                                        </td>
                                        @elseif($napthe['trangthai'] == 3)
                                        <td class="napthe-refuse">
                                            {{$napthe['trangthai_string']}}
                                        </td>
                                        @endif




                                        <td>{{$napthe['mathe']}}</td>
                                        <td>{{$napthe['serial']}}</td>
                                        <td>{{$napthe['loaithe_string']}}</td>
                                        <td>{{number_format($napthe['menhgia'])}} vnd</td>
                                        <td>{{$napthe['created_at']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
    <!--End show nạp-->
    
  </div>


  
@endsection
@section('style')
<style type="text/css">
    .napthe-warning{
        color: #fff!important;
        background-color: #FBC02D!important;
    }
    .napthe-success{
        color: #fff!important;
        background-color: #4caf50!important;
    }
    .napthe-danger{
        color: #fff!important;
        background-color: #f44336!important;
    }
    .napthe-refuse{
        color: #fff!important;
        background-color: #969c9c!important;
    }
</style>
@endsection