<?php
class Buyer_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function validateCustomer(){
		$userId = $this->input->post('userid');
		$passwd = $this->input->post('password');

		if ( !isset($userId) || !isset($passwd) ){
			return false;
		}

		$whereClause = array( 'CUSTOMER_ID'=>$userId, 'PASSWORD'=>$passwd );
		$userQuery   = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $whereClause);
		log_message('debug', 'User_model: validateCustomer: ['.$this->db->last_query().']');
		if ( isset( $userQuery ) && $userQuery->num_rows() > 0 ){
			$row = $userQuery->row();
			$this->session->set_userdata('is_logged_in', true);
			$this->session->set_userdata('userid', $userId);
			return true;
		}else{
                        $this->session->set_userdata('is_logged_in', false);
			return false;
		}
	}


	public function setNewForm(){

		$this->session->set_userdata('last_form_id', 'NEW');
		
			return true;
		
	}

	public function setFormSession($formId){

		$this->session->set_userdata('last_form_id', $formId);
		
			return true;
		
	}

	
	public function getAssignedEmployee(){
		//select emp.name, emp.contact_no, emp.email from bd_employee emp, bd_customer_responsibility cr, bd_customer_details cd where cd.customer_id = 'gaurav1@gmail.com' AND cr.customer_id = cd.id and emp.id = cr.assigned_to;
		$resultData = $this->db->query("select emp.name, emp.contact_no, emp.email from ".TBL_PREFIX.TBL_EMPLOYEE." emp, ".TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY." cr, ".TBL_PREFIX.TBL_CUSTOMER_DETAILS." cd where cd.customer_id = '".$this->session->userdata('userid')."' AND cr.customer_id = cd.id and emp.id = cr.assigned_to");
		log_message('debug', 'User_model: getAssignedEmployee: ['.$this->db->last_query().']');
		if ( $resultData->num_rows() > 0 ){
			return $resultData->result();
		}else{
			return null;
		}

	}

	public function getBusinessUserProfile( $businessType){
		$whereClause = null;
		$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'));
		$this->db->select('*');
		if( strcasecmp( $businessType, 'buy_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			//$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}else if( strcasecmp( $businessType, 'join_ventures' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}	
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.CUSTOMER_ID', $this->session->userdata('userid'));
		
		$this->db->where('CUSTOMER_ID',$this->session->userdata('userid'));
		$this->db->where('BUSINESS_TYPE','buy_a_business');
		//$this->db->where('FORM_ID',$form_id);
		$this->db->order_by('form_id',"DESC");
		$this->db->limit(1);
		$userBusinessData = $this->db->get();
		log_message('debug', 'Buyer_model: getBusinessUserProfile: ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			$dataToReturn = $userBusinessData->result_array();
			$this->session->set_userdata('last_form_id', $dataToReturn[0]['form_id']);
			return $dataToReturn;
		}

	}
	
	public function getBusinessUserProfileAdmin( $businessType, $form_id ){
		$whereClause = null;
		$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'));
		$this->db->select('*');
		if( strcasecmp( $businessType, 'buy_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			//$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}else if( strcasecmp( $businessType, 'join_ventures' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}	
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.CUSTOMER_ID', $this->session->userdata('userid'));
		
		//$this->db->where('CUSTOMER_ID',$this->session->userdata('userid'));
		$this->db->where('BUSINESS_TYPE','buy_a_business');
		$this->db->where('FORM_ID',$form_id);
		//$this->db->order_by('form_id',"DESC");
		//$this->db->limit(1);
		$userBusinessData = $this->db->get();
		log_message('debug', 'Buyer_model: getBusinessUserProfile: ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			$dataToReturn = $userBusinessData->result_array();
			$this->session->set_userdata('last_form_id', $dataToReturn[0]['form_id']);
			return $dataToReturn;
		}

	}

	
	public function registerBusinessUser( $actType="NEW" ){
		/*$business_type    = $this->input->post('business_type');
		$uname            = $this->input->post('lb_uname');
		$email            = $this->input->post('lb_email');
		$country_code     = $this->input->post('country_code');
		$contact          = $this->input->post('lb_mobile');
		$address          = $this->input->post('lb_address');
		$location         = $this->input->post('lb_location');
		$compname         = $this->input->post('lb_company');
		$designation      = $this->input->post('lb_designation');
		$web              = $this->input->post('lb_web');
		$isOwner          = $this->input->post('lb_owner');
		$isBroker         = $this->input->post('lb_broker');
		$isRepresentative = $this->input->post('lb_representative');
		$aemail           = $this->input->post('lb_aemail');
		$acontact         = $this->input->post('lb_aphone');

		$who = $isOwner;
		if( isset($isOwner) ){
			$who = $isOwner;
		}else if( isset($isBroker) ){
			$who = $isBroker;
		}else if( isset( $isRepresentative ) ){
			$who = $isRepresentative;
		}*/

		//$userData = array('business_type'=>'buy_a_business','name'=>$uname, 'email'=>$email, 'country_code'=>$country_code,'contact'=>$contact, 'address'=>$address, 'location'=>$location, 'company_name'=>$compname, 'designation'=>$designation, 'website'=>$web, 'who'=>$who, 'alternative_email'=>$aemail, 'alternative_contact'=>$acontact);


		//select customer details
			$this->db->select('*');
			$this->db->where(array('customer_id'=>$this->session->userdata('userid')));
			$q = $this->db->get(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
			$data = $q->result_array();
			
			
			
			$name     = $data[0]['name'];
			$contact_number     = $data[0]['contact_number'];
			$email     = $data[0]['customer_id'];
			$address     = $data[0]['address'];
			$location     = $data[0]['location'];
			$company_name     = $data[0]['company_name'];


$userData = array('business_type'=>'buy_a_business','name'=>$name, 'email'=>$email,'contact'=>$contact_number, 'address'=>$address, 'company_name'=>$company_name,'business_add_date'=>date('Y-m-d h:i:s'));


		if( strcasecmp( $actType, "NEW" ) == 0 ){
			$userData['customer_id'] = $this->session->userdata('userid');
			$result = $this->db->insert(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userData);
			log_message('debug', 'Buyer_model: registerBusinessUser: ['.$this->db->last_query().']');
			if ( !$result && $this->db->error()['code'] == 1062 ){
				return array("duplicate", null);
			}else{
				$lastInsertedId = $this->db->insert_id();
				if ( $this->db->affected_rows() > 0 ){
					$this->session->set_userdata('last_form_id', $lastInsertedId);
					
					$userData = array('form_id'=>$this->session->userdata('last_form_id'));
					$result = $this->db->insert(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, $userData);
					log_message('debug', 'Buyer_model: registerBusinessUser: ['.$this->db->last_query().']');

					return array(true, $this->session->userdata('last_form_id'));
				}else{
					return array(false, null);
				}
			}
		}else{
			$lastInsertedId = $this->input->post('frm_id');
			//$this->db->where('customer_id', $this->session->userdata('userid'));
			$this->db->where('form_id',$lastInsertedId);
			if($this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userData)){
				log_message('debug', 'Buyer_model: registerBusinessUser: ['.$this->db->last_query().']');
				$this->session->set_userdata('last_form_id', $lastInsertedId);
				
				//$userData = array('form_id'=>$this->session->userdata('last_form_id'));
				//$result = $this->db->insert(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, $userData);
				//log_message('debug', 'User_model: registerBusinessUser: ['.$this->db->last_query().']');
				return array(true, $lastInsertedId);
			}else{
				return array(false, $lastInsertedId);
			}
		}

	}

	
	public function getBuyerBusinessProfile($business_type, $form_id){
		$whereClause = null;
		//$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'));
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id');
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.CUSTOMER_ID', $this->session->userdata('userid'));
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.FORM_ID', $form_id);
		$userSellBusinessData = $this->db->get();
		log_message('debug', 'Buyer_model: getBuyerBusinessProfile: ['.$this->db->last_query().']');
		
		if( !$userSellBusinessData ){
			return null;
		}else{
			return $userSellBusinessData->result_array();
		}
	}
	
	
		
	public function registerBuyerBusinessProfile( $actType = "NEW" , $form_id){
		$buy_invest_in                  = $this->input->post('buy_invest_in');
		$other_buy_invest               = $this->input->post('other_buy_invest');
		$profile_business_buyer         = $this->input->post('profile_business_buyer');
		$profile_corporate_investor     = $this->input->post('profile_corporate_investor');
		$profile_pe_vc                  = $this->input->post('profile_pe_vc');
		$profile_nri_foreign_investor   = $this->input->post('profile_nri_foreign_investor');
		$profile_business_lender        = $this->input->post('profile_business_lender');
		$profile_business_broker        = $this->input->post('profile_business_broker');
		$bi_acquisition_buyout          = $this->input->post('bi_acquisition_buyout');
		$bi_distributor_cf              = $this->input->post('bi_distributor_cf');
		$bi_invest_business             = $this->input->post('bi_invest_business');
		$bi_debt_financing              = $this->input->post('bi_debt_financing');
		$bi_jv_partnership              = $this->input->post('bi_jv_partnership');
		$bi_startup_angel               = $this->input->post('bi_startup_angel');
		$bi_preleased_property               = $this->input->post('bi_preleased_property');
		$country                        = $this->input->post('country');
		$region                         = $this->input->post('region');
		//$state                          = $this->input->post('state1');
		
		
		$i=0;
		foreach($this->input->post('state1') as $location){
			if($i==0){	
			log_message('debug', 'Buyer_model: buyerPostRequirement: ' .$location);
			$state .= $location;
			}else{
				$state .= ','.$location;
			}	
			$i++;
		}
		
		
		$city                           = $this->input->post('city');
		//$industry_preference            = $this->input->post('industry_preference');
		
		$i=0;
		foreach($this->input->post('industry_preference') as $categories){
			if($i==0){	
			log_message('debug', 'Buyer_model: buyerPostRequirement: ' .$categories);
			$industry_preference .= $categories;
			}else{
				$industry_preference .= ','.$categories;
			}	
			$i++;
		}
		
		
		$investment_min_price_currency  = $this->input->post('investment_min_price_currency');
		$investment_min                 = $this->input->post('investment_min');
		$investment_min_price_unit      = $this->input->post('investment_min_price_unit');
		$investment_max_price_currency  = $this->input->post('investment_max_price_currency');
		$investment_max                 = $this->input->post('investment_max');
		$investment_max_price_unit      = $this->input->post('investment_max_price_unit');
		$funding_own                    = $this->input->post('funding_own');
		$funding_debt                   = $this->input->post('funding_debt');
		$fund_tot                       = $this->input->post('fund_tot');
		$investment_timeline            = $this->input->post('investment_timeline');
		$business_preferences           = $this->input->post('business_preferences');
		$purpose                        = $this->input->post('purpose');
		


		$userData = array('buy_invest_in'=>$buy_invest_in,'other_buy_invest'=>$other_buy_invest ,'profile_business_buyer'=>$profile_business_buyer,
		'profile_corporate_investor'=>$profile_corporate_investor, 'profile_pe_vc'=>$profile_pe_vc, 'profile_nri_foreign_investor'=>$profile_nri_foreign_investor,
		'profile_business_lender'=>$profile_business_lender, 'profile_business_broker'=>$profile_business_broker, 'bi_acquisition_buyout'=>$bi_acquisition_buyout, 'bi_distributor_cf'=>$bi_distributor_cf,
		'bi_invest_business'=>$bi_invest_business, 'bi_debt_financing'=>$bi_debt_financing, 'bi_jv_partnership'=>$bi_jv_partnership,
		'bi_startup_angel'=>$bi_startup_angel,'bi_preleased_property'=>$bi_preleased_property, 'country'=>$country, 'region'=>$region,'state'=>$state,'city'=>$city,'industry_preference'=>$industry_preference,
		'investment_min_price_currency'=>$investment_min_price_currency,'investment_min'=>$investment_min,'investment_max_price_currency'=>$investment_max_price_currency,'investment_max_price_unit'=>$investment_max_price_unit,'investment_max'=>$investment_max,'funding_own'=>$funding_own,'funding_debt'=>$funding_debt,'total_fund'=>$fund_tot,'investment_timeline'=>$investment_timeline,
		'business_preferences'=>$business_preferences,'purpose'=>$purpose);

		if( strcasecmp( $actType, "NEW" ) == 0 ){
			$userData['form_id'] = $form_id;
			$result = $this->db->insert( TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, $userData );
			log_message('debug', 'Buyer_model: registerSellerBusinessDescription: ['.$this->db->last_query().']');
			if ( !$result && $this->db->error()['code'] == 1062 ){
				return "duplicate";
			}else{
				if ( $this->db->affected_rows() > 0 ){
					return true;
				}else{
					return false;
				}
			}
		}else{
			$this->db->where('form_id', $form_id);
			if( $this->db->update( TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, $userData ) ){
				log_message('debug', 'Buyer_model: registerSellerBusinessDescription: ['.$this->db->last_query().']');
					return true;
			}else{
					return false;
			}
		}
	}

	
	public function buyerPostRequirement( $actType = "NEW", $form_id ){
		$key_requirement                     = $this->input->post('key_requirement');
		//$listing_category                   = $this->input->post('listing_category');
		
		$i=0;
		foreach($this->input->post('listing_category') as $categories){
			if($i==0){	
			log_message('debug', 'Buyer_model: buyerPostRequirement: ' .$categories);
			$listing_category .= $categories;
			}else{
				$listing_category .= ','.$categories;
			}	
			$i++;
		}	
		
		$a=0;
		foreach($this->input->post('state2') as $location){
			if($a==0){	
			log_message('debug', 'Buyer_model: buyerPostRequirement: ' .$location);
			$state2 .= $location;
			}else{
				$state2 .= ','.$location;
			}	
			$a++;
		}
		
		
		$location                            = $state2;
		$req_investment_min_price_currency   =  $this->input->post('req_investment_min_price_currency');
		
		$req_investment_min                  = $this->input->post('req_investment_min');
		$req_investment_min_price_unit       = $this->input->post('req_investment_min_price_unit');
		$req_investment_max_price_currency   = $this->input->post('req_investment_max_price_currency');
		$req_investment_max                  = $this->input->post('req_investment_max');
		$req_investment_max_price_unit       = $this->input->post('req_investment_max_price_unit');
		
		
		/*foreach ($listing_category as $option => $value) {
		$selectedOption .= $value.','; // I am separating Values with a comma (,) so that I can extract data using explode()
		}
		$listing_category1 = $selectedOption;
		*/
		
		
		
		//log_message('debug', 'Buyer_model: buyerPostRequirement: ' .$listing_category);
		
		$userData = array('key_requirement'=>$key_requirement, 'buy_listing_category'=>$listing_category,
		'buy_location'=>$location,'req_investment_min_price_currency'=>$req_investment_min_price_currency, 'req_investment_min'=>$req_investment_min,
		'req_investment_min_price_unit'=>$req_investment_min_price_unit,'req_investment_max_price_currency'=>$req_investment_max_price_currency,'req_investment_max'=>$req_investment_max,'req_investment_max_price_unit'=>$req_investment_max_price_unit);

		if( strcasecmp( $actType, "NEW" ) == 0 ){
			$userData['form_id'] = $form_id;
			$result = $this->db->insert( TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, $userData );
			log_message('debug', 'Buyer_model: buyerPostRequirement: ['.$this->db->last_query().']');
			if ( !$result && $this->db->error()['code'] == 1062 ){
				return "duplicate";
			}else{
				if ( $this->db->affected_rows() > 0 ){
					return true;
				}else{
					return false;
				}
			}
		}else{
			$this->db->where('form_id', $form_id);
			if( $this->db->update( TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, $userData ) ){
				log_message('debug', 'Buyer_model: buyerPostRequirement: ['.$this->db->last_query().']');
					return true;
			}else{
					return false;
			}
		}
	}
	
		//update buyer form 
	public function UpdateBuyerPerFields(){ //part 1
		
		//form id 
		
		$form_id= $this->input->post('frm_id');
		
		//Personal Detail
		$business_type    = $this->input->post('business_type');
		$uname            = $this->input->post('lb_uname');
		$email            = $this->input->post('lb_email');
		$country_code     = $this->input->post('country_code');
		$contact          = $this->input->post('lb_mobile');
		$address          = $this->input->post('lb_address');
		$location         = $this->input->post('lb_location');
		$compname         = $this->input->post('lb_company');
		$designation      = $this->input->post('lb_designation');
		$web              = $this->input->post('lb_web');
		$isOwner          = $this->input->post('lb_owner');
		$isBroker         = $this->input->post('lb_broker');
		$isRepresentative = $this->input->post('lb_representative');
		$aemail           = $this->input->post('lb_aemail');
		$acontact         = $this->input->post('lb_aphone');
		$form_type         = $this->input->post('form_type');

		$who = $isOwner;
		if( isset($isOwner) ){
			$who = $isOwner;
		}else if( isset($isBroker) ){
			$who = $isBroker;
		}else if( isset( $isRepresentative ) ){
			$who = $isRepresentative;
		}
		
		
		
		
		
		$data = array('business_type'=>'buy_a_business', 'form_type'=>$form_type);
		
		
		$this->db->set($data);
		$this->db->where('form_id', $form_id);
		$result = $this->db->update( TBL_PREFIX.TBL_BUSINESS_DETAILS);
		log_message('debug', 'Buyer_model: postrequirement1: ['.$this->db->last_query().']');
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
	
	public function UpdateBuyerBusFields(){ //part 2
		
		//form id 
		
		$form_id= $this->input->post('frm_id');
		
		$buy_invest_in                  = $this->input->post('buy_invest_in');
		$other_buy_invest                  = $this->input->post('other_buy_invest');
		$profile_business_buyer         = $this->input->post('profile_business_buyer');
		$profile_corporate_investor     = $this->input->post('profile_corporate_investor');
		$profile_pe_vc                  = $this->input->post('profile_pe_vc');
		$profile_nri_foreign_investor   = $this->input->post('profile_nri_foreign_investor');
		$profile_business_lender        = $this->input->post('profile_business_lender');
		$profile_business_broker        = $this->input->post('profile_business_broker');
		$bi_acquisition_buyout          = $this->input->post('bi_acquisition_buyout');
		$bi_distributor_cf              = $this->input->post('bi_distributor_cf');
		$bi_invest_business             = $this->input->post('bi_invest_business');
		$bi_debt_financing              = $this->input->post('bi_debt_financing');
		$bi_jv_partnership              = $this->input->post('bi_jv_partnership');
		$bi_startup_angel               = $this->input->post('bi_startup_angel');
		$bi_preleased_property               = $this->input->post('bi_preleased_property');
		$country                        = $this->input->post('country');
	
	
		
		
		$z=0;
		foreach($this->input->post('state') as $location){
			if($z==0){	
			log_message('debug', 'Buyer_model: state selected list: ' .$location);
			$state .= $location;
			}else{
				$state .= ','.$location;
			}	
			$z++;
		}
		
		
		$city                           = $this->input->post('city');
		//$industry_preference            = $this->input->post('industry_preference');
		
		$i=0;
		foreach($this->input->post('industry_preference') as $categories){
			if($i==0){	
			//log_message('debug', 'Buyer_model: buyerPostRequirement: ' .$categories);
			$industry_preference .= $categories;
			}else{
				$industry_preference .= ','.$categories;
			}	
			$i++;
		}
		
		
		$investment_min_price_currency  = $this->input->post('investment_min_price_currency');
		$investment_min                 = $this->input->post('investment_min');
		$investment_min_price_unit      = $this->input->post('investment_min_price_unit');
		$investment_max_price_currency  = $this->input->post('investment_max_price_currency');
		$investment_max                 = $this->input->post('investment_max');
		$investment_max_price_unit      = $this->input->post('investment_max_price_unit');
		$funding_own                    = $this->input->post('funding_own');
		$funding_debt                   = $this->input->post('funding_debt');
		$fund_tot                       = $this->input->post('fund_tot');
		$investment_timeline            = $this->input->post('investment_timeline');
		$business_preferences           = $this->input->post('business_preferences');
		$purpose                        = $this->input->post('purpose');
		


		$userData = array('buy_invest_in'=>$buy_invest_in,'other_buy_invest'=>$other_buy_invest ,'profile_business_buyer'=>$profile_business_buyer,
		'profile_corporate_investor'=>$profile_corporate_investor, 'profile_pe_vc'=>$profile_pe_vc, 'profile_nri_foreign_investor'=>$profile_nri_foreign_investor,
		'profile_business_lender'=>$profile_business_lender, 'profile_business_broker'=>$profile_business_broker, 'bi_acquisition_buyout'=>$bi_acquisition_buyout, 'bi_distributor_cf'=>$bi_distributor_cf,
		'bi_invest_business'=>$bi_invest_business, 'bi_debt_financing'=>$bi_debt_financing, 'bi_jv_partnership'=>$bi_jv_partnership,
		'bi_startup_angel'=>$bi_startup_angel,'bi_preleased_property'=>$bi_preleased_property ,'country'=>$country,'state'=>$state,'city'=>$city,'industry_preference'=>$industry_preference,
		'investment_min_price_currency'=>$investment_min_price_currency,'investment_min'=>$investment_min,'investment_max_price_currency'=>$investment_max_price_currency,'investment_max_price_unit'=>$investment_max_price_unit,'investment_max'=>$investment_max,'funding_own'=>$funding_own,'funding_debt'=>$funding_debt,'total_fund'=>$fund_tot,'investment_timeline'=>$investment_timeline,
		'business_preferences'=>$business_preferences,'purpose'=>$purpose);

		
		$this->db->set($userData);
		$this->db->where('form_id', $form_id);
		$result = $this->db->update( TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS);
		log_message('debug', 'Buyer_model: postrequirement2: ['.$this->db->last_query().']');
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
		
	public function UpdateBuyerKeyFields(){ //part 3
		
		//form id 
		
		$form_id= $this->input->post('frm_id');
		
	
		
		//Post Your Requirement
		$key_requirement                     = $this->input->post('key_requirement');
		
		$i=0;
		foreach($this->input->post('listing_category') as $categories){
			if($i==0){	
			log_message('debug', 'Buyer_model: buyerPostRequirement: ' .$categories);
			$listing_category .= $categories;
			}else{
				$listing_category .= ','.$categories;
			}	
			$i++;
		}	
		
		$location                            = $this->input->post('location');
		$req_investment_min_price_currency   =  $this->input->post('req_investment_min_price_currency');
		
		$req_investment_min                  = $this->input->post('req_investment_min');
		$req_investment_min_price_unit       = $this->input->post('req_investment_min_price_unit');
		$req_investment_max_price_currency   = $this->input->post('req_investment_max_price_currency');
		$req_investment_max                  = $this->input->post('req_investment_max');
		$req_investment_max_price_unit       = $this->input->post('req_investment_max_price_unit');
		
	 // $listing_category=$this->input->post('listing_category');
		
		$data = array('key_requirement'=>$key_requirement, 'buy_listing_category'=>$listing_category,
		'buy_location'=>$location,'req_investment_min_price_currency'=>$req_investment_min_price_currency, 'req_investment_min'=>$req_investment_min,
		'req_investment_min_price_unit'=>$req_investment_min_price_unit,'req_investment_max_price_currency'=>$req_investment_max_price_currency,'req_investment_max'=>$req_investment_max,'req_investment_max_price_unit'=>$req_investment_max_price_unit);

		
		$this->db->set($data);
		$this->db->where('form_id', $form_id);
		$result = $this->db->update( TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS);
		log_message('debug', 'Buyer_model: postrequirement3: ['.$this->db->last_query().']');
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
}
?>
