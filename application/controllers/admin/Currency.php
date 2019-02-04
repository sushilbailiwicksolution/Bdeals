<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated('admin');
        }

	public function index()
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

                $this->load->view('admin/include/header', $header );
		$this->load->view('admin/add_currency');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function currency_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->load->model('admin/Currency_model', 'currency');
		$currencyList = $this->currency->getCurrencyDetails();

		$data = array();
		$i    = 1;
		foreach($currencyList as $r){
			
			if($r['status']=='0'){
		  $status= 'Active';}else{ $status=  'Inactive';}
			
			
			
			$data[] = array($i, $r['currency_name'], $r['currency_symbol'], $this->cachemethods->getCountryNameById($r['country_id']), $status, $r['add_date'], '<a href="currency_explore/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Edit</a>');
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($currencyList), "recordsFiltered"=>count($currencyList), "data"=>$data);
		echo json_encode($output);
		exit();

	}

	public function addCurrency(){
		/*$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );*/

		$this->load->model('admin/Currency_model', 'currency');

		$res = $this->currency->createCurrency();
		if( strcasecmp( $res, "true" ) == 0 ){
                        //Send mail code
                        $this->session->set_flashdata('msg', 'Currency added successfully.');
                        redirect(base_url().'admin/currency');
                }else{
                        if( strcasecmp( $res, "false" ) == 0 ){
                                $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                                log_message('debug', 'Unable to add currency. Due to db insertion fail');
                        }else if( strcasecmp( $res, "duplicate" ) == 0 ){
                                $this->session->set_flashdata('msg', 'Oops! same currency added already.');
                                log_message('debug', 'Unable to add currency. Due to duplicate case to same user');
                        }
                        redirect(base_url().'admin/currency');
                }

                /*$this->load->view('admin/include/header', $header );
		$this->load->view('admin/add_currency');
		$this->parser->parse('admin/include/footer', $footer );*/
	}
	public function currency_explore(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

				$id=$this->uri->segment(3);
				
				$this->load->model('admin/Currency_model', 'currency');
				$data['currencyDetails'] = $this->currency->exploreCurrency($id);
				
			
				
                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/currency_explore',$data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	public function currency_edit(){
		
				$id=$this->uri->segment(3);
				
				$this->load->model('admin/Currency_model', 'currency');
				
			
				$res = $this->currency->editCurrency($id);
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Currency updated successfully.');
                        redirect(base_url().'admin/currency');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/currency');
                }
				
              
	}
}
