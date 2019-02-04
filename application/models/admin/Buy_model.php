<?php
class Buy_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getBusinessUserProfile( $businessType ){
		$this->db->select('*');
		if( strcasecmp( $businessType, 'sell_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
			$this->db->join(TBL_PREFIX.TBL_COUNTRY, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country = '.TBL_PREFIX.TBL_COUNTRY.'.id');
		}else if( strcasecmp( $businessType, 'buy_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id');
			
			$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.BUSINESS_TYPE', 'buy_a_business');
		}	
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.CUSTOMER_ID', $this->session->userdata('userid'));
		$userBusinessData = $this->db->get();
		log_message('debug', 'Last Query 2 ['.$this->db->last_query().']');
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
				return 'Accepted';
			}else{
				return 'Pending';
			}
		}
	}
}
?>
