<?php
date_default_timezone_set('Asia/Kolkata');
class Assign_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getAssignToDetails( $formId ){
		$this->db->select(TBL_PREFIX.TBL_USERS.'.id,'.TBL_PREFIX.TBL_USERS.'.user_id,'.TBL_PREFIX.TBL_CASE_RESPONSIBILITY.'.status');
		$this->db->from(TBL_PREFIX.TBL_USERS);
		$this->db->join(TBL_PREFIX.TBL_CASE_RESPONSIBILITY, TBL_PREFIX.TBL_USERS.'.id = '.TBL_PREFIX.TBL_CASE_RESPONSIBILITY.'.assigned_to');
		$this->db->where('case_id', $formId);
		$assignToDetails = $this->db->get();
		//log_message('debug','Last Query ['.$this->db->last_query().']');
		if( !$assignToDetails ){
			return null;
		}else{
			return $assignToDetails->result_array();
		}
	}

	public function assignCaseToUser(){
		$case_id     = $this->input->post('case_id');
		
		$case_type   = $this->input->post('case_type');
		$assigned_to = $this->input->post('assigned_to');
		$status      = $this->input->post('status');
		$comment     = $this->input->post('comment');

		$caseData = array('case_id'=>$case_id, 'case_type'=>$case_type, 'assigned_to'=>$assigned_to, 'status'=>$status, 'comment'=>$comment,'date'=>date('Y-m-d h:i:s'));

                $result = $this->db->insert(TBL_PREFIX.TBL_CASE_RESPONSIBILITY, $caseData);
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

	public function assignCustomerToEmployee(){
		$user_id     = $this->input->post('user_id');
		$assigned_to = $this->input->post('assigned_to');
		$status      = $this->input->post('status');
		$comment     = $this->input->post('comment');

		if ( $this->deleteCustomerEmployeeRelation( $user_id ) ){
			$userData = array( 'customer_id'=>$user_id, 'assigned_to'=>$assigned_to, 'status'=>$status, 'comment'=>$comment,'date'=>date('Y-m-d h:i:s'));
			$result   = $this->db->insert(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, $userData);
			log_message('debug','Last query to insert data in customer_responsibility ['.$this->db->last_query().']');
			if( !$result && $this->db->error()['code'] == 1062 ){
				return 'duplicate';
			}else{
				if( $this->db->affected_rows() > 0 ){
					return 'true';
				}else{
					return 'false';
				}
			}
		}else{
			return 'already_assigned';
		}
	}


	public function assignQueryToEmployee(){
		$query_id     = $this->input->post('query_id');
		$assigned_to = $this->input->post('assigned_to');
		$status      = $this->input->post('status');
		$comment     = $this->input->post('comment');

		if ( $this->deleteQueryEmployeeRelation( $query_id ) ){
			$userData = array( 'query_id'=>$query_id, 'assigned_to'=>$assigned_to, 'status'=>$status, 'comment'=>$comment,'date'=>date('Y-m-d h:i:s'));
			$this->db->insert(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY, $userData);
			//update bd_user_query_info table for status
				$data = array('query_status'=>1,'query_update_time'=>date('Y-m-d h:i:s'));
				$this->db->set($data);
				$this->db->where('id', $query_id);
				$result = $this->db->update( TBL_PREFIX.TBL_USER_QUERY);
			
			log_message('debug','Last query to insert data in query_responsibility ['.$this->db->last_query().']');
			if( !$result && $this->db->error()['code'] == 1062 ){
				return 'duplicate';
			}else{
				if( $this->db->affected_rows() > 0 ){
					return 'true';
				}else{
					return 'false';
				}
			}
		}else{
			return 'already_assigned';
		}
	}


	public function deleteCustomerEmployeeRelation( $customerId ){
		$this->db->where('customer_id',$customerId);
		$result = $this->db->delete( TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY );
		log_message('debug','Delete relationship user-employee query ['.$this->db->last_query().']');
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


	public function deleteQueryEmployeeRelation( $queryId ){
		$this->db->where('query_id',$queryId);
		$result = $this->db->delete( TBL_PREFIX.TBL_QUERY_RESPONSIBILITY );
		log_message('debug','Delete relationship query-employee query ['.$this->db->last_query().']');
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

	public function businessAction( $bType, $action, $formId ){
		$businessStatus = 0;
		if( strcasecmp( $action, 'accept' ) == 0 ){
			$businessStatus = 1;
		}
		if( strcasecmp( $action, 'reject' ) == 0 ){
			$businessStatus = 2;
		}
		if( strcasecmp( $action, 'inactive' ) == 0 ){
			$businessStatus = 3;
		}
		if( strcasecmp( $action, 'closed' ) == 0 ){
			$businessStatus = 4;
		}
				
				//add expiry date
				$datetime = new DateTime();
				$datetime->modify('+6 months');
				$expiry_date=$datetime->format('Y-m-d');
				
				$data = array('status'=>$businessStatus,'expiry_date'=>$expiry_date);
                $this->db->set($data);
                $this->db->where('form_id', $formId);
                $result = $this->db->update( TBL_PREFIX.TBL_BUSINESS_DETAILS );
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
	public function getAssignedEmployee($formId){
		
		//get user id
		$this->db->select('customer_id');
		$this->db->where(array('form_id'=>$formId));
		$q = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$data = $q->result_array();
		$user_id     = $data[0]['customer_id'];
		
		
		$resultData = $this->db->query("select emp.name, emp.contact_no, emp.email,emp.department from ".TBL_PREFIX.TBL_EMPLOYEE." emp, ".TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY." cr, ".TBL_PREFIX.TBL_CUSTOMER_DETAILS." cd where cd.customer_id = '".$user_id."' AND cr.customer_id = cd.id and emp.id = cr.assigned_to");
		log_message('debug', 'User_model: getAssignedEmployee: ['.$this->db->last_query().']');
		if ( $resultData->num_rows() > 0 ){
			return $resultData->result();
		}else{
			return null;
		}

	}
	public function getUserDetails($formId){
		
		//get user id
		$this->db->select('customer_id');
		$this->db->where(array('form_id'=>$formId));
		$q = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$data = $q->result_array();
		$user_id= $data[0]['customer_id'];
		
		
		$this->db->select('customer_id,name');
		$this->db->where(array('customer_id'=>$user_id));
		$cq = $this->db->get(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		return $cqdata = $cq->result_array();
		

	}
	
	public function ReassignCustomerToEmployee(){
		$user_id     = $this->input->post('user_id');
		$assigned_to = $this->input->post('assigned_to');
		$status      = $this->input->post('status');
		$comment     = $this->input->post('comment');

		if ( $user_id!=''){
			
			//select data from  bd_customer_responsibility table
			$this->db->select('customer_id,assigned_to,date as AssDate,status,comment');
			
			$PreassignDetails=$this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, array('customer_id'=>$user_id));
			
			
			//$query=$this->db->get(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY);
			//log_message('debug','Last query to select data in customer_responsibility ['.$this->db->last_query().']');
			$Preassign=$PreassignDetails->result();
			
			//now insert data into bd_customer_responsibility_previous table
			$PreuserData = array( 'customer_id'=>$Preassign[0]->customer_id, 'assigned_to'=>$Preassign[0]->assigned_to,'date'=>$Preassign[0]->AssDate,'status'=>$Preassign[0]->status, 'comment'=>$Preassign[0]->comment);
			$Preresult   = $this->db->insert(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY_PREVIOUS, $PreuserData);
			
			//}
			//update data into bd_customer_responsibility table
			$Newdata = array('assigned_to'=>$assigned_to,'date'=>date('Y-m-d h:i:s'),'comment'=>$comment);
			$this->db->set($Newdata);
			$this->db->where('customer_id', $user_id);
            $this->db->update( TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY );
			$result = $this->db->get();
			
			log_message('debug','Last query to update data in customer_responsibility ['.$this->db->last_query().']');
			if( !$result && $this->db->error()['code'] == 1062 ){
				return 'duplicate';
			}else{
				if( $this->db->affected_rows() > 0 ){
					return 'false';
				}else{
					return 'true';
				}
			}
		}
	}
	
	//get previous employee assigned details to customer
	public function getEmpAssignDetails( $userId ){
		$this->db->select(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY_PREVIOUS.'.date,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY_PREVIOUS.'.status,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY_PREVIOUS.'.status,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY_PREVIOUS.'.comment,'.TBL_PREFIX.TBL_EMPLOYEE.'.name');
		$this->db->from(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY_PREVIOUS);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY_PREVIOUS.'.assigned_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where('customer_id', $userId);
		$assignToDetails = $this->db->get();
		//log_message('debug','Last Query ['.$this->db->last_query().']');
		if( !$assignToDetails ){
			return null;
		}else{
			return $assignToDetails->result_array();
		}
	}
		//get previous employee assigned details to customer
	public function getCurEmpAssignDetails( $userId ){
		$this->db->select(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.date,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.status,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.status,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.comment,'.TBL_PREFIX.TBL_EMPLOYEE.'.name');
		$this->db->from(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where('customer_id', $userId);
		$assignToDetails = $this->db->get();
		//log_message('debug','Last Query ['.$this->db->last_query().']');
		if( !$assignToDetails ){
			return null;
		}else{
			return $assignToDetails->result_array();
		}
	}
	
	//query re assign
	public function assignReQueryToEmployee( $query_id ){
		$query_id     = $this->input->post('query_id');
		$assigned_to = $this->input->post('assigned_to');
		$status      = $this->input->post('status');
		$comment     = $this->input->post('comment');

		if ( $query_id!=''){
			
			//select data from  bd_query_responsibility table
			$this->db->select('query_id,assigned_to,date as AssDate,status,comment');
			
			$PreassignDetails=$this->db->get_where(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY, array('query_id'=>$query_id));
			
			
			//$query=$this->db->get(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY);
			log_message('debug','Last query to select data in bd_query_responsibility ['.$this->db->last_query().']');
			$Preassign=$PreassignDetails->result();
			
			//now insert data into bd_query_responsibility_previous table
			$PreuserData = array( 'query_id'=>$Preassign[0]->query_id, 'assigned_to'=>$Preassign[0]->assigned_to,'date'=>$Preassign[0]->AssDate,'status'=>$Preassign[0]->status, 'comment'=>$Preassign[0]->comment);
			$Preresult   = $this->db->insert(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY_PREVIOUS, $PreuserData);
			
			//}
			//update data into bd_customer_responsibility table
			$Newdata = array('assigned_to'=>$assigned_to,'date'=>date('Y-m-d h:i:s'),'comment'=>$comment);
			$this->db->set($Newdata);
			$this->db->where('query_id', $query_id);
            $this->db->update( TBL_PREFIX.TBL_QUERY_RESPONSIBILITY );
			$result = $this->db->get();
			
			log_message('debug','Last query to update data in customer_responsibility ['.$this->db->last_query().']');
			if( !$result && $this->db->error()['code'] == 1062 ){
				return 'duplicate';
			}else{
				if( $this->db->affected_rows() > 0 ){
					return 'false';
				}else{
					return 'true';
				}
			}
		}
	}
	
		//get previous employee assigned details to customer query
	public function getQueryAssignDetails( $query_id ){
		$this->db->select(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY_PREVIOUS.'.date,'.TBL_PREFIX.TBL_QUERY_RESPONSIBILITY_PREVIOUS.'.status,'.TBL_PREFIX.TBL_QUERY_RESPONSIBILITY_PREVIOUS.'.status,'.TBL_PREFIX.TBL_QUERY_RESPONSIBILITY_PREVIOUS.'.comment,'.TBL_PREFIX.TBL_EMPLOYEE.'.name');
		$this->db->from(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY_PREVIOUS);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_QUERY_RESPONSIBILITY_PREVIOUS.'.assigned_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where('query_id', $query_id);
		$assignToDetails = $this->db->get();
		//log_message('debug','Last Query ['.$this->db->last_query().']');
		if( !$assignToDetails ){
			return null;
		}else{
			return $assignToDetails->result_array();
		}
	}
		//get previous employee assigned details to customer query
	public function getCurQueryAssignDetails( $query_id ){
		$this->db->select(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.date,'.TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.status,'.TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.status,'.TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.comment,'.TBL_PREFIX.TBL_EMPLOYEE.'.name');
		$this->db->from(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_QUERY_RESPONSIBILITY.'.assigned_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where('query_id', $query_id);
		$assignToDetails = $this->db->get();
		//log_message('debug','Last Query ['.$this->db->last_query().']');
		if( !$assignToDetails ){
			return null;
		}else{
			return $assignToDetails->result_array();
		}
	}
	//contact us query assign to employee
		public function assignContactToEmployee(){
		$query_id     = $this->input->post('query_id');
		$assigned_to = $this->input->post('assigned_to');
		$status      = $this->input->post('status');
		$comment     = $this->input->post('comment');

		if ( $this->deleteQueryEmployeeRelation( $query_id ) ){
			$userData = array( 'customer_id'=>$query_id, 'assigned_to'=>$assigned_to, 'status'=>$status, 'comment'=>$comment,'date'=>date('Y-m-d h:i:s'));
			$this->db->insert(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY, $userData);
			//update bd_user_query_info table for status
				$data = array('query_status'=>1,'query_update_time'=>date('Y-m-d h:i:s'));
				$this->db->set($data);
				$this->db->where('id', $query_id);
				$result = $this->db->update( TBL_PREFIX.TBL_CONTACT_US_DETAIL);
			
			log_message('debug','Last query to insert data in contact_responsibility ['.$this->db->last_query().']');
			if( !$result && $this->db->error()['code'] == 1062 ){
				return 'duplicate';
			}else{
				if( $this->db->affected_rows() > 0 ){
					return 'true';
				}else{
					return 'false';
				}
			}
		}else{
			return 'already_assigned';
		}
	}
		//get employee assigned details to contact query
	public function getContactAssignDetails( $query_id ){
		
		$this->db->select(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.date,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.status,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.status,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.comment,'.TBL_PREFIX.TBL_EMPLOYEE.'.name');
		$this->db->from(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.assigned_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where('customer_id', $query_id);
		$this->db->order_by(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY.'.id',"desc");
		$assignToDetails = $this->db->get();
		//log_message('debug','Last Query ['.$this->db->last_query().']');
		if( !$assignToDetails ){
			return null;
		}else{
			return $assignToDetails->result_array();
		}
	}
		//get previous employee assigned details to contact query
	public function getCurContactAssignDetails( $query_id ){
		$this->db->select(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY_PREVIOUS.'.date,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY_PREVIOUS.'.status,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY_PREVIOUS.'.status,'.TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY_PREVIOUS.'.comment,'.TBL_PREFIX.TBL_EMPLOYEE.'.name');
		$this->db->from(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY_PREVIOUS);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY_PREVIOUS.'.assigned_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where('customer_id', $query_id);
		$assignToDetails = $this->db->get();
		//log_message('debug','Last Query ['.$this->db->last_query().']');
		if( !$assignToDetails ){
			return null;
		}else{
			return $assignToDetails->result_array();
		}
	}
	
	//re assign contact query to employee
	//query re assign
	public function assignReContactToEmployee( $query_id ){
		$query_id     = $this->input->post('query_id');
		$assigned_to = $this->input->post('assigned_to');
		$status      = $this->input->post('status');
		$comment     = $this->input->post('comment');

		if ( $query_id!=''){
			
			//select data from  bd_query_responsibility table
			$this->db->select('customer_id ,assigned_to,date as AssDate,status,comment');
			
			$PreassignDetails=$this->db->get_where(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY, array('customer_id'=>$query_id));
			
			
			//$query=$this->db->get(TBL_PREFIX.TBL_QUERY_RESPONSIBILITY);
			log_message('debug','Last query to select data in TBL_CONTACT_RESPONSIBILITY  ['.$this->db->last_query().']');
			$Preassign=$PreassignDetails->result();
			
			//now insert data into bd_query_responsibility_previous table
			$PreuserData = array( 'customer_id'=>$Preassign[0]->customer_id, 'assigned_to'=>$Preassign[0]->assigned_to,'date'=>$Preassign[0]->AssDate,'status'=>$Preassign[0]->status, 'comment'=>$Preassign[0]->comment);
			$Preresult   = $this->db->insert(TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY_PREVIOUS, $PreuserData);
			
			//}
			//update data into bd_customer_responsibility table
			$Newdata = array('assigned_to'=>$assigned_to,'date'=>date('Y-m-d h:i:s'),'comment'=>$comment);
			$this->db->set($Newdata);
			$this->db->where('customer_id', $query_id);
            $this->db->update( TBL_PREFIX.TBL_CONTACT_RESPONSIBILITY );
			$result = $this->db->get();
			
			log_message('debug','Last query to update data in TBL_CONTACT_RESPONSIBILITY ['.$this->db->last_query().']');
			if( !$result && $this->db->error()['code'] == 1062 ){
				return 'duplicate';
			}else{
				if( $this->db->affected_rows() > 0 ){
					return 'false';
				}else{
					return 'true';
				}
			}
		}
	}
		public function DirectassignCustomer(){
			
		//get last user id  added by logged user
	
			$this->db->select('max(id) as id');
			$this->db->where(array('created_by'=>$this->session->userdata('admin_userid')));
			$q = $this->db->get(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
			$data = $q->result_array();
			
			
			
		$user_id     = $data[0]['id'];
		$assigned_to = $this->session->userdata('admin_id');
		$status      = 'Assigned';
		$comment     = 'Customer assigned';

		if ($this->deleteCustomerEmployeeRelation( $user_id ) ){
			$userData = array( 'customer_id'=>$user_id, 'assigned_to'=>$assigned_to, 'status'=>$status, 'comment'=>$comment);
			$result   = $this->db->insert(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, $userData);
		//	log_message('debug','Last query to insert data in customer_responsibility ['.$this->db->last_query().']');
			
		}
	}
	
}
?>
