<?php
date_default_timezone_set('Asia/Kolkata');

class Case_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getPreviousCases( $bType, $assignedTo, $formId ){
		$this->db->select(TBL_PREFIX.TBL_CASE_HISTORY.'.id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.case_id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.followup_date,'.TBL_PREFIX.TBL_EMPLOYEE.'.name,'.TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to,'.TBL_PREFIX.TBL_CASE_HISTORY.'.comment,'.TBL_PREFIX.TBL_CASE_HISTORY.'.date,'.TBL_PREFIX.TBL_CASE_HISTORY.'.status,'.TBL_PREFIX.TBL_CASE_HISTORY.'.admin_comment');
		$this->db->from(TBL_PREFIX.TBL_CASE_HISTORY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where(array('case_id'=>$formId, 'assign_to'=>$assignedTo,'case_type'=>$bType));
		$caseHistory = $this->db->get();

		log_message('debug','Query Type ['.$this->db->last_query().']');
		if( isset( $caseHistory ) && $caseHistory->num_rows() > 0 ){
			return $caseHistory->result();
		}else{
			return null;
		}

	}

	public function createCase(){
		$case_id   = $this->input->post('case_id');
		$case_type = $this->input->post('case_type');
		$assign_to = $this->input->post('assigned_to');
		$status    = $this->input->post('status');
		$comment   = $this->input->post('comment');

		$caseData = array('case_id'=>$case_id, 'case_type'=>$case_type, 'action'=>$status, 'assign_to'=>$assign_to, 'status'=>$status, 'comment'=>$comment,'followup_date'=>date('Y-m-d h:i:s'),'date'=>date('Y-m-d h:i:s'));

		$result = $this->db->insert(TBL_PREFIX.TBL_CASE_HISTORY, $caseData);
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

/*************************create buyer case****************/

	public function createBuyercase(){
		$case_id   = $this->input->post('case_id');
		$case_type = $this->input->post('case_type');
		$assign_to = $this->input->post('assigned_to');
		$status    = $this->input->post('status');
		$comment   = $this->input->post('comment');

		$caseData = array('case_id'=>$case_id, 'case_type'=>$case_type, 'action'=>$status, 'assign_to'=>$assign_to, 'status'=>$status, 'comment'=>$comment,'followup_date'=>date('Y-m-d h:i:s'),'date'=>date('Y-m-d h:i:s'));

		$result = $this->db->insert(TBL_PREFIX.TBL_CASE_HISTORY, $caseData);
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
	
/**************************New user case model start here*********************/

public function createUserCase(){
		$case_id   = $this->input->post('case_id');
		$case_type = $this->input->post('case_type');
		$assign_to = $this->input->post('assigned_to');
		$status    = $this->input->post('status');
		$comment   = $this->input->post('comment');
		$for_customer_comment   = $this->input->post('for_customer_comment');
		$followup_date   = $this->input->post('followup_date');
		$form_status   = $this->input->post('form_status');
		
		$time=date('h:i:s');
		$date   =    date('Y-m-d '.$time.'',strtotime($this->input->post('followup_date')));

		$caseData = array('case_id'=>$case_id, 'case_type'=>$case_type, 'action'=>$status, 'assign_to'=>$assign_to, 'status'=>$status, 'comment'=>$comment,'for_customer_comment'=>$for_customer_comment ,'date'=>$date, 'followup_date'=>$date);

		$result = $this->db->insert(TBL_PREFIX.TBL_CASE_HISTORY, $caseData);
		
		//update form status
		$data = array('form_status'=>$form_status);
		$this->db->set($data);
		$this->db->where('id', $case_id);
		$this->db->update( TBL_PREFIX.TBL_USER_QUERY);
		
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


public function getUserPreCases( $bType, $assignedTo, $formId ){
		$this->db->select(TBL_PREFIX.TBL_CASE_HISTORY.'.id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.case_id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.followup_date,'.TBL_PREFIX.TBL_EMPLOYEE.'.name,'.TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to,'.TBL_PREFIX.TBL_CASE_HISTORY.'.comment,'.
		TBL_PREFIX.TBL_CASE_HISTORY.'.for_customer_comment,'.
		TBL_PREFIX.TBL_CASE_HISTORY.'.date,'.TBL_PREFIX.TBL_CASE_HISTORY.'.status');
		$this->db->from(TBL_PREFIX.TBL_CASE_HISTORY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where(array('case_id'=>$formId, 'assign_to'=>$assignedTo));
		$caseHistory = $this->db->get();

		log_message('debug','Last Query ['.$this->db->last_query().']');
		if( isset( $caseHistory ) && $caseHistory->num_rows() > 0 ){
			return $caseHistory->result();
		}else{
			return null;
		}

	}


/**************************New user case model end here*********************/

/**************************New query case model start here*********************/

public function createQueryCase(){
		$case_id   = $this->input->post('case_id');
		$case_type = $this->input->post('case_type');
		$assign_to = $this->input->post('assigned_to');
		$status    = $this->input->post('status');
		$comment   = $this->input->post('comment');
		$for_customer_comment   = $this->input->post('for_customer_comment');
		$followup_date   = $this->input->post('followup_date');
		$time=date('h:i:s');
		$date   =    date('Y-m-d '.$time.'',strtotime($this->input->post('followup_date')));

		$caseData = array('case_id'=>$case_id, 'case_type'=>$case_type, 'action'=>$status, 'assign_to'=>$assign_to, 'status'=>$status, 'comment'=>$comment, 'for_customer_comment'=>$for_customer_comment,'date'=>$date, 'followup_date'=>$date);

		$result = $this->db->insert(TBL_PREFIX.TBL_CASE_HISTORY, $caseData);
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


public function getQueryPreCases( $bType, $assignedTo, $formId ){
		$this->db->select(TBL_PREFIX.TBL_CASE_HISTORY.'.id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.case_id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.followup_date,'.TBL_PREFIX.TBL_EMPLOYEE.'.name,'.TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to,'.TBL_PREFIX.TBL_CASE_HISTORY.'.comment,'.TBL_PREFIX.TBL_CASE_HISTORY.'.date,'.TBL_PREFIX.TBL_CASE_HISTORY.'.status,'.TBL_PREFIX.TBL_CASE_HISTORY.'.for_customer_comment');
		$this->db->from(TBL_PREFIX.TBL_CASE_HISTORY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where(array('case_id'=>$formId, 'assign_to'=>$assignedTo));
		$caseHistory = $this->db->get();

		log_message('debug','Last Query ['.$this->db->last_query().']');
		if( isset( $caseHistory ) && $caseHistory->num_rows() > 0 ){
			return $caseHistory->result();
		}else{
			return null;
		}

	}

public function getUserFormCases($form_caseid){
		$this->db->select(TBL_PREFIX.TBL_CASE_HISTORY.'.followup_date,'.TBL_PREFIX.TBL_EMPLOYEE.'.name,'.TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to,'.TBL_PREFIX.TBL_CASE_HISTORY.'.comment,'.TBL_PREFIX.TBL_CASE_HISTORY.'.date,'.TBL_PREFIX.TBL_CASE_HISTORY.'.status');
		$this->db->from(TBL_PREFIX.TBL_CASE_HISTORY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where(array('case_id'=>$form_caseid));
		$caseHistory = $this->db->get();

		log_message('debug','Query Type88888 ['.$this->db->last_query().']');
		if( !$caseHistory ){
			return null;
		}else{
			return $caseHistory->result_array();
			return $dataToReturn;
		}

	}
/**************************New query case model end here*********************/
public function Admincomment( $Id ){
		$this->db->select(TBL_PREFIX.TBL_CASE_HISTORY.'.id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.case_id,'.TBL_PREFIX.TBL_CASE_HISTORY.'.followup_date,'.TBL_PREFIX.TBL_EMPLOYEE.'.name,'.TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to,'.TBL_PREFIX.TBL_CASE_HISTORY.'.comment,'.TBL_PREFIX.TBL_CASE_HISTORY.'.date,'.TBL_PREFIX.TBL_CASE_HISTORY.'.status,'.TBL_PREFIX.TBL_CASE_HISTORY.'.admin_comment');
		$this->db->from(TBL_PREFIX.TBL_CASE_HISTORY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where(array(TBL_PREFIX.TBL_CASE_HISTORY.'.id'=>$Id));
		$caseHistory = $this->db->get();

		log_message('debug','Query Type ['.$this->db->last_query().']');
		if( isset( $caseHistory ) && $caseHistory->num_rows() > 0 ){
			return $caseHistory->result();
		}else{
			return null;
		}

	}
public function createAdminCaseComment($url){
		
		$admin_comment=$this->input->post('admin_comment');
		//update form status
		$data = array('admin_comment'=>$admin_comment);
		$this->db->set($data);
		$this->db->where('id', $url);
		$this->db->update( TBL_PREFIX.TBL_CASE_HISTORY);
		
		
			if ( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		
	}
}
?>
