<?php

namespace Zent\Lienquan\Http\Controllers;

use Zent\Lienquan\Models\Lienquan;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use View;

use Illuminate\Support\Facades\Auth;
use Validator;

use Zent\Lienquanrank\Models\Lienquanrank;
use App\LienquanImage;


class LienquanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.user');
        $display_name = Module::getDisplayName('lienquan');
        View::share('display_name', $display_name);    
    }



    public function images($id){
        $images = LienquanImage::where('lienquan_id', $id)->get();
        return view('lienquan::backend.uploadImages',['id' => $id,'images'=>$images]);
    }
    public function uploadImages(Request $request)
    {
        


        $validator = Validator::make($request->all(), [
            'file'  => 'required|max:1',
        ]);

        if ($validator->fails()) {
            $abc =  $validator->errors()->getMessages();
            dd($abc);
        }

        $images = $request->file('file');
        $lienquan_id = $request->lienquan_id;

        $lienquan = LienquanImage::where('lienquan_id',$lienquan_id)->get();
        $count_lienquan = $lienquan->count();

        foreach ($images as $key => $value) {
            $save_id = $count_lienquan + $key + 1;
            $path = $value->storeAs('images/lienquan', $lienquan_id.'_'.$save_id.'.'.$value->extension()  );
            LienquanImage::create([
                'lienquan_id' => $lienquan_id,
                'image'      => $path
            ]);
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lienquan::backend.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $thongtin = $request->cookie('thongtin');
        $trangthai = $request->cookie('trangthai');
        $kichhoat = $request->cookie('kichhoat');
        $ranks = Lienquanrank::get();
        return view('lienquan::backend.create',['ranks'=>$ranks,'thongtin'=>$thongtin, 'trangthai'=>$trangthai,'kichhoat'=>$kichhoat ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            
            $data = array();
            parse_str($request->data, $data);

            $lienquan['loainick'] = 'LienQuan';
            $lienquan['rank_id'] = $data['rank'];
            $lienquan['season'] = $data['season'];
            $lienquan['taikhoan'] = $data['taikhoan'];
            $lienquan['matkhau'] = $data['matkhau'];
            $lienquan['count_champs'] = $data['count_champs'];
            $lienquan['count_skins'] = $data['count_skins'];
            $lienquan['count_bangngoc'] = $data['count_bangngoc'];
            $lienquan['diemngoc'] = $data['diemngoc'];
            $lienquan['gia'] = $data['gia'];
            $lienquan['giamgia'] = $data['giamgia'];
            $lienquan['ip'] = $data['ip'];
            $lienquan['champs'] = $data['champs'];
            $lienquan['skins'] = $data['skins'];
            
            if(isset($data['thongtin']) &&  $data['thongtin'] == 'on') $lienquan['thongtin'] = 1; else $lienquan['thongtin'] = 0;
        
            if(isset($data['trangthai']) &&  $data['trangthai'] == 'on') $lienquan['trangthai'] = 'on'; else $lienquan['trangthai'] = 'off';
           
            if(isset($data['kichhoat']) &&  $data['kichhoat'] == 'on') $lienquan['kichhoat'] = 'yes'; else $lienquan['kichhoat'] = 'no';
            $lienquan['user_id'] = Auth::user()->id;


            // Cookie 
            $thongtin = $lienquan['thongtin'];
            $trangthai = $lienquan['trangthai'];
            $kichhoat = $lienquan['kichhoat'];

            Lienquan::create($lienquan);

            DB::commit();
            return response()
            ->json(['err' => false, 'msg' => trans('global.create_success')])
            ->withCookie(cookie()->forever('thongtin', $thongtin))
            ->withCookie(cookie()->forever('trangthai', $trangthai))
            ->withCookie(cookie()->forever('kichhoat', $kichhoat));;
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['err' => true, 'msg' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lienquan = Lienquan::find($id);
        return view('lienquan::backend.edit', compact('lienquan', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::beginTransaction();

        try {
            $data = array();
            parse_str($request->data, $data);
            Lienquan::find($data['lienquan_id'])->update($data);

            DB::commit();
            return response()->json(['err' => false, 'msg' => trans('global.update_success')]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['err' => true, 'msg' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::beginTransaction();

        try {
            Lienquan::find($request->id)->delete();

            DB::commit();
            return response()->json([ 'err' => false, 'msg' =>  trans('global.delete_success')]);

        } catch (\Exception $e) {
            return response()->json(['err'  =>  true, 'msg' =>  $e->getMessage()]);
        }
    }



    /**
     * DataTables get list lienquan
     */
    public static function getListLienquan()
    {
        $lienquans = Lienquan::orderBy('id', 'desc')->get();

        return DataTables::of($lienquans)
            ->addIndexColumn()
            ->addColumn('action', function ($lienquan) {
                $txt = "";
    //                if ( Entrust::can(['// here']))
    //                {
                $txt .= '<button data-id="' . $lienquan->id . '" href="#" type="button" class="btn btn-success pd-0 wd-30 ht-20 btn-images" data-tooltip="tooltip" data-placement="top" title="' . trans('global.images') . '"/><i class="fa fa-puzzle-piece" aria-hidden="true"></i></button>';
    //                }

    //                if ( Entrust::can(['// here']))
    //                {
                $txt .= '<button data-id="' . $lienquan->id . '" href="#" type="button" class="btn btn-warning pd-0 wd-30 ht-20 btn-edit" data-tooltip="tooltip" data-placement="top" title="' . trans('global.edit') . '"/><i class="fa fa-pencil" aria-hidden="true"></i></button>';
    //                }

    //                if ( Entrust::can(['// here']))
    //                {
                $txt .= '<button data-id="' . $lienquan->id . '" href="#" type="button" class="btn btn-danger pd-0 wd-30 ht-20 btn-delete" data-tooltip="tooltip" data-placement="top" title="' . trans('global.delete') . '"/><i class="fa fa-trash" aria-hidden="true"></i></button>';
    //                }

                return $txt;
            })
            ->editColumn('kichhoat', function ($lienquan) {
                return $lienquan->kichhoat == "yes" ? trans('global.active_icon') : trans('global.deactive_icon');
            })
            ->editColumn('rank', function ($lienquan) {
                return Lienquanrank::find($lienquan->rank_id)->name;
            })
            ->editColumn('gia', function ($lienquan) {
                return number_format($lienquan->gia);
            })
            ->editColumn('created_at', function ($lienquan) {
                return date('H:i | d-m-Y', strtotime($lienquan->created_at));
            })
            ->editColumn('content', function ($lienquan) {
                return !is_null($lienquan->content) ? $lienquan->content : trans('global.not_updated');
            })
            ->editColumn('status', function ($lienquan) {
                return ($lienquan->status == 1) ? trans('global.show') : trans('global.hide');
            })
            ->rawColumns(['kichhoat','action'])
            ->toJson();
    }
}
