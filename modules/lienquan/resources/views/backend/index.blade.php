@extends('layout::backend.master')

@section('breadcrumb')
    <a class="breadcrumb-item active" href="{{ route('lienquan.index') }}">{{ $display_name }}</a>
    {{-- use lang in file global --}}
@endsection

@section('content')
    <div class="br-section-wrapper">
        {{-- Bg header --}}
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">
            <i class="fa fa-flag-o" aria-hidden="true"></i> &nbsp;
            @lang('global.list') {{ $display_name }}
        </h6>
        <hr> <br>

        {{-- Bg content --}}
        <div class="col-sm-2 col-md-2 pd-0">
            <button class="btn btn-info btn-block mg-b-20" onclick="window.location='{{ route('lienquan.create') }}'">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;
                @lang('global.add')
            </button>
        </div>

        <br>

        <div class="rounded table-responsive">
            <table class="table table-bordered mg-b-0" id="lienquan_table">
                <thead>
                <tr>
                    <th class="wd-5p">@lang('global.order')</th>
                    <th class="wd-10p">Số tướng</th>
                    <th class="wd-10p">Số skin</th>
                    <th class="wd-10p">Rank</th>
                    <th class="wd-10p">Điểm ngọc</th>
                    <th class="wd-10p">Giá</th>
                    <th class="wd-10p">Kích hoạt</th>
                    <th class="wd-20p">@lang('global.created_at')</th>
                    <th class="wd-15p">@lang('global.action')</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // after create cms, you need create file js, then move all contents to it.
        // please use laravel mix to manager you js
        // webpack.mix.js

        $(document).ready(function () {

            $('#lienquan_table').DataTable({
                autoWidth: true,
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: app_url + 'admin/lienquan/get_list_lienquan',
                    type: 'post'
                },
                searching: true,
                columns: [
                    {data: 'DT_RowIndex', className: 'tx-center', searchable: false},
                    {data: 'count_champs', className: 'tx-center'},
                    {data: 'count_skins', className: 'tx-center'},
                    {data: 'rank'},
                    {data: 'diemngoc', className: 'tx-center'},
                    {data: 'gia'},
                    {data: 'kichhoat', className: 'tx-center'},
                    {data: 'created_at', className: 'tx-center'},
                    {data: 'action', className: 'tx-center'},
                ],
            });

            $('#lienquan_table').on('click', '.btn-edit', function () {
                window.location.href = app_url + 'admin/lienquan/' + $(this).data('id') + '/edit';
            });

            $('#lienquan_table').on('click', '.btn-delete', function (event) {
                event.preventDefault();

                swal({
                    title: Lang.get('global.are_you_sure_to_delete'),
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#00b297',
                    cancelButtonColor: '#d33',
                    confirmButtonText: Lang.get('global.confirm'),
                    cancelButtonText: Lang.get('global.cancle')
                }).then((result) => {
                    if (result.value) {

                        $.ajax({
                            url: app_url + 'admin/lienquan/' + $(this).data('id'),
                            type: 'DELETE',
                            dataType: "JSON",
                            data: {
                                id: $(this).data('id')
                            },
                            success: function (res)
                            {
                                if (!res.err) {
                                    toastr.success(res.msg);
                                    $('#lienquan_table').DataTable().ajax.reload();
                                } else {
                                    toastr.error(res.msg);
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).on("click", ".btn-images",function(e) {
            window.location.href = app_url + 'admin/lienquan/images/' + $(this).data('id');
        });
    </script>
@endsection
