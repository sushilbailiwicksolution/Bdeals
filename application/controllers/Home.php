<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		//check_isvalidated();
        }

	public function index()
	{
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

                $this->load->view('include/header', $header );
				$this->load->model('Listing_details_model', 'LDM');
				
				//for featured listing
				$data['getFeaturedListing'] = $this->LDM->getFeaturedListing();
				//get  buyer requirement
				
				
				//for browser sector
				$data['getBrowseBySector'] = $this->LDM->getBrowseBySector();
				
				$data['getBuyBusiness'] = $this->LDM->getBuyBusiness();
				
				//for new listing
				$data['getNewListing'] = $this->LDM->getNewListing();
				
								
				
				
				
				//for testimonials
				$this->load->model('admin/Testimonials_model', 'Testimonials');
				$data['getTestimonials'] = $this->Testimonials->getProTestimonials();
				
				
				
				
				$this->load->view('index',$data);
				
                $this->parser->parse('include/footer', $footer );
	}
	public function viewAll($form_id, $type)
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js' );
				$data['form_id'] = $form_id;
				$data['type'] = $type;
				
				
				
				
                $this->load->view('include/header', $header );
				$this->load->view('listing-details', $data);
				$this->parser->parse('include/footer', $footer );
	}
	public function browseList($industry,$sort,$limit)
	{
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                 $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );
					
				//for browser sector
				$this->load->model('Listing_details_model', 'LDM');
				$data['getSectorList'] = $this->LDM->getSectorList($industry,$sort,$limit);	
				
				$data['headerSectorList'] = $this->LDM->HeaderSectorList($industry,$sort,$limit);	
				
				$this->load->model('admin/Advertisements_model', 'advertisements');
				$data['AdvtImage'] = $this->advertisements->getProAdvertisements();
				
				$data['contactFromDetails'] = $this->LDM->getContactFromUserDetails($formid,$businessType);
				
				
				$data['contactFromResponse']='Kindly Click Above to Contact'; 
				
				$data['getSectorName']=$this->LDM->getSectorName();
				
                $this->load->view('include/header', $header );
				$this->load->view('browse-sector-list',$data);
				$this->parser->parse('include/footer', $footer );
	}
	
	
	public function Business()
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js' );

                $this->load->view('include/header', $header );
				$this->load->view('business');
				$this->parser->parse('include/footer', $footer );
	}
		public function BrowseSector()
	{
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

				//for browser sector
				$this->load->model('Listing_details_model', 'LDM');
				$data['getBrowseSectorList'] = $this->LDM->getBrowseSectorList();	
				
				//advt banners
				$this->load->model('admin/Advertisements_model', 'advertisements');
				$data['AdvtImage'] = $this->advertisements->getProAdvertisements();
				
				$this->load->view('include/header', $header );
				$this->load->view('Browse-sector',$data);
                $this->parser->parse('include/footer', $footer );
	}
}
?>