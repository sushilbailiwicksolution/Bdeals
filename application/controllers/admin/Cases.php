<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {

	function __construct(){
		parent::__construct();
		//check_isvalidated();
	}

	public function index($bType, $assignedTo, $formId)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Case_model', 'case');
		$data['cases'] = $this->case->getPreviousCases( $bType, $assignedTo, $formId );
		$data['assignedTo'] = $assignedTo;
		$data['formId'] = $formId;
		$data['caseType'] = $bType;

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/expl_case', $data);
		$this->parser->parse('admin/include/footer', $footer );
	}
	
	
		public function StartUpindex($bType, $assignedTo, $formId)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Case_model', 'case');
		$data['cases'] = $this->case->getPreviousCases( $bType, $assignedTo, $formId );
		$data['assignedTo'] = $assignedTo;
		$data['formId'] = $formId;
		$data['caseType'] = $bType;

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/expl_startup_case', $data);
		$this->parser->parse('admin/include/footer', $footer );
	}
	
			public function jvCase($bType, $assignedTo, $formId)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Case_model', 'case');
		$data['cases'] = $this->case->getPreviousCases( $bType, $assignedTo, $formId );
		$data['assignedTo'] = $assignedTo;
		$data['formId'] = $formId;
		$data['caseType'] = $bType;

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/expl_jv_case', $data);
		$this->parser->parse('admin/include/footer', $footer );
	}
	
			public function Realestateindex($bType, $assignedTo, $formId)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Case_model', 'case');
		$data['cases'] = $this->case->getPreviousCases( $bType, $assignedTo, $formId );
		$data['assignedTo'] = $assignedTo;
		$data['formId'] = $formId;
		$data['caseType'] = $bType;

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/expl_realestate_case', $data);
		$this->parser->parse('admin/include/footer', $footer );
	}
	
	public function buyer($bType, $assignedTo, $formId)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Case_model', 'case');
		$data['cases'] = $this->case->getPreviousCases( $bType, $assignedTo, $formId );
		$data['assignedTo'] = $assignedTo;
		$data['formId'] = $formId;
		$data['caseType'] = $bType;

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/buyer_case', $data);
		$this->parser->parse('admin/include/footer', $footer );
	}

	public function createCase(){
		$this->load->library('parser');
		$this->load->helper('html');
		log_message('debug', 'Post data ['.print_r($this->input->post(), true).']');
		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createCase();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'Business Deals', $empDetails->email, NULL, NULL, 'Business Deals:: Notification!', 'Dear '.$empDetails->name.' New case has been created for you.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case created successfully.');
			redirect(base_url().'admin/seller');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/seller');
		}
	}
	
	public function createStartupcase(){
		$this->load->library('parser');
		$this->load->helper('html');
		log_message('debug', 'Post data ['.print_r($this->input->post(), true).']');
		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createCase();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'Business Deals', $empDetails->email, NULL, NULL, 'Business Deals:: Notification!', 'Dear '.$empDetails->name.' New case has been created for you.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case created successfully.');
			redirect(base_url().'admin/startup');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/startup');
		}
	}

	public function createJvcase(){
		$this->load->library('parser');
		$this->load->helper('html');
		log_message('debug', 'Post data ['.print_r($this->input->post(), true).']');
		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createCase();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'Business Deals', $empDetails->email, NULL, NULL, 'Business Deals:: Notification!', 'Dear '.$empDetails->name.' New case has been created for you.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case created successfully.');
			redirect(base_url().'admin/jv');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/jv');
		}
	}	
	
		public function createRealestatecase(){
		$this->load->library('parser');
		$this->load->helper('html');
		log_message('debug', 'Post data ['.print_r($this->input->post(), true).']');
		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createCase();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'Business Deals', $empDetails->email, NULL, NULL, 'Business Deals:: Notification!', 'Dear '.$empDetails->name.' New case has been created for you.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case created successfully.');
			redirect(base_url().'admin/realestate');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/realestate');
		}
	}
/****************************buyer case*****************************/
	public function createBuyercase(){
		$this->load->library('parser');
		$this->load->helper('html');
		log_message('debug', 'Post data ['.print_r($this->input->post(), true).']');
		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createBuyercase();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'Business Deals', $empDetails->email, NULL, NULL, 'Business Deals:: Notification!', 'Dear '.$empDetails->name.' New case has been created for you.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case created successfully.');
			redirect(base_url().'admin/buy');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/buy');
		}
	}
	
	
/*****************************New user case start here***************/

	public function createUserCase(){
		$this->load->library('parser');
		$this->load->helper('html');
		log_message('debug', 'Post data ['.print_r($this->input->post(), true).']');
		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createUserCase();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'New User', $empDetails->email, NULL, NULL, 'New User:: Notification!', 'Dear '.$empDetails->name.' New case has been created for you.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case created successfully.');
			redirect(base_url().'admin/newuser');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/newquery_case/query/'.$this->input->post('assigned_to').'/'.$this->input->post('case_id').'');
		}
	}
	
	

public function NewUserCase($bType, $assignedTo, $formId)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'New User Case';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Case_model', 'case');
		$data['cases'] = $this->case->getUserPreCases($bType, $assignedTo, $formId);
		$data['assignedTo'] = $assignedTo;
		$data['formId'] = $formId;
		$data['caseType'] = $bType;

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/newuser_case', $data);
		$this->parser->parse('admin/include/footer', $footer );

		
	}
/*****************************New user case end here***************/

/*****************************New query case start here***************/

	public function createQueryCase(){
		$this->load->library('parser');
		$this->load->helper('html');
		log_message('debug', 'Post data ['.print_r($this->input->post(), true).']');
		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createUserCase();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'New Query', $empDetails->email, NULL, NULL, 'New User:: Notification!', 'Dear '.$empDetails->name.' New case has been created for you.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case created successfully.');
			redirect(base_url().'admin/newquery');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/newquery');
		}
	}

public function NewQueryCase($bType, $assignedTo, $formId)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'New Query Case';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Case_model', 'case');
		$data['cases'] = $this->case->getQueryPreCases( $bType, $assignedTo, $formId );
		$data['assignedTo'] = $assignedTo;
		$data['formId'] = $formId;
		$data['caseType'] = $bType;

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/newquery_case', $data);
		$this->parser->parse('admin/include/footer', $footer );

		
	}
//query case for user	
public function NewQueryCaseUser($bType, $assignedTo, $formId)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'New Query Case';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Case_model', 'case');
		$data['cases'] = $this->case->getQueryPreCases( $bType, $assignedTo, $formId );
		$data['assignedTo'] = $assignedTo;
		$data['formId'] = $formId;
		$data['caseType'] = $bType;

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/query_case_user', $data);
		$this->parser->parse('admin/include/footer', $footer );

		
	}
	public function createUserCaseQuery(){
		$this->load->library('parser');
		$this->load->helper('html');
		log_message('debug', 'Post data ['.print_r($this->input->post(), true).']');
		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createUserCase();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'New User', $empDetails->email, NULL, NULL, 'New User:: Notification!', 'Dear '.$empDetails->name.' New case has been created for you.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case created successfully.');
			redirect(base_url().'admin/singleuserquery');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/singleuserquery');
		}
	}
	public function createQueryUserCase(){
		
		 $user_id=$this->uri->segment('3');
		
		//die;
		
		$this->load->library('parser');
		$this->load->helper('html');
		log_message('debug', 'Post data ['.print_r($this->input->post(), true).']');
		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createUserCase();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'New User', $empDetails->email, NULL, NULL, 'New User:: Notification!', 'Dear '.$empDetails->name.' New case has been created for you.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case created successfully.');
			redirect(base_url().'admin/singleuserquery/'.$user_id);
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to create case for ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/singleuserquery/'.$user_id);
		}
	}	
/*****************************New user case end here***************/
	public function Admincomment($Id)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Case_model', 'case');
		$data['cases'] = $this->case->Admincomment( $Id );
		

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/admin-comment', $data);
		$this->parser->parse('admin/include/footer', $footer );
	}
	
		public function adminCaseComment(){
			
		$url=$this->uri->segment(3);
		
		
		//die;
		$this->load->library('parser');
		$this->load->helper('html');
		

		$this->load->model('admin/Case_model', 'case');
		$res = $this->case->createAdminCaseComment($url);
		if( strcasecmp( $res, "true" ) == 0 ){
			
			$this->session->set_flashdata('msg', 'Comment created successfully.');
			redirect(base_url().'admin/admin-comment/'.$url);
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already created for ['.$this->input->post('assigned_to').'].');
				
			}
			redirect(base_url().'admin/admin-comment/'.$url);
		}
	}
}
?>