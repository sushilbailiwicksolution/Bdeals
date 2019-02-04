<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {

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

				$this->load->model('admin/State_model', 'state');

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/state');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function state_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->load->model('admin/State_model', 'state');
		$tagList = $this->state->getProState();

		$data = array();
		$i    = 1;
		foreach($tagList as $r){
			$data[] = array($i, $r['state_name'],$r['country_name'],$r['region_name'],'<a href="state_explore/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Edit</a><input type="image"  value="'.$r['id'].'"  onclick="RemoveState(this)" src="'.base_url().'assets/images/delete.png" />	');
			$i++;
	
			
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($tagList), "recordsFiltered"=>count($tagList), "data"=>$data);
		echo json_encode($output);
		exit();

	}

	public function addState(){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/State_model', 'state');

		$res = $this->state->addState();
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'State added successfully.');
                        redirect(base_url().'admin/state');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/state');
                }

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/state');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function state_explore($stateid){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/State_model', 'state');
		
		$data['heading']='Update State';
		
		$data['stateListid']  = $this->state->getProStateById($stateid);
		

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/state_explore',$data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	
	public function state_edit($stateid){
		
			
		
		$this->load->model('admin/State_model', 'state');
		
	
		$res= $this->state->state_edit($stateid);
		
		
		
		if($res=='true'){
			
		                
                        $this->session->set_flashdata('msg', 'State updated successfully.');
                       
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                       
                }
		 redirect(base_url().'admin/state');		

	}
	
	public function DeleteState($str){
		
		$this->load->model('admin/State_model', 'state');
		
        $data['delete'] = $this->state->DeleteState($str);
		
	}
}
?>