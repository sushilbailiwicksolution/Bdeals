<?php
class Startup_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getBusinessUserProfile( $businessType ){
		$this->db->select('*');
		if( strcasecmp( $businessType, 'startup_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id');
		}else if( $strcasecmp( $businessType, 'join_ventures' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id');
		}	
		$stapproved_count = $this->input->get("stapproved_count");
		$stpending_count = $this->input->get("stpending_count");
		$strejected_count = $this->input->get("strejected_count");
		$stinactive_count = $this->input->get("stinactive_count");
		$stclosed_count = $this->input->get("stclosed_count");
		$stall_count = $this->input->get("stall_count");
		
		//for filters
		$fromDate    = $this->input->post('fromDate');
		$toDate    = $this->input->post('toDate');
		$sort_status    = $this->input->post('sort_status');
		$sort_team    = $this->input->post('sort_team');
		$sort_city    = $this->input->post('sort_city');
		$category    = $this->input->post('category');
		$pricetype    = $this->input->post('pricetype');
		
		
		if($stapproved_count!='' and $stpending_count=='' and $strejected_count=='' and $stinactive_count=='' and $stclosed_count=='' and $stall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$stapproved_count));
		}
		if($stpending_count!='' and $stapproved_count=='' and $strejected_count=='' and $stinactive_count=='' and $stclosed_count=='' and $stall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$stpending_count));
		}
		
		if($strejected_count!='' and $stapproved_count=='' and $stpending_count=='' and $stinactive_count=='' and $stclosed_count=='' and $stall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$strejected_count));
		}
		
		if($stinactive_count!='' and $stapproved_count=='' and $stpending_count=='' and $strejected_count=='' and $stclosed_count=='' and $stall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$stinactive_count));
		}
		
		if($stclosed_count!='' and $stapproved_count=='' and $stpending_count=='' and $strejected_count=='' and $stinactive_count=='' and $stall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$stclosed_count));
		}
		
		if($stall_count!='' and $stclosed_count=='' and $stapproved_count=='' and $stpending_count=='' and $strejected_count=='' and $stinactive_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			
			//$this->db->where(array('status'=>$stclosed_count));
		}
		
		if($stinactive_count=='' and $stapproved_count=='' and $stpending_count=='' and $strejected_count=='' and $stclosed_count=='' and $stall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
		$this->db->where(array('status'=>'1'));
		}
		
		//for filters
		if($sort_status!='' and $fromDate=='' and $toDate=='' and $sinactive_count=='' and $sapproved_count=='' and $spending_count=='' and $srejected_count=='' and $sclosed_count=='' and $sall_count=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$sort_status));
		}
		
		if($sort_status!='' and $sort_city!='' and $fromDate=='' and $toDate=='' and $sinactive_count=='' and $sapproved_count=='' and $spending_count=='' and $srejected_count=='' and $sclosed_count=='' and $sall_count=='' and $category=='' and $pricetype=='' ){
			$this->db->where(array('status'=>$sort_status,'location_city'=>$sort_city));
		}
		
		if($fromDate!='' and $toDate!=''){
		$this->db->where('DATE_FORMAT(business_add_date,"%Y-%m-%d") 
BETWEEN DATE_FORMAT("'.$fromDate.'","%Y-%m-%d") AND DATE_FORMAT("'.$toDate.'","%Y-%m-%d")');
		}
		
		if($sort_team!='' and $sort_status=='' and $sort_city=='' and $category==''){
			//$this->db->where(array('assigned_to'=>$sort_team));
		}
	
		if($sort_city!='' and $sort_status=='' and $sort_team=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sinactive_count=='' and $sapproved_count=='' and $spending_count=='' and $srejected_count=='' and $sclosed_count=='' and $sall_count=='' and $category=='' and $pricetype==''){
			$this->db->where(array('location_city'=>$sort_city));
		}
		
		if($category!='' and $sort_status=='' and $sort_team=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sinactive_count=='' and $sapproved_count=='' and $spending_count=='' and $srejected_count=='' and $sclosed_count=='' and $sall_count=='' and $pricetype==''){
			$this->db->where(array('listing_category'=>$category));
		}
		
		if($pricetype!='' and $category=='' and $sort_status=='' and $sort_team=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sinactive_count=='' and $sapproved_count=='' and $spending_count=='' and $srejected_count=='' and $sclosed_count=='' and $sall_count==''){
			$this->db->where(array('price_range_type'=>$pricetype));
		}
		
		
		$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id',"desc");
		$userBusinessData = $this->db->get();
		//log_message('debug', 'Last Query ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			$dataToReturn = $userBusinessData->result_array();
			return $dataToReturn;
		}

	}
public function getSellerBusinessPitch($selectedFormId){
		$whereClause = null;
		$whereClause = array('form_id'=>$selectedFormId);
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id');
		
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.FORM_ID', $selectedFormId);
		$userSellBusinessData = $this->db->get();
		log_message('debug', 'Startup_model: getSellerBusinessPitch: ['.$this->db->last_query().']');
		
		if( !$userSellBusinessData ){
			return null;
		}else{
			return $userSellBusinessData->result_array();
		}
	}
	
	/*public function getAssignToDetails( $formId ){
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
	}*/

	public function getAssignToDetails( $customerId ){
		$this->db->select(TBL_PREFIX.TBL_USERS.'.id,'.TBL_PREFIX.TBL_USERS.'.user_id,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.status');
                $this->db->from(TBL_PREFIX.TBL_USERS);
                $this->db->join(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, TBL_PREFIX.TBL_USERS.'.id = '.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to');
                $this->db->where('customer_id', $customerId);
                $assignToDetails = $this->db->get();
                log_message('debug','Last Query ['.$this->db->last_query().']');
                if( !$assignToDetails ){
                        return null;
                }else{
                        return $assignToDetails->result_array();
                }
	}

	public function getSellerBusinessDescription(){
		$whereClause = null;
		$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'));
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.CUSTOMER_ID', $this->session->userdata('userid'));
		$userSellBusinessData = $this->db->get();
		log_message('debug', 'Last Query ['.$this->db->last_query().']');
		if( !$userSellBusinessData ){
			return null;
		}else{
			return $userSellBusinessData->result_array();
		}
	}

	public function getBusinessStatusByFormId( $formId ){
		$this->db->select('status');
		$response = $this->db->get_where( TBL_PREFIX.TBL_BUSINESS_DETAILS, array('form_id'=>$formId) );
		if(!$response){
			return 'Pending';
		}else{
			if( $response->result_array()[0]['status'] == 1 ){
				return 'Approved';
			}
			if( $response->result_array()[0]['status'] == 2 ){
				return 'Rejected';
			}
			if( $response->result_array()[0]['status'] == 3 ){
				return 'Inactive';
			}
			if( $response->result_array()[0]['status'] == 4 ){
				return 'Closed';
			}
			
			else{
				return 'Pending';
			}
		}
	}
	
		public function getStartUpReport(){

	
		$this->db->select(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.name,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.contact,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.email,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.address,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.expiry_date,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.num_business_viewed,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.add_to_favorite,'.TBL_PREFIX.TBL_EMPLOYEE.'.name as Empname,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.other_city,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_add_date,'.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.added_date');
		
		
		$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id','left');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id = '.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.customer_id','left');
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id','left');
	
	
	
		$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id',"desc");
		
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type', 'startup_business');
		
		$userBusinessData = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS);
	
	//print_r($userBusinessData);
	
	
		log_message('debug', 'Last Query for business profileExportdata10000000000 ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			return $userBusinessData->result_array();
			//return $dataToReturn;
		}
	}
}
?>
