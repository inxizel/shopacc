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

  	<form action="{{route('lienquan.uploadImages')}}" class="dropzone" id="myDropzone">
	  @csrf
	  <input type="hidden" name="lienquan_id" value="{{$id}}">
	  <div class="fallback">
	    <input name="file" type="file" multiple />
	  </div>
	</form>
	<button type="button" class="btn btn-primary btn-block mg-b-10 btn-add" id="btn-add"><i class="fa fa-send Save-10"></i> Add New Images</button>


    <div class="br-section-wrapper" >
      <div class="row">
      	@foreach($images as $row)
        <div class="col-md-6 col-xl-4">
          <div class="d-flex bg-gray-200 ht-600 pos-relative align-items-center">
            <image src="/storage/{{$row->image}}" width="100%"/>
          </div><!-- d-flex -->
        </div><!-- col-4 -->  
        @endforeach      
      </div><!-- row -->
    </div><!-- br-section-wrapper -->
</div> 
@endsection
@section('style')
	{{-- Dropzone --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">

	<style type="text/css" media="screen">
		.dropzone {
		border: 2px dashed #0087F7;
		border-radius: 5px;
		background: white;		

		}
	</style>
		
@endsection

@section('script')
	{{-- Dropzone --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
	<script>
		Dropzone.options.myDropzone = {
		    maxFileSize : 4,
		    parallelUploads : 10,
		    uploadMultiple: true,
		    autoProcessQueue : false,
		    addRemoveLinks : true,
		    init: function() {
		        var submitButton = document.querySelector("#btn-add")
		        myDropzone = this;
		        submitButton.addEventListener("click", function() {
		            myDropzone.processQueue(); 
		        });
		        
		    },
		};
	</script>
@endsection