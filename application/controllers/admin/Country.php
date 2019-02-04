<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

	function __construct(){
		parent::__construct();
		//check_isvalidated();
		check_isvalidated('admin');
        }

	public function index()
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

				$this->load->model('admin/Country_model', 'country');

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/country');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function country_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->load->model('admin/Country_model', 'country');
		$tagList = $this->country->getProCountry();

		$data = array();
		$i    = 1;
		foreach($tagList as $r){
			$data[] = array($i, $r['country_name'],'<a href="country_explore/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Edit</a><input type="image"  value="'.$r['id'].'"  onclick="RemoveCountry(this)" src="'.base_url().'assets/images/delete.png" />');
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($tagList), "recordsFiltered"=>count($tagList), "data"=>$data);
		echo json_encode($output);
		exit();

	}

	public function addCountry(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Country_model', 'country');

		$res = $this->country->addCountry();
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Country added successfully.');
                        redirect(base_url().'admin/country');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/country');
                }

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/country');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function country_explore($countryid){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Country_model', 'country');
		
		$data['heading']='Update Country';
		
		$data['countryListid']  = $this->country->getProCountryById($countryid);
		

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/country_explore',$data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	
	public function country_edit($countryid){
		
			
		
		$this->load->model('admin/Country_model', 'country');
		
	
		$res= $this->country->country_edit($countryid);
		
		
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Country updated successfully.');
                        redirect(base_url().'admin/country');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/country');
                }
				

	}
	
	
		public function viewregion()
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

				$this->load->model('admin/Country_model', 'country');

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/region');
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	public function region_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->load->model('admin/Country_model', 'country');
		$tagList = $this->country->getProRegion();

		$data = array();
		$i    = 1;
		foreach($tagList as $r){
			$data[] = array($i, $r['region_name'],'<a href="region_explore/'.$r['region_id'].'" class="btn btn-sm btn-danger" role="button">Edit</a>');
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($tagList), "recordsFiltered"=>count($tagList), "data"=>$data);
		echo json_encode($output);
		exit();

	}
	
		public function addregion(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Country_model', 'country');

		$res = $this->country->addregion();
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Region added successfully.');
                        redirect(base_url().'admin/region');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/region');
                }

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/region');
                $this->parser->parse('admin/include/footer', $footer );
	}
	
		public function region_edit($regionid){
		
			
		
		$this->load->model('admin/Country_model', 'country');
		
	
		$res= $this->country->region_edit($regionid);
		
		
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Region updated successfully.');
                        redirect(base_url().'admin/region');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/region');
                }
				

	}
		public function region_explore($regionid){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Country_model', 'country');
		
		$data['heading']='Update Region';
		
		$data['countryListid']  = $this->country->getProRegionById($regionid);
		

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/region_explore',$data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	public function DeleteCountry($str){
		
		$this->load->model('admin/Country_model', 'country');
		
        $data['delete'] = $this->country->DeleteCountry($str);
		
	}
}
?>