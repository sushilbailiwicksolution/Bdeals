<?php
class Search_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getSearchResult( $sortBy, $itemPerPage, $pageNum, $businessType ){//$sortby, $itemPerPage, $pageNum, $country, $state, $city, $sector, $price, $businessType ){
		
		
		
		
		$business_type = $this->input->post('type');
		$country   = $this->input->post('country');
		$state     = $this->input->post('state');
		$city      = $this->input->post('city');
		$sector    = $this->input->post('sector');
		$price     = $this->input->post('price');
		$searchKey = $this->input->post('search_key');
		$businessType = $this->input->post('type');

		
		$whereClause = null;

		if( $country != null ){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country'] = $country;
		}
		if( $state != null ){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state'] = $state;
		}
		if( $city != null ){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city'] = $city;
		}
		if( $sector != null and $sector!='All'){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category'] = $sector;
		}
		if( $sector != null and $sector=='All'){
			//$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category'] = $sector;
		}
		if( $business_type != null and $business_type!='All'){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type'] = $business_type;
		}
		if( $business_type != null and $business_type=='All'){
			//$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type'] = $business_type;
		}
		if( $price != null ){
			$whereClause[TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.asking_price'] = $price;
		}

		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		if($businessType=='sell_a_business'){
			
			
			$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}
		
		else if($businessType=='jv_business'){
			
		
			$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id');
		}
		else if($businessType=='startup_business'){
			
		
			$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id');
		}
		else if($businessType=='re_business'){
			
		
			$this->db->join(TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.form_id');
		}
		else if($businessType=='buy_a_business'){
			
		
			$this->db->join(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id');
		}
		
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		
		if( $searchKey != null ){
			$this->db->like( 'LOWER('.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.key_headline)', strtolower($searchKey));
		}else{
		}
		$this->db->limit($itemPerPage, $pageNum);
		if( isset( $whereClause ) && count($whereClause) > 0 ){
			$this->db->where($whereClause);
		}
		if( $sortBy != null ){
			if( strpos( $sortBy, ':' ) > 0 ){
				$columnConditionDetails = explode(":", $sortBy);
				$columnValue = "(now() - interval $columnConditionDetails[2] day)";
				$whereClause[ $columnConditionDetails[0].$columnConditionDetails[1] ] = $columnValue;
				$this->db->order_by( $columnConditionDetails[0] );
				$this->db->where( $columnConditionDetails[0]." ".$columnConditionDetails[1]." ".$columnValue, NULL, FALSE );
			}else{
				$this->db->order_by( $sortBy );
			}
		}
		$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		$userBusinessData = $this->db->get();
		log_message('debug', 'Last Query99999 ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			$dataToReturn = $userBusinessData->result_array();
			//$this->session->set_userdata('last_form_id', $dataToReturn[0]['form_id']);
			return $dataToReturn;
		}

	}


	public function get_total( $businessType ){
		$whereClause = array();
		$business_type = $this->input->post('type');
		$country   = $this->input->post('country');
		$state     = $this->input->post('state');
		$city      = $this->input->post('city');
		$sector    = $this->input->post('sector');
		$price     = $this->input->post('price');
		$searchKey = $this->input->post('search_key');
		$businessType = $this->input->post('type');


		log_message('debug', 'Country ['.$country.'], state ['.$state.'], city ['.$city.'], Business_type ['.$business_type.']');

		if( $country != null ){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country'] = $country;
		}
		if( $state != null ){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state'] = $state;
		}
		if( $city != null ){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city'] = $city;
		}
		if( $sector != null and $sector!='All'){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category'] = $sector;
		}
		if( $sector != null and $sector=='All'){
			//$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category'] = $sector;
		}
		if( $business_type != null and $business_type!='All'){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type'] = $business_type;
		}
		if( $business_type != null and $business_type=='All'){
			//$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type'] = $business_type;
		}
		if( $price != null ){
			$whereClause[TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.asking_price'] = $price;
		}
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
				if($businessType=='sell_a_business'){
			
			
			$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}
		
		else if($businessType=='jv_business'){
			
		
			$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id');
		}
		else if($businessType=='startup_business'){
			
		
			$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id');
		}
		else if($businessType=='re_business'){
			
		
			$this->db->join(TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.form_id');
		}
		else if($businessType=='buy_a_business'){
			
		
			$this->db->join(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id');
		}
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.form_id='.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.document_type=','image');
		//$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id'); 
		
		if( $searchKey != null ){
			$this->db->like( 'LOWER('.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.key_headline)', strtolower($searchKey));
			
		}

		if( isset( $whereClause ) && count($whereClause) > 0 ){
			$this->db->where( $whereClause );
		}
		
		
		$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		$numOfRec = $this->db->get();
		log_message('debug', 'Last Query333333333 ['.$this->db->last_query().']');
		return $numOfRec;
	}
	
	public function get_totalVal( $businessType ){
		$whereClause = array();
		$business_type = $this->input->post('type');
		$country   = $this->input->post('country');
		$state     = $this->input->post('state');
		$city      = $this->input->post('city');
		$sector    = $this->input->post('sector');
		$price     = $this->input->post('price');
		$searchKey = $this->input->post('search_key');
		$businessType = $this->input->post('type');


		log_message('debug', 'Country ['.$country.'], state ['.$state.'], city ['.$city.'], Business_type ['.$business_type.']');

		if( $country != null ){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country'] = $country;
		}
		if( $state != null ){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state'] = $state;
		}
		if( $city != null ){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city'] = $city;
		}
		if( $sector != null and $sector!='All'){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category'] = $sector;
		}
		if( $sector != null and $sector=='All'){
			//$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category'] = $sector;
		}
		if( $business_type != null and $business_type!='All'){
			$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type'] = $business_type;
		}
		if( $business_type != null and $business_type=='All'){
			//$whereClause[TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type'] = $business_type;
		}
		if( $price != null ){
			$whereClause[TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.asking_price'] = $price;
		}
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		if( strcasecmp( $businessType, 'sell_business' ) == 0 ){
			
			$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id='.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
			
		
		}else if( strcasecmp( $businessType, 'jv_business' ) == 0 ){	
			
			$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id='.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
			
		}
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.form_id='.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.document_type=','image');
		//$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id'); 
		
		if( $searchKey != null ){
			$this->db->like( 'LOWER('.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.key_headline)', strtolower($searchKey));
			
		}

		if( isset( $whereClause ) && count($whereClause) > 0 ){
			$this->db->where( $whereClause );
		}
		
		
		//$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		$numOfRec = $this->db->count_all_results();
		log_message('debug', 'Last Query333333333 ['.$this->db->last_query().']');
		return $numOfRec;
	}

}
?>
