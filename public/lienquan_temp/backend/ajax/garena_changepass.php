<?php 
	//load file config
	include "../../../config.php";
	//load model
	include "../../../application/model.php";
	//load controller
	include "../../../application/controller.php";

	class garena_changepass extends controller{
		public function __construct(){
			parent::__construct();
			//---------
  
  
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            $new_password = addslashes($_POST['newpassword']);
        
            //Random pass
            $rand = rand(1111,9999);
            $new_password = $new_password.$rand;
            
            $res = $this->change($username,$password,$new_password); // post api get json
            
            $result = json_decode($res->text);
            
            if(!empty($result->status)){
                // Get du lieu API thanh cong
                $status = $result->status;
                $email = $result->email;
                $email_v = $result->email_v;
                $phone = $result->phone;
                $message = $result->message;
                $date = date("Y-m-d H:i:s");
                $this->model->execute("INSERT INTO garena (status,username,old_pass,new_pass,email,email_v,phone,note,date) VALUES ('".$status."','".$username."','".$password."','".$new_password."','".$email."','".$email_v."','".$phone."','".$message."','".$date."')");

                $arr = array('status'=>$status,'username' =>$username,'password' =>$password,'newpassword' =>$new_password,'email'=>$email,'phone'=>$phone,'message'=>$message);
                
                
            }else{
                // Khong get duoc du lieu API hoặc timeout
                $this->model->execute("INSERT INTO garena (status,username,old_pass,note,date,handling) VALUES (-1,'".$username."','".$password."','".$message."','".$date."',1)");
                $arr = array('status'=>-1,'username' =>$username,'password' =>$password,'newpassword' =>$new_password,'message'=>"Time out.");
            }
            echo json_encode($arr);
        }else{exit;}
        
		}
		
		
        function change($username,$passwword,$newpassword) {
        	$post = '{
            	"username" : "'.$username.'",
            	"password" : "'.$passwword.'",
            	"new_password" : "'.$newpassword.'",
            	"agent" : "dungnc"
            }';
        	$url = 'http://api-garena.tk/api/changePass';
        	$headers = array(
        		'Content-Type: application/json',
        	);
        	$curl = new cURL($headers);
        	$curl->post($url, $post);
        	$res = new stdClass();
            $res->status = $curl->getStatus();
	        $res->text = $curl->getText();
            return $res;
        }

	}
	new garena_changepass();


    class cURL {
    	private $headers;
    	private $cookie_file;
    	private $rescode;
    	private $text;
    	function __construct($headers = array(), $cookie_file = 'cook') {
    		$this->headers = $headers;
    		$this->cookie_file=dirname(__FILE__) . "/" . $cookie_file . '.txt';
    		$this->rescode = 200;
    	}
    	
    	function get($url) {
    		$ch = curl_init($url);	
    		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
    		curl_setopt($ch, CURLOPT_HEADER, 0);
    		curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookie_file);
    		curl_setopt($ch, CURLOPT_COOKIEJAR, $this->cookie_file);
    		curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
    		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    		//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
    		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    		$this->text = curl_exec($ch);
    		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    		$this->rescode = $httpcode;
    		curl_close($ch);
    	}
    	function post($url, $data) {
    		$ch = curl_init($url);
    		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
    		curl_setopt($ch, CURLOPT_HEADER, 0);
    		curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookie_file);
    		curl_setopt($ch, CURLOPT_COOKIEJAR, $this->cookie_file);
    		curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
    		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($ch, CURLOPT_POST, 1);
    		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    		// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
    		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    		$this->text = curl_exec($ch);
    		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    		if(curl_errno($ch) == 28) $httpcode = 403;
    		$this->rescode = $httpcode;
    		curl_close($ch);
    	}
    	public function getText()
    	{
    		return $this->text;
    	}
    	public function getStatus()
    	{
    		return $this->rescode;
    	}
    }
	
 ?>