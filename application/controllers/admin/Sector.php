<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sector extends CI_Controller {

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

				$this->load->model('admin/Sector_model', 'sector');

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/sector');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function sector_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->load->model('admin/Sector_model', 'sector');
		$tagList = $this->sector->getProSector();

		$data = array();
		$i    = 1;
		foreach($tagList as $r){
			$data[] = array($i, $r['sector_name'],'<a href="sector_explore/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Edit</a>');
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($tagList), "recordsFiltered"=>count($tagList), "data"=>$data);
		echo json_encode($output);
		exit();

	}

	public function addSector(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Sector_model', 'sector');

		$res = $this->sector->addSector();
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Sector added successfully.');
                        redirect(base_url().'admin/sector');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/sector');
                }

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/sector');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function sector_explore($sectorid){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Sector_model', 'sector');
		
		$data['heading']='Update Sector';
		
		$data['sectorListid']  = $this->sector->getProSectorById($sectorid);
		

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/sector_explore',$data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	
	public function sector_edit($sectorid){
		
			
		
		$this->load->model('admin/Sector_model', 'sector');
		
	
		$res= $this->sector->sector_edit($sectorid);
		
		
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Sector updated successfully.');
                        redirect(base_url().'admin/sector');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/sector');
                }
				

	}
	public function Subindex()
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

				$this->load->model('admin/Sector_model', 'sector');

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/sub-sector');
                $this->parser->parse('admin/include/footer', $footer );
	}
	public function subsector_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->load->model('admin/Sector_model', 'sector');
		$tagList = $this->sector->getSubProSector();

		$data = array();
		$i    = 1;
		foreach($tagList as $r){
			$data[] = array($i, $r['sub_sector_name'],$r['sector_name'],'<a href="sub_sector_explore/'.$r['sub_id'].'" class="btn btn-sm btn-danger" role="button">Edit</a>');
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($tagList), "recordsFiltered"=>count($tagList), "data"=>$data);
		echo json_encode($output);
		exit();

	}
	
		public function addsubSector(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Sector_model', 'sector');

		$res = $this->sector->addSubSector();
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Sub Sector added successfully.');
                        redirect(base_url().'admin/sub-sector');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/sub-sector');
                }

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/sub-sector');
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	
	public function sub_sector_explore($sectorid){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Sector_model', 'sector');
		
		$data['heading']='Update Sub Sector';
		
		$data['sectorListid']  = $this->sector->getSubSectorById($sectorid);
		

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/sub_sector_explore',$data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
		public function sub_sector_edit($sectorid){
		
			
		
		$this->load->model('admin/Sector_model', 'sector');
		
	
		$res= $this->sector->sub_sector_edit($sectorid);
		
		
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Sub Sector updated successfully.');
                        redirect(base_url().'admin/sub-sector');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/sub-sector');
                }
				

	}
	
}
?>