<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

				//$this->load->model('admin/Users_model', 'users');
				//$data['userList'] = $this->users->getNewUsers();

				$this->load->view('admin/include/header', $header );
				//$this->load->view('admin/newusers', $data);
				$this->load->view('admin/newusers');
				$this->parser->parse('admin/include/footer', $footer );
	}

	public function users_page(){
		
		
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$assigned_Cust = $this->input->get('assigned_Cust');
		$new_Cust2 = $this->input->get('new_Cust2');
		$rejected_Cust = $this->input->get('rejected_Cust');
		$activity_Cust = $this->input->get('activity_Cust');
		$nonactivity_Cust = $this->input->get('nonactivity_Cust');
		$UserAct_status = $this->input->get('UserAct_status');
		
		
		
		$this->load->model('admin/Users_model', 'users');
		$userList = $this->users->getNewUsers($assigned_Cust,$new_Cust2,$rejected_Cust,$activity_Cust,$nonactivity_Cust,$UserAct_status);
		
				
		
		

		$data = array();
		$i    = 1;
		foreach($userList as $r){
			
			//count user activity start here
			$uid=$r['id'];
			$data2['countActivity']  = $this->users->getUserActivity($uid);
	   	
			if($data2['countActivity']>0){ $actUser= "Activity"; }else{ $actUser= "Non Activity";}	

			//count user activity end here		
			
		if($r['status'] == 0){
					$dataPr='Pending';
					
					$urlhref='<a href="newuser_explore/'.$r['id'].'"  role="button"><img src="../assets/admin/images/view.png"></a>';
				}
			else if($r['status'] == 2){
				
					$dataPr='Rejected';
					
					$urlhref='<a href="newuser_explore/'.$r['id'].'"  role="button"><img src="../assets/admin/images/view.png"></a>';
				}	
			else{
					
					$dataPr=$r['Empname'];
					
					$urlhref='<a href="newuser_explore/'.$r['id'].'"  role="button"><img src="../assets/admin/images/view.png"></a>';
			}	
			
			$idvalue = str_pad($r['id'] + 1, 5, 0, STR_PAD_LEFT);
			
			$data[] = array($i,$idvalue ,date('d-m-Y h:i:s',strtotime($r['register_date'])),$r['name'], $r['customer_id'],$r['contact_number'],$r['location'],$r['created_by'],$dataPr,$r['user_status'],$actUser,$urlhref);
			$i++;
			
			
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($userList), "recordsFiltered"=>count($userList), "data"=>$data);
		echo json_encode($output);
		exit();

	}

	public function allusers()
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: All Users';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		//$this->load->model('admin/Users_model', 'users');
		//$data['userList'] = $this->users->getAllCustomer();

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/allusers');//, $data);
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function allusers_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->load->model('admin/Users_model', 'users');
		$userList = $this->users->getAllCustomer();

		$data   = array();
		$i      = 1;
		$status = '';
		foreach($userList as $r){
			if ( $r['status'] == 1 ){
				$status = 'Approved';
			}else if( $r['status'] == 0 ){
				$status = 'Pending';
			}else if ( $r['status'] == 2 ){
				$status = 'Rejected';
			}
			$data[] = array($i, $r['customer_id'], $r['name'], $status, $r['company_name'], $r['contact_number'], $this->users->getUserFormCount($r['customer_id']), $r['register_date'], $this->cachemethods->getCountryNameById($r['country']), $this->cachemethods->getStateNameById($r['state'], $r['country']), 'Self User', '<a href="alluser_explore/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Explore</a>');
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($userList), "recordsFiltered"=>count($userList), "data"=>$data);
		echo json_encode($output);
		exit();

	}

	public function alluser_explore( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['userDetails']  = $this->users->getUserDetails($userId);
		$data['to'] = 'alluser';
		$data['heading'] = 'All User';

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/newuser_explore', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}


	public function user_explore( $userId ){
		
		//$product_id = $this->input->get('id', TRUE);
		//echo $product_id."SFFSFF";
		
		
		
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['userDetails']  = $this->users->getUserDetails($userId);
		$data['user_id']  = $userId;
		$data['to'] = 'newuser';
		$data['heading'] = 'New User';
		//$data['assigned_to'] = $userDetails['assigned_to'];
		
			 $user_id=$this->uri->segment('3');//for particular user query count 
			 $data['userDetails2']  = $this->users->getsingle_QueryCount($user_id);	
			 
			 $data['userDetails3']  = $this->users->getSellBusCount($user_id);	
			 
			 $data['userActivity']  = $this->users->getUserActivity($user_id);	
			 
			 
			 
			
	            $this->load->view('admin/include/header', $header );
				$this->load->view('admin/newuser_explore', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}


	public function query_explore( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getQueryDetails($userId);
		$data['queryid']  = $userId;
		$data['to'] = 'newquery';
		$data['heading'] = 'New Query';

                $this->load->view('admin/include/header', $header );
		$this->load->view('admin/newquery_explore', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
		public function query_explore_user( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getQueryDetails($userId);
		$data['queryid']  = $userId;
		$data['to'] = 'newquery';
		$data['heading'] = 'New Query';

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/newquery_explore_user', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}
		public function Rejected_query_explore( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getRejectedQueries($userId);
		
		$data['heading'] = 'Rejected Query Reason';

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/queries_rejected_reason', $data);
                $this->parser->parse('admin/include/footer', $footer );
	
		}
		
	public function Assigned_query_explore( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getAssignedQueries($userId);
		
		$data['heading'] = 'Query Assigned Details';

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/queries_assigned_details', $data);
                $this->parser->parse('admin/include/footer', $footer );
	
		}	
		
	public function editUser(){
		$this->load->model('admin/Users_model', 'user');
		$isUserEdited = $this->user->editUserDetails();
		if ( $isUserEdited ){
			$this->session->set_flashdata('msg', 'User updated successfully.');
		}else{
			$this->session->set_flashdata('msg', 'Oops! user can not be updated.');
		}

		redirect(base_url().'admin/'.$this->input->post('to'));


	}


	public function editQuery(){
		
		//echo $this->input->post('query_id');
		//echo $this->input->post('url');
		
		//die;
		$this->load->model('admin/Users_model', 'user');
		$isUserEdited = $this->user->editQueryDetails();
		if ( $isUserEdited ){
			$this->session->set_flashdata('msg', 'User updated successfully.');
		}else{
			$this->session->set_flashdata('msg', 'Oops! user can not be updated.');
		}

		redirect(base_url().'admin/'.$this->input->post('url').'/'.$this->input->post('query_id'));


	}

	public function user_assign( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['userDetails']  = $this->users->getUserDetails($userId);
		$this->load->model('admin/Employee_model', 'employee');
		$data['employees'] = $this->employee->getEmployees();
		$data['user_id']   = $userId;
		$data['to']        = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
		$data['heading']   = $data['to'] == 'alluser'?'All User':'New User';

                $this->load->view('admin/include/header', $header );
		$this->load->view('admin/newuser_assign', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function user_reject( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['userDetails']  = $this->users->getUserDetails($userId);
		$data['user_id']      = $userId;
		$data['to']           = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
		$data['heading']      = $data['to'] == 'alluser'?'All User':'New User';

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/user_reject', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function rejectUser(){
		$this->load->model('admin/Users_model', 'users');
		$isUserRejected = $this->users->rejectUser();
		if ( !$isUserRejected ){
			$this->session->set_flashdata('msg', 'Oops! an error has occurred. Please try later. ');
		}else{
			$this->session->set_flashdata('msg', 'User has been rejected.');
		}
		redirect(base_url().'admin/'.$this->input->post('to'));
	}

	public function newQuery()
	{
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		//$this->load->model('admin/Users_model', 'users');
		//$data['userList'] = $this->users->getNewUsers();

                $this->load->view('admin/include/header', $header );
		//$this->load->view('admin/newusers', $data);
				$this->load->view('admin/newqueries');
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	
	
	public function queries_page(){
		
		
		 //print_r($_REQUEST['sort_status']);
		
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		
		

		$this->load->model('admin/Users_model', 'users');
		$userList = $this->users->getNewQueries();
		
		
		

		$data = array();
		$i    = 1;
		foreach($userList as $r){
			
			if($r['query_status'] == 0){
					$dataPr='<b style="color:#28286b;">Pending</b>';
					
					$urlhref='<a href="newquery_explore/'.$r['id'].'" role="button"><img src="../assets/admin/images/view.png" title="explore details"></a>';
				}
			else if($r['query_status'] == 2){
				
					$dataPr='<b style="color:#f00;">Rejected</b>';
					
					$urlhref='<a href="newquery_explore/'.$r['id'].'"  role="button"><img src="../assets/admin/images/view.png" title="explore details"></a>';
				}	
			else{
					
					$dataPr='<b style="color:#1aa018;">'.$r['Empname'].'</b>';
					
					$urlhref='<a href="newquery_explore/'.$r['id'].'"  role="button"><img src="../assets/admin/images/view.png" title="explore details"></a>';
			}
			
			
			
			$idvalue = str_pad($r['id'] + 1, 5, 0, STR_PAD_LEFT);
			
			$cityval=explode(',',$r['city']);
			$city=$cityval[0];
			
			$datatime='<span style="font-size: 13px;">'.date('d-m-Y h:i:s',strtotime($r['query_datetime'])).'</span>';
			
			$data[] = array($i, $idvalue,$datatime,$r['name'], $r['email'],$r['contact_number'],$city,$dataPr,$r['followstatus'],$urlhref );
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($userList), "recordsFiltered"=>count($userList), "data"=>$data);
		echo json_encode($output);
		exit();

	}
	
	//get query details for particular or single user
	
	public function newSingleQuery()
	{
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Queries List';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );
				
				

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/single_user_queries');
                $this->parser->parse('admin/include/footer', $footer );
				
	}
	
	public function SingleUserQuery(){
		
	
			
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		
		$getuserid=$this->input->get("userid");
		
		$this->load->model('admin/Users_model', 'users');
		$userList3 = $this->users->getSingleQueries($getuserid);
		
		
		$data = array();
		$i    = 1;
		
//print_r($userList3);

//die;
		
		foreach($userList3 as $r){
			
			//print_r($userList3);
			
		
		if($r['query_status'] == 0){
					$dataPr='Pending for approval';
					
					$urlhref='<a href="'.base_url().'admin/newquery_explore_user/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Explore</a>';
				}
			else if($r['query_status'] == 2){
				
					$dataPr='Rejected';
					
					$urlhref='<a href="'.base_url().'admin/queries_rejected_reason/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">View Details</a>&nbsp;<a href="'.base_url().'admin/newquery_explore_user/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Explore</a>';
				}	
			else{
					
					$dataPr='Assigned To'.' '.$r['Empname'];
					
					$urlhref='<a href="'.base_url().'admin/queries_assigned_details/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">View Details</a>&nbsp;<a href="'.base_url().'admin/newquery_explore_user/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Explore</a>';
			}
			
			$data[] = array($i, $r['id'],$r['name'], $r['email'], $r['query_datetime'], $r['city'],

				$dataPr,$urlhref);
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($userList3), "recordsFiltered"=>count($userList3), "data"=>$data);
		echo json_encode($output);
		//exit();

	}

	public function allqueries_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		
		
		
		
		$this->load->model('admin/Users_model', 'users');
		$userList = $this->users->getAllQueries();

		$data   = array();
		$i      = 1;
		$status = '';
		foreach($userList as $r){
			if ( $r['query_status'] == 1 ){
				$status = 'Approved';
			}else if( $r['status'] == 0 ){
				$status = 'Pending';
			}else if ( $r['status'] == 2 ){
				$status = 'Rejected';
			}
			$data[] = array($i, $r['id'], $r['name'], $r['email'],$r['query_datetime'],$r['city'], $r['contact_number'],$status,'<a href="allquery_explore/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Explore</a>');
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($userList), "recordsFiltered"=>count($userList), "data"=>$data);
		echo json_encode($output);
		exit();

	}

	
	public function query_assign( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getQueryDetails($userId);
		$this->load->model('admin/Employee_model', 'employee');
		$data['employees'] = $this->employee->getEmployees();
		$data['query_id']   = $userId;
		$data['to']        = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
		$data['heading']   = $data['to'] == 'allquery'?'All Query':'New Query';

                $this->load->view('admin/include/header', $header );
		$this->load->view('admin/newquery_assign', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}

		public function query_assign_user($userId){
			
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

				$this->load->model('admin/Users_model', 'users');
				$data['queryDetails']  = $this->users->getQueryDetails($userId);
				$this->load->model('admin/Employee_model', 'employee');
				$data['employees'] = $this->employee->getEmployees();
				$data['query_id']   = $userId;
				$data['to']        = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
				$data['heading']   = $data['to'] == 'allquery'?'All Query':'New Query';

				$this->load->view('admin/include/header', $header );
				$this->load->view('admin/newquery_assign_user', $data);
				$this->parser->parse('admin/include/footer', $footer );
	}
	
	public function query_reject( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getQueryDetails($userId);
		$data['query_id']      = $userId;
		$data['to']           = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
		$data['heading']      = $data['to'] == 'allquery'?'All Query':'New Query';

                $this->load->view('admin/include/header', $header );
		$this->load->view('admin/query_reject', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
		public function query_reject_user( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getQueryDetails($userId);
		$data['query_id']      = $userId;
		$data['to']           = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
		$data['heading']      = $data['to'] == 'allquery'?'All Query':'New Query';

                $this->load->view('admin/include/header', $header );
		$this->load->view('admin/query_reject_user', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function rejectQuery(){
		log_message('debug', 'In reject query controller---------------------------------------------------------------------');
		$this->load->model('admin/Users_model', 'users');
		$isUserRejected = $this->users->rejectQuery();
		if ( !$isUserRejected ){
			$this->session->set_flashdata('msg', 'Oops! an error has occurred. Please try later. ');
		}else{
			$this->session->set_flashdata('msg', 'Query has been rejected.');
		}
		redirect(base_url().'admin/'.$this->input->post('to'));
	}
	
	
public function rejectQueryUser(){
	
	$user_id=$this->uri->segment('4');
		log_message('debug', 'In reject query controller---------------------------------------------------------------------');
		$this->load->model('admin/Users_model', 'users');
		$isUserRejected = $this->users->rejectQuery();
		if ( !$isUserRejected ){
			$this->session->set_flashdata('msg', 'Oops! an error has occurred. Please try later. ');
		}else{
			$this->session->set_flashdata('msg', 'Query has been rejected.');
		}
		redirect(base_url().'admin/singleuserquery/'.$user_id);
	}
	
	
	public function allqueries()
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: All Queries';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		//$this->load->model('admin/Users_model', 'users');
		//$data['userList'] = $this->users->getAllCustomer();

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/allqueries');//, $data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	public function allRejectedqueries()
	{
		
				$this->load->model('admin/Users_model', 'users');
				$data = $this->users->getRejectedQueries();

               
				$this->load->view('admin/queries_rejected_reason',$data);
               
	}
	public function getQueryCity()
	{		
		
			$this->load->model('admin/Users_model', 'users');
			$data['queryDetails']  = $this->users->getCity();
			echo "<option value=''>city</option>";
			foreach($data['queryDetails'] as $city){
					
				echo "<option value='".$city['city']."'>".$city['city']."</option>";
				
				
           }
			//$this->load->view('admin/newqueries', $data);
			
	}
	public function getQueryTeam()
	{
		
			$this->load->model('admin/Users_model', 'users');
			$data['queryTeam']  = $this->users->getTeam();
			echo "<option value=''>Team</option>";
			foreach($data['queryTeam'] as $teamVal){
					
				echo "<option value='".$teamVal['id']."'>".$teamVal['name']."</option>";
           }
			//$this->load->view('admin/newqueries', $data);
			
	}
	public function getNewqueryCount()
	{
		
			$this->load->model('admin/Users_model', 'users');
			$data['queryCount']  = $this->users->getNqCount();
			echo $data['queryCount'];
		
	}
 /***********************for new users start here****************/
 
	 public function getNewuserCount()//for all pending quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getNuCount();
				echo $data['queryCount'];
			
		}
	 public function getNewuserCountAll()//for all pending quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getNewuserCountAll();
				echo $data['queryCount'];
			
		}	
		
	 public function getAssigneduserCount() //for all assigned quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getAssignedCount();
				echo $data['queryCount'];
			
		}	
	//get customer query assigned count
	public function getAssignedqueryCount() //for all assigned quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getQueryAssignedCount();
				echo $data['queryCount'];
			
		}		
//get customer total query count
	public function getTotalqueryCount() //for all assigned quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getQueryTotalCount();
				echo $data['queryCount'];
			
		}		
//get customer query pending approval count
	public function getPendingqueryCount() //for all assigned quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getQueryPendingCount();
				echo $data['queryCount'];
			
		}	
	
	//get customer query rejected count
	public function getRejectedqueryCount() //for all assigned quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getQueryRejectedCount();
				echo $data['queryCount'];
			
		}	
	
	 public function getRejecteduserCount() //for all assigned queries
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getRejectedCount();
				echo $data['queryCount'];
			
		}	

	public function getsingleQueryCount() //for all single user queries count
		{
					
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getsingle_QueryCount();
				echo $data['queryCount'];
			
		}		
		
			public function Rejected_user_explore( $userId ){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getUserQueries($userId);
		
		$data['heading'] = 'Rejected Customer Reason';

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/user_rejected_reason', $data);
                $this->parser->parse('admin/include/footer', $footer );
	
		}	
 
 	public function Assigned_user_explore( $userId ){
		
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Assigned User Details';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

				$this->load->model('admin/Users_model', 'users');
				$data['queryDetails']  = $this->users->getAssignedUser($userId);
				
				$data['heading'] = 'User Assigned Details';
				
			 $getuserid=$this->uri->segment(3);
			
			//die;
		
		
			$data['userList'] = $this->users->getBusinessDetails($assigned_Cust,$new_Cust2,$rejected_Cust,$getuserid);


	

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/user_assigned_details', $data);
                $this->parser->parse('admin/include/footer', $footer );
	
		}
	
		
 /***********************for new users end here******************/
 
 /***************download report in xls format for users start here*******/
 public function UserReport()

  {

  // filename for download

 
  $this->load->model('admin/Users_model', 'users');
  $data['usersList']  = $this->users->getUserExport();
  
  //print_r($data['usersList']);
  
  $filename = "user-data-" . date('d-m-Y') . ".xls";



  
  
  $this->load->view('admin/user_data_report', $data);
  
  header("Content-Disposition: attachment; filename=\"$filename\"");

  header("Content-Type: application/vnd.ms-excel");
  
  
  
  
 
	}	
/***************download report in xls format for users end here*********/	

/***************download report in xls format for users start here*******/
 public function QueryReport()

  {

  // filename for download

 
  $this->load->model('admin/Users_model', 'users');
  $data['usersList']  = $this->users->getQueryExport();
  
  //print_r($data['usersList']);
  
  $filename = "query-data-" . date('d-m-Y') . ".xls";



  
  
  $this->load->view('admin/user_query_report', $data);
  
  header("Content-Disposition: attachment; filename=\"$filename\"");

  header("Content-Type: application/vnd.ms-excel");
  
  
  
  
 
	}	
/***************download report in xls format for users end here*********/	
 
 
 //get business sell (sell_a_business) for single user or customer
 
 public function getSellBusinessCount() //for all assigned quires
		{
			
			//print_r($userid);
				$this->load->model('admin/Users_model', 'users');
				$data['querySellCount']  = $this->users->getSellBusCount();
				
				echo $data['querySellCount'] ;
			
		}	


//get details for business sell details for single user 

public function BusinessSellUser($userid)
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/single_user_business_sell');
                $this->parser->parse('admin/include/footer', $footer );
	}
	public function BusinessSell_page($userid){
		
		//print_r($userid);
		
		//die;
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		
		
		$getuserid=$this->input->get("Businessid");
		$this->load->model('admin/Users_model', 'users');
		$userList = $this->users->getBusinessUsers($assigned_Cust,$new_Cust2,$rejected_Cust,$getuserid);

		$data = array();
		$i    = 1;
		foreach($userList as $r){
			
		
					//$urlhref='<a href="newuser_explore/'.$r['id'].'" class="btn btn-sm btn-danger" role="button">Explore</a>';
					$urlhref='<a href="javascript:void(0);" class="btn btn-sm btn-danger" role="button">Explore</a>';
			
		
			
			$data[] = array($i,$r['form_id'] ,$r['name'], $r['customer_id'], $r['contact'],$r['address'],$r['location'],$urlhref);	
			$i++;
			
			
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($userList), "recordsFiltered"=>count($userList), "data"=>$data);
		echo json_encode($output);
		exit();

	}
	//add new user 
		public function addNewUser(){
		
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

			$this->load->model('admin/Users_model', 'users');
			$data['flash']=$this->users->addNewUser();
			
			if($this->input->post('lb_uname')!=''){
			//auto assigned if added by employee start here
				if($this->session->userdata('admin_type')=='employee'){
			
			$this->load->model('admin/Assign_model', 'assign');
			$this->assign->DirectassignCustomer();
			$this->users->updateUserStatusDirect();
				}
			//auto assigned if added by employee end here	
			
			$data['flashVal']='(New User Created successfully.)';
			}
			$this->load->view('admin/include/header', $header );
			$this->load->view('admin/newuser_add',$data);
			$this->parser->parse('admin/include/footer', $footer );
			
	}
	//user re-assign
		public function UserReassign( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['userDetails']  = $this->users->getUserDetails($userId);
		$this->load->model('admin/Employee_model', 'employee');
		$data['employees'] = $this->employee->getEmployees();
		$data['user_id']   = $userId;
		$data['to']        = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
		$data['heading']   = $data['to'] == 'alluser'?'All User':'New User';
		
		$this->load->model('admin/Assign_model', 'assign');
		$data['empAssigned'] = $this->assign->getEmpAssignDetails($userId);
		$data['empCurrAssigned'] = $this->assign->getCurEmpAssignDetails($userId);
		
		
		
        $this->load->view('admin/include/header', $header );
		$this->load->view('admin/user_reassign', $data);
        $this->parser->parse('admin/include/footer', $footer );
		
		
		
	}
	//query re assign
		public function query_reassign( $query_id ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Query Re-Assign';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getQueryDetails($query_id);
		$this->load->model('admin/Employee_model', 'employee');
		$data['employees'] = $this->employee->getEmployees();
		$data['query_id']   = $query_id;
		$data['to']        = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
		$data['heading']   = $data['to'] == 'allquery'?'All Query':'New Query';

		$this->load->model('admin/Assign_model', 'assign');
		$data['empAssigned'] = $this->assign->getQueryAssignDetails($query_id);
		$data['empCurrAssigned'] = $this->assign->getCurQueryAssignDetails($query_id);
		
		
                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/newquery_reassign', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	//download xls format reports for query follow up by employee to customer
	 public function QueryfollowupReport($bType, $assignedTo, $formId)

  {

  // filename for download

 
  $this->load->model('admin/Users_model', 'users');
  $data['usersList']  = $this->users->getQueryFollowupExport($bType, $assignedTo, $formId);
  
  //print_r($data['usersList']);
  
  $filename = "query-follow-up-data-" . date('d-m-Y') . ".xls";



  
  
  $this->load->view('admin/user_query_followup_report', $data);
  
  header("Content-Disposition: attachment; filename=\"$filename\"");

  header("Content-Type: application/vnd.ms-excel");
  
  
  
  
 
	}
	//contact us query frontend
		public function ContactQuery()
	{
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		//$this->load->model('admin/Users_model', 'users');
		//$data['userList'] = $this->users->getNewUsers();

                $this->load->view('admin/include/header', $header );
		//$this->load->view('admin/newusers', $data);
				$this->load->view('admin/contactusqueries');
                $this->parser->parse('admin/include/footer', $footer );
	}
		public function contact_queries_page(){
		
		//print_r($this->input->post("fromDate"));
		//die;
		 //print_r($_REQUEST['sort_status']);
		
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		
		//$fromDate    = $this->input->post('fromDate');
		//$toDate    = $this->input->post('toDate');
		

		$this->load->model('admin/Users_model', 'users');
		$userList = $this->users->getContactQueries();
		
		
		

		$data = array();
		$i    = 1;
		foreach($userList as $r){
			
				if($r['query_status'] == 0){
					$dataPr='Pending for approval';
					
					$urlhref='<a href="newcontact_explore/'.$r['id'].'"  role="button"><img src="../assets/admin/images/view.png"></a>';
				}
			else if($r['query_status'] == 2){
				
					$dataPr='Rejected';
					
					$urlhref='<a href="newcontact_explore/'.$r['id'].'"  role="button"><img src="../assets/admin/images/view.png"></a>';
				}	
			else{
					
					$dataPr='Assigned To'.' '.$r['Empname'];
					
					$urlhref='<a href="newcontact_explore/'.$r['id'].'" role="button"><img src="../assets/admin/images/view.png"></a>';
			}
			$idvalue = str_pad($r['id'] + 1, 5, 0, STR_PAD_LEFT);
			
			
			
			$data[] = array($i, $idvalue,date('d-m-Y h:i:s',strtotime($r['query_datetime'])),$r['name'], $r['email'],$r['contact_number'], $r['city'],

				$dataPr,$urlhref );
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($userList), "recordsFiltered"=>count($userList), "data"=>$data);
		echo json_encode($output);
		exit();

	}
	//contact city
	public function getContactCity()
	{
		
			$this->load->model('admin/Users_model', 'users');
			$data['queryDetails']  = $this->users->getCityContact();
			echo "<option value=''>city</option>";
			foreach($data['queryDetails'] as $city){
					
				echo "<option value='".$city['city']."'>".$city['city']."</option>";
           }
			//$this->load->view('admin/newqueries', $data);
			
	}
	//get contact explore data
		public function Contact_explore( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getContactDetails($userId);
		$data['queryid']  = $userId;
		$data['to'] = 'newquery';
		$data['heading'] = 'New Contact Query';

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/newcontact_explore', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	//contact query assign code
	public function contact_assign( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getContactDetails($userId);
		$this->load->model('admin/Employee_model', 'employee');
		$data['employees'] = $this->employee->getEmployees();
		$data['query_id']   = $userId;
		$data['to']        = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
		$data['heading']   = $data['to'] == 'allquery'?'All Query':'New Contact Query';

                $this->load->view('admin/include/header', $header );
		$this->load->view('admin/newcontact_assign', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	//contact us query reject
		public function contact_reject( $userId ){
			
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

				$this->load->model('admin/Users_model', 'users');
				$data['queryDetails']  = $this->users->getContactDetails($userId);
				$data['query_id']      = $userId;
				$data['to']           = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
				$data['heading']      = $data['to'] == 'allquery'?'All Query':'New Contact Query';

				$this->load->view('admin/include/header', $header );
				$this->load->view('admin/contactquery_reject', $data);
				$this->parser->parse('admin/include/footer', $footer );
	}
	//contact query reject
	public function rejectContact(){
		log_message('debug', 'In reject query controller---------------------------------------------------------------------');
		$this->load->model('admin/Users_model', 'users');
		$isUserRejected = $this->users->rejectContact();
		if ( !$isUserRejected ){
			$this->session->set_flashdata('msg', 'Oops! an error has occurred. Please try later. ');
		}else{
			$this->session->set_flashdata('msg', 'Query has been rejected.');
		}
		redirect(base_url().'admin/newcontact_explore/'.$this->input->post('query_id'));
	}
	
	//update or edit contact query
	public function editContact(){
		
		//echo $this->input->post('query_id');
		//echo $this->input->post('url');
		
		//die;
		$this->load->model('admin/Users_model', 'user');
		$isUserEdited = $this->user->editContactDetails();
		if ( $isUserEdited ){
			$this->session->set_flashdata('msg', 'User updated successfully.');
		}else{
			$this->session->set_flashdata('msg', 'Oops! user can not be updated.');
		}

		redirect(base_url().'admin/'.$this->input->post('url').'/'.$this->input->post('query_id'));


	}
	//assigned view details for contact query
		public function Assigned_contact_explore( $userId ){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getAssignedContact($userId);
		
		$data['heading'] = 'Contact Query Assigned Details';

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/contact_assigned_details', $data);
                $this->parser->parse('admin/include/footer', $footer );
	
		}
		
		//contact query rejected reason
				public function Rejected_contact_explore( $userId ){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getRejectedContact($userId);
		
		$data['heading'] = 'Rejected Contact Reason';

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/contact_rejected_reason', $data);
                $this->parser->parse('admin/include/footer', $footer );
	
		}
		//download contact us query
		public function ContactReport()

  {

  // filename for download

 
  $this->load->model('admin/Users_model', 'users');
  $data['usersList']  = $this->users->getContactExport();
  
  //print_r($data['usersList']);
  
  $filename = "contact-query-data-" . date('d-m-Y') . ".xls";



  
  
  $this->load->view('admin/user_contact_report', $data);
  
  header("Content-Disposition: attachment; filename=\"$filename\"");

  header("Content-Type: application/vnd.ms-excel");
  
  
  
  
 
	}
		//contact query re assign
		public function contact_reassign( $query_id ){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Query Re-Assign';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Users_model', 'users');
		$data['queryDetails']  = $this->users->getContactDetails($query_id);
		$this->load->model('admin/Employee_model', 'employee');
		$data['employees'] = $this->employee->getEmployees();
		$data['query_id']   = $query_id;
		$data['to']        = substr($this->uri->segment(2), 0, strpos( $this->uri->segment(2), '_' ) );
		$data['heading']   = $data['to'] == 'allquery'?'All Query':'New Contact Query';

		$this->load->model('admin/Assign_model', 'assign');
		$data['empAssigned'] = $this->assign->getContactAssignDetails($query_id);
		$data['empCurrAssigned'] = $this->assign->getCurContactAssignDetails($query_id);
		
		
                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/newcontact_reassign', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	//get contact query assigned count
	public function getAssignedContactCount() //for all assigned quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getContactAssignedCount();
				echo $data['queryCount'];
			
		}		
//get contact query total count
	public function getTotalContactCount() //for all assigned quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getContactTotalCount();
				echo $data['queryCount'];
			
		}	
//get contact query pending approval count
	public function getPendingContactCount() //for all assigned quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getContactPendingCount();
				echo $data['queryCount'];
			
		}	
	
	//get contact query rejected count
	public function getRejectedContactCount() //for all assigned quires
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getContactRejectedCount();
				echo $data['queryCount'];
			
		}	
	//get activity users
	 public function getActivityuserCount() //for all
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['queryCount']  = $this->users->getActivityUser();
				 echo $data['queryCount'];
					
		}	
	
	//get total Buyer
	 public function getTotalBuyer() //for all
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['BuyerCount']  = $this->users->getBuyerCount();
				
					
		}
		
		//get total Jv
	 public function getTotalJv() //for all
		{
			
				$this->load->model('admin/Users_model', 'users');
				$data['JVCount']  = $this->users->getJVCount();
				
					
		}
	
	public function userFormCase($form_caseid){
		
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Query Re-Assign';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Case_model', 'cases');
		$data['userList'] = $this->cases->getUserFormCases($form_caseid);
		
		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/user-form-case-details', $data);
		$this->parser->parse('admin/include/footer', $footer );

	}
	public function getSellerCity()
	{		
		
			$this->load->model('admin/Users_model', 'users');
			$data['queryDetails']  = $this->users->getSellerCity();
			echo "<option value=''>city</option>";
			foreach($data['queryDetails'] as $city){
					
				echo "<option value='".$city['id']."'>".$city['city_name']."</option>";
				
				
           }
			//$this->load->view('admin/newqueries', $data);
			
	}
}

?>