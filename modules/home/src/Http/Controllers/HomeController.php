<?php

namespace Zent\Home\Http\Controllers;
//namespace GuzzleHttp;

use App\Models\Module;
use Illuminate\Http\Request;
use Cookie;
use Illuminate\Support\Facades\DB;
use DataTables;
use View;

use Zent\Lienquan\Models\Lienquan;
use Zent\Member\Models\Member;

use GuzzleHttp\Client;
use Validator;

class HomeController extends Controller
{
    public function __construct()
    { 
        /**
        * Veri member
        * -chưa tồn tại
        * ---tạo mới
        * -đã tồn tại
        * ---đúng định dạng, và tồn tại trong db
        * -----login
        * ---sai định dạng trong db, cookie láo
        * -----tạo mới 
        */
        $this->middleware('auth.member');


        $uid = Cookie::get('uid');
        $member = Member::where('uid',$uid)->first();
        View::share('member', $member);
        View::share('fb','#');
    }

    public function charing(Request $request){
        $validator = Validator::make($request->all(), [
            'card_type_id' => 'required',
            'amount' => 'required'
            // ,
            // 'seri' => 'required|numeric|digits_between:11,15',
            // 'pin' => 'required|numeric|digits_between:12,15|unique:thecaos'
        ]);

        if ($validator->fails()) {
            return json_encode(array('err' => true, 'msg' => 'Thẻ bạn nhập không đúng, kiểm tra lại.'));
        }
        return 1;

        // $serial = $TxtSeri;
        // $mathe = $TxtMaThe;
        // $menhgia = $TxtAmount;

        // $client = new Client();
        // $res = $client->request('POST', 'http://127.0.0.1:8000/receive/test.php',[
            
        //         "uid"=> $uid,
        //         "name" => $name,
        //         "loaithe" => 1,
        //         "serial" => $serial,
        //         "mathe" => $mathe,
        //         "menhgia" => $menhgia,
        //         "shop" => 'shoptest' 
            
        // ]);

        // dd($res);
    }

    public function bkaver(){
        $client = new Client();
        $res = $client->request('POST', 'http://bkaver.com/ajax/charge',[
            'headers' => [ 'Content-Type' => 'application/json' ],
            'json' => [
                "uid" => 1,
                "loaithe" => 1,
                "serial" => '1000356134663b',
                "mathe" => '21355882413069443',
                "menhgia" => 100000 
            ]
        ]);
        // $url = 'http://127.0.0.1:8000';
        // $res = $client->request('GET', $url);
        return $res->getBody()->getContents();
    }

    

    public function buy(Request $request){
        if(isset($request->accId) && is_numeric($request->accId) && isset($request->type))
        {
            $id = addslashes($request->accId);
            $type = $request->type;
        }else{
            echo $arr = array('error' => true, 'isNotInput' => true,  'message' => 'Vui lòng nhập đầy đủ thông số truyền lên.');
            exit;         
        }

        $uid = Cookie::get('uid');
        $member = Member::where('uid',$uid)->first();

        $lienquan = Lienquan::where('id',$id)->first();
        $lienquan['giathuc'] = $lienquan['gia'] - $lienquan['gia']*$lienquan['giamgia']/100;

        if($lienquan['trangthai']=='off'){
            $arr = array('error' => true, 'isNotLive' => true,'message' => 'Tài khoản này đã được mua bởi người khác.');       
        }elseif($member['cash_lienquan'] < $lienquan['giathuc']){
            $arr = array('error' => true, 'isNotMoney' => true,  'message' => 'Bạn không đủ tiền trong tài khoản, hãy nạp thêm.'); 
        // kiểm tra số lượng mua tại 

        }elseif($lienquan['kichhoat'] == 'no'){
            $arr = array('error' => true, 'isNotActive' => true, 'message' => 'Tài khoản này chưa được kích hoạt bán');       
        }else{

            // $client = new Client();
            // $res = $client->request('POST', 'http://api-garena.tk/api/checkLogin',[
            //     'headers' => [ 'Content-Type' => 'application/json' ],
            //     'json' => [
            //         "username" => "",
            //         "password" => "",
            //         "agent" => "dungnc"
            //     ]
            // ]);



            if(1){ //$resJson->status == 0
                $arr = array('error' => false, 'message' => 'Bấm xác nhận để xem tài khoản + mật khẩu!'); 
                # Thêm vào lịch sử mua
                    
                # Thay đổi trạng thái và trừ tiền
                
            }elseif($resJson->status == 1){
                $arr = array('error' => true, 'isLoginFalse' => true, 'message' => 'Tài khoản đã bị đổi mật khẩu, vui lòng mua acc khác.');
                // disable account   
            }else{
                $arr = array('error' => true, 'isException' => true, 'message' => 'Hệ thống đang bận, vui lòng bấm nút mua ngay sau 5s nữa.');
            }
        }



        echo json_encode($arr);     
    }
    public function filter(Request $request)
    {

        $rank = $request->rank;

        $price = !empty($request->price) ? addslashes($request->price) : ""; // theo tien
        $order = !empty($request->order) ? addslashes($request->order) : 0; // tuong nhieu nhat


        /* rank */
        switch ($rank) {
            case '1': // all
                $rank_min = 2;
                $rank_max = 28;
                break;
            case '2': // đồng
                $rank_min = 2;
                $rank_max = 6;
                break;
            case '3': // bạc
                $rank_min = 7;
                $rank_max = 11;
                break;
            case '4': // vàng
                $rank_min = 12;
                $rank_max = 16;
                break;
            case '5': // bk
                $rank_min = 17;
                $rank_max = 21;
                break;
            case '6': // kc
                $rank_min = 22;
                $rank_max = 26;
                break; 
            case '7': // ct
                $rank_min = 27;
                $rank_max = 28;
                break;
            default: //all
                $rank_min = 2;
                $rank_max = 28;
                break;
            break;
        }
        /* gia */
        switch ($price) {
            case '1': // all
                $price_min = 0;
                $price_max = 50000;
                break;
            case '2': // đồng
                $price_min = 50000;
                $price_max = 100000;
                break;
            case '3': // bạc
                $price_min = 100000;
                $price_max = 200000;
                break;
            case '4': // vàng
                $price_min = 200000;
                $price_max = 300000;
                break;
            case '5': // bk
                $price_min = 300000;
                $price_max = 400000;
                break;
            case '6': // kc
                $price_min = 400000;
                $price_max = 500000;
                break; 
            case '7': // ct
                $price_min = 500000;
                $price_max = 1000000;
                break;
            case '8': // ct
                $price_min = 1100000;
                $price_max = 9999999999;
                break;
            default: //all
                $price_min = 0;
                $price_max = 9999999999;
                break;
            break;
        }
       

        $lienquans =  Lienquan::join('lienquanranks','lienquans.rank_id', '=', 'lienquanranks.id')
        ->select('lienquans.*', 'lienquanranks.name as rank_name')
        ->whereBetween('rank_id',[$rank_min,$rank_max])
        ->whereBetween(DB::raw('gia - gia*giamgia/100'),[$price_min,$price_max])
        ->orderBy('lienquans.id', 'desc')
        ->paginate(16);

     
        return view('lienquan::frontend.filter',['lienquans'=>$lienquans]);
    }
    public function home()
    {
        // $lienquans =  Lienquan::join('lienquanranks','lienquans.rank_id', '=', 'lienquanranks.id')
        // ->join('lienquan_images','lienquans.id', '=', 'lienquan_images.lienquan_id')
        // ->select('lienquans.*', 'lienquanranks.name as rank_name')
        // ->orderBy('lienquans.id', 'desc')
        // ->paginate(4);


        $lienquans = Lienquan::orderBy('lienquans.id', 'desc')
        ->paginate(16);
        foreach ($lienquans as $lienquan) {
            $lienquan->rank = Lienquan::join('lienquanranks','lienquans.rank_id', '=', 'lienquanranks.id')
            ->select('lienquanranks.name as rank_name')->where('lienquans.id', $lienquan->id)->first();

            $lienquan->images = Lienquan::join('lienquan_images', 'lienquans.id', '=', "lienquan_images.lienquan_id")
            ->select('lienquan_images.image as lienquan_image')->where('lienquans.id', $lienquan->id)->get();
        }

        //dd($lienquans);


        return view('lienquan::frontend.index',['lienquans'=>$lienquans]);
    }
    public function single($id){
        $lienquan = LienQuan::join('lienquanranks','lienquans.rank_id', '=', 'lienquanranks.id')
        ->select('lienquans.*', 'lienquanranks.name as rank_name')
        ->find($id);

        $lienquan->images = Lienquan::join('lienquan_images', 'lienquans.id', '=', "lienquan_images.lienquan_id")
        ->select('lienquan_images.image as lienquan_image')->where('lienquans.id', $id)->get();

        //dd($lienquan);
        //->get();
        //dd($lienquan);
        return view('lienquan::frontend.single',['lienquan'=>$lienquan]);
    }
    public function naptien(){
        return view('lienquan::frontend.naptien');
    }
    public function huongdanmua(){
        return view('lienquan::frontend.huongdanmua');
    }
    public function lichsumua(){
        return view('lienquan::frontend.lichsumua');
    }
    public function dieukhoan(){
        return view('lienquan::frontend.dieukhoan');
    }

    
}
