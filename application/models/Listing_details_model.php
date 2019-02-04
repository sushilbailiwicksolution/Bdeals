<?php
class Listing_details_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}
	
	
	public function getFeaturedListing(){
		
		
		
		$this->db->select(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price_currency,
		'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.ask_price as askPrice,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.ask_price_currency as askCurrency,
		'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.investment_required_currency,'.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.investment_required_currency as investmentRequiredCurr,
		'.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.investment_required_price,
		'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.latest_revenu_unit,
		'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price_unit,
		'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.investment_required_unit,
		'.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.investment_required_unit as stunit ,key_headline,
		description,listing_category,location_country,location_city,location_state,business_type,
		tag_name,tag_background_color,tag_color,path,document_type,reqd_investment,form_type,sector_image');
		
		
		
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_PROPERTY_TAGS, TBL_PREFIX.TBL_PROPERTY_TAGS.'.tag_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.property_tag_id','left');
		$this->db->join(TBL_PREFIX.TBL_SECTOR, TBL_PREFIX.TBL_SECTOR.'.id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category','left');
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_type', 'Featured');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type!=', 'buy_a_business');
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type!=', 'startup_business');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.expiry_date>=',date('Y-m-d'));
		$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id'); 
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.document_type=','image');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status=','1');
		$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id', "DESC");
		$Featured = $this->db->get();
		//log_message('debug', 'User_model: getFeaturedListing: ['.$this->db->last_query().']');
		
		if( !$Featured ){
			return null;
		}else{
			return $Featured->result_array();
		}
	}
	public function getBuyBusiness(){
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id','left');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status=',1);
		$this->db->order_by(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.id', "DESC");
		$Featured = $this->db->get();
		log_message('debug', 'User_model: BUYERREQUIREMENT: ['.$this->db->last_query().']');
		
		if( !$Featured ){
			return null;
		}else{
			return $Featured->result_array();
		}
	}
	
	//browse by sector
	
	public function getBrowseBySector(){
		
	
		$this->db->select('listing_category, COUNT(listing_category) as industryCount,sector_image');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_SECTOR, TBL_PREFIX.TBL_SECTOR.'.id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category','left');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.expiry_date>=',date('Y-m-d'));
		$this->db->where('listing_category!=','');
		$this->db->group_by('listing_category'); 
		
		$BySector = $this->db->get();
		//log_message('debug', 'User_model: getBrowseBySector count: ['.$this->db->last_query().']');
		
		if( !$BySector ){
			return null;
		}else{
			return $BySector->result_array();
		}
	}
	//get new listing
	public function getNewListing(){
	
		$this->db->select(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price_currency,
		'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.ask_price as askPrice,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.ask_price_currency as askCurrency,
		'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.investment_required_currency,'.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.investment_required_currency as investmentRequiredCurr,
		'.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.investment_required_price,
		'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.latest_revenu_unit,
		'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price_unit,
		'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.investment_required_unit,
		'.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.investment_required_unit as stunit ,key_headline,
		description,listing_category,location_country,location_city,location_state,business_type,
		tag_name,tag_background_color,tag_color,path,document_type,reqd_investment,form_type,sector_image');
						
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_PROPERTY_TAGS, TBL_PREFIX.TBL_PROPERTY_TAGS.'.tag_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.property_tag_id','left');
		$this->db->join(TBL_PREFIX.TBL_SECTOR, TBL_PREFIX.TBL_SECTOR.'.id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category','left');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type!=', 'buy_a_business');
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type!=', 'startup_business');
		$this->db->where(TBL_PREFIX.TBL_PROPERTY_TAGS.'.tag_name', 'New');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.expiry_date>=',date('Y-m-d'));
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.document_type=','image');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status=','1');
		$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id', "DESC");
		$this->db->limit('8','0');
		$getNewListing = $this->db->get();
		log_message('debug', 'User_model: getNewListing: ['.$this->db->last_query().']');
		
		if( !$getNewListing ){
			return null;
		}else{
			return $getNewListing->result_array();
		}
	}
	
public function getSectorList($industry,$sort,$limit){
		    
	
		$this->db->select(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.key_headline,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.description,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.ask_price as askPrice,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.latest_revenu_currency,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.latest_revenu_currency as latestRevenu_currency,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.latest_revenu,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.latest_revenu as latestRrevenu,'.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.price_currency,'.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.price_value,'.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.price_unit,'.TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.path,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.investment_required_currency,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.reqd_investment,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.investment_required_unit,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price_currency,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price_unit,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category_other,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_type,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.add_to_favorite,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id');  

		
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		
		$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id','left');
		
		$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id','left');
		
		$this->db->join(TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.form_id','left');

		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category',$industry);
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.document_type=','image');
		
		$cateid=$this->input->post('Categoryid');
		$PriceRange=$this->input->post('Price_Range');
		$country=$this->input->post('country');
		$State=$this->input->post('State');
		$city=$this->input->post('city');
		$AgeFilter=$this->input->post('AgeFilter');
		
		
		
		if($cateid!=''  and $PriceRange=='' and $State=='' and $country=='' and $city=='' and $AgeFilter==''){
			
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category=',$cateid);	
		}
		
		if($cateid=='' and $PriceRange!='' and $State=='' and $country=='' and $city=='' and $AgeFilter==''){
			
			$this->db->where(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.price_range_type=',$PriceRange);	
		}
		if($cateid=='' and $PriceRange=='' and $State=='' and $country=='' and $city=='' and $AgeFilter==''){
			
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category=',$cateid);	
		}
		
		if($country!='' and $cateid==''  and $PriceRange=='' and $State=='' and $city=='' and $AgeFilter==''){
			
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country=',$country);	
		}
		
		if($AgeFilter!='' and $State=='' and $country=='' and $city=='' and $cateid==''  and $PriceRange==''){
			
			//print_r($AgeFilter);
			
		//	die;
			
			//date
			$mydate = date('Y-m-d h:i:s'); 
			$this->db->where("DATEDIFF('$mydate', business_add_date) >=", $AgeFilter);
		}	
		
		if($State!='' and $country!='' and $cateid==''  and $PriceRange=='' and $city=='' and $AgeFilter==''){
			
			
			
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country=',$country);	
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state=',$State);	
		}
		
		if($State!='' and $country!='' and $city!='' and $cateid==''  and $PriceRange=='' and $AgeFilter==''){
			
			
			
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country=',$country);	
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state=',$State);	
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city=',$city);	
		}
		
		if($State!='' and $country!='' and $city!='' and $cateid!=''  and $PriceRange!='' and $AgeFilter!=''){
			
			//date
			$mydate = date('Y-m-d h:i:s'); 
			$this->db->where("DATEDIFF('$mydate', business_add_date) >=", $AgeFilter);
			
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country=',$country);	
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state=',$State);	
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city=',$city);	
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category=',$cateid);	
		$this->db->where(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.price_range_type=',$PriceRange);	
		}
		$url=$this->uri->segment(2);
		if($url!=''){
		
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category=',$url);	
		
		}
		
		if($sort=='Desc'){
			
			$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id', "DESC");
			
		}
		
		if($sort=='asking_price desc'){
			
			$this->db->order_by(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price', "DESC");
			
		}
		if($sort=='asking_price desc'){
			
			$this->db->order_by(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price', "DESC");
			
		}
		if($sort=='asking_price asc'){
			
			$this->db->order_by(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price', "Asc");
			
		}
		
		
		$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		$this->db->limit($limit);
		$getSectorList = $this->db->get();
		log_message('debug', 'listing_model: getSectorListTesting0120121: ['.$this->db->last_query().']');
		
		if( !$getSectorList ){
			return null;
		}else{
			return $getSectorList->result_array();
		}
	}


	
	
	public function getBusinessDetails($formid,$businessType){
		
		$frm_id         = $formid;
		$business_type  = $businessType;
		

		////log_message('debug', 'Form_id ['.$frm_id.']');
		////log_message('debug', 'Business_type ['.$business_type.']');


		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		
		if($business_type=="buy_a_business"){
			$this->db->join(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id','left');
		}	
		if($business_type=="sell_a_business"){
			$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id','left');
		}
		if($business_type=="jv_business"){
			$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id','left');
		}
		if($business_type=="start_up"){
			$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id','left');
		}
		if($business_type=="startup_business"){
			$this->db->join(TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS.'.form_id','left');
		}
		if($business_type=="real_estate"){
			$this->db->join(TBL_PREFIX.TBL_RE_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_RE_BUSINESS_DETAILS.'.form_id','left');
		}
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.FORM_ID',$frm_id);
		$userBusinessData = $this->db->get();
		//log_message('debug', 'Last Query for businessType99999999 ['.$this->db->last_query().']');
		
		if( !$userBusinessData ){
			
			return null;
		}else{
			return $userBusinessData->result_array();
		}
		
		
		
	}
	
	public function getBusinessImageDocuments($formid,$businessType){
		
		$frm_id         = $formid;
		$business_type  = $businessType;
		
		////log_message('debug', 'Form_id ['.$frm_id.']');
		////log_message('debug', 'Business_type ['.$business_type.']');
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS);
		
		
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.FORM_ID',$frm_id);
		$userBusinessDocuments = $this->db->get();
		//log_message('debug', 'Last Query ['.$this->db->last_query().']');
		
		if( !$userBusinessDocuments ){
			
			return null;
		}else{
			return $userBusinessDocuments->result_array();
		}
		
		
		
	}
	
	public function getAdditionalDetails($formid,$businessType){
		
		$frm_id         = $formid;
		$business_type  = $businessType;
		
		//log_message('debug', 'Form_id ['.$frm_id.']');
		//log_message('debug', 'Business_type ['.$business_type.']');
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_ADDITIONAL_DETAILS);
		
		
		$this->db->where(TBL_PREFIX.TBL_ADDITIONAL_DETAILS.'.FORM_ID',$frm_id);
		$additionalDetails = $this->db->get();
		//log_message('debug', 'Last Query ['.$this->db->last_query().']');
		
		if( !$additionalDetails ){
			
			return null;
		}else{
			return $additionalDetails->result_array();
		}
	}

	
	public function getAdditionalFinancialDetails($formid,$businessType){
		
		$frm_id         = $formid;
		$business_type  = $businessType;
		
		//log_message('debug', 'Form_id ['.$frm_id.']');
		//log_message('debug', 'Business_type ['.$business_type.']');
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS);
		
		
		$this->db->where(TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS.'.FORM_ID',$frm_id);
		$additionalFinancialDetails = $this->db->get();
		//log_message('debug', 'Last Query ['.$this->db->last_query().']');
		
		if( !$additionalFinancialDetails ){
			
			return null;
		}else{
			return $additionalFinancialDetails->result_array();
		}
	}
	
	
	

	public function getContactFromUserDetails(){
		
		//$frm_id = $this->input->post('frm_id');
		//$business_type   = $this->input->get('business_type');
		
		////log_message('debug', 'Form_id ['.$frm_id.']');
		////log_message('debug', 'Business_type ['.$business_type.']');
		
		if( $this->session->userdata('is_logged_in') != null && $this->session->userdata('is_logged_in') === true ){
			$customer_id = 	$this->session->userdata('userid');
			$this->db->select('*');
			$this->db->from(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
		
		
			$this->db->where(TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.CUSTOMER_ID',$customer_id);
			$contactFromUserDetails = $this->db->get();
			//log_message('debug', 'Last Query ['.$this->db->last_query().']');
		
			if( !$contactFromUserDetails ){
			
				return null;
			}else{
				return $contactFromUserDetails->result_array();
			}
		
		}else{
			return null;
		}
		
	}

	public function getBrowseSectorList(){
		
	
		$this->db->select('listing_category, sector_image,COUNT(listing_category) as industryCount');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_SECTOR,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category = '.TBL_PREFIX.TBL_SECTOR.'.id','left');
		$this->db->where('listing_category!=','');
		$this->db->group_by('listing_category'); 
		$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category', "ASC");

		$getBrowseSectorList = $this->db->get();
		//log_message('debug', 'listing_model: getBrowseSectorList: ['.$this->db->last_query().']');
		
		if( !$getBrowseSectorList ){
			return null;
		}else{
			return $getBrowseSectorList->result_array();
		}
	}
	
public function update_counter($formid) { //viewed property
// return current business views 
    $this->db->where('form_id', urldecode($formid));
    $this->db->select('num_business_viewed');
    $count = $this->db->get('bd_business_details')->row();
// then increase by one 
    $this->db->where('form_id', urldecode($formid));
    $this->db->set('num_business_viewed', ($count->num_business_viewed + 1));
    $updatecount = $this->db->update('bd_business_details');
	
	if($this->session->userdata('userid')!=''){
		
	$user_Data = array('viewed_form_id'=>urldecode($formid),'viewed_user_id'=>$this->session->userdata('userid'),'view_datetime'=>date('Y-m-d h:i:s'));
		
	$insView = $this->db->insert(TBL_PREFIX.TBL_PROPERTY_VIEW_USER, $user_Data);	
	}
	log_message('debug', 'updatecount for view business88888888 ['.$this->db->last_query().']');
	
	}
	
	//add to favourite 
	public function Addtofavourite($addtofavourite,$action){
		
		//insert data for record
		
		$userData = array('property_form_id'=>$addtofavourite,'like_user_id'=>$this->session->userdata('userid'),'user_ip_address'=>$_SERVER['REMOTE_ADDR'],'like_datetime'=>date('Y-m-d h:i:s'));
		
		$insLike = $this->db->insert(TBL_PREFIX.TBL_PROPERTY_FAVORITE, $userData);
		
		
		$data = array('add_to_favorite'=>'1');
		$this->db->set($data);
		$this->db->where('form_id', $addtofavourite);
		$Addtofavourite = $this->db->update( TBL_PREFIX.TBL_BUSINESS_DETAILS);
		
		//log_message('debug', 'Addtofavourite updation ['.$this->db->last_query().']');
		if( !$Addtofavourite ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}
	//remove from favourite 
	public function removefavourite($addtofavourite,$action){
		
		
		$this->db->where(array('property_form_id'=>$addtofavourite,'like_user_id'=>$this->session->userdata('userid')));
		$userList=$this->db->delete(TBL_PREFIX.TBL_PROPERTY_FAVORITE);
	
		
		log_message('debug', 'removefavourite From Fav ['.$this->db->last_query().']');
		
		$data = array('add_to_favorite'=>'0');
		$this->db->set($data);
		$this->db->where('form_id', $addtofavourite);
		$removefavourite = $this->db->update( TBL_PREFIX.TBL_BUSINESS_DETAILS);
		
		//log_message('debug', 'removefavourite updation ['.$this->db->last_query().']');
		if( !$removefavourite ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
	}
	
	public function RecommendedBusiness(){
		
		$this->db->select('listing_category');
		$this->db->where('customer_id',$this->session->userdata('userid'));
		$this->db->group_by('listing_category'); 
		$q = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		//$data = $q->result_array();
		
		
		
		foreach ($q->result_array() as $row){
			
			
	
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		
		$this->db->join(TBL_PREFIX.TBL_SECTOR, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category = '.TBL_PREFIX.TBL_SECTOR.'.id','left');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		$this->db->where('listing_category',$row['listing_category']);
		
		$getBrowseSectorList = $this->db->get();
		log_message('debug', 'listing_model: RecommendedBusinessList: ['.$this->db->last_query().']');
		
		if( !$getBrowseSectorList ){
			return null;
		}else{
			return $getBrowseSectorList->result_array();
		}
		}
	}	
	public function recommendedCount(){
		/*
		$this->db->select('listing_category');
		$this->db->where('customer_id',$this->session->userdata('userid'));
		$this->db->group_by('listing_category'); 
		$q = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		//$data = $q->result_array();
		
		
		
		foreach ($q->result_array() as $row){
			$data[]=$row['listing_category'];
			echo '<pre>';
			print_r($data);
		echo '</pre>';
	
		$this->db->select('form_id, count(*)'); 

		$getFavCountAll =$this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category'=>$row['listing_category']))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		log_message('debug', 'listing_model: RecommendedBusinessListCount: ['.$this->db->last_query().']');
		
		if( !$getFavCountAll ){
			return null;
		}else{
			return $recommendedCount;
		}
		
	}	*/
	
			$this->db->select('listing_category');
		$this->db->where('customer_id',$this->session->userdata('userid'));
		$this->db->group_by('listing_category'); 
		$q = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		//$data = $q->result_array();
		
		
		
		foreach ($q->result_array() as $row){
			
			
	
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		
		$this->db->join(TBL_PREFIX.TBL_SECTOR, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category = '.TBL_PREFIX.TBL_SECTOR.'.id','left');
		
		$this->db->where('listing_category',$row['listing_category']);
		
		$query = $this->db->get();
		$num = $query->num_rows();
		log_message('debug', 'listing_model: RecommendedBusinessList111: ['.$this->db->last_query().']');
		
		if( !$num ){
			return null;
		}else{
			return $num;
		}
		}
	}
	public function getBuyBusinessList($business){
		
		$val=str_replace("%20"," ",$business);
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id','left');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status=',1);
		
		if($val!=''){
		$this->db->where('buy_invest_in',$val);
		}
		$this->db->order_by(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.id', "DESC");
		$Featured = $this->db->get();
		//log_message('debug', 'User_model: getFeaturedListing: ['.$this->db->last_query().']');
		
		if( !$Featured ){
			return null;
		}else{
			return $Featured->result_array();
		}
	}
public function HeaderSectorList($industry,$sort,$limit=4){
		    
	
		$this->db->select(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.key_headline,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.description,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_country,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.ask_price as askPrice,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.latest_revenu_currency,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.latest_revenu_currency as latestRevenu_currency,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.latest_revenu,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.latest_revenu as latestRrevenu,'.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.price_currency,'.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.price_value,'.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.price_unit,'.TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.path,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.investment_required_currency,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.reqd_investment,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.investment_required_unit,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price_currency,'.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price_unit,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category_other,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_type,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.add_to_favorite,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id');  

		
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		
		$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id','left');
		
		$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id','left');
		
		$this->db->join(TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS,TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_REALESTATE_BUSINESS_DETAILS.'.form_id','left');

		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category',$industry);
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS.'.document_type=','image');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_type=','Featured');
		
		
		
		if($sort=='Desc'){
			
			$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id', "DESC");
			
		}
		
		if($sort=='asking_price desc'){
			
			$this->db->order_by(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price', "DESC");
			
		}
		if($sort=='asking_price desc'){
			
			$this->db->order_by(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price', "DESC");
			
		}
		if($sort=='asking_price asc'){
			
			$this->db->order_by(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.ask_price', "Asc");
			
		}
		
		
		$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		$this->db->limit($limit);
		$getSectorList = $this->db->get();
		log_message('debug', 'listing_model: getSectorListTesting: ['.$this->db->last_query().']');
		
		if( !$getSectorList ){
			return null;
		}else{
			return $getSectorList->result_array();
		}
	}

//get sector name
public function getSectorName(){
		
		 $url=$this->uri->segment(2);
		
		
		$this->db->select('listing_category');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		
		
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category',$url);
		
		$this->db->group_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category');
		$BySector = $this->db->get();
		//log_message('debug', 'User_model: getBrowseBySector count: ['.$this->db->last_query().']');
		
		if( !$BySector ){
			return null;
		}else{
			return $BySector->result_array();
		}
	}	
}	
?>	