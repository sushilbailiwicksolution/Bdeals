<?php
class Business_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getBusinessDetailsByFormId( $businessType, $form_id ){
		log_message('debug', 'In getBusinessDetailsByFormId() function=============================');
		$this->db->select('*');
		if( strcasecmp( $businessType, 'sell_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
			
		}else if( strcasecmp( $businessType, 'joint_ventures' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id');
		}else if( strcasecmp( $businessType, 'buy_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id');
		}else if( strcasecmp( $businessType, 'startup_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id ='.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id');
		}
		else if( strcasecmp( $businessType, 're_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id ='.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.form_id','left');
		}
		$this->db->join(TBL_PREFIX.TBL_PROPERTY_TAGS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.property_tag_id = '.TBL_PREFIX.TBL_PROPERTY_TAGS.'.tag_id','left');
		
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.FORM_ID', $form_id);
		$userBusinessData = $this->db->get();
		log_message('debug', 'Last Query to check data ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			$dataToReturn = $userBusinessData->result_array();
			return $dataToReturn;
		}

	}
	
		public function getBusinessDetailsByFormIdAdmin( $businessType, $form_id ){
		log_message('debug', 'In getBusinessDetailsByFormId() function=============================');
		$this->db->select('*');
		if( strcasecmp( $businessType, 'sell_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
			
		}else if( strcasecmp( $businessType, 'joint_ventures' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id');
		}else if( strcasecmp( $businessType, 'buy_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id');
		}else if( strcasecmp( $businessType, 'startup_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id ='.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id');
		}
		else if( strcasecmp( $businessType, 're_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id ='.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.form_id','left');
		}
		
		
		$this->db->join(TBL_PREFIX.TBL_PROPERTY_TAGS, TBL_PREFIX.TBL_PROPERTY_TAGS.'.tag_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.property_tag_id','left');
		
		
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.FORM_ID', $form_id);
		$userBusinessData = $this->db->get();
		log_message('debug', 'Last Query to check data ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			$dataToReturn = $userBusinessData->result_array();
			return $dataToReturn;
		}

	}

	public function getBusinessOfCustomer(){
		
		$this->db->select(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status,'.TBL_PREFIX.TBL_PACKAGE.'.name as packagename, key_headline, contact, business_type,listing_category,num_business_viewed,add_to_favorite,business_add_date');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_PACKAGE, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_CUSTOMER_PACKAGE.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_PACKAGE, TBL_PREFIX.TBL_CUSTOMER_PACKAGE.'.package_id = '.TBL_PREFIX.TBL_PACKAGE.'.id','left');
		$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id',"desc");
		$businessList = $this->db->get_where(TBL_PREFIX.TBL_BUSINESS_DETAILS, array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid')));
		log_message('debug','Last query ['.$this->db->last_query().']');
		if ( !$businessList ){
			return null;
		}else{
			return $businessList->result();
		}
	}
	public function getBusinessOfCustomerListing(){
		
		$this->db->select(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status,'.TBL_PREFIX.TBL_PACKAGE.'.name as packagename, key_headline, contact, business_type,listing_category,num_business_viewed,add_to_favorite,business_add_date');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_PACKAGE, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_CUSTOMER_PACKAGE.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_PACKAGE, TBL_PREFIX.TBL_CUSTOMER_PACKAGE.'.package_id = '.TBL_PREFIX.TBL_PACKAGE.'.id','left');
		$limit=10;
		
		$businessList = $this->db->order_by('form_id',"DESC")->get_where(TBL_PREFIX.TBL_BUSINESS_DETAILS, array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid')),$limit);

		
		log_message('debug','Last query ['.$this->db->last_query().']');
		if ( !$businessList ){
			return null;
		}else{
			return $businessList->result();
		}
	}
	public function getBusinessOfCustomerBuy(){
		$this->db->select(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.name,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status,'.TBL_PREFIX.TBL_PACKAGE.'.name as packagename,'.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.industry_preference,key_headline, contact, business_type,listing_category,buy_invest_in,num_business_viewed,added_date,key_requirement');
		$this->db->join(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_PACKAGE, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_CUSTOMER_PACKAGE.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_PACKAGE, TBL_PREFIX.TBL_CUSTOMER_PACKAGE.'.package_id = '.TBL_PREFIX.TBL_PACKAGE.'.id','left');
		$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id',"desc");
		$businessbuYList = $this->db->get_where(TBL_PREFIX.TBL_BUSINESS_DETAILS, array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid')));
		log_message('debug','Last query ['.$this->db->last_query().']');
		if ( !$businessbuYList ){
			return null;
		}else{
			return $businessbuYList->result();
		}
	
	}
	
	
	/*public function getRegion(){
		$this->db->select('*');
		$q = $this->db->get(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		$data = $q->result_array();
			
			
			
		$user_id     = $data[0]['id'];
		log_message('debug','Last query ['.$this->db->last_query().']');
		if ( !$businessbuYList ){
			return null;
		}else{
			return $businessbuYList->result();
		}
	}*/
}
?>
