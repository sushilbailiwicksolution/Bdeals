<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listingdetails extends CI_Controller {

	function __construct(){
		parent::__construct();
		//check_isvalidated();
	}

	public function getListingDetails($formid,$businessType){
						
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Search';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

				$business_type = $businessType; 
				log_message('debug', 'Controller:::::::::::::::: '.$business_type);
				$this->load->model('listing_details_model', 'LDM');
				$data['businessData'] = $this->LDM->getBusinessDetails($formid,$businessType);
				$data['businessDocuments'] = $this->LDM->getBusinessImageDocuments($formid,$businessType);
				$data['additionalDetails'] = $this->LDM->getAdditionalDetails($formid,$businessType);
				$data['additionalFinancialDetails'] = $this->LDM->getAdditionalFinancialDetails($formid,$businessType);
				$data['contactFromDetails'] = $this->LDM->getContactFromUserDetails($formid,$businessType);
				
				
				$data['contactFromResponse']='Kindly Click Above to Contact'; 
				
				$this->add_count($formid);//for count viewed business
				
				
				$this->load->model('admin/Advertisements_model', 'advertisements');
				$data['AdvtImage'] = $this->advertisements->getProAdvertisements();
				
				
				//print_r($data['businessDocuments']);
				//die;
				$this->load->view('include/header', $header );
				if($business_type=="buy_a_business"){
					$this->load->view('listing-details-buy', $data);
				}else if($business_type=="sell_a_business"){
					$this->load->view('listing-details-sell', $data);
				}else if($business_type=="jv_business"){
					$this->load->view('listing-details-jv', $data);
				}else if($business_type=="start_up" || $business_type=="startup_business"){
					$this->load->view('listing-details-su', $data);
				}else if($business_type=="real_estate"){
					$this->load->view('listing-details-re', $data);
				}	
                $this->parser->parse('include/footer', $footer );


	}
	
public function addtofavourite(){
	
	
	$addtofavourite=$this->input->post('addtofavourite');
	
	$action=$this->input->post('action');
	
	$this->load->model('listing_details_model', 'LDM');	
	
	switch($action){
		case "like":
				
			 $data['Addtofavourite'] = $this->LDM->Addtofavourite($addtofavourite,$action);
				
	
		break;		
		case "unlike":
		
		
			 $data['removefavourite'] = $this->LDM->removefavourite($addtofavourite,$action);
		
		break;		
	}
}

	// This is the counter function.. 
public function add_count($formid)
{
// load cookie helper
    $this->load->helper('cookie');
// this line will return the cookie which has formid
  $check_visitor = $this->input->cookie(urldecode($formid), FALSE);
  
// this line will return the visitor ip address
    $ip = $this->input->ip_address();

	
    if ($check_visitor == false) {
        $cookie = array(
            "name"   => urldecode($formid),
            "value"  => "$ip",
            "expire" =>  time() + 7200,
            "secure" => false
        );
        $this->input->set_cookie($cookie);
		
		$this->load->model('listing_details_model', 'LDM');
        $this->LDM->update_counter(urldecode($formid));
    }
}

}
?>