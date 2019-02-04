<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listingcontact extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated();
	}

	public function contactForm(){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Search';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

				
				
				$this->load->model('listing_contact_model', 'LCM');
				$resp = $this->LCM->putContactForm();

				$this->load->model('listing_details_model', 'LDM');
				$data['businessData'] = $this->LDM->getBusinessDetails();
				$data['businessDocuments'] = $this->LDM->getBusinessImageDocuments();
				$data['contactFromDetails'] = $this->LDM->getContactFromUserDetails();
				$data['contactFromResponse'] = $resp;
				
				$this->load->view('include/header', $header );
                $this->load->view('listing-details', $data);
                $this->parser->parse('include/footer', $footer );
				
				

				
	}


}