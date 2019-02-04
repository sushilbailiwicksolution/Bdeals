<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated();
        }

		public function setNewForm(){
		$this->load->model('Buyer_model', 'BM');
		$this->BM->setNewForm();
			//Code to show view of user after login
			redirect('buy-a-business-profile/no/no');
		
		
	}
	
	
	
	public function userProfile(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );
		
				

		
		if($this->session->userdata('last_form_id')=='NEW'){
			$this->load->model('User_model', 'user');
			$data['sellBusinessUserProfile']= null;
		}else{
			$this->load->model('Buyer_model', 'BM');
			$data['sellBusinessUserProfile'] = $this->BM->getBusinessUserProfile('buy_business');
		}

		$this->load->view('include/header', $header );
		$this->load->view('buy_a_business/listbusiness/buyer', $data);
		$this->parser->parse('include/footer', $footer );
	}
	
	
	public function userProfileCreate(){
		$this->load->model('Buyer_model', 'BM');
		$dbResult = null;
		$frmValue = $this->input->post('frm_submit');
		log_message('debug','FORM TANUJ VALUE ['.$frmValue.']');
		if ( strcasecmp( $frmValue, 'bb_up' ) == 0 ){
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->registerBusinessUser("UPDATE");
				}else{
					$dbResult = $this->BM->registerBusinessUser("NEW");
				}

				if( $dbResult ){
					redirect('buy-a-business-profile/no/no');
				}else{
					redirect('buy-a-business'); //Redirect user on user profile page in case any db error
				}
			
		}else if ( strcasecmp( $frmValue, 'bb_bp' ) == 0 ){
			/*if($this->session->userdata('last_form_id')=='NEW'){
				redirect('buy-a-business-profile/no/no');
			}else{(*/
				if( $this->input->post('frm_id') != null ){
					//$dbResult = $this->BM->registerBusinessUser("UPDATE")[0];
					$dbResult = $this->BM->registerBuyerBusinessProfile("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->BM->registerBusinessUser("NEW")[0];
					$dbResult = $this->BM->registerBuyerBusinessProfile( "UPDATE",  $this->session->userdata('last_form_id'));
				}

				if( $dbResult ){
					//redirect('buy-a-business-post-requirement');
					redirect('buy-a-business-profile/yes/no');
				}else{
					redirect('buy-a-business-profile/no/no'); //Redirect user on business description page in case any db error
				}
			//}
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
					//redirect('buy-a-business-post-requirement');
					redirect('buy-a-business-profile/yes/success');
				}else{
					redirect('buy-a-business-profile/yes/fail');
					//redirect('buy-a-business-post-requirement'); //Redirect user on business description page in case any db error
				}
			}
		}
	}	
	
	public function userProfileCreateProfile(){
		$this->load->model('Buyer_model', 'BM');
		$dbResult = null;
		$frmValue = $this->input->post('frm_submit');
		log_message('debug','FORM TANUJ VALUE PROFILE ['.$frmValue.']');
		if ( strcasecmp( $frmValue, 'bb_up' ) == 0 ){
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->registerBusinessUser("UPDATE")[0];
				}else{
					$dbResult = $this->BM->registerBusinessUser("NEW")[0];
				}

				if( $dbResult ){
					log_message('debug','FORM New Request');
					redirect('buy-a-business-profile/no');
				}else{
					redirect('buy-a-business-post-requirement'); //Redirect user on user profile page in case any db error
				}
			
		}else if ( strcasecmp( $frmValue, 'bb_bp' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('buy-a-business-profile/no/no');
			}else{
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->registerBusinessUser("UPDATE")[0];
					$dbResult = $this->BM->registerBuyerBusinessProfile("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->BM->registerBusinessUser("NEW")[0];
					$dbResult = $this->BM->registerBuyerBusinessProfile( "NEW",  $this->session->userdata('last_form_id'));
				}

				if( $dbResult ){
					//redirect('buy-a-business-post-requirement');
					redirect('buy-a-business-profile/yes/no');
				}else{
					redirect('buy-a-business-profile/no/no'); //Redirect user on business description page in case any db error
				}
			}
		}else if ( strcasecmp( $frmValue, 'bb_pr' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('buy-a-business-post-requirement');
			}else{
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->buyerPostRequirement("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->BM->buyerPostRequirement( "NEW" , $this->session->userdata('last_form_id'));
				}

				if( $dbResult ){
					redirect('buy-a-business-post-requirement');
				}else{
					redirect('buy-a-business-post-requirement'); //Redirect user on business description page in case any db error
				}
			}
		}
	}	
	
	
	
	public function businessProfile($success, $popup){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		if($this->session->userdata('last_form_id')=='NEW'){
			$data['buyBusinessProfile']=null;
		}else{
			$this->load->model('Buyer_model', 'BM');
			$data['sellBusinessUserProfile'] = $this->BM->getBusinessUserProfile('buy_business');
			$data['buyBusinessProfile'] = $this->BM->getBuyerBusinessProfile('buy_business', $this->session->userdata('last_form_id'));
			$data['success'] = $success;
			$data['popup'] = $popup;
			
			//redirect('user_business_profile');
		}

		$this->load->view('include/header', $header );
		$this->load->view('buy_a_business/listbusiness/buyer_business_profile', $data);
		$this->parser->parse('include/footer', $footer );
	}
	
	
	
	public function businessPostRequirement(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		if($this->session->userdata('last_form_id')=='NEW'){
			$data['buyBusinessProfile']=null;
		}else{
			$this->load->model('Buyer_model', 'BM');
			$data['buyBusinessProfile'] = $this->BM->getBuyerBusinessProfile('buy_business',$this->session->userdata('last_form_id'));
		}

		$this->load->view('include/header', $header );
		$this->load->view('buy_a_business/listbusiness/buyer_post_requirement', $data);
		$this->parser->parse('include/footer', $footer );
	}
	
	public function seller_edit($formType){
                log_message('debug','FORM DATA IS ['.print_r($this->input->post(), true).']');
                $this->load->library('parser');
                $this->load->helper('html');
                $this->load->model('admin/Buy_Business_model','business');
                if( strcasecmp( $formType, 'bb_bprofile' ) == 0 ){
                        $retVal = $this->business->updateBuyerBusinessProfile( true );
                }else if ( strcasecmp( $formType, 'bb_prequirement' ) == 0 ){
                        $retVal = $this->business->updatePostRequirement( true );
                }else if ( strcasecmp( $formType, 'seller_bd' ) == 0 ){
                        $retVal = $this->business->updateBusinessDetails( true );
                }else if ( strcasecmp( $formType, 'seller_adetails' ) == 0 ){
                        $retVal = $this->business->updateSellerAdditionalDetails( true );
                }else if ( strcasecmp( $formType, 'seller_upload' ) == 0 ){
                        $retVal = $this->userProfileCreate();
                }else if ( strcasecmp( $formType, 'seller_aservice' ) == 0 ){
                        $retVal = $this->userProfileCreate();
                }

                log_message('debug','RETURN IS ['.json_encode($retVal).']');
                echo json_encode($retVal);
        }
	
	public function browseBySector(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

                $this->load->view('include/header', $header );
		$this->load->view('buy_a_business/browse-sector');
                $this->parser->parse('include/footer', $footer );
	}

	public function stepBuyBusiness(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

                $this->load->view('include/header', $header );
		$this->load->view('buy_a_business/steps-buy-business');
                $this->parser->parse('include/footer', $footer );
	}

	public function industryAlerts(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

                $this->load->view('include/header', $header );
		$this->load->view('buy_a_business/industry-alerts');
                $this->parser->parse('include/footer', $footer );
	}
public function browseBuyerListing($business){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );
				
				$this->load->model('Listing_details_model', 'LDM');
				$data['getBuyBusinessList'] = $this->LDM->getBuyBusinessList($business);
				
				$this->load->model('admin/Advertisements_model', 'advertisements');
				$data['AdvtImage'] = $this->advertisements->getProAdvertisements();

                $this->load->view('include/header', $header );
				$this->load->view('browse-buyer-listing',$data);
                $this->parser->parse('include/footer', $footer );
	}	
}
?>
