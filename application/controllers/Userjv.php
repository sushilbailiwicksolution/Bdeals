<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userjv extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated();
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

	public function newregistration(){
		$this->load->model('user_model', 'user');
		$res = $this->user->registerUser();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'Business Deals', $this->input->post('email'), NULL, NULL, 'Business Deals:: Welcome', 'Dear '.$this->input->post('name').' Thanks to registre for Business Deals.') ){
				log_message('info', 'Email sent to '.$this->input->post('email').' address');
			}else{
				log_message('info', 'Email not send to '.$this->input->post('email').' address');
			}
			$this->session->set_flashdata('msg', 'Dear User! You have been successfully registered.');
			redirect('home');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to register user ['.$this->input->post('email').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! email address already used.');
				log_message('debug', 'Unable to register user ['.$this->input->post('email').']. Due to duplicate email address');
			}
			redirect('register');
		}
	}

	public function editUserProfile(){
		$this->load->model('user_model', 'user');
		$res = $this->user->editUserProfile();
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
		//$data['user_queries']       = $this->user->getUserQueries();//Need to check with Gaurav about the table
                $this->load->view('include/header', $header );
                $this->load->view('user-query', $data);
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
			echo '{"status":0, "msg":"Thank you we have received your request. Will response back you soon."}';
		}else{
			echo '{"status":1, "msg":"Oops! we are unable to serve your request now. Please try again later"}';
		}
	}

	public function userBusinessProfile(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Business User Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );


                //Get user basic profile
                $this->load->model('Jv_model', 'JV');
				$data['assignedEmpDetails'] = $this->JV->getAssignedEmployee();
				$this->load->model('business_model', 'business');
				$data['business_list']      = $this->business->getBusinessOfCustomer();
                $this->load->view('include/header', $header );
                $this->load->view('user-business-profile', $data);
                $this->parser->parse('include/footer', $footer );
	}

	public function userBusinessProfileForm( $selectedFormId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: User Business Profile';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js', 'js/user_package', 'js/seller_edit' );


                $this->load->model('Business_model', 'business');
                $data['businessDetails']  = $this->business->getBusinessDetailsByFormId('join_ventures', $selectedFormId);
                $this->load->model('Jv_model', 'JV');
				$data['assignedEmpDetails'] = $this->JV->getAssignedEmployee();
                $data['user_package'] = $this->JV->currentPackage( $selectedFormId );
				$data['additionalServices'] = $this->JV->currentAdditionalServices($selectedFormId);
				$data['userDocuments'] = $this->JV->getBusinessMedia($selectedFormId); 
                $this->load->model('package_model', 'package');
                $data['packages'] = $this->package->getAvailablePackage();
				$data['formId'] = $selectedFormId;



                //Get user basic profile
                /*$this->load->model('user_model', 'user');
		$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();
		$this->load->model('business_model', 'business');
		$data['business_list']      = $this->business->getBusinessOfCustomer();*/
                $this->load->view('include/header', $header );
                $this->load->view('user-business-profile-form-jv', $data);
                $this->parser->parse('include/footer', $footer );
	}

	/*public function logout(){
		log_message('debug', 'In LOGOUT');
		$this->session->sess_destroy();
		redirect('home');
	}*/
}
