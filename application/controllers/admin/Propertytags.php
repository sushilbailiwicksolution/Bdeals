<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propertytags extends CI_Controller {

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

				$this->load->model('admin/Property_tags_model', 'ptags');

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/propertytags');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function tag_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->load->model('admin/Property_tags_model', 'ptags');
		$tagList = $this->ptags->getProTags();

		$data = array();
		$i    = 1;
		foreach($tagList as $r){
			$data[] = array($i, $r['tag_name'], $r['tag_background_color'],$r['tag_color'],'<a href="tag_explore/'.$r['tag_id'].'" class="btn btn-sm btn-danger" role="button">Edit</a>');
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($tagList), "recordsFiltered"=>count($tagList), "data"=>$data);
		echo json_encode($output);
		exit();

	}

	public function addTags(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Property_tags_model', 'ptags');

		$res = $this->ptags->addTags();

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/propertytags');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function tag_explore($tagid){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Property_tags_model', 'ptags');
		
		$data['heading']='Update Tag';
		
		$data['tagListid']  = $this->ptags->getProTagsById($tagid);
		

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/tag_explore',$data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	
	public function tag_edit($tagid){
		
			
		
		$this->load->model('admin/Property_tags_model', 'ptags');
		
	
		$res= $this->ptags->tag_edit($tagid);
		
		
		
		if($res=='false'){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				
				
			}else if($res=='true'){
				$this->session->set_flashdata('msg', 'Tag updated successfully!.');
				
			}
			redirect(base_url().'admin/propertytags');
				

	}
}
