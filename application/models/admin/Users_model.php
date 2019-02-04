<?php
date_default_timezone_set('Asia/Kolkata');

class Users_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function validateCustomer(){
		$userId = $this->input->post('userid');
		$passwd = $this->input->post('password');

		if ( !isset($userId) || !isset($passwd) ){
			return false;
		}

		$whereClause = array( 'USER_ID'=>$userId, 'PASSWORD'=>$passwd );
		$userQuery   = $this->db->get_where(TBL_PREFIX.TBL_USERS, $whereClause);
		if ( isset( $userQuery ) && $userQuery->num_rows() > 0 ){
			$row = $userQuery->row();
			$this->session->set_userdata('is_admin_logged_in', true);
			$this->session->set_userdata('admin_userid', $userId);
			$this->session->set_userdata('admin_id', $row->id);
			$this->session->set_userdata('admin_type', $row->type);
			return true;
		}else{
			$this->session->set_userdata('is_admin_logged_in', false);
			return false;
		}
	}

	public function getNewUsers($assigned_Cust,$new_Cust2,$rejected_Cust,$activity_Cust,$nonactivity_Cust,$UserAct_status){
		
		$GetUserType=$this->session->userdata('admin_type');
		$GetUserid=$this->session->userdata('admin_id');
		
		$UserType = $this->input->get('UserType');
		
		if($activity_Cust!=''){
		$this->db->select(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.contact_number,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.location,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.name,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.company_name,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.address,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.register_date,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.status,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.user_status,'.TBL_PREFIX.TBL_EMPLOYEE.'.name as Empname,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.created_by');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		$this->db->group_by("bd_business_details.customer_id");
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id','left');
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE,TBL_PREFIX.TBL_EMPLOYEE.'.id= '.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to','left');
		
		
		
		
		}
		elseif($nonactivity_Cust!=''){
			
		$this->db->select(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		$this->db->group_by("bd_business_details.customer_id");
		$q = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$data = $q->result_array();
			
		$user_id     = $data[0]['customer_id'];
		
		
		
		
		
			
		$this->db->select(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.contact_number,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.location,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.name,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.company_name,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.address,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.register_date,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.status,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.user_status,'.TBL_PREFIX.TBL_EMPLOYEE.'.name as Empname,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.created_by');
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id','left');
		
		foreach ($data as $application) {
			
			
			 $job_id = $application['customer_id'];
			 $this->db->where(array(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id!='=>$job_id));	
			 
			
		}
		
		
		$this->db->group_by("bd_customer_details.customer_id");
		$this->db->from(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id','left');
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE,TBL_PREFIX.TBL_EMPLOYEE.'.id= '.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to','left');
		
		//log_message('debug', 'Last query to get nonactivity data ['.$job_id.']');
		}
		else{
		$this->db->select(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.contact_number,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.location,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.name,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.company_name,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.address,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.register_date,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.status,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.user_status,'.TBL_PREFIX.TBL_EMPLOYEE.'.name as Empname,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.created_by');
		
		$this->db->from(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id','left');
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE,TBL_PREFIX.TBL_EMPLOYEE.'.id= '.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to','left');
		}
		
		
	
		if($GetUserType=='admin'){
		
		//$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		
		}else if($GetUserType=='employee'){
			
		$this->db->where(array('assigned_to'=>$GetUserid));	
		}
		
		if($UserAct_status!=''){
			
		$this->db->where(array('bd_customer_details.user_status'=>$UserAct_status));		
		}
		if($assigned_Cust!=''){
			
		$this->db->where(array('bd_customer_details.status'=>1));		
		}
		else if($new_Cust2!=''){
			
		$this->db->where(array('bd_customer_details.status'=>0));		
		}
		else if($rejected_Cust!=''){
			
		$this->db->where(array('bd_customer_details.status'=>2));		
		}
		
		
		$this->db->order_by("bd_customer_details.id","desc");
		
		if($UserType!='' and $_REQUEST['sort_status']=='' and $_REQUEST['sort_team']=='' and $_REQUEST['fromDate']=='' and $_REQUEST['toDate']==''){
			$this->db->where(array('who'=>$UserType));
		}
		if($_REQUEST['sort_team']!='' and $_REQUEST['sort_status']==''){
			$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		}
		if($_REQUEST['sort_team']!='' and $_REQUEST['sort_status']!=''){
			$this->db->where(array('assigned_to'=>$_REQUEST['sort_team'],'status'=>$_REQUEST['sort_status']));
		}
		if($_REQUEST['sort_status']!='' and $_REQUEST['sort_team']==''){
			$this->db->where(array('bd_customer_details.status'=>$_REQUEST['sort_status']));
		}
		if($_REQUEST['fromDate']!='' and $_REQUEST['toDate']!=''){
		$this->db->where('DATE_FORMAT(register_date,"%Y-%m-%d") 
BETWEEN DATE_FORMAT("'.$_REQUEST["fromDate"].'","%Y-%m-%d") AND DATE_FORMAT("'.$_REQUEST["toDate"].'","%Y-%m-%d")');
		}
		
		$userList=$this->db->get();
		//log_message('debug', 'Last query to get new user list ['.$this->db->last_query().']');
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			return $dataToReturn;
		}

	}

	public function getNewQueries(){
		
		
		$GetUserType=$this->session->userdata('admin_type');
		$GetUserid=$this->session->userdata('admin_id');
		$rejected_CustQ = $this->input->get("rejected_CustQ");
		$query_status = $this->input->get("query_status_new");
		$sort_status = $this->input->get("sort_status");
		
		//die;
		
		$this->db->select('bd_user_query_info.id,bd_user_query_info.name,bd_user_query_info.email,contact_number,city, message, city,query_datetime,query_status,bd_query_responsibility.status,bd_employee.name as Empname,bd_user_query_info.form_status,bd_case_history.status as followstatus');
		$this->db->from(TBL_PREFIX.TBL_USER_QUERY);
		$this->db->join(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY, TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.query_id = '.TBL_PREFIX.TBL_USER_QUERY.'.id','left');
		$this->db->join(TBL_PREFIX.TBL_CASE_HISTORY, TBL_PREFIX.TBL_CASE_HISTORY.'.case_id = '.TBL_PREFIX.TBL_USER_QUERY.'.id','left');
		$this->db->join('bd_employee', 'bd_employee.id = bd_query_responsibility.assigned_to','left');
		
		if($GetUserType=='admin'){
		
		//$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		
		}else if($GetUserType=='employee'){
			
		$this->db->where(array('assigned_to'=>$GetUserid));	
		}
		if($rejected_CustQ!=''){
			
		$this->db->where(array('bd_user_query_info.query_status'=>2));		
		}
		
		if($rejected_CustQ==''){
			
		$this->db->where(array('bd_user_query_info.query_status !='=>2));		
		}
		$this->db->group_by("bd_user_query_info.id");
		$this->db->order_by("bd_user_query_info.id","desc");
		
		if($query_status!=''){
			
		$this->db->where(array('bd_case_history.status'=>$query_status));		
		}
		
		if($_REQUEST['sort_status']!='' and $_REQUEST['sort_team']=='' and $_REQUEST['sort_city']==''){
			$this->db->where(array('query_status'=>$_REQUEST['sort_status']));
		}
		
		if($_REQUEST['sort_city']!='' and $_REQUEST['sort_status']=='' and $_REQUEST['sort_team']==''){
			$this->db->where(array('city'=>$_REQUEST['sort_city']));
		}
		if($_REQUEST['sort_team']!='' and $_REQUEST['sort_status']=='' and $_REQUEST['sort_city']==''){
			$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		}
		if($_REQUEST['sort_team']!='' and $_REQUEST['sort_status']!='' and $_REQUEST['sort_city']==''){
			$this->db->where(array('assigned_to'=>$_REQUEST['sort_team'],'query_status'=>$_REQUEST['sort_status']));
		}
		if($_REQUEST['sort_team']!='' and $_REQUEST['sort_status']!='' and $_REQUEST['sort_city']!=''){
			$this->db->where(array('assigned_to'=>$_REQUEST['sort_team'],'query_status'=>$_REQUEST['sort_status'],'city'=>$_REQUEST['sort_city']));
		}
		if($_REQUEST['sort_city']!='' and $_REQUEST['sort_status']!='' and $_REQUEST['sort_team']==''){
			$this->db->where(array('city'=>$_REQUEST['sort_city'],'query_status'=>$_REQUEST['sort_status']));
		}
		if($_REQUEST['fromDate']!='' and $_REQUEST['toDate']!=''){
		$this->db->where('DATE_FORMAT(query_datetime,"%Y-%m-%d") 
BETWEEN DATE_FORMAT("'.$_REQUEST["fromDate"].'","%Y-%m-%d") AND DATE_FORMAT("'.$_REQUEST["toDate"].'","%Y-%m-%d")');
		}
		
		$userList=$this->db->get();
		
		//log_message('debug', 'Last query to get new user list ['.$this->db->last_query().']');
		
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			return $dataToReturn;
		}

	}
	
		public function getSingleQueries($user_id2){
		
		//print_r($user_id2);
		
			//log_message('debug', 'userid ['.$user_id2.']');
			
		$this->db->select('bd_user_query_info.id,bd_user_query_info.name,bd_user_query_info.email,
		contact_number,city, message, city,query_datetime,query_status,bd_query_responsibility.status,
		bd_employee.name as Empname');
		$this->db->from(TBL_PREFIX.TBL_USER_QUERY);
		$this->db->join(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY, TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.query_id = '.TBL_PREFIX.TBL_USER_QUERY.'.id','left');
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_EMPLOYEE.'.id = '.TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.assigned_to','left');
	
		$this->db->where(array('bd_user_query_info.customer_id'=>$user_id2));
		
		$sort_status = $this->input->get("sort_status");
		$sort_team = $this->input->get("sort_team");
		$sort_city = $this->input->get("sort_city");
		$fromDate = $this->input->get("fromDate");
		$toDate = $this->input->get("toDate");
		
		//print_r($sort_city);
		
		
		
		if($sort_status!='' and $sort_team=='' and $sort_city==''){
			$this->db->where(array('query_status'=>$sort_status,'bd_user_query_info.customer_id'=>$user_id2));
		}
		
		if($sort_city!='' and $sort_status=='' and $sort_team==''){
			$this->db->where(array('city'=>$sort_city,'bd_user_query_info.customer_id'=>$user_id2));
		}
		if($sort_team!='' and $sort_status=='' and $sort_city==''){
			$this->db->where(array('assigned_to'=>$sort_team,'bd_user_query_info.customer_id'=>$user_id2));
		}
		if($sort_team!='' and $sort_status!='' and $sort_city==''){
			$this->db->where(array('assigned_to'=>$sort_team,'query_status'=>$sort_status,'bd_user_query_info.customer_id'=>$user_id2));
		}
		if($sort_team!='' and $sort_status!='' and $sort_city!=''){
			$this->db->where(array('assigned_to'=>$sort_team,'query_status'=>$sort_status,'city'=>$sort_city,'bd_user_query_info.customer_id'=>$user_id2));
		}
		if($sort_city!='' and $sort_status!='' and $sort_team==''){
			$this->db->where(array('city'=>$sort_city,'query_status'=>$sort_status,'bd_user_query_info.customer_id'=>$user_id2));
		}
		if($fromDate!='' and $toDate!=''){
		$this->db->where('DATE_FORMAT(query_datetime,"%Y-%m-%d") 
BETWEEN DATE_FORMAT("'.$fromDate.'","%Y-%m-%d") AND DATE_FORMAT("'.$toDate.'","%Y-%m-%d")');
		}
		
		$userList3=$this->db->get();
		
		//log_message('debug', 'Last query to get new user list ['.$this->db->last_query().']');
		
		if( !$userList3 ){
			return null;
		}else{
			return $userList3->result_array();
			return $dataToReturn;
		}

	}

	public function getAllCustomer(){
		$this->db->select('id,customer_id,name,status,company_name,contact_number,register_date,country,state,city');

		//$this->db->from(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		//$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id');
		//$this->db->where(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.status != 0');

		$this->db->where('status != 0');
		$userList = $this->db->get(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		//log_message('debug', 'Last query to get all customer list ['.$this->db->last_query().']');
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			return $dataToReturn;
		}
	}

	public function getAllQueries(){
		$this->db->select('id,name,email,city,contact_number,query_datetime, query_status');

		//$this->db->from(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		//$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id');
		//$this->db->where(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.status != 0');

		$this->db->where('query_status != 0');
		$userList = $this->db->get(TBL_PREFIX.TBL_USER_QUERY);
		//log_message('debug', 'Last query to get all Query list ['.$this->db->last_query().']');
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			return $dataToReturn;
		}
	}
	
	
	public function getUserFormCount( $userId ){
		$numOfForms = $this->db->where('customer_id', $userId)->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		//log_message('debug', 'Query to get number of forms['.$this->db->last_query().']');
		return $numOfForms;
	}

	public function getUserDetails( $userId ){
		$this->db->select('bd_customer_details.id,bd_customer_details.customer_id,password,name,company_name,address,location,designation,who,country_code,contact_number,alternate_email,alternate_contact,website,bd_customer_details.status,bd_customer_responsibility.comment,register_date,last_update_date,expiry_date,created_by,assigned_to,date,assigned_to,user_status,registration_type');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id','left');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, array('bd_customer_details.id'=>$userId));
		
		//log_message('debug', 'Last query to get user details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}


	public function getQueryDetails( $userId ){
		$this->db->select('bd_user_query_info.id,bd_user_query_info.name,bd_user_query_info.email,contact_number,city, message, city,query_datetime,bd_user_query_info.query_status,bd_query_responsibility.status,assigned_to,bd_user_query_info.customer_id');
		
		$this->db->join(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY, TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.query_id = '.TBL_PREFIX.TBL_USER_QUERY.'.id','left');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_USER_QUERY, array('bd_user_query_info.id'=>$userId));
		//log_message('debug', 'Last query to get user details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}
	
	public function getRejectedQueries( $userId,$comment,$query_update_time ){
		$this->db->select('id,comment,query_update_time');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_USER_QUERY, array('id'=>$userId));
		//log_message('debug', 'Last query to get user details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}
	
	public function getAssignedQueries( $userId ){
		$this->db->select('bd_query_responsibility.query_id,bd_query_responsibility.assigned_to,bd_query_responsibility.date,bd_query_responsibility.status,bd_query_responsibility.comment,name,date');
		//$this->db->from(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_EMPLOYEE.'.id = '.TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.assigned_to','left');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY, array('query_id'=>$userId));
		//log_message('debug', 'Last query to get user details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}

	public function getCustomerDetailsByCustId( $customerId, $fields ){
		$this->db->select($fields);
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, array('customer_id'=>$customerId));
		//log_message('debug', 'Last query to get user details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}

	public function updateUserStatus( $userId, $status=1 ){
		$data = array('status'=>$status, 'last_update_date'=>date('Y-m-d H:i:s'), 'comment'=>'');
		$this->db->set($data);
		$this->db->where('id', $userId);
		$result = $this->db->update( TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		if( !$result ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}

	public function updateQueryStatus( $queryId, $status=1 ){
		$data = array('query_status'=>$status, 'query_update_time'=>date('Y-m-d H:i:s'), 'comment'=>'');
		$this->db->set($data);
		$this->db->where('id', $queryId);
		$result = $this->db->update( TBL_PREFIX.TBL_USER_QUERY);
		if( !$result ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}

	public function rejectUser(){
		$data = array('status'=>2, 'last_update_date'=>date('Y-m-d H:i:s'), 'comment'=>$this->input->post('comment') );
		$this->db->set($data);
		$this->db->where('id', $this->input->post('user_id'));
		$result = $this->db->update( TBL_PREFIX.TBL_CUSTOMER_DETAILS );
		if ( !$result ){
			return 'error';
		}else{
			if ( $this->db->affected_rows() > 0 ){
				return 'true';
			}else{
				return 'false';
			}
		}
	}

	public function rejectQuery(){
		//log_message('debug', 'In reject query model================================================================================');
		$data = array('query_status'=>2, 'query_update_time'=>date('Y-m-d H:i:s'), 'comment'=>$this->input->post('comment') );
		$this->db->set($data);
		$this->db->where('id', $this->input->post('query_id'));
		$result = $this->db->update( TBL_PREFIX.TBL_USER_QUERY );
		//log_message('debug', 'Query to update Query Status ['.$this->db->last_query().']');
		if ( !$result ){
			return 'error';
		}else{
			if ( $this->db->affected_rows() > 0 ){
				return 'true';
			}else{
				return 'false';
			}
		}
	}

	public function editUserDetails(){
	
		
		$this->db->select('password');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, array('id'=>$this->input->post('user_id')));
		$fetchdata= $userDetails->result(); 
		
		$password=$fetchdata[0]->password;
		
		if($this->input->post('password')!=''){
			
			$passval=$this->input->post('password');
			
		}else{
			
			$passval=$password;
		}
		
		
	
		
		$data = array('password'=>$passval, 'name'=>$this->input->post('name'), 'company_name' => $this->input->post('company_name'), 'address'=>$this->input->post('address'),'location'=>$this->input->post('location'), 'contact_number'=>$this->input->post('contact_number'), 'alternate_email'=>$this->input->post('alternate_email'),'alternate_contact'=>$this->input->post('alternate_contact'), 'website'=>$this->input->post('website'),'designation'=>$this->input->post('designation'),'who'=>$this->input->post('who'),'user_status'=>$this->input->post('user_status'));

		$this->db->set($data);
		$this->db->where('id', $this->input->post('user_id') );
		$result = $this->db->update( TBL_PREFIX.TBL_CUSTOMER_DETAILS );
		//log_message('debug', 'Query to update User Profile ['.$this->db->last_query().']');
		if( !$result ){
			return "error";
		}else{
			if ( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}
	// Get cities
  
	
	
    public function getCity(){
		
		$this->db->select('DISTINCT(city) as city');
		$response = $this->db->get_where(TBL_PREFIX.TBL_USER_QUERY);
		//log_message('debug', 'Last query to get user city  ['.$this->db->last_query().']');
		if( !$response ){
			return null;
		}else{
			return $response->result_array();
		}	
	}
 
	public function getNqCount(){ //get all pending queries
		
		$this->db->select('COUNT(id)');
		
		$count = $this->db->where('query_status',0)->from(TBL_PREFIX.TBL_USER_QUERY)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$count.']');
		if( !$count ){
			return null;
		}else{
			return $count;
		}	
	}
	
	 public function getTeam(){
		
		$this->db->select('id,name');
		$team = $this->db->get_where(TBL_PREFIX.TBL_EMPLOYEE);
		//log_message('debug', 'Last query to get team  ['.$this->db->last_query().']');
		if( !$team ){
			return null;
		}else{
			return $team->result_array();
		}	
	}
	
	/************new users start here**********/
	
	public function getNuCount(){ //get all pending queries
		
		$this->db->select('COUNT(id)');
		
		$count = $this->db->where('status',0)->from(TBL_PREFIX.TBL_CUSTOMER_DETAILS)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$count.']');
		if( !$count ){
			return null;
		}else{
			return $count;
		}	
	}
	public function getNewuserCountAll(){ //get all pending queries
		
		$this->db->select('COUNT(id)');
		
		$count = $this->db->count_all_results(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		
		
		//log_message('debug', 'Last query to get count  ['.$count.']');
		if( !$count ){
			return null;
		}else{
			return $count;
		}	
	}
	
	public function getAssignedCount(){ //get all assigned queries
		
		$this->db->select('COUNT(id)');
		
		$countAssigned = $this->db->where('status',1)->from(TBL_PREFIX.TBL_CUSTOMER_DETAILS)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$countAssigned.']');
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	//get customer query assigned count 
	public function getQueryAssignedCount(){ //get all assigned queries
		
		$this->db->select('COUNT(id)');
		
		$countAssigned = $this->db->where('query_status',1)->from(TBL_PREFIX.TBL_USER_QUERY)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$countAssigned.']');
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	//get customer total query count 
	public function getQueryTotalCount(){ //get all assigned queries
		
		$this->db->select('COUNT(id)');
		
		$countAssigned = $this->db->from(TBL_PREFIX.TBL_USER_QUERY)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$countAssigned.']');
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	//get customer query pending approval count 
	public function getQueryPendingCount(){ //get all assigned queries
		
		$this->db->select('COUNT(id)');
		
		$countAssigned = $this->db->where('query_status',0)->from(TBL_PREFIX.TBL_USER_QUERY)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$countAssigned.']');
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	
	//get customer query rejected count 
	public function getQueryRejectedCount(){ //get all assigned queries
		
		$this->db->select('COUNT(id)');
		
		$countAssigned = $this->db->where('query_status',2)->from(TBL_PREFIX.TBL_USER_QUERY)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$countAssigned.']');
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	
	public function getRejectedCount(){ //get all rejected queries
		
		$this->db->select('COUNT(id)');
		
		$countRejected = $this->db->where('status',2)->from(TBL_PREFIX.TBL_CUSTOMER_DETAILS)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$countRejected.']');
		if( !$countRejected ){
			return null;
		}else{
			return $countRejected;
		}	
	}
	public function getsingle_QueryCount($user_id){ //get all queries count
	

		$this->db->select('COUNT(bd_user_query_info.id)');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_USER_QUERY.'.customer_id','left');
		
		$quCount = $this->db->where('bd_customer_details.id',$user_id)->from(TBL_PREFIX.TBL_USER_QUERY)->count_all_results();
	
		
		//log_message('debug', 'getsingle_QueryCount ['.$user_id.']');
		if( !$quCount ){
			return null;
		}else{
			return $quCount;
		}
	}
	
	public function getUserQueries( $userId,$comment,$query_update_time ){
		$this->db->select('id,comment,status,last_update_date');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, array('id'=>$userId));
		//log_message('debug', 'Last query to get customer details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}
	
	
	public function getAssignedUser( $userId ){
		$this->db->select('bd_customer_responsibility.customer_id,bd_customer_responsibility.assigned_to,bd_customer_responsibility.date,bd_customer_responsibility.status,bd_customer_responsibility.comment,name');
		//$this->db->from(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_EMPLOYEE.'.id = '.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to','left');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, array('customer_id'=>$userId));
		//log_message('debug', 'Last query to get user details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}
	//export all user data in xls format
	
	public function getUserExport(){
		
		$GetUserType=$this->session->userdata('admin_type');
		$GetUserid=$this->session->userdata('admin_id');

		$this->db->select(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.name,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.company_name,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.address,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.register_date,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.status,'.TBL_PREFIX.TBL_EMPLOYEE.'.name as Empname,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to,'.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.location');
		
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id','left');
		
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE,TBL_PREFIX.TBL_EMPLOYEE.'.id= '.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to','left');
		
		
		
		
		if($GetUserType=='admin'){
		
		//$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		
		}else if($GetUserType=='employee'){
			
		$this->db->where(array('assigned_to'=>$GetUserid));	
		}
		$this->db->order_by(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id',"desc");
		
		$userList = $this->db->get(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		//log_message('debug', 'Last query to get all customer list ['.$this->db->last_query().']');
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			//return $dataToReturn;
		}
	}
	
	//export all query data in xls format
	
	public function getQueryExport(){
		
		$GetUserType=$this->session->userdata('admin_type');
		$GetUserid=$this->session->userdata('admin_id');
		
		$this->db->select('bd_user_query_info.id,bd_user_query_info.name,bd_user_query_info.email,contact_number,city, message, city,query_datetime,query_status,bd_query_responsibility.status,assigned_to,bd_employee.name as Empname');
		
		$this->db->join(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY, TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.query_id = '.TBL_PREFIX.TBL_USER_QUERY.'.id','left');
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_EMPLOYEE.'.id = '.TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.assigned_to','left');
		
		if($GetUserType=='admin'){
		
		//$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		
		}else if($GetUserType=='employee'){
			
		$this->db->where(array('assigned_to'=>$GetUserid));	
		}
		$this->db->order_by(TBL_PREFIX.TBL_USER_QUERY.'.id',"desc");
		
		$userList = $this->db->get(TBL_PREFIX.TBL_USER_QUERY);
		//log_message('debug', 'Last query to get all customer Query list ['.$this->db->last_query().']');
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			//return $dataToReturn;
		}
	}
	
	/************new users end here************/
  
   //get business sell (sell_a_business) for single user or customer

  public function getSellBusCount($userid){ //get all sell_a_business 
		
		$this->db->select('COUNT(id)');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		$countBS = $this->db->where(array('business_type'=>'sell_a_business','bd_customer_details.id'=>$userid))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		
		//log_message('debug', 'Last query to getSellBusCount  ['.$this->db->last_query().']');
		if( !$countBS ){
			return null;
		}else{
			return $countBS;
		}	
	}
  //get business sell page for single user after counting
  	public function getBusinessUsers($assigned_Cust,$new_Cust2,$rejected_Cust,$userid){
		
		// $GetUserType=$this->session->userdata('admin_type');
		//$GetUserid=$this->session->userdata('admin_id');
		
		
		
		$this->db->select('bd_business_details.form_id,bd_customer_details.customer_id,bd_business_details.contact,bd_business_details.address,bd_business_details.location	,business_type,bd_business_details.name,bd_business_details.email');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		$this->db->where(array('business_type'=>'sell_a_business','bd_customer_details.customer_id'=>$userid));
	
		/*if($GetUserType=='admin'){
		
		//$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		
		}else if($GetUserType=='employee'){
			
		$this->db->where(array('assigned_to'=>$GetUserid));	
		}
		
		if($assigned_Cust!=''){
			
		$this->db->where(array('bd_customer_details.status'=>1));		
		}
		else if($new_Cust2!=''){
			
		$this->db->where(array('bd_customer_details.status'=>0));		
		}
		else if($rejected_Cust!=''){
			
		$this->db->where(array('bd_customer_details.status'=>2));		
		}
		
		
		$this->db->order_by("bd_customer_details.id","desc");
		
		
		if($_REQUEST['sort_team']!='' and $_REQUEST['sort_status']==''){
			$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		}
		if($_REQUEST['sort_team']!='' and $_REQUEST['sort_status']!=''){
			$this->db->where(array('assigned_to'=>$_REQUEST['sort_team'],'status'=>$_REQUEST['sort_status']));
		}
		if($_REQUEST['sort_status']!='' and $_REQUEST['sort_team']==''){
			$this->db->where(array('bd_customer_details.status'=>$_REQUEST['sort_status']));
		}
		if($_REQUEST['fromDate']!='' and $_REQUEST['toDate']!=''){
		$this->db->where('DATE_FORMAT(register_date,"%Y-%m-%d") 
BETWEEN DATE_FORMAT("'.$_REQUEST["fromDate"].'","%Y-%m-%d") AND DATE_FORMAT("'.$_REQUEST["toDate"].'","%Y-%m-%d")');
		}*/
		$this->db->order_by("bd_business_details.form_id","desc");
		$userList=$this->db->get();
		//log_message('debug', 'Last query to get business user list ['.$this->db->last_query().']');
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			return $dataToReturn;
		}

	}
	//edit query details users
	
	public function editQueryDetails(){
		
		$query_id=$this->input->post('query_id');
		$name=$this->input->post('name');
		//$email=$this->input->post('email');
		$city=$this->input->post('city');
		$contact_number=$this->input->post('contact_number');
		$message=$this->input->post('message');
		
		
		////log_message('debug', 'POST DATA IS ['.print_r($this->input->post(), true).']');
		$data = array('name'=>$name,'city' => $city, 'contact_number'=>$contact_number, 'message'=>$message);

		$this->db->set($data);
		$this->db->where('id',$query_id);
		$result = $this->db->update( TBL_PREFIX.TBL_USER_QUERY );
		//log_message('debug', 'Query to update User Profile ['.$this->db->last_query().']');
		if( !$result ){
			return "error";
		}else{
			if ( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}
	public function addNewUser(){
		$email    = $this->input->post('lb_email');
		$passwd   = $this->input->post('passwd');	
		$uname    = $this->input->post('lb_uname');
		$country_code     = $this->input->post('country_code');
		$contact          = $this->input->post('lb_mobile');
		$compname = $this->input->post('lb_company');
		$address  = $this->input->post('lb_address');
		$location         = $this->input->post('lb_location');
		$designation      = $this->input->post('lb_designation');
		$isOwner          = $this->input->post('lb_owner');
		$isBroker         = $this->input->post('lb_broker');
		$isRepresentative = $this->input->post('lb_representative');
		$aemail   = $this->input->post('lb_aemail');
		$web      = $this->input->post('lb_web');
		$acontact         = $this->input->post('lb_aphone');
		
		$GetUserid=$this->session->userdata('admin_userid');
		
		
	
		//$userData = array('business_type'=>$business_type,'name'=>$uname, 'email'=>$email, 'country_code'=>$country_code,'contact'=>$contact, 'address'=>$address, 'location'=>$location, 'company_name'=>$compname, 'designation'=>$designation, 'website'=>$web, 'who'=>$who, 'alternative_email'=>$aemail, 'alternative_contact'=>$acontact);
	
		$userData = array('customer_id'=>$email, 'name'=>$uname, 'country_code'=>$country_code,'contact_number'=>$contact, 'address'=>$address, 'location'=>$location, 'website'=>$web, 'password'=>$passwd,'alternate_email'=>$aemail,'alternate_contact'=>$acontact,'created_by'=>$GetUserid,'register_date'=>date('Y-m-d h:i:s')  );

		$result = $this->db->insert(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $userData);
		//log_message('debug', 'User_model: registerUser: ['.$this->db->last_query().']');
		if ( !$result && $this->db->error()['code'] == 1062 ){
			return "duplicate";
		}else{
			if ( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}
	//export all query follow up by employee to customer data in xls format
	
	public function getQueryFollowupExport($bType, $assignedTo, $formId){
		
		$GetUserType=$this->session->userdata('admin_type');
		$GetUserid=$this->session->userdata('admin_id');
		
		
		$this->db->select(TBL_PREFIX.TBL_CASE_HISTORY.'.id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.case_id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.followup_date,'.TBL_PREFIX.TBL_EMPLOYEE.'.name,'.TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to,'.TBL_PREFIX.TBL_CASE_HISTORY.'.comment,'.TBL_PREFIX.TBL_CASE_HISTORY.'.date,'.TBL_PREFIX.TBL_CASE_HISTORY.'.status,'.TBL_PREFIX.TBL_CASE_HISTORY.'.for_customer_comment');
		$this->db->from(TBL_PREFIX.TBL_CASE_HISTORY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		
		
		if($GetUserType=='admin'){
		
		//$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		
		}else if($GetUserType=='employee'){
			
		$this->db->where(array('assigned_to'=>$GetUserid));	
		}
		//$this->db->order_by(TBL_PREFIX.TBL_CASE_HISTORY.'.id',"desc");
		$this->db->where(array('case_id'=>$formId, 'assign_to'=>$assignedTo));
		
		$userList = $this->db->get();
		//log_message('debug', 'Last query to get all customer Query follow up list ['.$this->db->last_query().']');
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			//return $dataToReturn;
		}
	}
	//contact us model queries fronted
	
	public function getContactQueries(){
		
		
		$GetUserType=$this->session->userdata('admin_type');
		$GetUserid=$this->session->userdata('admin_id');
		
		$fromDate    = $this->input->post('fromDate');
		$toDate    = $this->input->post('toDate');
		$sort_status    = $this->input->post('sort_status');
		$sort_team    = $this->input->post('sort_team');
		$sort_city    = $this->input->post('sort_city');
		
		
		
		$this->db->select(TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.id,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.name,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.email,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.city,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.address,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.contact_number,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.query_purpose,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.query_datetime,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.query_status,'.TBL_PREFIX.TBL_EMPLOYEE.'.name as Empname');
		$this->db->from(TBL_PREFIX.TBL_CONTACT_US_DETAIL);
		
		$this->db->join(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY, TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.customer_id = '.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.id','left');
		
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_EMPLOYEE.'.id = '.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.assigned_to','left');
		
		$restype="New";
		
		//$this->db->where(array('responsibility_type'=>$restype));
		
		if($GetUserType=='admin'){
		
		//$this->db->where(array('assigned_to'=>$sort_team));
		
		}else if($GetUserType=='employee'){
			
		$this->db->where(array('assigned_to'=>$GetUserid));	
		}
		
		$this->db->order_by(TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.id',"desc");
		
		
		if($sort_status!='' and $sort_team=='' and $sort_city==''){
			$this->db->where(array('query_status'=>$sort_status));
		}
		
		if($sort_city!='' and $sort_status=='' and $sort_team==''){
			$this->db->where(array('city'=>$sort_city));
		}
		if($sort_team!='' and $sort_status=='' and $sort_city==''){
			$this->db->where(array('assigned_to'=>$sort_team));
		}
		if($sort_team!='' and $sort_status!='' and $sort_city==''){
			$this->db->where(array('assigned_to'=>$sort_team,'query_status'=>$sort_status));
		}
		if($sort_team!='' and $sort_status!='' and $sort_city!=''){
			$this->db->where(array('assigned_to'=>$sort_team,'query_status'=>$sort_status,'city'=>$sort_city));
		}
		if($sort_city!='' and $sort_status!='' and $sort_team==''){
			$this->db->where(array('city'=>$sort_city,'query_status'=>$sort_status));
		}
		if($fromDate!='' and $toDate!=''){
		$this->db->where('DATE_FORMAT(query_datetime,"%Y-%m-%d") 
BETWEEN DATE_FORMAT("'.$fromDate.'","%Y-%m-%d") AND DATE_FORMAT("'.$toDate.'","%Y-%m-%d")');
		}
		
		$userList=$this->db->get();
		
		//log_message('debug', 'Last query to get new user list ['.$this->db->last_query().']');
		
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			return $dataToReturn;
		}

	}
	//get contact city
	public function getCityContact(){
		
		$this->db->select('DISTINCT(city) as city');
		$response = $this->db->get_where(TBL_PREFIX.TBL_CONTACT_US_DETAIL);
		//log_message('debug', 'Last query to get user city  ['.$this->db->last_query().']');
		if( !$response ){
			return null;
		}else{
			return $response->result_array();
		}	
	}
	//get contact query explore data
	public function getContactDetails( $userId ){
		$this->db->select(TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.id,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.name,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.email,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.city,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.address,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.contact_number,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.query_purpose,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.message,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.query_datetime,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.query_status,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mtime,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mdate,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mplace,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mtax_type,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mtype,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.meeting_agenda');
		
		$this->db->join(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY, TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.customer_id = '.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.id','left');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_CONTACT_US_DETAIL, array(TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.id'=>$userId));
		
		//log_message('debug', 'Last query to get user details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}
	//contact query reject
	public function rejectContact(){
		//log_message('debug', 'In reject query model================================================================================');
		$data = array('query_status'=>2, 'query_update_time'=>date('Y-m-d h:i:s'), 'comment'=>$this->input->post('comment') );
		$this->db->set($data);
		$this->db->where('id', $this->input->post('query_id'));
		$result = $this->db->update( TBL_PREFIX.TBL_CONTACT_US_DETAIL );
		//log_message('debug', 'Query to update Contact Query Status ['.$this->db->last_query().']');
		if ( !$result ){
			return 'error';
		}else{
			if ( $this->db->affected_rows() > 0 ){
				return 'true';
			}else{
				return 'false';
			}
		}
	}
	//update or edit contact query
	public function editContactDetails(){
		
		$query_id=$this->input->post('query_id');
		$name=$this->input->post('name');
		$city=$this->input->post('city');
		$contact_number=$this->input->post('contact_number');
		$message=$this->input->post('message');
		$query_purpose=$this->input->post('query_purpose');
		$mtype=$this->input->post('mtype');
		$mtime=$this->input->post('mtime');
		$mdate=$this->input->post('mdate');
		$mplace=$this->input->post('mplace');
		$mtax_type=$this->input->post('mtax_type');
		$meeting_agenda=$this->input->post('meeting_agenda');
		
		
		
		////log_message('debug', 'POST DATA IS ['.print_r($this->input->post(), true).']');
		$data = array('name'=>$name, 'city'=>$city, 'contact_number' => $contact_number, 'message'=>$message, 'query_purpose'=>$query_purpose, 'mtype'=>$mtype, 'mtime'=>$mtime, 'mdate'=>$mdate, 'mplace'=>$mplace, 'mtax_type'=>$mtax_type,'meeting_agenda'=>$meeting_agenda);

		$this->db->set($data);
		$this->db->where('id',$query_id);
		$result = $this->db->update( TBL_PREFIX.TBL_CONTACT_US_DETAIL );
		//log_message('debug', 'Query to update contact details ['.$this->db->last_query().']');
		if( !$result ){
			return "error";
		}else{
			if ( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}
	//get assigned contact details
	public function getAssignedContact( $userId ){
		
		
		$this->db->select(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.customer_id,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.assigned_to,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.date,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.status,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.comment,'.TBL_PREFIX.TBL_EMPLOYEE.'.name');
		
	
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_EMPLOYEE.'.id = '.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.assigned_to','left');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY, array('customer_id'=>$userId));
		//log_message('debug', 'Last query to get user details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}
	//contact query rejected reason
	public function getRejectedContact( $userId,$comment,$query_update_time ){
		$this->db->select('id,comment,query_update_time');
		$userDetails = $this->db->get_where(TBL_PREFIX.TBL_CONTACT_US_DETAIL, array('id'=>$userId));
		//log_message('debug', 'Last query to get user details by id ['.$this->db->last_query().']');
		if( !$userDetails ){
			return null;
		}else{
			return $userDetails->result_array();
		}
	}
	//	 export all contact query data in xls format
	
	public function getContactExport(){
		
		$GetUserType=$this->session->userdata('admin_type');
		$GetUserid=$this->session->userdata('admin_id');
		
		$this->db->select(TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.id,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.name,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.email,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.city,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.address,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.contact_number,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.query_purpose,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.query_datetime,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.query_status,'.TBL_PREFIX.TBL_EMPLOYEE.'.name as Empname,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.message,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mtime,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mdate,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mplace,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mtax_type,'.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.mtype');
		
		$this->db->join(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY, TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.customer_id = '.TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.id','left');
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_EMPLOYEE.'.id = '.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.assigned_to','left');
		
		if($GetUserType=='admin'){
		
		//$this->db->where(array('assigned_to'=>$_REQUEST['sort_team']));
		
		}else if($GetUserType=='employee'){
			
		$this->db->where(array('assigned_to'=>$GetUserid));	
		}
		$this->db->order_by(TBL_PREFIX.TBL_CONTACT_US_DETAIL.'.id',"desc");
		
		$userList = $this->db->get(TBL_PREFIX.TBL_CONTACT_US_DETAIL);
		//log_message('debug', 'Last query to get all contact query details  ['.$this->db->last_query().']');
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			//return $dataToReturn;
		}
	}
	//update contact query status
	public function updateContactStatus( $queryId, $status=1 ){
		$data = array('query_status'=>$status, 'query_update_time'=>date('Y-m-d H:i:s'), 'comment'=>'');
		$this->db->set($data);
		$this->db->where('id', $queryId);
		$result = $this->db->update( TBL_PREFIX.TBL_CONTACT_US_DETAIL);
		if( !$result ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}
	//get contact query assigned count 
	public function getContactAssignedCount(){ //get all assigned queries
		
		$this->db->select('COUNT(id)');
		
		$countAssigned = $this->db->where('query_status',1)->from(TBL_PREFIX.TBL_CONTACT_US_DETAIL)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$countAssigned.']');
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	//get contact query total count 
	public function getContactTotalCount(){ //get all assigned queries
		
		$this->db->select('COUNT(id)');
		
		$countAssigned = $this->db->from(TBL_PREFIX.TBL_CONTACT_US_DETAIL)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$countAssigned.']');
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	//get contact query pending approval count 
	public function getContactPendingCount(){ //get all assigned queries
		
		$this->db->select('COUNT(id)');
		
		$countAssigned = $this->db->where('query_status',0)->from(TBL_PREFIX.TBL_CONTACT_US_DETAIL)->count_all_results();
		
		
		//log_message('debug', 'get contact query pending approval count   ['.$countAssigned.']');
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	
	//get contact query rejected count 
	public function getContactRejectedCount(){ //get all assigned queries
		
		$this->db->select('COUNT(id)');
		
		$countAssigned = $this->db->where('query_status',2)->from(TBL_PREFIX.TBL_CONTACT_US_DETAIL)->count_all_results();
		
		
		//log_message('debug', 'Last query to get count  ['.$countAssigned.']');
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	//get user activity or non activity for particular users
	public function getUserActivity($cid){ 
		
		$this->db->select('COUNT(form_id)');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		
		
		$countActivity = $this->db->where(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id',$cid)->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
				//$userDetails = $this->db->get_where(TBL_PREFIX.TBL_CONTACT_US_DETAIL, array('id'=>$userId));

		
		
		
		//log_message('debug', 'Last query to get Activity count  ['.$countActivity.']');
		if( !$countActivity ){
			return null;
		}else{
			return $countActivity;
		}	
	}
	//get user activity for all users
	public function getActivityUser(){ 
	
		
		$this->db->select('COUNT(bd_business_details.customer_id)');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		
		
		 
		$this->db->group_by("bd_business_details.customer_id");
		$countActivity =$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		//log_message('debug', 'Last query to get Activity count for all users  ['.$this->db->last_query().']');
		if( !$countActivity ){
			return null;
		}else{
			return $countActivity;
		}	
	}
	//get user activity for all users
	public function getNonActivityUser(){ 
	
		$this->db->select('COUNT(bd_customer_details.customer_id)');
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id','left');
		
		$this->db->group_by("bd_customer_details.customer_id");
		$countNonActivity =$this->db->from(TBL_PREFIX.TBL_CUSTOMER_DETAILS)->count_all_results();

		//log_message('debug', 'Last query to get Non Activity count for all users  ['.$this->db->last_query().']');
		if( !$countNonActivity ){
			return null;
		}else{
			return $countNonActivity;
		}	
	}
	public function updateUserStatusDirect($status=1 ){
		
		
		//get last user id  added by logged user
	
			$this->db->select('max(id) as id');
			$this->db->where(array('created_by'=>$this->session->userdata('admin_userid')));
			$q = $this->db->get(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
			$data = $q->result_array();
			
			
		$userId     =  $data[0]['id'];
		
		$data = array('status'=>$status, 'last_update_date'=>date('Y-m-d H:i:s'), 'comment'=>'');
		$this->db->set($data);
		$this->db->where('id', $userId);
		$result = $this->db->update( TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		if( !$result ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}
	
public function getPropertyTagList(){ //property tags
	
		$this->db->select('*');
	
		$propertTaglist = $this->db->get(TBL_PREFIX.TBL_PROPERTY_TAGS);
		////log_message('debug', 'Last query to get all property tag list ['.$this->db->last_query().']');
		if( !$propertTaglist ){
			return null;
		}else{
			return $propertTaglist->result_array();
			return $dataToReturn;
		}
	}
	
//get total seller
	public function getSellerCount(){ 
	
		
		$this->db->select('COUNT(bd_business_details.customer_id)');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		
		
		 
		$this->db->group_by("bd_business_details.customer_id");
		
		$countActivity = $this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type','sell_a_business')->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		//log_message('debug', 'Last query to get Activity count for all users  ['.$this->db->last_query().']');
		if( !$countActivity ){
			return null;
		}else{
			return $countActivity;
		}	
	}	
	
//get Buyer seller
	public function getBuyerCount(){ 
	
		
		$this->db->select('COUNT(bd_business_details.customer_id)');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		
		
		 
		$this->db->group_by("bd_business_details.customer_id");
		
		$countActivity = $this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type','buy_a_business')->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		//log_message('debug', 'Last query to get Activity count for all users  ['.$this->db->last_query().']');
		if( !$countActivity ){
			return null;
		}else{
			return $countActivity;
		}	
	}	
//get Buyer seller
	public function getJVCount(){ 
	
		
		$this->db->select('COUNT(bd_business_details.customer_id)');
		
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		
		
		 
		$this->db->group_by("bd_business_details.customer_id");
		
		$countActivity = $this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type','jv_business')->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		//log_message('debug', 'Last query to get Activity count for all users  ['.$this->db->last_query().']');
		if( !$countActivity ){
			return null;
		}else{
			return $countActivity;
		}	
	}

  //get business forms
  	public function getBusinessDetails($assigned_Cust,$new_Cust2,$rejected_Cust,$userid){
		
		
		
		$this->db->select('bd_business_details.form_id,bd_customer_details.customer_id,bd_business_details.contact,bd_business_details.address,bd_business_details.location	,business_type,bd_business_details.name,bd_business_details.email');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		$this->db->where(array(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id'=>$userid));
	
	
		$this->db->order_by("bd_business_details.form_id","desc");
		$userList=$this->db->get();
		log_message('debug', 'Last query to get business user list909090 ['.$this->db->last_query().']');
		if( !$userList ){
			return null;
		}else{
			return $userList->result_array();
			return $dataToReturn;
		}

	}	
	public function getSellerCity(){
		
		$this->db->select('DISTINCT(location_city) as city,city_name,id');
		$this->db->join(TBL_PREFIX.TBL_STATE_CITY, TBL_PREFIX.TBL_STATE_CITY.'.id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city','left');
		$response = $this->db->get_where(TBL_PREFIX.TBL_BUSINESS_DETAILS);

		//log_message('debug', 'Last query to get user city  ['.$this->db->last_query().']');
		if( !$response ){
			return null;
		}else{
			return $response->result_array();
		}	
	}
}
?>
