<?php 
	//load file config
	include "../../../config.php";
	//load model
	include "../../../application/model.php";
	//load controller
	include "../../../application/controller.php";

	class ajax_mylineChart extends controller{
		public function __construct(){
			parent::__construct();
			//---------
  
			
            if(isset($_POST['agent']) &&  $_POST['agent'] == 'chidungplus'){  
               
                //$shop = addslashes($_POST['shop']);
                // Start date
                $date = date("d-m-Y",mktime(0, 0, 0, date("m")  , date("d")-20, date("Y")));
                // End date
                $end_date = date("Y-m-d");
    
    			$arr = $this->model->fetch("select * from thecao");
            
                while (strtotime($date) <= strtotime($end_date)) {
                    $thanhcong = 0;
                    $thatbai = 0;
                    $thanhcong1 = 0;
                    $thatbai1 = 0;
                    $thanhcong2 = 0;
                    $thatbai2 = 0;
                    foreach($arr as $row)
            		{
            		    if(strtotime($row['date']) > strtotime($date) && strtotime($row['date']) < strtotime("+1 day", strtotime($date)) && $row['trangthai'] == 1 )  
            		    $thanhcong = $thanhcong + $row['menhgia']; // thành công trong 1 ngày
            		    if(strtotime($row['date']) > strtotime($date) && strtotime($row['date']) < strtotime("+1 day", strtotime($date)) && $row['trangthai'] == 2 )  
            		    $thatbai = $thatbai + $row['menhgia']; // that bai trong mot ngay
            		    
            		  //  if(strtotime($row['date']) > strtotime($date) && strtotime($row['date']) < strtotime("+1 day", strtotime($date)) && $row['trangthai'] == 1 && $row['shop'] == 7)  
            		  //  $thanhcong1 = $thanhcong1 + $row['menhgia']; // thành công trong 1 ngày
            		  //  if(strtotime($row['date']) > strtotime($date) && strtotime($row['date']) < strtotime("+1 day", strtotime($date)) && $row['trangthai'] == 2 && $row['shop'] == 2)  
            		  //  $thatbai1 = $thatbai1 + $row['menhgia']; // that bai trong mot ngay
            		    
            		  //  if(strtotime($row['date']) > strtotime($date) && strtotime($row['date']) < strtotime("+1 day", strtotime($date)) && $row['trangthai'] == 1 && $row['shop'] == 8)  
            		  //  $thanhcong2 = $thanhcong2 + $row['menhgia']; // thành công trong 1 ngày
            		  //  if(strtotime($row['date']) > strtotime($date) && strtotime($row['date']) < strtotime("+1 day", strtotime($date)) && $row['trangthai'] == 2 && $row['shop'] == 1)  
            		  //  $thatbai2 = $thatbai2 + $row['menhgia']; // that bai trong mot ngay
            		}
            		
            		$lbl01[] = $thanhcong;
            // 		$lbl02[] = $thanhcong1;
            // 		$lbl03[] = $thanhcong2;
            		$lbl04[] = $thatbai;
            		$label[] = date("d-m",strtotime($date));
         
            		$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
            		// tăng date lên 1 ngày
            	}

                $arr = array('lbl01' =>$lbl01,'lbl02' =>$lbl02,'lbl03' =>$lbl03,'lbl04' =>$lbl04,'label'=>$label);
            }else 
                $arr = array('err' =>'Xin đừng phá hệ thống em!');
            echo json_encode($arr);
            
		}
	}
	new ajax_mylineChart();

	
 ?>