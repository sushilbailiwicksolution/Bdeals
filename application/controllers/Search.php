<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated();
		$this->load->library('pagination');
        }


	//sortby/country/state/city/sector/price/limit/page

	public function advanceSearch( $pageNum=1 ){//$sortby=null, $country=null, $state=null, $city=null, $sector=null, $price=null, $itemPerPage=2, $pageNum=1 ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Search';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

		$searchData  = array();
		$itemPerPage = 0;
		$sortBy      = null;
		if( $this->input->post('ipp') != null ){
			$itemPerPage = $this->input->post('ipp');
		}else{
			$itemPerPage = 5;
		}

		if( $this->input->post('sortby') != null ){
			$sortBy = $this->input->post('sortby');
		}else{
			$sortBy = null;
		}

		$this->load->model('Search_model', 'search');
		
		$type = $this->input->post('type');

		$numOfRec = $this->search->get_totalVal($type);
		
		//print_r();
		
		
		$pageNum  = ($this->uri->segment(2)) ? ($this->uri->segment(2) - 1) : 0;


		log_message('debug', 'NUMBER OF REC FOUND['.$numOfRec.'], AND PAGE NUMBER TO SHOW ['.$pageNum.']');

		if( $numOfRec > 0 ){
			$searchData['result']  = $this->search->getSearchResult( $sortBy,$itemPerPage, ( $itemPerPage * $pageNum ), 'sell_business');// $sortby, $itemPerPage, $pageNum, $country, $state, $city, $sector, $price, 'sell_business' );
			$config['base_url']    = base_url().'advance-search/';//.$this->input->get('country').'/'.$this->input->get('state').'/'.$this->input->get('city').'/'.$this->input->get('sector').'/'.$this->input->get('price');
			$config['total_rows']  = $numOfRec;
			$config['per_page']    = $itemPerPage;
			$config['uri_segment'] = 2;

			$config['num_links'] = 2;
			$config['use_page_numbers'] = TRUE;
			$config['reuse_query_string'] = TRUE;

			$config['full_tag_open'] = '<ul class="blog-pagenation">';
			$config['full_tag_close'] = '</ul>';

			$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';

			$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			
			$config['next_link'] = '<i class="fa fa-angle-right"></i>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';

			$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li><a class="active" href="#">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);

			$searchData['links'] = $this->pagination->create_links();
			log_message('debug', 'LINKS ['.print_r($searchData['links'], true).']');
		}

				$this->load->model('admin/Advertisements_model', 'advertisements');
				$searchData['AdvtImage'] = $this->advertisements->getProAdvertisements();
				
                $this->load->view('include/header', $header );
                $this->load->view('browse-sector-list-search', $searchData);
                $this->parser->parse('include/footer', $footer );
	}

	public function normalSearch( $pageNum=1 ){
		
		
		//print_r($_REQUEST);
		
		//die;
		
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Search';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

		$searchData  = array();
		$itemPerPage = 0;
		$sortBy      = null;
		if( $this->input->post('ipp') != null ){
			$itemPerPage = $this->input->post('ipp');
		}else{
			$itemPerPage = 2;
		}

		if( $this->input->post('sortby') != null ){
			$sortBy = $this->input->post('sortby');
		}else{
			$sortBy = null;
		}

		$this->load->model('Search_model', 'search');

		$type = $this->input->post('type');

		$numOfRec = $this->search->get_totalVal($type);
		$pageNum  = ($this->uri->segment(2)) ? ($this->uri->segment(2) - 1) : 0;


		//log_message('debug', 'NUMBER OF REC FOUND['.$numOfRec.'], AND PAGE NUMBER TO SHOW ['.$pageNum.']');

		if( $numOfRec > 0 ){
			$searchData['result']  = $this->search->getSearchResult($sortBy, $itemPerPage, ( $itemPerPage * $pageNum ), 'sell_a_business');// $sortby, $itemPerPage, $pageNum, $country, $state, $city, $sector, $price, 'sell_business' );
			$config['base_url']    = base_url().'normal-search/';//.$this->input->get('country').'/'.$this->input->get('state').'/'.$this->input->get('city').'/'.$this->input->get('sector').'/'.$this->input->get('price');
			$config['total_rows']  = $numOfRec;
			$config['per_page']    = $itemPerPage;
			$config['uri_segment'] = 2;

			$config['num_links'] = 2;
			$config['use_page_numbers'] = TRUE;
			$config['reuse_query_string'] = TRUE;

			$config['full_tag_open'] = '<ul class="blog-pagenation">';
			$config['full_tag_close'] = '</ul>';

			$config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';

			$config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			
			$config['next_link'] = '<i class="fa fa-angle-right"></i>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';

			$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li><a class="active" href="#">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);

			$searchData['links'] = $this->pagination->create_links();
			log_message('debug', 'LINKS ['.print_r($searchData['links'], true).']');
		}

				$this->load->model('admin/Advertisements_model', 'advertisements');
				$data['AdvtImage'] = $this->advertisements->getProAdvertisements();
				
                $this->load->view('include/header', $header );
                $this->load->view('browse-sector-list-search', $searchData);
                $this->parser->parse('include/footer', $footer );
	}
}
