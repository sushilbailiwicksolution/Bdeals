<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		//check_isvalidated();
	}

	public function register()
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->view('include/header', $header );
		$this->load->view('register');
		$this->parser->parse('include/footer', $footer );
	}
	
	
		public function registerOtp()
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->view('include/header', $header );
		$this->load->view('register-otp');
		$this->parser->parse('include/footer', $footer );
	}
	
	public function registerFacebook()
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->view('include/header', $header );
		$this->load->view('register-facebook');
		$this->parser->parse('include/footer', $footer );
	}
	
	
	public function callCaptcha()
	{
		session_start();
		$code=rand(1000,9999);
		//$this->session->set_captcha('SaAS', $code);
		$_SESSION["code"]=$code;
		$im = imagecreatetruecolor(50, 24);
		$bg = imagecolorallocate($im, 22, 86, 165); //background color blue
		$fg = imagecolorallocate($im, 255, 255, 255);//text color white
		imagefill($im, 0, 0, $bg);
		imagestring($im, 5, 5, 5,  $code, $fg);
		header("Cache-Control: no-cache, must-revalidate");
		header('Content-type: image/png');
		imagepng($im);
		imagedestroy($im);

	}
	
		public function verify_captcha()
	{
		session_start();
		echo $_SESSION['code'];

	}
	
public function newregistration(){
		
		
$this->load->model('user_model', 'user');
$res = $this->user->registerUser();
if( strcasecmp( $res, "true" ) == 0 ){
			/****************************************Send mail code start here**************************/
//mail settings

$data = $this->user->mailSettings();

$website_url=$data[0]['website_url'];
$website_logo_url=$data[0]['website_logo_url'];
$email=$data[0]['email'];
$phone=$data[0]['phone'];



//Load email library
$this->load->library('email');
//SMTP & mail configuration





$this->email->initialize($config);



$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content for registration
$htmlContent = '<img  src="'.$website_logo_url.'"/>';
$htmlContent .= '<h3>Dear '.ucwords(strtolower($this->input->post('lb_uname'))).'</h3>';
$htmlContent .= '<p>Thank you for registering with Business Deals. It is a pleasure having you on board!</p>';
if($this->input->post('lb_owner')!=''){

$htmlContent .= '<p>You can now list your business for Sale, Joint venture, Start-Ups, Pre-rented real estate</p>';	
	
}else{
	
$htmlContent .= '<p>You can now browse your requirement from the list of businesses available for Sale, Joint Venture, Start-ups or Pre-Rented Real Estate OR Register as an investor/buyer</p>';	
}

$htmlContent .= '<p>User ID    :  '.$this->input->post('lb_email').'</p>';
$htmlContent .= '<p>Password   :  XXXXXXXX</p>';
$htmlContent .= '<p><a href='.$website_url.'>Happy Surfing on Business Deals!</a></p>';
$htmlContent .= '<p>Should you require any assistance please mail us to '.$email.' or call us at '.$phone.'.</p>';
$htmlContent .= '<p>Thanks and Regards</p>';
$htmlContent .= '<p>Team</p>';
$htmlContent .= '<p>Business Deals</p>';

$this->email->to($this->input->post('lb_email'));
$this->email->from($email,'Business Deals');
$this->email->subject('Thank you for registering with Business Deals');
$this->email->message($htmlContent);
//Send email

        

if($this->email->send()){

log_message('info', 'Email sent to '.$this->input->post('lb_email').' address');
}else{

log_message('info', 'Email not send to '.$this->input->post('lb_email').' address');
}
$otp = rand(100000,999999);
//otp email after registration
//Email content for registration
$htmlContent = '<img  src="'.$website_logo_url.'"/>';
$htmlContent .= '<h3>Dear '.ucwords(strtolower($this->input->post('lb_uname'))).'</h3>';
$htmlContent .= '<p>Thank you for signing up with Business Deals! </p>';
$htmlContent .= '<p>One time password is '.$otp.' </p>';
$htmlContent .= '<p>Please use this OTP to activate your account</p>';
$htmlContent .= '<p>Should you require any assistance please mail us to '.$email.' or call us at '.$phone.'.</p>';
$htmlContent .= '<p>Thanks and Regards</p>';
$htmlContent .= '<p>Team</p>';
$htmlContent .= '<p>Business Deals</p>';

$this->email->to($this->input->post('lb_email'));
$this->email->from($email,'Business Deals');
$this->email->subject('One time password');
$this->email->message($htmlContent);
//Send email
$this->user->InsertRegisterOtp($otp,$this->input->post('lb_email'));
        

if($this->email->send()){

log_message('info', 'Email sent to '.$this->input->post('lb_email').' address');
}else{

log_message('info', 'Email not send to '.$this->input->post('lb_email').' address');
}


				/****************************************Send mail code end here**************************/
		
			
			$this->session->set_flashdata('msg', 'Dear User! You have been successfully registered.');
			
			$validate=$this->user->validateNewCustomer(); 
			
			if($validate){
				
				//redirect('userprofile');
				redirect('register-otp');
				
			}		
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to register user ['.$this->input->post('email').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! email address already exist.');
				log_message('debug', 'Unable to register user ['.$this->input->post('email').']. Due to duplicate email address');
			}
			redirect('register');
		}
	}

	public function editUserProfile(){
		
		//for image
		$userpath = str_replace('@','',$this->session->userdata('userid'));
			
			$path = './uploads/'.$userpath.'/userimage/';
			if( !is_dir($path) ){
				mkdir($path, 0777, TRUE);
			}
			

			$config['upload_path']   = $path;
			$config['allowed_types'] = "gif|jpg|png";
			//log_message('debug', 'Uploaded Images ' .print_r($_FILES['uploadfile']['name'],true));
					
					//print_r($_FILES['uploadfile']['name']);
					
					 $dataval=$_FILES['uploadfile']['name'];
					
					//echo $dataval['0'];
			
		$uploadedFileNames = $this->uploadMedia($path, $this->reArrayFilesMultiple($_FILES['uploadfile']));//for Upload Photos	

	//die;
	//$imageval=$path.''.$dataval['0'];
	
	//echo $dataval['0'];
	
	if($dataval['0']!=''){
		
	unlink($this->input->post('imagedata'));	
	
	$imageval=$uploadedFileNames;	
	
		
	}else{
		
	
	$imageval=$this->input->post('imagedata');	
		
	}
		
		$this->load->model('user_model', 'user');
		$res = $this->user->editUserProfile($imageval);
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'Business Deals', $this->input->post('email'), NULL, NULL, 'Business Deals:: Congratulations', 'Dear '.$this->input->post('name').' Your changes are excepted by Business Deals.') ){
				log_message('info', 'Email sent to '.$this->input->post('email').' address');
			}else{
				log_message('info', 'Email not send to '.$this->input->post('email').' address');
			}
			$this->session->set_flashdata('msg', 'Dear User! You have been successfully registered.');
			redirect('userprofile');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to register user ['.$this->input->post('email').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! email address already used.');
				log_message('debug', 'Unable to register user ['.$this->input->post('email').']. Due to duplicate email address');
			}
			redirect('userprofile');
		}
	}



	/*public function login(){
		$this->load->model('user_model', 'user');
		if( $this->user->validateCustomer() ){
			//Code to show view of user after login
			redirect('home');
		}else{
			redirect('home');
		}
	}*/
	
		
	public function uploadMedia( $path, $file_ary, $type = NULL ){
		$uploadedFileNames = array();
		$fileName = '';
		$j        = 0;
		log_message('debug','hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh '.print_r($file_ary,true));
		foreach( $file_ary as $file ){
			$fileName         = $file['name'];
			$fileBaseName     = pathinfo( $fileName, PATHINFO_FILENAME);
			$originalFileName = $fileBaseName;
			$fileExtension    = pathinfo( $fileName, PATHINFO_EXTENSION);

			while( file_exists( $path.'/'.$fileBaseName.'.'.$fileExtension ) ){
				$fileBaseName = (String)$originalFileName.'_'.$i;
				$fileName     = $fileBaseName.'.'.$fileExtension;
				$i++;
			}
			log_message('debug','File Name IS::::::::::::::::::::::::::::::::::::::::: ['.$fileName.']');
			if ( move_uploaded_file( $file['tmp_name'], $path.'/'.$fileName ) ){
				$uploadedFileNames[$j]['name'] = $file['name'];
				$uploadedFileNames[$j]['path'] = $path.$fileName;
				log_message('debug','Upload File Name IS::::::::::::::::::::::::::::::::::::::::: ['.$uploadedFileNames[$j]['name'].']');
				
				
				$j++;
			}
		}
		return $uploadedFileNames;
	}

	public function reArrayFilesMultiple($files) {
		$file_ary = array();
		log_message('debug', 'FILE ARRAY IS ['.print_r($files, true).']');
		$file_count = count($files['name']);
		log_message('debug','File count is::::::::::::::::::::::::::::::::' .$file_count);
		for ($i=0; $i<$file_count; $i++) {
			$file_ary[$i]['name']     = $files['name'][$i];
			$file_ary[$i]['type']     = $files['type'][$i];
			$file_ary[$i]['tmp_name'] = $files['tmp_name'][$i];
			$file_ary[$i]['error']    = $files['error'][$i];
			$file_ary[$i]['size']     = $files['size'][$i];
		}

		return $file_ary;
	}
	public function customerprofile(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals :: User Profile';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

			
		//Get user basic profile
		$this->load->model('user_model', 'user');
		$data['userProfileData'] = $this->user->getBasicProfile();
		$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
		
		$this->load->model('Startup_model', 'startup');
		$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
		
		$this->load->view('include/header', $header );
		$this->load->view('user-profile', $data);
		$this->parser->parse('include/footer', $footer );
	}

	public function userQueryBrowse(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Queries';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				$data['userQuery']       = $this->user->getUserQueries();
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
				
				$data['userEnquiry']       = $this->user->getUserEnquiry();
				
                $this->load->view('include/header', $header );
                $this->load->view('user-query', $data);
                $this->parser->parse('include/footer', $footer );
	}
	
	public function userQueryDetails(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Queries';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
		
				$getqueryid = $this->uri->segment(2);
				$data['userQueryDetails'] = $this->user->UserQueriesDetails($getqueryid);
                $this->load->view('include/header', $header );
                $this->load->view('user_query_details', $data);
                $this->parser->parse('include/footer', $footer );
	}
	
	public function userQueryExplore(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Queries';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
		
				$getqueryid = $this->uri->segment(2);
				$data['userQueryDetails'] = $this->user->UserQueriesExplore($getqueryid);
				
                $this->load->view('include/header', $header );
                $this->load->view('user-query-explore', $data);
                $this->parser->parse('include/footer', $footer );
	}

	public function userContactBrowse( $infoType = 'basic', $qid=0 ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Contacts';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('user_model', 'user');
		$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
		$data['user_contacts']       = $this->user->getUserContacts( $infoType, $qid );//Need to check with Gaurav about the table
		$this->load->model('Startup_model', 'startup');
		$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
                $this->load->view('include/header', $header );
		if ( strcasecmp( $infoType, 'basic' ) == 0 ){
			$this->load->view('user-contacts', $data);
		}else{
			$this->load->view('user-contact-explor', $data);
		}
                $this->parser->parse('include/footer', $footer );
	}

	public function getUserContactInfo( $contactId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Contacts';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('user_model', 'user');
		$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
		//$data['user_contacts']       = $this->user->getUserContactDetails( $contactId );//Need to check with Gaurav about the table
                $this->load->view('include/header', $header );
                $this->load->view('user-contact-explor', $data);
                $this->parser->parse('include/footer', $footer );
	}

	public function getUserFavourite(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Favourite';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('user_model', 'user');
		$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
		//$data['user_contacts']       = $this->user->getUserFavourite();//Need to check with Gaurav about the table
                $this->load->view('include/header', $header );
                $this->load->view('user-favourite', $data);
                $this->parser->parse('include/footer', $footer );
	}

	public function userQuery(){
		$this->load->model('user_model','user');
		if ( $this->user->setQueryInfo() ){
			echo '{"status":"0", "msg":"Thank you we have received your request. Will response back you soon."}';
		}else{
			echo '{"status":"1", "msg":"Oops! we are unable to serve your request now. Please try again later"}';
		}
	}

	public function userBusinessProfile(){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Business User Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
				
                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				$this->load->model('business_model', 'business');
				$data['business_list']      = $this->business->getBusinessOfCustomer();
				$data['businessbuYList']      = $this->business->getBusinessOfCustomerBuy();
				
				$this->load->model('package_model', 'package');
                $data['packages'] = $this->package->getAvailablePackage();
				
			
				//count at dashboard for buyer
				$data['ContactCount'] = $this->user->getBuyContactCount();
				$data['ContactCountAll'] = $this->user->getAllContactCount();
				$data['ViewBuyBusiness'] = $this->user->getViewBuyBusiness();
				
				//viewed count
				$data['ViewCountAll'] = $this->user->getAllViewedCount();
				
				//user viewed property list
				
				$data['ViewedProListCount'] = $this->user->getUserViewedPropertyCount();
				$data['ViewedProList'] = $this->user->getUserViewedProperty();
				
				$data['getSaveListUser']= $this->user->getSaveListUser();
				$data['getSaveListUserCount']= $this->user->getSaveListUserCount();
				
				$data['getContactCountByFormIdUser']= $this->user->getContactCountByFormIdUser();
				$data['getContactListUser']= $this->user->getContactListUser();
				
				
				$data['getFavCountBuy'] = $this->user->getFavCountBuy();
				$data['getFavCountAll'] = $this->user->getFavCountAll();
				
				//count at dashboard for seller
				//$data['getContactCountByFormId'] = array(); 
				
				//recommended business
				$this->load->model('listing_details_model', 'LDM');	
				$data['RecommendedBusiness'] = $this->LDM->RecommendedBusiness();
				
				$data['recommendedCount'] = $this->LDM->recommendedCount();
				
				foreach($data['business_list'] as $blist){
				
				//conatct count and data
				$data['getContactCountByFormId'][$blist->form_id] = $this->user->getContactCountByFormId($blist->form_id);
				$data['getContactList'][$blist->form_id] = $this->user->getContactList($blist->form_id);
				
				//save or favourite count and data
				$data['getSaveCountByFormId'][$blist->form_id] = $this->user->getSaveCountByFormId($blist->form_id);
				$data['getSaveList'][$blist->form_id] = $this->user->getSaveList($blist->form_id);
				
				
				
				}
				
		
				//echo "<pre>"; print_r($data['getContactList']);
				
                $this->load->view('include/header', $header );
                $this->load->view('user-business-profile', $data);
                $this->parser->parse('include/footer', $footer );
	}

	public function userBusinessProfileForm(  $assignedTo, $selectedFormId, $user_id, $next_tab ){
				$this->load->library('parser');
                $this->load->helper('html');
				
                $header['title']  = 'Business Deals :: User Business Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js', 'js/user_package', 'js/seller_edit' );
				
				$this->load->model('User_model', 'user');
				$this->user->setFormSession($selectedFormId);

				
                $this->load->model('Business_model', 'business');
                $data['businessDetails']  = $this->business->getBusinessDetailsByFormId('sell_business', $selectedFormId);
				
				//print_r($this->session->userdata('userid'));
				
				//die;
                //$this->load->model('User_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				$data['sellBusinessAdditionalDetails'] = $this->user->getSellerAdditionalDetails();
				$data['sellBusinessAdditionalFinancialDetails']= $this->user->getSellerAdditionalFinancialDetails();
                $data['user_package'] = $this->user->currentPackage( $selectedFormId );
				$data['additionalServices'] = $this->user->currentAdditionalServices($selectedFormId);
				$data['medias'] = $this->user->getBusinessMedia($selectedFormId); 
                $this->load->model('package_model', 'package');
                $data['packages'] = $this->package->getAvailablePackage();
				$data['formId'] = $selectedFormId;

		$this->load->model('Startup_model', 'startup');
		$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details

                //Get user basic profile
                /*$this->load->model('user_model', 'user');
		$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
		$this->load->model('business_model', 'business');
		$data['business_list']      = $this->business->getBusinessOfCustomer();*/
                $this->load->view('include/header', $header );
                $this->load->view('user-business-profile-form', $data);
                $this->parser->parse('include/footer', $footer );
	}

		
			public function Getmylisting(){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Business User Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
				
                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				$this->load->model('business_model', 'business');
				$data['business_list']      = $this->business->getBusinessOfCustomer();
				$data['businessbuYList']      = $this->business->getBusinessOfCustomerBuy();
				
				$this->load->model('package_model', 'package');
                $data['packages'] = $this->package->getAvailablePackage();
				
			
				//count at dashboard for buyer
				$data['ContactCount'] = $this->user->getBuyContactCount();
				$data['ContactCountAll'] = $this->user->getAllContactCount();
				$data['ViewBuyBusiness'] = $this->user->getViewBuyBusiness();
				
				//viewed count
				$data['ViewCountAll'] = $this->user->getAllViewedCount();
				
				//user viewed property list
				
				$data['ViewedProList'] = $this->user->getUserViewedProperty();
				
				$data['getFavCountBuy'] = $this->user->getFavCountBuy();
				$data['getFavCountAll'] = $this->user->getFavCountAll();
				
				//count at dashboard for seller
				//$data['getContactCountByFormId'] = array(); 
				
				foreach($data['business_list'] as $blist){
				
				//conatct count and data
				$data['getContactCountByFormId'][$blist->form_id] = $this->user->getContactCountByFormId($blist->form_id);
				$data['getContactList'][$blist->form_id] = $this->user->getContactList($blist->form_id);
				
				//save or favourite count and data
				$data['getSaveCountByFormId'][$blist->form_id] = $this->user->getSaveCountByFormId($blist->form_id);
				$data['getSaveList'][$blist->form_id] = $this->user->getSaveList($blist->form_id);
				
				
				
				}
				
		
				//echo "<pre>"; print_r($data['getContactList']);
				
                $this->load->view('include/header', $header );
                $this->load->view('my-listing', $data);
                $this->parser->parse('include/footer', $footer );
	}

	public function userBusinessProfileJvForm( $assignedTo, $selectedFormId, $user_id, $next_tab ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Business Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js', 'js/user_package', 'js/seller_edit_jv' );
				
				$this->load->model('Jv_model', 'JV');
				$this->JV->setFormSession($selectedFormId);

				
                $this->load->model('Business_model', 'business');
                $data['businessDetails']  = $this->business->getBusinessDetailsByFormId('joint_ventures', $selectedFormId);
                //$this->load->model('User_model', 'user');
				$data['assignedEmpDetails'] = $this->JV->getAssignedEmployee();
				$data['sellBusinessAdditionalDetails'] = $this->JV->getSellerAdditionalDetails();
				$data['sellBusinessAdditionalFinancialDetails']= $this->JV->getSellerAdditionalFinancialDetails();
                $data['user_package'] = $this->JV->currentPackage( $selectedFormId );
				$data['additionalServices'] = $this->JV->currentAdditionalServices($selectedFormId);
				$data['medias'] = $this->JV->getBusinessMedia($selectedFormId); 
                $this->load->model('package_model', 'package');
                $data['packages'] = $this->package->getAvailablePackage();
				$data['formId'] = $selectedFormId;



                //Get user basic profile
                /*$this->load->model('user_model', 'user');
		$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
		$this->load->model('business_model', 'business');
		$data['business_list']      = $this->business->getBusinessOfCustomer();*/
		
		$this->load->model('Startup_model', 'startup');
		$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
		
                $this->load->view('include/header', $header );
                $this->load->view('user-business-profile-form-jv', $data);
                $this->parser->parse('include/footer', $footer );
	}



	public function userBusinessProfileBuyForm( $assignedTo, $selectedFormId, $customer_id, $next_tab ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Business Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js', 'js/user_package', 'js/seller_edit_buy' );
				
				$this->load->model('Buyer_model', 'BM');
				$this->BM->setFormSession($selectedFormId);

				
                $this->load->model('Business_model', 'business');
                $data['businessDetails']  = $this->business->getBusinessDetailsByFormId('buy_business', $selectedFormId);
				//$data['sellBusinessUserProfile']  = $this->business->getBusinessDetailsByFormId('buy_business', $selectedFormId);
                //$this->load->model('User_model', 'user');
				$data['assignedEmpDetails'] = $this->BM->getAssignedEmployee();
				//$data['sellBusinessUserProfile'] = $this->BM->getBusinessUserProfileAdmin('buy_business', $selectedFormId);
				$data['buyBusinessProfile'] = $this->BM->getBuyerBusinessProfile('buy_business', $selectedFormId );

				$data['formId'] = $selectedFormId;
				$data['assignedEmployee'] = $assignedTo;




                //Get user basic profile
                /*$this->load->model('user_model', 'user');
		$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
		$this->load->model('business_model', 'business');
		$data['business_list']      = $this->business->getBusinessOfCustomer();*/
                $this->load->view('include/header', $header );
                $this->load->view('user-business-profile-form-buy', $data);
                $this->parser->parse('include/footer', $footer );
	}

	public function userBusinessProfileStartupForm( $assignedTo, $selectedFormId, $user_id, $next_tab ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Business Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js', 'js/user_package', 'js/seller_edit_su' );
				
				$this->load->model('Startup_model', 'startup');
				$this->startup->setFormSession($selectedFormId);
				
				
                $this->load->model('Business_model', 'business');
                $data['businessDetails']  = $this->business->getBusinessDetailsByFormId('startup_business', $selectedFormId);
                //$this->load->model('User_model', 'user');
				$data['assignedEmpDetails'] = $this->startup->getAssignedEmployee();
				$data['sellBusinessAdditionalDetails'] = $this->startup->getSellerAdditionalDetails();
				$data['sellBusinessAdditionalFinancialDetails']= $this->startup->getSellerAdditionalFinancialDetails();
                $data['user_package'] = $this->startup->currentPackage( $selectedFormId );
				$data['additionalServices'] = $this->startup->currentAdditionalServices($selectedFormId);
				$data['medias'] = $this->startup->getBusinessMedia($selectedFormId); 
                $this->load->model('package_model', 'package');
                $data['packages'] = $this->package->getAvailablePackage();
				$data['formId'] = $selectedFormId;

				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details

                //Get user basic profile
                /*$this->load->model('user_model', 'user');
		$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
		$this->load->model('business_model', 'business');
		$data['business_list']      = $this->business->getBusinessOfCustomer();*/
                $this->load->view('include/header', $header );
                $this->load->view('user-business-profile-form-su', $data);
                $this->parser->parse('include/footer', $footer );
	}

	
	
	
	public function userProfileCreateProfile(){
		$this->load->model('Buyer_model', 'BM');
		$dbResult = null;
		$frmValue = $this->input->post('frm_submit');
		log_message('debug','FORM TANUJ VALUE PROFILE ['.$frmValue.']');
		if ( strcasecmp( $frmValue, 'bb_up' ) == 0 ){
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->registerBusinessUser("UPDATE");
				}else{
					$dbResult = $this->BM->registerBusinessUser("NEW");
				}

				if( $dbResult ){
					redirect('login-business-profile-form-buy/Assign/'.$this->input->post('frm_id').'/id/businessprofile');
				}else{
					redirect('login-business-profile-form-buy/Assign/'.$this->input->post('frm_id').'/id/personaldetail'); //Redirect user on user profile page in case any db error
				}
			
		}else if ( strcasecmp( $frmValue, 'bb_bp' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('buy-a-business-profile');
			}else{
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->registerBuyerBusinessProfile("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->BM->registerBuyerBusinessProfile( "NEW", $this->session->userdata('last_form_id') );
				}

				if( $dbResult ){
					redirect('login-business-profile-form-buy/Assign/'.$this->input->post('frm_id').'/id/postrequirement');
				}else{
					redirect('login-business-profile-form-buy/Assign/'.$this->input->post('frm_id').'/id/personaldetail'); //Redirect user on business description page in case any db error
				}
			}
		}else if ( strcasecmp( $frmValue, 'bb_pr' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('buy-a-business-post-requirement');
			}else{
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->buyerPostRequirement("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->BM->buyerPostRequirement( "NEW", $this->session->userdata('last_form_id') );
				}

				if( $dbResult ){
					redirect('login-business-profile-form-buy/Assign/'.$this->input->post('frm_id').'/id/postrequirement');
				}else{
					redirect('login-business-profile-form-buy/Assign/'.$this->input->post('frm_id').'/id/postrequirement'); //Redirect user on business description page in case any db error
				}
			}
		}
	}	


	/*public function logout(){
		log_message('debug', 'In LOGOUT');
		$this->session->sess_destroy();
		redirect('home');
	}*/
	
	public function deleteImgid(){
		
		$this->load->model('user_model', 'user');
		$dbResult = $this->user->DeleteSellerImg();
		
	}
	
		public function userBusinessProfileReForm( $assignedTo, $selectedFormId, $user_id, $next_tab ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Business Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js', 'js/user_package', 'js/seller_edit_jv','js/seller_edit_re' );
				
				$this->load->model('Realestate_model', 'RE');
			    $data['sellBusinessBasicInformation'] = $this->RE->getBusinessUserProfile('real_estate');
				$data['sellBusinessDescription'] = $this->RE->getSellerBusinessDescription('real_estate');
				$this->load->model('User_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
                $this->load->view('include/header', $header );
                $this->load->view('user-business-profile-form-re', $data);
                $this->parser->parse('include/footer', $footer );
	}
	//recent listing for buyer
		public function recentListing(){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Business User Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
				
                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				$this->load->model('business_model', 'business');
				$data['business_list']      = $this->business->getBusinessOfCustomerListing();
				
                $this->load->view('include/header', $header );
                $this->load->view('recent-listing', $data);
                $this->parser->parse('include/footer', $footer );
	}
	//change password
public	function Changepassword() {	    
	    
	   
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Business User Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
				
                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				
				
				
				
                $this->load->view('include/header', $header );
                $this->load->view('change-password', $data);
                $this->parser->parse('include/footer', $footer );
	}
	
public function ChangeUserPassword(){
	
	//log_message('debug', 'post value ['.$this->input->post('pwd1').']. no response');
	//log_message('debug', 'post value ['.$this->input->post('pwd2').']. no response2');
	
	
				
				$newpassword=$this->input->post('pwd1');
				$confirmpassword=$this->input->post('pwd2');
				
				if($newpassword==$confirmpassword and $newpassword!=''){
				
				$this->load->model('user_model', 'user');	
				$this->user->ChangeUserPassword($newpassword,$confirmpassword);	
				
				echo '2'; 		
				}else{
					
				echo '1';
				}
				   
}
/*
public function mail(){
	
	print_r($_SESSION);
	
//mail settings
$this->load->model('user_model', 'user');
$data = $this->user->mailSettings();

$website_url=$data[0]['website_url'];
$website_logo_url=$data[0]['website_logo_url'];
$email=$data[0]['email'];
$phone=$data[0]['phone'];

$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();

//print_r($data['assignedEmpDetails'][0]->name);

//Load email library
$this->load->library('email');
//SMTP & mail configuration

$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<img  src="'.$website_logo_url.'"/>';
$htmlContent .= '<h3>Dear '.ucwords(strtolower($_SESSION['username'])).'</h3>';
$htmlContent .= '<h4>Greetings from BusinessDeals!!</h4>';
$htmlContent .= '<p>Your Business Listing has been submitted and is with the administrator for approval before it is live which would take upto 24 working hours.</p>';
$htmlContent .= '<p>Your Business Listing ID is: LB 00'.$this->session->userdata('last_form_id').'</p>';
$htmlContent .= '<p>Browse through the Investor Requirement Listings OR Latest Blogs to see if any buyer/investor has a requirement for a similar business.</p>';
$htmlContent .= '<p>It is our endeavour to find prospective Buyer/Investor/Partner for your business and for that we would be assigning a Business Accounts Executive who would assist you in the process.</p>';
$htmlContent .= '<p>For better results on your listing  you can upgrade your account so that you can reach out to greater number of Buyers/Investors/Partners.</p>';
$htmlContent .= '<p><a href='.$website_url.'login-business-profile-form'.'/'.$data['assignedEmpDetails'][0]->name.'/'.$this->session->userdata('last_form_id').'/1234/abc#Packagedetails'.'>Click here to Upgrade your Listing</a></p>';
$htmlContent .= '<p>Should you require any assistance please mail us to '.$email.' or call us at '.$phone.'.</p>';
$htmlContent .= '<p>Thanks and Regards</p>';
$htmlContent .= '<p>Team</p>';
$htmlContent .= '<p>Business Deals</p>';

$this->email->to('rajesh.meena23@gmail.com');
$this->email->from($email,'Business Deals');
$this->email->subject('Your Deal Posted Successfully On Business Deals');
$this->email->message($htmlContent);

//Send email

        if($this->email->send()){
            echo "email sent";
        }else{
           echo "email not sent";
		}
}*/
public function verifyotp(){
	
	 $this->load->model('user_model', 'user');	
	 $otpval=$this->user->VerifyRegisterOtp();	
	 
	 if($otpval==2){
		 
		 echo 2;
	 }else{
		 
		echo 1; 
	 }
	 
	 
}
public function Loginverify(){
	
	 $this->load->model('user_model', 'user');	
	 $validate=$this->user->validateOtpCustomer();	
	 
	 if($validate){
				
		redirect('userprofile');
	 }		
	 
}
public function ChangeUserForPassword(){
	
	//log_message('debug', 'post value ['.$this->input->post('pwd1').']. no response');
	//log_message('debug', 'post value ['.$this->input->post('pwd2').']. no response2');
	
	
				
				$newpassword=$this->input->post('pwd1');
				$confirmpassword=$this->input->post('pwd2');
				$Forgotpnumber=$this->input->post('Forgotpnumber');
				
				if($newpassword==$confirmpassword and $newpassword!=''){
				
				$this->load->model('user_model', 'user');	
				$val=$this->user->ChangeUserForPassword($newpassword,$confirmpassword,$Forgotpnumber);	
				if($val=='2'){
				echo 2; 		
				}else{
					
				echo 1;
				}
				}
				   
}

	public function UserContactDetails(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Queries';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				$data['userEnquiry']       = $this->user->getUserEnquiry();
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
				
                $this->load->view('include/header', $header );
                $this->load->view('user-contact-us-details', $data);
                $this->parser->parse('include/footer', $footer );
	}
		public function userContactExplore(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Queries';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
		
				$getqueryid = $this->uri->segment(2);
				$data['userQueryDetails'] = $this->user->userContactExplore($getqueryid);
				
                $this->load->view('include/header', $header );
                $this->load->view('user-contact-explore', $data);
                $this->parser->parse('include/footer', $footer );
	}
		public function InvoicePayment(){
			
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Queries';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('user_model', 'user');
				$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
				
				$this->load->model('Startup_model', 'startup');
				$data['BasicProfile'] = $this->startup->getBasicProfile();//get basic details
		
                $this->load->view('include/header', $header );
                $this->load->view('invoice-payment', $data);
                $this->parser->parse('include/footer', $footer );
	}
	
	public function maildata(){
		
		//Load email library
$this->load->library('email');

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'mail.bailiwickstudioz.com',
    'smtp_port' => 587,
    'smtp_user' => 'businessdeals@bailiwickstudioz.com',
    'smtp_pass' => 'businessdeals@123',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<h1>Sending email via SMTP server</h1>';
$htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

$this->email->to('rajesh.meena23@gmail.com');
$this->email->from('sender@example.com','MyWebsite');
$this->email->subject('How to send email via SMTP server in CodeIgniter');
$this->email->message($htmlContent);

//Send email
$ok=$this->email->send();

if($ok){
	
	echo 'mail sent';
	
}else{
	
	echo 'mail not sent';
}
	}
}
?>