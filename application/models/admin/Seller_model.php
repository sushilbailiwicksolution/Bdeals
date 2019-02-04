<?php
class Seller_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getBusinessUserProfile( $businessType ){
		
		$this->db->select('*');
		if( strcasecmp( $businessType, 'sell_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}else if( $strcasecmp( $businessType, 'join_ventures' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}	
		
		$sapproved_count = $this->input->get("sapproved_count");
		$spending_count = $this->input->get("spending_count");
		$srejected_count = $this->input->get("srejected_count");
		$sinactive_count = $this->input->get("sinactive_count");
		$sclosed_count = $this->input->get("sclosed_count");
		$sall_count = $this->input->get("sall_count");
		
		//for filters
		$fromDate    = $this->input->post('fromDate');
		$toDate    = $this->input->post('toDate');
		$sort_status    = $this->input->post('sort_status');
		$sort_team    = $this->input->post('sort_team');
		$sort_city    = $this->input->post('sort_city');
		$category    = $this->input->post('category');
		$pricetype    = $this->input->post('pricetype');
		
		if($sapproved_count!='' and $spending_count=='' and $srejected_count=='' and $sinactive_count=='' and $sclosed_count=='' and $sall_count=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$sapproved_count));
		}
		if($spending_count!='' and $sapproved_count=='' and $srejected_count=='' and $sinactive_count=='' and $sclosed_count=='' and $sall_count=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$spending_count));
		}
		
		if($srejected_count!='' and $sapproved_count=='' and $spending_count=='' and $sinactive_count=='' and $sclosed_count=='' and $sall_count=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$srejected_count));
		}
		
		if($sinactive_count!='' and $sapproved_count=='' and $spending_count=='' and $srejected_count=='' and $sclosed_count=='' and $sall_count=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$sinactive_count));
		}
		
		if($sclosed_count!='' and $sapproved_count=='' and $spending_count=='' and $srejected_count=='' and $sinactive_count=='' and $sall_count=='' and $sort_city=='' and $category=='' and $pricetype==''){
			$this->db->where(array('status'=>$sclosed_count));
		}
		
		if($sall_count!='' and $sclosed_count=='' and $sapproved_count=='' and $spending_count=='' and $srejected_count=='' and $sinactive_count=='' and $sort_city=='' and $category=='' and $pricetype==''){
			
			//$this->db->where(array('status'=>$sclosed_count));
		}
		
		if($sinactive_count=='' and $sapproved_count=='' and $spending_count=='' and $srejected_count=='' and $sclosed_count=='' and $sall_count=='' and $sort_status=='' and $fromDate=='' and $toDate=='' and $sort_city=='' and $category=='' and $pricetype==''){
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
		
		log_message('debug', 'Last Query for business profile8888889998882222 ['.$this->db->last_query().']');
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
		$this->db->from(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
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
	public function UpdateSellerCityState( $form_Id ){
		
		$other_state=$this->input->post('other_state');	
		$country=$this->input->post('country');	
		$state=$this->input->post('state');	
		$other_city=$this->input->post('other_city');	
		
		//insert for state
		$userData = array('country_id'=>$country, 'state_name'=>$other_state);

		$this->db->insert(TBL_PREFIX.TBL_COUNTRY_STATE, $userData);
		$state=$this->db->insert_id();
		
		//insert for city
		$userData2 = array('state_id'=>$state, 'city_name'=>$other_city);

		$this->db->insert(TBL_PREFIX.TBL_STATE_CITY, $userData2);
		$city=$this->db->insert_id();
		
		$data = array('other_state'=>'','location_state' => $state,'other_city'=>'','location_city' => $city);

		$this->db->set($data);
		$this->db->where('form_id',$form_Id);
		$result = $this->db->update( TBL_PREFIX.TBL_BUSINESS_DETAILS );
		
		log_message('debug', 'Last STATE Query ['.$this->db->last_query().']');
		if(!$result){
			return 'false';
		}else{
			
				return 'true';
			}
		
	}
	public function ContactCountByFormIdUser($formid){ //contact seller count on particular form id
		
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
	
	public function getApprovedCount($btype){ //get all approved
		
		$this->db->select('COUNT(form_id)');
	
	
		
		$countAssigned = $this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status'=>'1','business_type'=>$btype))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		

		//log_message('debug', 'Last query to getApprovedCount1  ['.$this->db->last_query().']');
		//log_message('debug', 'Last query to getApprovedCount2  ['. $countAssigned.']');
		
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	
	public function getPendingCount($btype){ //get all pending
		
		$this->db->select('COUNT(form_id)');
	
	
		
		$countAssigned = $this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status'=>'0','business_type'=>$btype))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		

		//log_message('debug', 'Last query to getApprovedCount1  ['.$this->db->last_query().']');
		//log_message('debug', 'Last query to getApprovedCount2  ['. $countAssigned.']');
		
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	
	public function getRejectedCount($btype){ //get all rejected
		
		$this->db->select('COUNT(form_id)');
	
	
		
		$countAssigned = $this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status'=>'2','business_type'=>$btype))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		

		//log_message('debug', 'Last query to getApprovedCount1  ['.$this->db->last_query().']');
		//log_message('debug', 'Last query to getApprovedCount2  ['. $countAssigned.']');
		
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	
	public function getInactiveCount($btype){ //get all rejected
		
		$this->db->select('COUNT(form_id)');
	
	
		
		$countAssigned = $this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status'=>'3','business_type'=>$btype))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		

		//log_message('debug', 'Last query to getApprovedCount1  ['.$this->db->last_query().']');
		//log_message('debug', 'Last query to getApprovedCount2  ['. $countAssigned.']');
		
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	
	public function getClosedCount($btype){ //get all closed
		
		$this->db->select('COUNT(form_id)');
	
	
		
		$countAssigned = $this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status'=>'4','business_type'=>$btype))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		

		//log_message('debug', 'Last query to getApprovedCount1  ['.$this->db->last_query().']');
		//log_message('debug', 'Last query to getApprovedCount2  ['. $countAssigned.']');
		
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	
	public function getAllCount($btype){ //get all closed
		
		$this->db->select('COUNT(form_id)');
	
	
		
		$countAssigned = $this->db->where(array('business_type'=>$btype))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		

		//log_message('debug', 'Last query to getApprovedCount1  ['.$this->db->last_query().']');
		//log_message('debug', 'Last query to getApprovedCount2  ['. $countAssigned.']');
		
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
		//export all user data in xls format
	
	public function getSellExport(){

	
		$this->db->select('*');
		//$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id','left');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id = '.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.customer_id','left');
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id','left');
		
		
		
		
		$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id',"desc");
		
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type', 'sell_a_business');
		$userBusinessData = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS);
	
	//print_r($userBusinessData);
	
	
		log_message('debug', 'Last Query for business profileExportdata ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			return $userBusinessData->result_array();
			//return $dataToReturn;
		}
	}
	
	public function GetFavoriteList($formid){ 
		
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_PROPERTY_FAVORITE);
		
		
		$this->db->where('property_form_id',$formid);
		
		
		$userQueryDetails= $this->db->get();
		log_message('debug', 'User_model: GetFavoriteList: ['.$formid.']');
		if( !$userQueryDetails ){
			return null;
		}else{
			$dataToReturn = $userQueryDetails->result_array();
		
		
			return $dataToReturn;
		}
	}
	
	public function GetContactlist($formid){ 
		
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_PROPERTY_VIEW_USER);
		
		
		$this->db->where('viewed_form_id',$formid);
		
		
		$userQueryDetails= $this->db->get();
		log_message('debug', 'User_model: GetContactlist: ['.$formid.']');
		if( !$userQueryDetails ){
			return null;
		}else{
			$dataToReturn = $userQueryDetails->result_array();
		
		
			return $dataToReturn;
		}
	}
	public function GetSellerCount($formid){ 
		
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_LISTING_CONTACTS);
		
		
		$this->db->where('form_id',$formid);
		
		
		$userQueryDetails= $this->db->get();
		log_message('debug', 'User_model: GetContactlist: ['.$formid.']');
		if( !$userQueryDetails ){
			return null;
		}else{
			$dataToReturn = $userQueryDetails->result_array();
		
		
			return $dataToReturn;
		}
	}
}
?>
