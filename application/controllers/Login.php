<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('user_model', 'user');
		if( $this->user->validateCustomer() ){
			//Code to show view of user after login
			
			//print_r($this->user->validateCustomer());
			
			//log_message('debug', 'User_model: validateCustomer in controller: ['.$this->user->validateCustomer().']');
			
			echo  'true';
			
			//redirect('userprofile');
		}else{
			//redirect('home');
		}
	}
	public function LoginAsUser(){
		$this->load->model('user_model', 'user');
		if( $this->user->validateCustomer() ){
			//Code to show view of user after login
			
			//print_r($this->user->validateCustomer());
			
			//log_message('debug', 'User_model: validateCustomer in controller: ['.$this->user->validateCustomer().']');
			
			echo  'true';
			
			redirect('.base_url.'/'user_business_profile');
		}else{
			//redirect('home');
		}
	}

	public function logout(){
		log_message('debug', 'In LOGOUT');
		$this->session->sess_destroy();
		//redirect('home');
		redirect(base_url());
	}
	
			public function forgetPassword()
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->view('include/header', $header );
		$this->load->view('forget-password');
		$this->parser->parse('include/footer', $footer );
	}
	
	public function verifyUserid(){
		
		$this->load->model('user_model', 'user');
		$val=$this->user->verifyUserid();
		if($val=='2'){
			
			//mail
$data = $this->user->mailSettings();

$website_url=$data[0]['website_url'];
$website_logo_url=$data[0]['website_logo_url'];
$email=$data[0]['email'];
$phone=$data[0]['phone'];	

//Load email library
$this->load->library('email');
//SMTP & mail configuration

$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");
		
$otp = rand(100000,999999);
//otp email after registration
//Email content for registration
$htmlContent = '<img  src="'.$website_logo_url.'"/>';
$htmlContent .= '<h3>Dear User</h3>';
$htmlContent .= '<p>Your one time password is '.$otp.' </p>';
$htmlContent .= '<p>Please use this OTP to create new password</p>';
$htmlContent .= '<p>Should you require any assistance please mail us to '.$email.' or call us at '.$phone.'.</p>';
$htmlContent .= '<p>Thanks and Regards</p>';
$htmlContent .= '<p>Team</p>';
$htmlContent .= '<p>Business Deals</p>';

$this->email->to($this->input->post('lb_email'));
$this->email->from($email,'Business Deals');
$this->email->subject('One time password');
$this->email->message($htmlContent);
//Send email
$this->user->InsertRegisterOtp($otp,$this->input->post('userid'));
        

if($this->email->send()){

log_message('info', 'Email sent to '.$this->input->post('lb_email').' address');
}else{

log_message('info', 'Email not send to '.$this->input->post('lb_email').' address');
}
			echo  2;
			
			
		}else{
			
			echo 1;
		}
	}
	public function forgetUseridOtp()
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->view('include/header', $header );
		$this->load->view('forgetUseridOtp');
		$this->parser->parse('include/footer', $footer );
	}

}
?>