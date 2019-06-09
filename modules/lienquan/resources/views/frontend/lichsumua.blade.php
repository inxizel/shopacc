@extends('lienquan::frontend.master')

@section('main')
<div class="sa-lprod">
    <div class="sa-lpmain">
        <div class="sa-lsnmain clearfix">
            <h1 class="sa-ls-tit">Tài khoản đã mua</h1>
           
            <div class="sa-ls-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Tài khoản</td>
                            <td>Mật khẩu</td>
                            <td>Loại Nick</td>
                            <td>Giá</td>
                            <td>Ngày mua</td>
                        </tr>
                    </thead>
                    <tbody>
                    @if(empty($lichsumuas))
						<tr><td colspan="6" class="text-center"><p>Bạn chưa mua acc nào.</p></td></tr>
					@else
						@foreach($lichsumuas as $lichsumua)
							<tr>
								<td>{{$lichsumua['taikhoan']}}</td>
								<td>{{$lichsumua['matkhau']}}</td>
								<td>{{$lichsumua['loainick']}}  #{{$lichsumua['idacc']}}</td>
								<td>{{number_format($lichsumua['gia'])}} vnd</td>
								<td>{{$lichsumua['created_at']}}</td>
							</tr>
						@endforeach
					@endif
                   </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection