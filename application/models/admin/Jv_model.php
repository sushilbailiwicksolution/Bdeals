<?php
class Jv_model extends CI_Model{
 

	public function __construct(){
		parent::__construct();
	}

	public function getBusinessUserProfile( $businessType ){
		$this->db->select('*');
		if( strcasecmp( $businessType, 'sell_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}else if( strcasecmp( $businessType, 'joint_ventures' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id');
		}	
		
		//get request start here
		
		$jvapproved_count = $this->input->get("jvapproved_count");
		$jvpending_count = $this->input->get("jvpending_count");
		$jvrejected_count = $this->input->get("jvrejected_count");
		$jvinactive_count = $this->input->get("jvinactive_count");
		$jvclosed_count = $this->input->get("jvclosed_count");
		$jvall_count = $this->input->get("jvall_count");
		
		
		//for filters
		$fromDate    = $this->input->post('fromDate');
		$toDate    = $this->input->post('toDate');
		$sort_status    = $this->input->post('sort_status');
		$sort_team    = $this->input->post('sort_team');
		$sort_city    = $this->input->post('sort_city');
		$category    = $this->input->post('category');
		$pricetype    = $this->input->post('pricetype');
		
		
		
		if($jvapproved_count!='' and $jvpending_count=='' and $jvrejected_count=='' and $jvinactive_count=='' and $jvclosed_count=='' and $jvall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$jvapproved_count));
		}
		if($jvpending_count!='' and $jvapproved_count=='' and $jvrejected_count=='' and $jvinactive_count=='' and $jvclosed_count=='' and $jvall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$jvpending_count));
		}
		
		if($jvrejected_count!='' and $jvapproved_count=='' and $jvpending_count=='' and $jvinactive_count=='' and $jvclosed_count=='' and $jvall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$jvrejected_count));
		}
		
		if($jvinactive_count!='' and $jvapproved_count=='' and $jvpending_count=='' and $jvrejected_count=='' and $jvclosed_count=='' and $jvall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$jvinactive_count));
		}
		
		if($jvclosed_count!='' and $jvapproved_count=='' and $jvpending_count=='' and $jvrejected_count=='' and $jvinactive_count=='' and $jvall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$jvclosed_count));
		}
		
		if($jvall_count!='' and $jvclosed_count=='' and $jvapproved_count=='' and $jvpending_count=='' and $jvrejected_count=='' and $jvinactive_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
			
			//$this->db->where(array('status'=>$jvclosed_count));
		}
		
		if($jvinactive_count=='' and $jvapproved_count=='' and $jvpending_count=='' and $jvrejected_count=='' and $jvclosed_count=='' and $jvall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
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
		$this->db->from(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id');
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
	
	public function ContactCountByFormIdUser($formid){ //contact seller JV count on particular form id
		
		$this->db->select('id, count(*)'); 
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_LISTING_CONTACTS.'.form_id','left');
		
		$getFavCountAll =$this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id'=>$formid))->from(TBL_PREFIX.TBL_LISTING_CONTACTS)->count_all_results();
		
			
		log_message('debug', 'Last query to getFhhhhhavCou88888ntAll  ['.$this->db->last_query().']');
		
		if( !$getFavCountAll ){
			return null;
		}else{
			return $getFavCountAll;
		}	
		
	
	}
}
?>
