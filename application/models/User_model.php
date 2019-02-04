<?php
class User_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function validateCustomer(){
		
		
		
		
		
		if($this->input->post('lb_email')!=''){
		
		$userId = $this->input->post('lb_email');
		$passwd = $this->input->post('passwd');		
			
			
		}else{
			
		$userId = $this->input->post('userid');
		$passwd = $this->input->post('password');	
			
		}
		
		
		
		$adminsession= $this->input->post('adminsession');

		if ( !isset($userId) || !isset($passwd) ){
			return false;
		}

		$whereClause = array( 'CUSTOMER_ID'=>$userId, 'PASSWORD'=>$passwd,'is_otp_verified'=>'1' );
		$userQuery   = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $whereClause);
		//log_message('debug', 'User_model: validateCustomer: ['.$this->db->last_query().']');
		
		if ( isset( $userQuery ) && $userQuery->num_rows() > 0 ){
			$row = $userQuery->row();
			$this->session->set_userdata('is_logged_in', true);
			$this->session->set_userdata('userid', $userId);
			$this->session->set_userdata('username', $row->name);
			
			if($adminsession!=''){
				
				$this->session->set_userdata('adminsession', $adminsession);
				
			}
			return true;
		}
		else{
			
		 $this->session->set_userdata('is_logged_in', false);
			return false;
		}
		
	}

	public function validateNewCustomer(){
		
		$userId = $this->input->post('lb_email');
		

		$whereClause = array( 'CUSTOMER_ID'=>$userId);
		$userQuery   = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $whereClause);
		//log_message('debug', 'User_model: validateCustomer: ['.$this->db->last_query().']');
		if ( isset( $userQuery ) && $userQuery->num_rows() > 0 ){
			$row = $userQuery->row();
			$this->session->set_userdata('registeruserid', $userId);
			$this->session->set_userdata('is_logged_in', false);
			
			return true;
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

	

	public function getBasicProfile(){
		$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'));
		$userDataQuery = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $whereClause);
		log_message('debug', 'User_model: getBasicProfile: ['.$this->db->last_query().']');
		if( isset( $userDataQuery ) && $userDataQuery->num_rows() > 0 ){
			$row = $userDataQuery->row();
                        $data = array(
                                        'customer_id' => $row->customer_id,
                                        'password' => $row->password,
                                        'name' => $row->name,
					'company_name' => $row->company_name,
					'address' => $row->address,
					
					'city' => $row->location,
					'postal_code' => $row->postal_code,
					'contact_number' => $row->contact_number,
					'alternate_email' => $row->alternate_email,
					'alternate_contact' => $row->alternate_contact,
					'designation' => $row->designation,
					'who' => $row->who,
					'website' => $row->website,
					'register_date' => $row->register_date,
					'last_update_date' => $row->last_update_date,
					'expiry_date' => $row->expiry_date,
					'user_image' => $row->user_image
                                     );
			return $data;
		}else{
			return false;
		}

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

	public function currentPackage( $formId = NULL ){
		log_message('debug', 'Form id ['.$formId.']');
		$userPackage = null;
		$whereClause = null;
		$i = 0;
		if( $formId == NULL ){
			//$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'),'form_id'=>$formId);
			$whereClause = array('form_id'=>$formId);
		}else{
			//$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'), 'form_id'=>$formId);
			$whereClause = array('form_id'=>$formId);
		}
		$packQuery = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $whereClause);
		log_message('debug', 'User_model: currentPackage:  ['.$this->db->last_query().']');
		if( isset( $packQuery ) && $packQuery->num_rows() > 0 ){
			foreach($packQuery->result() as $row){
				$userPackage[$i]['package_id'] = $row->package_id;
				$userPackage[$i]['form_id']    = $row->form_id;
				$i++;
			}
			return $userPackage;
		}else{
			return NULL;
		}
	}


	public function currentAdditionalServices( $formId = NULL ){
		log_message('debug', 'Form id ['.$formId.']');
		$additionalServices = null;
		$whereClause = null;
		$i = 0;
		if( $formId == NULL ){
			//$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'),'form_id'=>$formId);
			$whereClause = array('form_id'=>$formId);
		}else{
			//$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'), 'form_id'=>$formId);
			$whereClause = array('form_id'=>$formId);
		}
		$additionalSerQuery = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_ADDITIONAL_SERVICES, $whereClause);
		log_message('debug', 'User_model: currentAdditionalServices: ['.$this->db->last_query().']');
		if( isset( $additionalSerQuery ) && $additionalSerQuery->num_rows() > 0 ){
			foreach($additionalSerQuery->result() as $row){
				$additionalServices[$i]['feature_listing'] = $row->feature_listing;
				$additionalServices[$i]['memorandum']      = $row->memorandum;
				$additionalServices[$i]['plan']            = $row->plan;
				$additionalServices[$i]['valuation']       = $row->valuation;
				$additionalServices[$i]['mandate']         = $row->mandate;
				$additionalServices[$i]['advisory']        = $row->advisory;
				$additionalServices[$i]['pre_sales']       = $row->pre_sales;

				$additionalServices[$i]['form_id']         = $row->form_id;
				$i++;
			}
			return $additionalServices;
		}else{
			return NULL;
		}
	}

	public function registerUser(){
		$email    = $this->input->post('lb_email');
		$passwd   = $this->input->post('passwd');	
		$uname    = $this->input->post('lb_uname');
		$country_code     = $this->input->post('country_code');
		$contact          = $this->input->post('lb_mobile');
		$compname = $this->input->post('lb_company');
		$address  = $this->input->post('lb_address');
		$location         = $this->input->post('lb_location');
		$designation      = $this->input->post('lb_designation');
		$isOwner          = $this->input->post('lb_owner');
		$isBroker         = $this->input->post('lb_broker');
		$isRepresentative = $this->input->post('lb_representative');
		$aemail   = $this->input->post('lb_aemail');
		$web      = $this->input->post('lb_web');
		$acontact         = $this->input->post('lb_aphone');
		
		$who = $isOwner;
		if( isset($isOwner) ){
			$who = $isOwner;
		}else if( isset($isBroker) ){
			$who = $isBroker;
		}else if( isset( $isRepresentative ) ){
			$who = $isRepresentative;
		}
	
		//$userData = array('business_type'=>$business_type,'name'=>$uname, 'email'=>$email, 'country_code'=>$country_code,'contact'=>$contact, 'address'=>$address, 'location'=>$location, 'company_name'=>$compname, 'designation'=>$designation, 'website'=>$web, 'who'=>$who, 'alternative_email'=>$aemail, 'alternative_contact'=>$acontact);
	
		$userData = array('customer_id'=>$email, 'name'=>$uname, 'country_code'=>$country_code,'contact_number'=>$contact, 'address'=>$address, 'location'=>$location, 'website'=>$web, 'password'=>$passwd,'alternate_email'=>$aemail,'who'=>$who,'alternate_contact'=>$acontact,'register_date'=>date('Y-m-d h:i:s'));

		$result = $this->db->insert(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $userData);
		log_message('debug', 'User_model: registerUser: ['.$this->db->last_query().']');
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

	public function editUserProfile($imagedata){
		//$email    = $this->input->post('email');
		$passwd   = $this->input->post('passwd');
		$uname    = $this->input->post('name');
		$compname = $this->input->post('compname');
		$address  = $this->input->post('address');
		$city     = $this->input->post('city');
		$pcode    = $this->input->post('pcode');
		$contact  = $this->input->post('contact');
		$aemail   = $this->input->post('aemail');
		$web      = $this->input->post('web');
		$designation      = $this->input->post('designation');
		$isOwner          = $this->input->post('lb_owner');
		$isBroker         = $this->input->post('lb_broker');
		$isRepresentative = $this->input->post('lb_representative');
		$alternate_contact = $this->input->post('alternate_contact');
		
		$who = $isOwner;
		if( isset($isOwner) ){
			$who = $isOwner;
		}else if( isset($isBroker) ){
			$who = $isBroker;
		}else if( isset( $isRepresentative ) ){
			$who = $isRepresentative;
		}
	
	
	
		
		
		//die;
		$image     = $imagedata;
		
		if(is_array($image)){
		
		foreach($image as $uploadedFile){
			
			$userData = array('name'=>$uname,'contact_number'=>$contact, 'address'=>$address, 'location'=>$city, 'company_name'=>$compname, 'designation'=>$designation, 'website'=>$web, 'who'=>$who,'password'=>$passwd,'alternate_email'=>$aemail,'alternate_contact'=>$alternate_contact,'user_image'=>$uploadedFile['path']);
		
		$this->db->where('customer_id',$this->session->userdata('userid'));
		//$this->db->update(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $userData);
		if($this->db->update(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $userData)){
			log_message('debug', 'User_model: registerUser: ['.$this->db->last_query().']');
			return "true";
		}else{
				return "false";
		}
		}
	}else{
		
		//print_r($imagedata);
		
		//die;
		
		$passwd   = $this->input->post('passwd');
		$uname    = $this->input->post('name');
		$compname = $this->input->post('compname');
		$address  = $this->input->post('address');
		$city     = $this->input->post('city');
		$pcode    = $this->input->post('pcode');
		$contact  = $this->input->post('contact');
		$aemail   = $this->input->post('aemail');
		$web      = $this->input->post('web');
		$designation      = $this->input->post('designation');
		$isOwner          = $this->input->post('lb_owner');
		$isBroker         = $this->input->post('lb_broker');
		$isRepresentative = $this->input->post('lb_representative');
		$alternate_contact = $this->input->post('alternate_contact');
		
		$who = $isOwner;
		if( isset($isOwner) ){
			$who = $isOwner;
		}else if( isset($isBroker) ){
			$who = $isBroker;
		}else if( isset( $isRepresentative ) ){
			$who = $isRepresentative;
		}
	
		$userData2 = array('name'=>$uname,'contact_number'=>$contact, 'address'=>$address, 'location'=>$city, 'company_name'=>$compname, 'designation'=>$designation, 'website'=>$web, 'who'=>$who,'password'=>$passwd,'alternate_email'=>$aemail,'alternate_contact'=>$alternate_contact,'user_image'=>$imagedata);
		
		$this->db->where('customer_id',$this->session->userdata('userid'));
		//$this->db->update(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $userData);
		if($this->db->update(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $userData2)){
			log_message('debug', 'User_model: registerUser: ['.$this->db->last_query().']');
			return "true";
		}else{
				return "false";
		}	
			
		}
	
	}
	public function registerBusinessUser( $actType="NEW" ){
		
		
		//select customer details
			$this->db->select('*');
			$this->db->where(array('customer_id'=>$this->session->userdata('userid')));
			$q = $this->db->get(TBL_PREFIX.TBL_CUSTOMER_DETAILS);
			$data = $q->result_array();
			
			
			
			$name     = $data[0]['name'];
			$contact_number     = $data[0]['contact_number'];
			$address     = $data[0]['address'];
			$location     = $data[0]['location'];
			$company_name     = $data[0]['company_name'];
			
			$other_state     = $this->input->post('other_state');
			
		
		if($this->input->post('other_city')!=''){
		
	    $other_city     = $this->input->post('other_city');
		
		
		}
		if($this->input->post('other_city_2')!=''){
			
		$other_city     = $this->input->post('other_city_2');

		
		}
		
		if($this->input->post('listing_category_other')!=''){
		
	    $listing_category_other     = $this->input->post('listing_category_other');
		
		
		}
		if($this->input->post('listing_category_other_2')!=''){
			
		$listing_category_other     = $this->input->post('listing_category_other_2');
		

		
		}
		
		$location_region     = $this->input->post('region');
		
		$userData = array('business_type'=>'sell_a_business','name'=>$name,'email'=>$this->session->userdata('userid'),'contact'=>$contact_number,'address'=>$address,'location'=>$location,'company_name'=>$company_name,'location_region'=>$location_region,'other_state'=>$other_state,'other_city'=>$other_city,'business_add_date'=>date('Y-m-d h:i:s'));
		
		
		
		if( strcasecmp( $actType, "NEW" ) == 0 ){
			$userData['customer_id'] = $this->session->userdata('userid');
			
			$result = $this->db->insert(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userData);
			log_message('debug', 'User_model: registerBusinessUser: ['.$this->db->last_query().']');
			if ( !$result && $this->db->error()['code'] == 1062 ){
				return array("duplicate", null);
			}else{
				$lastInsertedId = $this->db->insert_id();
				if ( $this->db->affected_rows() > 0 ){
					$this->session->set_userdata('last_form_id', $lastInsertedId);
					
					$userData = array('form_id'=>$this->session->userdata('last_form_id'));
					
					$userPackage = array('customer_id'=>$this->session->userdata('userid'),'form_id'=>$this->session->userdata('last_form_id'),'date'=>date('Y-m-d h:i:s'),'package_id'=>'1');
					
					$insPackage = $this->db->insert(TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $userPackage);
					
					$result = $this->db->insert(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, $userData);
					log_message('debug', 'User_model: registerBusinessUser: ['.$this->db->last_query().']');

					return array(true, $this->session->userdata('last_form_id'));
				}else{
					return array(false, null);
				}
			}
		}else{
			$lastInsertedId = $this->input->post('frm_id');
			//$this->db->where('customer_id', $this->session->userdata('userid'));
			$this->db->where('form_id',$lastInsertedId);
			
			
			//print_r($userData);
			
			
			if($this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userData)){
				log_message('debug', 'User_model: registerBusinessUser7777777: ['.$this->db->last_query().']');
				$this->session->set_userdata('last_form_id', $lastInsertedId);
				
			
				return array(true, $lastInsertedId);
			}else{
				return array(false, $lastInsertedId);
			}
		}

	}

	public function getBusinessUserProfile( $businessType ){
		$whereClause = null;
		$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'));
		$this->db->select('*');
		if( strcasecmp( $businessType, 'sell_business' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			//$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}else if( strcasecmp( $businessType, 'join_ventures' ) == 0 ){
			$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
			$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		}	
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.CUSTOMER_ID', $this->session->userdata('userid'));
		
		$this->db->where('CUSTOMER_ID',$this->session->userdata('userid'));
		$this->db->where('BUSINESS_TYPE','sell_a_business');
		$this->db->order_by('form_id',"DESC");
		$this->db->limit(1);
		$userBusinessData = $this->db->get();
		log_message('debug', 'User_model: getBusinessUserProfile: ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			$dataToReturn = $userBusinessData->result_array();
			$this->session->set_userdata('last_form_id', $dataToReturn[0]['form_id']);
			return $dataToReturn;
		}

	}

	public function registerBusinessBasicInformation(){
		$keyHeadline           = $this->input->post('keyHeadline');
		$businessDesc          = $this->input->post('bus_desc');
		$businessCountry       = $this->input->post('country');
		
		if($businessCountry=='71'){
		
		$businessRegion        = $this->input->post('region');
		}else{
			
		$businessRegion='';	
		}
		$businessState         = $this->input->post('state');
		$businessCity          = $this->input->post('city');
		$businessCategory      = $this->input->post('category');
		$businessSubCategory   = $this->input->post('subcategory');
		$legalEntity           = $this->input->post('legal');
		$establishmentYear     = $this->input->post('eyear');
		$currentBusinessStatus = $this->input->post('bstatus');
		$bstatus_other = $this->input->post('bstatus_other');
		$other_state     = $this->input->post('other_state');
		$listing_category_other     = $this->input->post('listing_category_other');
		$listing_category     = $this->input->post('listing_category');
		
		if($this->input->post('other_city')!=''){
		
	    $other_city     = $this->input->post('other_city');
		
		
		}
		if($this->input->post('other_city_2')!=''){
			
		$other_city     = $this->input->post('other_city_2');

		
		}
		if($this->input->post('listing_sub_category_other')!=''){
		
	    $listing_sub_category_other     = $this->input->post('listing_sub_category_other');
		
		
		}
		if($this->input->post('listing_sub_category_other_2')!=''){
			
		$listing_sub_category_other     = $this->input->post('listing_sub_category_other_2');

		
		}
		//print_r($listing_sub_category_other);
		
		//die;

		$userData = array('key_headline'=>$keyHeadline,'description'=>$businessDesc,'location_country'=>$businessCountry,'location_region'=>$businessRegion,'location_state'=>$businessState,'location_city'=>$businessCity,'listing_category'=>$businessCategory,'listing_sub_category'=>$businessSubCategory,'listing_category_other'=>$listing_category_other,'listing_sub_category_other'=>$listing_sub_category_other,'legal_entity'=>$legalEntity,'yoe'=>$establishmentYear,'current_status_of_business'=>$currentBusinessStatus,'bstatus_other'=>$bstatus_other,'other_state'=>$other_state,'other_city'=>$other_city);

		$result = $this->db->update( TBL_PREFIX.TBL_BUSINESS_DETAILS, $userData, array( 'customer_id' => $this->session->userdata('userid'),'form_id' => $this->session->userdata('last_form_id') ) );
		log_message('debug', 'User_model: registerBusinessBasicInformation2211: ['.$this->db->last_query().']');
		if($result!=''){
				return true;
			}else{
				return false;
			}
		
	}

	public function registerSellerBusinessDescription( $actType = "NEW" ){
		$noe_permanent         = $this->input->post('noemp_par');
		$noe_contractual       = $this->input->post('noemp_con');
		$noe_total             = $this->input->post('noemp_tot');
		$isBusinessRelocatable = $this->input->post('bus_reloc');
		$businessListedBy      = $this->input->post('listed_by');
		$ask_price_currency       = $this->input->post('ask_price_currency');
		$ask_price             = $this->input->post('ask_price');
		$ask_price_unit             = $this->input->post('ask_price_unit');
		$priceRangeType        = $this->input->post('price_range_type');
		$priceRange            = $this->input->post('price_range');
		$latest_revenu_currency     = $this->input->post('latest_revenu_currency');
		$latest_revenu         = $this->input->post('latest_revenu');
		$latest_revenu_unit         = $this->input->post('latest_revenu_unit');
		$productServiceDesc    = $this->input->post('ps_desc');
		$competitionMarketDesc = $this->input->post('market');
		$growthPotential       = $this->input->post('growth');
		$reasonForSale         = $this->input->post('sale_reason');


		$userData = array('no_of_permanent_employee'=>$noe_permanent, 'no_of_contractual_emplyee'=>$noe_contractual, 'total_employee'=>$noe_total,
		'is_re_locatable'=>$isBusinessRelocatable, 'business_listed_by'=>$businessListedBy, 'ask_price_currency'=>$ask_price_currency, 'ask_price'=>$ask_price,
		'ask_price_unit'=>$ask_price_unit,'price_range_type'=>$priceRangeType, 'price_range'=>$priceRange, 
		'latest_revenu_currency'=>$latest_revenu_currency, 'latest_revenu'=>$latest_revenu,'latest_revenu_unit'=>$latest_revenu_unit, 'product_service_desc'=>$productServiceDesc, 'competition_market_desc'=>$competitionMarketDesc, 'growth_potential'=>$growthPotential, 'reason_for_sale'=>$reasonForSale,'added_date'=>date('Y-m-d h:i:s'));

		if( strcasecmp( $actType, "NEW" ) == 0 ){
			$userData['form_id'] = $this->session->userdata('last_form_id');
			$result = $this->db->insert( TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, $userData );
			log_message('debug', 'User_model: registerSellerBusinessDescription: ['.$this->db->last_query().']');
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
			$this->db->where('form_id', $this->input->post('frm_id'));
			if( $this->db->update( TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, $userData ) ){
				log_message('debug', 'User_model: registerSellerBusinessDescription: ['.$this->db->last_query().']');
					return true;
			}else{
					return false;
			}
		}
	}

	public function getSellerBusinessDescription(){
		$whereClause = null;
		$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'));
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.CUSTOMER_ID', $this->session->userdata('userid'));
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.FORM_ID', $this->session->userdata('last_form_id'));
		$userSellBusinessData = $this->db->get();
		log_message('debug', 'User_model: getSellerBusinessDescription: ['.$this->db->last_query().']');
		
		if( !$userSellBusinessData ){
			return null;
		}else{
			return $userSellBusinessData->result_array();
		}
	}

	public function getSellerAdditionalDetails(){
		$whereClause = null;
		$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'));
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_ADDITIONAL_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_ADDITIONAL_DETAILS.'.form_id');
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.CUSTOMER_ID', $this->session->userdata('userid'));
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.FORM_ID', $this->session->userdata('last_form_id'));
		$userSellBusinessData = $this->db->get();
		log_message('debug', 'User_model: getSellerAdditionalDetails: ['.$this->db->last_query().']');
		
		if( !$userSellBusinessData ){
			return null;
		}else{
			return $userSellBusinessData->result_array();
		}
	}


	public function getSellerAdditionalFinancialDetails(){
		$whereClause = null;
		$whereClause = array('CUSTOMER_ID'=>$this->session->userdata('userid'));
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS.'.form_id');
		//$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.CUSTOMER_ID', $this->session->userdata('userid'));
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.FORM_ID', $this->session->userdata('last_form_id'));
		$userSellBusinessData = $this->db->get();
		log_message('debug', 'User_model: getSellerAdditionalFinancialDetails: ['.$this->db->last_query().']');
		
		if( !$userSellBusinessData ){
			return null;
		}else{
			return $userSellBusinessData->result_array();
		}
	}



	public function registerSellerAdditionalInformation(){
		
		
		
		
		//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo');
		$response = "true";
		$dataArr = array();
		$count = $this->input->post('count');
		for( $i=0; $i < $count; $i++){
			$val = $i+1;
			//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::In Count loop'.$val);
			$dataArr[$i]['property_id']         = $this->input->post('property_id_'.$val); 

			$dataArr[$i]['property_type']         = $this->input->post('property_type');
			//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::In Count loop'.$this->input->post('property_type_'.$val));
			
			
			$dataArr[$i]['ask_price_currency_real']      = $this->input->post('ask_price_currency_real_'.$val);
			$dataArr[$i]['ask_price_real']      = $this->input->post('ask_price_real_'.$val);
			$dataArr[$i]['ask_price_unit_real']      = $this->input->post('ask_price_unit_real_'.$val);
						
			$dataArr[$i]['real_state_value_unit']      = $this->input->post('real_state_value_unit_'.$val);
			$dataArr[$i]['real_state_value']      = $this->input->post('real_state_value_'.$val);
			//$dataArr[$i]['real_state_value_type']      = $this->input->post('real_state_value_type_'.$val);
			$dataArr[$i]['facility_desc']         = $this->input->post('facility_desc_'.$val);
			$dataArr[$i]['industrial_commercial'] = $this->input->post('industrial_commercial_'.$val);
			$dataArr[$i]['total_land_area_type']  = $this->input->post('total_land_area_type_'.$val);
			$dataArr[$i]['total_land_area']       = $this->input->post('total_land_area_'.$val);
			$dataArr[$i]['built_up_area_type']    = $this->input->post('built_up_area_type_'.$val);
			$dataArr[$i]['built_up_area']         = $this->input->post('built_up_area_'.$val);
			$dataArr[$i]['open_area_type']        = $this->input->post('open_area_type_'.$val);
			$dataArr[$i]['open_area']             = $this->input->post('open_area_'.$val);
			$dataArr[$i]['other_area']            = $this->input->post('other_area_'.$val);
			$dataArr[$i]['carpet_area']            = $this->input->post('carpet_area_'.$val);
			$dataArr[$i]['carpet_area_type']       = $this->input->post('carpet_area_type_'.$val);
			/*dataArr[$i]['fin_year']              = $this->input->post('fin_year');
			$fin_revenue_turnover  = $this->input->post('fin_revenue_turnover');
			$fin_EDITDA            = $this->input->post('fin_EDITDA');
			$fin_PAT               = $this->input->post('fin_PAT');
			$fin_margin            = $this->input->post('fin_margin');
			$fin_yearly            = $this->input->post('fin_yearly');*/
			
			
			//print_r($_POST);
		
		
		//die;
		}

		$val = 0;
		$dataArrFin = array();
		$count_fin = $this->input->post('count-fin');
		for( $ii=0; $ii < $count_fin; $ii++){
			$val = $ii+1;
			//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::In Count loop'.$val);
			$dataArrFin[$ii]['finance_id']           = $this->input->post('finance_id_'.$val);
			$dataArrFin[$ii]['fin_year']             = $this->input->post('fin_year_'.$val);
			$dataArrFin[$ii]['fin_revenue_turnover'] = $this->input->post('fin_revenue_turnover_'.$val);
			$dataArrFin[$ii]['fin_EDITDA']           = $this->input->post('fin_EDITDA_'.$val);
			$dataArrFin[$ii]['fin_PAT']              = $this->input->post('fin_PAT_'.$val);
			$dataArrFin[$ii]['fin_margin']           = $this->input->post('fin_margin_'.$val);
			//$dataArrFin[$ii]['fin_yearly']           = $this->input->post('fin_yearly_'.$val);



		}




		//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo:::: after loop');
		for($j=0; $j < $count; $j++){
			//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo::::: in loop again');
			$val = $j+1;
			//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::In Count loop'.$val);
			$dataArr[$j]['property_id']         = $this->input->post('property_id_'.$val);

			$dataArr[$j]['property_type']         = $this->input->post('property_type');
			//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::In Count loop'.print_r($this->input->post()));
			
			
			$dataArr[$j]['ask_price_currency_real']      = $this->input->post('ask_price_currency_real_1');
			$dataArr[$j]['ask_price_real']      = $this->input->post('ask_price_real_1');
			$dataArr[$j]['ask_price_unit_real']      = $this->input->post('ask_price_unit_real_1');
						
		
		
			$dataArr[$j]['facility_desc']         = $this->input->post('facility_desc_'.$val);
			$dataArr[$j]['industrial_commercial'] = $this->input->post('industrial_commercial_'.$val);
			$dataArr[$j]['total_land_area_type']  = $this->input->post('total_land_area_type_'.$val);
			$dataArr[$j]['total_land_area']       = $this->input->post('total_land_area_'.$val);
			$dataArr[$j]['built_up_area_type']    = $this->input->post('built_up_area_type_'.$val);
			$dataArr[$j]['built_up_area']         = $this->input->post('built_up_area_'.$val);
			$dataArr[$j]['open_area_type']        = $this->input->post('open_area_type_'.$val);
			$dataArr[$j]['open_area']             = $this->input->post('open_area_'.$val);
			$dataArr[$j]['other_area']            = $this->input->post('other_area_'.$val);
			$dataArr[$j]['carpet_area']           = $this->input->post('carpet_area_'.$val);
			$dataArr[$j]['carpet_area_type']      = $this->input->post('carpet_area_type_'.$val);
			
			if(($dataArr[$j]['property_id']==NULL)){
				//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo:::::: property not set');
				$userData = array('form_id'=>$this->session->userdata('last_form_id'),'property_type'=>$dataArr[$j]['property_type'],'ask_price_currency_real'=>$dataArr[$j]['ask_price_currency_real'],'ask_price_real'=>$dataArr[$j]['ask_price_real'],'ask_price_unit_real'=>$dataArr[$j]['ask_price_unit_real'],'facility_desc'=>$dataArr[$j]['facility_desc'], 'industrial_commercial'=>$dataArr[$j]['industrial_commercial'], 'total_land_area_type'=>$dataArr[$j]['total_land_area_type'], 'total_land_area'=>$dataArr[$j]['total_land_area'], 'built_up_area_type'=>$dataArr[$j]['built_up_area_type'], 'built_up_area'=>$dataArr[$j]['built_up_area'], 'open_area_type'=>$dataArr[$j]['open_area_type'], 'open_area'=>$dataArr[$j]['open_area'], 'other_area'=>$dataArr[$j]['other_area'], 'carpet_area'=>$dataArr[$j]['carpet_area'], 'carpet_area_type'=>$dataArr[$j]['carpet_area_type'],'added_date'=>date('Y-m-d h:i:s'));

				//log_message('debug', 'User_model: registerSellerAdditionalInformation for update data: ['.print_r($userData).']');
				
				
				$result = $this->db->insert( TBL_PREFIX.TBL_ADDITIONAL_DETAILS, $userData );
				log_message('debug', 'User_model: registerSellerAdditionalInformation1999999: ['.$this->db->last_query().']');
				
				//print_r($this->db->last_query());
				
				//die;
				
				if ( !$result && $this->db->error()['code'] == 1062 ){
					$response = "false";
					//log_message('debug', 'User_model: registerSellerAdditionalInformation: [FALSE:::: Duplicate Data:]');
				}else{
					if ( $this->db->affected_rows() > 0 ){
						$response = "true";
						//log_message('debug', 'User_model: registerSellerAdditionalInformation: [TRUE:::: Data Insertd]');
					}else{
						$response = "false";
						//log_message('debug', 'User_model: registerSellerAdditionalInformation: [FALSE:::: Data not Inserted]');
					}
				}

			}else{
				//log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo::::: In else');
				$userData = array('property_type'=>$dataArr[$j]['property_type'],'ask_price_currency_real'=>$dataArr[$j]['ask_price_currency_real'],'ask_price_real'=>$dataArr[$j]['ask_price_real'],'ask_price_unit_real'=>$dataArr[$j]['ask_price_unit_real'],'real_state_value_unit'=>$dataArr[$j]['real_state_value_unit'],'real_state_value'=>$dataArr[$j]['real_state_value'], 'facility_desc'=>$dataArr[$j]['facility_desc'], 'industrial_commercial'=>$dataArr[$j]['industrial_commercial'], 'total_land_area_type'=>$dataArr[$j]['total_land_area_type'], 'total_land_area'=>$dataArr[$j]['total_land_area'], 'built_up_area_type'=>$dataArr[$j]['built_up_area_type'], 'built_up_area'=>$dataArr[$j]['built_up_area'], 'open_area_type'=>$dataArr[$j]['open_area_type'], 'open_area'=>$dataArr[$j]['open_area'], 'other_area'=>$dataArr[$j]['other_area'], 'carpet_area'=>$dataArr[$j]['carpet_area'], 'carpet_area_type'=>$dataArr[$j]['carpet_area_type']);
				
					
				$result = $this->db->update( TBL_PREFIX.TBL_ADDITIONAL_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id'),'id'=>$dataArr[$j]['property_id'] ) );
				log_message('debug', 'User_model: registerSellerAdditionalInformation for update data: ['.$this->db->last_query().']');

				
					if($result!=''){
						$response = "true";
					//	log_message('debug', 'User_model: registerSellerAdditionalInformation: [TRUE:::: Data Updated]');
					}else{
						$response = "false";
						//log_message('debug', 'User_model: registerSellerAdditionalInformation: [TRUE:::: Data Not Updated]');
					}
				

			}	
		}

		
		$response = "true";

		//log_message('debug','In registerSellerAdditionalFinancialInformation:::::::::::::::::::::::Yahoo:::: after loop');
		for($j=0; $j < $count_fin; $j++){
			log_message('debug','In registerSellerAdditionalFinancialInformation:::::::::::::::::::::::Yahoo::::: in loop again');
			if(($dataArrFin[$j]['finance_id']==NULL)){
				log_message('debug','In registerSellerAdditionalFinancialInformation:::::::::::::::::::::::Yahoo:::::: finance not set');
				$userData = array('form_id'=>$this->session->userdata('last_form_id'),'fin_year'=>$dataArrFin[$j]['fin_year'],'fin_revenue_turnover'=>$dataArrFin[$j]['fin_revenue_turnover'],'fin_EDITDA'=>$dataArrFin[$j]['fin_EDITDA'], 'fin_PAT'=>$dataArrFin[$j]['fin_PAT'], 'fin_margin'=>$dataArrFin[$j]['fin_margin'],'added_date'=>date('Y-m-d h:i:s'));


				
				$result = $this->db->insert( TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS, $userData );
				log_message('debug', 'User_model: registerSellerAdditionalFinancialInformation2: ['.$this->db->last_query().']');
				
				if ( !$result && $this->db->error()['code'] == 1062 ){
					$response = "false";
					log_message('debug', 'User_model: registerSellerAdditionalFinancialInformation: [FALSE:::: Duplicate Data:]');
				}else{
					if ( $this->db->affected_rows() > 0 ){
						$response = "true";
						log_message('debug', 'User_model: registerSellerAdditionalFinancialInformation: [TRUE:::: Data Insertd]');
					}else{
						$response = "false";
						log_message('debug', 'User_model: registerSellerAdditionalFinancialInformation: [FALSE:::: Data not Inserted]');
					}
				}

			}else{
				log_message('debug','In registerSellerAdditionalFinancialInformation:::::::::::::::::::::::Yahoo::::: In else');
				$userData = array('form_id'=>$this->session->userdata('last_form_id'),'fin_year'=>$dataArrFin[$j]['fin_year'],'fin_revenue_turnover'=>$dataArrFin[$j]['fin_revenue_turnover'],'fin_EDITDA'=>$dataArrFin[$j]['fin_EDITDA'], 'fin_PAT'=>$dataArrFin[$j]['fin_PAT'], 'fin_margin'=>$dataArrFin[$j]['fin_margin']);
				
					
				$result = $this->db->update( TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id'),'id'=>$dataArrFin[$j]['finance_id'] ) );
				log_message('debug', 'User_model: registerSellerAdditionalFinancialInformation: ['.$this->db->last_query().']');

				
					if($result!=''){
						$response = "true";
						log_message('debug', 'User_model: registerSellerAdditionalFinancialInformation: [TRUE:::: Data Updated]');
					}else{
						$response = "false";
						log_message('debug', 'User_model: registerSellerAdditionalFinancialInformation: [TRUE:::: Data Not Updated]');
					}
				

			}	
		}




		if($response=="true"){
			return true;
		}else{
			return false;
		}
		
	}

	public function saveAllDetails( $uploadedFileNames ){
		
		//print_r($uploadedFileNames);
		
		//die;
		
		$i = 0;
		$form_id= $this->input->post('frm_id');
		foreach($uploadedFileNames as $uploadedFile){   

		
		
			//log_message('debug', 'uploadedFile 666666666666666 ['.print_r($uploadedFile['doc_type'], true).']');
			
			$userData = array('form_id'=>$form_id, 'customer_id'=>$this->session->userdata('userid'), 'document_type'=> $uploadedFile['doc_type'],'document_name'=>$uploadedFile['doc_type'], 'path'=>$uploadedFile['path']);
			$result   = $this->db->insert( TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, $userData );
			log_message('debug', 'User_model: saveAllDetails: ['.$this->db->last_query().']');
			if( $result ){
				if( $this->db->affected_rows() > 0 ){
					$i++;
				}
			}
			$userData = null;
		}
		if( $i == count($uploadedFileNames) ){
			return true;
		}else{
			return false;
		}
		
	}

	public function saveAllDetailsAdmin( $uploadedFileNames ){
		log_message('debug', 'uploadedFile ['.print_r($uploadedFile, true).']');
		$i = 0;
		$form_id= $this->input->post('frm_id');
		$customer_id = $this->input->post('customer_id');
		foreach($uploadedFileNames as $uploadedFile){
			//log_message('debug', 'uploadedFile ['.print_r($uploadedFile, true).']');
			
			$userData = array('form_id'=>$form_id, 'customer_id'=>$customer_id, 'document_type'=> $uploadedFile['doc_type'],'document_name'=> $uploadedFile['doc_type'], 'path'=>$uploadedFile['path']);
			$result   = $this->db->insert( TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, $userData );
			log_message('debug', 'User_model: saveAllDetails Images: ['.$this->db->last_query().']');
			if( $result ){
				if( $this->db->affected_rows() > 0 ){
					$i++;
				}
			}
			$userData = null;
		}
		if( $i == count($uploadedFileNames) ){
			return true;
		}else{
			return false;
		}
	}


	public function getBusinessMedia($form_id){
		//$mediaQuery = $this->db->get_where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, array('customer_id'=>$this->session->userdata('userid'), 'form_id'=>$form_id));
		
		$this->db->select('*');
		$mediaQuery = $this->db->get_where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, array('form_id'=>$form_id));
		log_message('debug', 'User_model: getBusinessMedia: ['.$this->db->last_query().']');
		if( isset( $mediaQuery ) && $mediaQuery->num_rows() > 0 ){
			return $mediaQuery->result_array();
		}else{
			return NULL;
		}
	}

	public function registerSellerPackage(){
		$selectedPackage = $this->input->post('spackage');
		$form_id         = $this->input->post('form_id');
		log_message('debug', 'In register Seller package and formid is ['.$form_id.'], selected package is ['.$selectedPackage.']');
		$userData = array('customer_id'=>$this->session->userdata('userid'), 'form_id'=>$form_id, 'package_id'=>$selectedPackage,'date'=>date('Y-m-d h:i:s')  );
		$whereClause = array( 'form_id'=>$form_id, 'customer_id' => $this->session->userdata('userid') );
		//$whereClause = array( 'form_id'=>$form_id );
		
		$packageDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $whereClause);
		log_message('debug', 'User_model: registerSellerPackage: ['.$this->db->last_query().']');


		if($packageDetails){
			log_message('debug', ' -------------Package found---------- ');
			$result = $this->db->update( TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $userData, $whereClause );
			if($result){
			return 'true';
		}else{
			return 'false';
		}
		}else{
			log_message('debug', ' -------------Package not found---------- ');
			$result = $this->db->insert( TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $userData );
			if($result){
			return 'true';
		}else{
			return 'false';
		}
		}

		log_message('debug', 'Last query to insert-update customer package ['.$this->db->last_query().']');
		log_message('debug', 'Last query to insert-update customer package and result is: ['.$result.']');
		
	}


public function registerSellerPackageAdmin(){
		$selectedPackage = $this->input->post('package_id');
		$form_id         = $this->input->post('formId');
		$customer_id     = $this->input->post('customer_id');
		log_message('debug', 'In register Seller package and formid is ['.$form_id.'], selected package is ['.$selectedPackage.']');
		$userData = array('customer_id'=>$customer_id, 'form_id'=>$form_id, 'package_id'=>$selectedPackage );
		$whereClause = array( 'form_id'=>$form_id, 'customer_id' => $customer_id );
		//$whereClause = array( 'form_id'=>$form_id );
		
		$packageDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $whereClause);
		log_message('debug', 'User_model: registerSellerPackage: ['.$this->db->last_query().']');


		if( isset( $packageDetails ) && $packageDetails->num_rows() > 0 ){
			log_message('debug', ' -------------Package found---------- ');
			$result = $this->db->update( TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $userData, $whereClause );
		}else{
			log_message('debug', ' -------------Package not found---------- ');
			$result = $this->db->insert( TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $userData );
		}

		log_message('debug', 'Last query to insert-update customer package ['.$this->db->last_query().']');
		log_message('debug', 'Last query to insert-update customer package and result is: ['.$result.']');
		if( $this->db->affected_rows() > 0 ){
			return true;
		}else{
			return true;
		}
	}

	public function registerBusinessPayment(){
		$property_type = $this->input->post('');

		$userData = array('property_type'=>$property_type,'real_state_value'=>$real_state_value, 'facility_desc'=>$facility_desc, 'industrial_commercial'=>$industrial_commercial, 'total_land_area_type'=>$total_land_area_type, 'total_land_area'=>$total_land_area, 'built_up_area_type'=>$built_up_area_type, 'built_up_area'=>$built_up_area, 'open_area_type'=>$open_area_type, 'open_area'=>$open_area, 'other_area'=>$other_area, 'fin_year'=>$fin_year, 'fin_revenue_turnover'=>$fin_revenue_turnover, 'fin_EDITDA'=>$fin_EDITDA, 'fin_PAT'=>$fin_PAT, 'fin_margin'=>$fin_margin, 'fin_yearly'=>$fin_yearly);

		$result = $this->db->update( TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id') ) );
		log_message('debug', 'User_model: registerBusinessPayment: ['.$this->db->last_query().']');
		if( !$result ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}
		}

	}

	public function registerAdditionService(){

		$form_id         = $this->input->post('frm_id');

		

		//Need to check in which table data will be inserted for additional service
		$feature_listing                  = $this->input->post('ads_featured_listing');
		$information_memorandum           = $this->input->post('ads_information_memorandum');
		$business_plan                    = $this->input->post('business_plan');
		$business_valuation               = $this->input->post('business_valuation');
		$business_mandate                 = $this->input->post('business_mandate');
		$business_advisory                = $this->input->post('business_advisory');
		$per_sale_business_structuring    = $this->input->post('per_sale_business_structuring');
	

		if(isset($feature_listing) ){
			$feature_listing ='YES';
		}else{
			$feature_listing='NO';
		}
		
		if(isset($information_memorandum) ){
			$information_memorandum ='YES';
		}else{
			$information_memorandum='NO';
		}

		if(isset($business_plan) ){
			$business_plan ='YES';
		}else{
			$business_plan='NO';
		}

		if(isset($business_valuation) ){
			$business_valuation ='YES';
		}else{
			$business_valuation='NO';
		}

		if(isset($business_mandate) ){
			$business_mandate ='YES';
		}else{
			$business_mandate='NO';
		}

		if(isset($business_advisory) ){
			$business_advisory ='YES';
		}else{
			$business_advisory='NO';
		}

		if(isset($per_sale_business_structuring) ){
			$per_sale_business_structuring ='YES';
		}else{
			$per_sale_business_structuring='NO';
		}

		
		//$form_id         = $this->input->post('form_id');

		$userData = array('customer_id'=>$this->session->userdata('userid'), 'form_id'=>$form_id, 'feature_listing'=>$feature_listing, 'memorandum'=>$information_memorandum, 'plan'=>$business_plan, 'valuation'=>$business_valuation, 'mandate'=>$business_mandate, 'advisory'=>$business_advisory, 'pre_sales'=>$per_sale_business_structuring );
		$whereClause = array( 'form_id'=>$form_id, 'customer_id' => $this->session->userdata('userid') );

		$AdditionalServiceDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_ADDITIONAL_SERVICES, $whereClause);
		log_message('debug', 'User_model: registerAdditionService: Query to check user current package1 ['.$this->db->last_query().']');
		if( isset( $AdditionalServiceDetails ) && $AdditionalServiceDetails->num_rows() > 0 ){
			$result = $this->db->update( TBL_PREFIX.TBL_CUSTOMER_ADDITIONAL_SERVICES, $userData, $whereClause );
		}else{
			$result = $this->db->insert( TBL_PREFIX.TBL_CUSTOMER_ADDITIONAL_SERVICES, $userData );
		}

		log_message('debug', 'User_model: registerAdditionService:: Last query to insert customer package ['.$this->db->last_query().']');
		if( $this->db->affected_rows() > 0 ){
			return 'true';
		}else{
			return 'false';
		}
		
		
		/*$userData = array('property_type'=>$property_type,'real_state_value'=>$real_state_value, 'facility_desc'=>$facility_desc, 'industrial_commercial'=>$industrial_commercial, 'total_land_area_type'=>$total_land_area_type, 'total_land_area'=>$total_land_area, 'built_up_area_type'=>$built_up_area_type, 'built_up_area'=>$built_up_area, 'open_area_type'=>$open_area_type, 'open_area'=>$open_area, 'other_area'=>$other_area, 'fin_year'=>$fin_year, 'fin_revenue_turnover'=>$fin_revenue_turnover, 'fin_EDITDA'=>$fin_EDITDA, 'fin_PAT'=>$fin_PAT, 'fin_margin'=>$fin_margin, 'fin_yearly'=>$fin_yearly);

		$result = $this->db->update( TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id') ) );
		if( !$result ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
		return true;*/
	}


	public function registerAdditionServiceAdmin(){

		$form_id         = $this->input->post('frm_id');
		$customer_id     = $this->input->post('customer_id');
		

		//Need to check in which table data will be inserted for additional service
		$feature_listing                  = $this->input->post('ads_featured_listing');
		$information_memorandum           = $this->input->post('ads_information_memorandum');
		$business_plan                    = $this->input->post('business_plan');
		$business_valuation               = $this->input->post('business_valuation');
		$business_mandate                 = $this->input->post('business_mandate');
		$business_advisory                = $this->input->post('business_advisory');
		$per_sale_business_structuring    = $this->input->post('per_sale_business_structuring');
	

		if(isset($feature_listing) ){
			$feature_listing ='YES';
		}else{
			$feature_listing='NO';
		}
		
		if(isset($information_memorandum) ){
			$information_memorandum ='YES';
		}else{
			$information_memorandum='NO';
		}

		if(isset($business_plan) ){
			$business_plan ='YES';
		}else{
			$business_plan='NO';
		}

		if(isset($business_valuation) ){
			$business_valuation ='YES';
		}else{
			$business_valuation='NO';
		}

		if(isset($business_mandate) ){
			$business_mandate ='YES';
		}else{
			$business_mandate='NO';
		}

		if(isset($business_advisory) ){
			$business_advisory ='YES';
		}else{
			$business_advisory='NO';
		}

		if(isset($per_sale_business_structuring) ){
			$per_sale_business_structuring ='YES';
		}else{
			$per_sale_business_structuring='NO';
		}

		
		//$form_id         = $this->input->post('form_id');

		$userData = array('customer_id'=>$customer_id, 'form_id'=>$form_id, 'feature_listing'=>$feature_listing, 'memorandum'=>$information_memorandum, 'plan'=>$business_plan, 'valuation'=>$business_valuation, 'mandate'=>$business_mandate, 'advisory'=>$business_advisory, 'pre_sales'=>$per_sale_business_structuring );
		$whereClause = array( 'form_id'=>$form_id, 'customer_id' => $customer_id );

		$AdditionalServiceDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_ADDITIONAL_SERVICES, $whereClause);
		log_message('debug', 'User_model: registerAdditionService: Query to check user Additional services ['.$this->db->last_query().']');
		if( isset( $AdditionalServiceDetails ) && $AdditionalServiceDetails->num_rows() > 0 ){
			$result = $this->db->update( TBL_PREFIX.TBL_CUSTOMER_ADDITIONAL_SERVICES, $userData, $whereClause );
			if($result){
			return 'true';
		}else{
			return 'false';
		}
		}else{
			$result = $this->db->insert( TBL_PREFIX.TBL_CUSTOMER_ADDITIONAL_SERVICES, $userData );
			if($result){
			return 'true';
		}else{
			return 'false';
		}
		}

		log_message('debug', 'User_model: registerAdditionService:: Last query to insert customer package ['.$this->db->last_query().']');
		
		
		/*$userData = array('property_type'=>$property_type,'real_state_value'=>$real_state_value, 'facility_desc'=>$facility_desc, 'industrial_commercial'=>$industrial_commercial, 'total_land_area_type'=>$total_land_area_type, 'total_land_area'=>$total_land_area, 'built_up_area_type'=>$built_up_area_type, 'built_up_area'=>$built_up_area, 'open_area_type'=>$open_area_type, 'open_area'=>$open_area, 'other_area'=>$other_area, 'fin_year'=>$fin_year, 'fin_revenue_turnover'=>$fin_revenue_turnover, 'fin_EDITDA'=>$fin_EDITDA, 'fin_PAT'=>$fin_PAT, 'fin_margin'=>$fin_margin, 'fin_yearly'=>$fin_yearly);

		$result = $this->db->update( TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id') ) );
		if( !$result ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
		return true;*/
	}



	public function setQueryInfo(){
		$name    = $this->input->post('name');
		$email   = $this->input->post('email');
		$city    = $this->input->post('city');
		$contact = $this->input->post('contact');
		$msg     = $this->input->post('msg');
		$GetUserid=$this->session->userdata('userid');

		$queryData = array('customer_id'=>$GetUserid,'name'=>$name, 'email'=>$email, 'city'=>$city, 'contact_number'=>$contact, 'message'=>$msg,'query_datetime'=>date('Y-m-d H:I:S'));
		$result = $this->db->insert(TBL_PREFIX.TBL_USER_QUERY, $queryData);
		log_message('debug','Query to setQueryInfo ['.$this->db->last_query().']');
		if( !$result ){
			return false;
		}else{
			if( $this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}
		}
	}
	public function getUserQueries(){
		
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_USER_QUERY);
		
		
		$this->db->where('customer_id',$this->session->userdata('userid'));
		
		
		$userQuery= $this->db->get();
		log_message('debug', 'User_model: getUserQuery: ['.$this->db->last_query().']');
		if( !$userQuery ){
			return null;
		}else{
			$dataToReturn = $userQuery->result_array();
		
		
			return $dataToReturn;
		}
	}
	
		public function UserQueriesDetails($getqueryid){
		
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_CASE_HISTORY);
		
		
		$this->db->where('case_id',$getqueryid);
		
		
		$userQueryDetails= $this->db->get();
		log_message('debug', 'User_model: getUserQuery: ['.$this->db->last_query().']');
		if( !$userQueryDetails ){
			return null;
		}else{
			$dataToReturn = $userQueryDetails->result_array();
		
		
			return $dataToReturn;
		}
	}
	
	public function getUserContacts($infoType='basic', $qid){
		if ( strcasecmp($infoType, 'basic') == 0 ){
			$this->db->select(TBL_PREFIX.TBL_LISTING_CONTACTS.".id,".TBL_PREFIX.TBL_LISTING_CONTACTS.".name, key_headline, mobile, country, state, city");
		}else{
			$this->db->select(TBL_PREFIX.TBL_LISTING_CONTACTS.".id,".TBL_PREFIX.TBL_LISTING_CONTACTS.".name, key_headline, mobile, country, state, city, message, date");
		}
		$this->db->from(TBL_PREFIX.TBL_LISTING_CONTACTS);
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_LISTING_CONTACTS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id');
		if ( $qid != 0 ){
			//$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id');
			$this->db->where(TBL_PREFIX.TBL_LISTING_CONTACTS.'.id', $qid);
		}
		$this->db->where(TBL_PREFIX.TBL_LISTING_CONTACTS.'.CONTACT_TO', $this->session->userdata('userid'));
		$contactList = $this->db->get();
		log_message('debug','Query to get contacts['.$this->db->last_query().']');
		if ( !$contactList ){
			return null;
		}else{
			return $contactList->result();
		}
	}
	public function getUserContactDetails($contactId){
		return null;
	}
	public function getUserFavourite(){
		return null;
	}
	public function getFeaturedListing(){
		
		/*select t1.form_id,key_headline,description,industry_preference,ask_price from bd_business_details t1
left join bd_sell_business_details t5 on t1.form_id=t5.form_id
left join bd_buy_business_details t3 on t1.form_id=t3.form_id
where form_type='Featured' order by t1.form_id ASC*/
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_BUSINESS_DETAILS);
		$this->db->join(TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS, TBL_PREFIX.TBL_SELL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id','left');
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_type', 'Featured');
	
		$this->db->order_by("form_type", "ASC");
		$Featured = $this->db->get();
		log_message('debug', 'User_model: getFeaturedListing: ['.$this->db->last_query().']');
		
		if( !$Featured ){
			return null;
		}else{
			return $Featured->result_array();
		}
	}
	
	public function DeleteSellerImg(){
		
		
		
		$id=$this->input->get('delete');
		$this -> db -> where('id', $id);
		$userList = $this -> db -> delete(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS);
  
  
		
		log_message('debug', 'Last Image Deleted ['.$this->db->last_query().']');
		if( !$userList ){
			return false;
		}else{
			return true;
			
		}
	}
	
	//No of business contacted at dashboard for buy business only
	public function getBuyContactCount(){ 
	
		$this->db->select('COUNT(id)');
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_LISTING_CONTACTS.'.form_id','left');
		
		
		$ContactCount =$this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid'),'business_type'=>'buy_a_business'))->from(TBL_PREFIX.TBL_LISTING_CONTACTS)->count_all_results();
		
			
		log_message('debug', 'Last query to getBuyContactCount  ['.$this->db->last_query().']');
		
		if( !$ContactCount ){
			return null;
		}else{
			return $ContactCount;
		}	
	}
	
	//No of business viewed at dashboard for buy business only
	public function getViewBuyBusiness(){ 
	
		$this->db->select_sum('num_business_viewed');
		
	
		$this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid'),'business_type'=>'buy_a_business'));
		
		

		$ViewBuyBusiness = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS); 
			
		log_message('debug', 'Last query to getAllViewedCount  ['.$this->db->last_query().']');
		
		if( !$ViewBuyBusiness ){
			return null;
		}else{
			return $ViewBuyBusiness->result_array();
		}	
	}
	
	//No of business contacted at dashboard  for all except buy business
	public function getAllContactCount(){ 
	
		$this->db->select('COUNT(id)');
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_LISTING_CONTACTS.'.form_id','left');
		
		//$this->db->group_by("bd_customer_details.customer_id");
		
		//$this->db->from(TBL_PREFIX.TBL_LISTING_CONTACTS)->count_all_results();

		
		
		
		$ContactCountAll =$this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid'),'business_type!='=>'buy_a_business'))->from(TBL_PREFIX.TBL_LISTING_CONTACTS)->count_all_results();
		
			
		log_message('debug', 'Last query to getAllContactCount  ['.$this->db->last_query().']');
		
		if( !$ContactCountAll ){
			return null;
		}else{
			return $ContactCountAll;
		}	
	}
	//No of business viewed at dashboard  for all except buy business
	public function getAllViewedCount(){ 
	
		$this->db->select_sum('num_business_viewed');
		
	
		$this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid'),'business_type!='=>'buy_a_business'));
		
		

		$ViewCountAll = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS); 
			
		log_message('debug', 'Last query to getAllViewedCount  ['.$this->db->last_query().']');
		
		if( !$ViewCountAll ){
			return null;
		}else{
			return $ViewCountAll->result_array();
		}	
	}
	
		//favourite business (buy business)
	public function getFavCountBuy(){ 
	
		$this->db->select('COUNT(form_id)');
		
		
		$getFavCountBuy =$this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid'),'business_type'=>'buy_a_business','add_to_favorite'=>'1'))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
			
		log_message('debug', 'Last query to getFavCountBuy  ['.$this->db->last_query().']');
		
		if( !$getFavCountBuy ){
			return null;
		}else{
			return $getFavCountBuy;
		}	
	}
	
		//favourite business (buy business)
	public function getFavCountAll(){ 
	
		
		$this->db->select('form_id, count(*)'); 

		
		
		$getFavCountAll =$this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid'),'business_type!='=>'buy_a_business','add_to_favorite'=>'1'))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
			
		//log_message('debug', 'Last query to getFavCountAll  ['.$this->db->last_query().']');
		
		if( !$getFavCountAll ){
			return null;
		}else{
			return $getFavCountAll;
		}	
	}
	
	
	public function DeleteProperty($idval){ 
	
	$val=$this->input->get('idval');
	
		 $this->db->where('id', $val);
		$del=$this->db->delete(TBL_PREFIX.TBL_ADDITIONAL_DETAILS); 
			//log_message('debug', 'Last query to DeleteProperty  ['.$this->db->last_query().']');		
		return $del;
		
	}
	
	public function DeleteFinProperty($idval){ 
	
	$val=$this->input->get('idval');
	
		 $this->db->where('id', $val);
		$del=$this->db->delete(TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS); 
		log_message('debug', 'Last query to DeleteProperty  ['.$this->db->last_query().']');		
		return $del;
		
	}
	
	public function AddProperty($idval){
		
		$userData = array('form_id'=>$idval);
		
		$result = $this->db->insert(TBL_PREFIX.TBL_ADDITIONAL_DETAILS, $userData );
		log_message('debug', 'Last query to AddProperty  ['.$this->db->last_query().']');	
		
		$this->db->select('max(id) as id');
		$this->db->where(array('form_id'=>$idval));
		$q = $this->db->get(TBL_PREFIX.TBL_ADDITIONAL_DETAILS);
		$data = $q->result_array();
		
	return	$id=$data[0]['id'];
		
		
		
	}
	
	public function AddFinProperty($idval){
		
		$userData = array('form_id'=>$idval,'added_date'=>date('Y-m-d h:i:s'));
		
		$result = $this->db->insert(TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS, $userData );
		log_message('debug', 'Last query to AddProperty  ['.$this->db->last_query().']');

		$this->db->select('max(id) as id');
		$this->db->where(array('form_id'=>$idval));
		$q = $this->db->get(TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS);
		$data = $q->result_array();
		
	return	$id=$data[0]['id'];		
		
	}
	
	//get seller count count on particular form id

	
	public function getContactCountByFormId($FormId){
		
		$this->db->select('id, count(*)'); 

		$getFavCountAll =$this->db->where(array(TBL_PREFIX.TBL_LISTING_CONTACTS.'.form_id'=>$FormId))->from(TBL_PREFIX.TBL_LISTING_CONTACTS)->count_all_results();
		
			
		//log_message('debug', 'Last query to getFhhhhhavCountAll  ['.$this->db->last_query().']');
		
		if( !$getFavCountAll ){
			return null;
		}else{
			return $getFavCountAll;
		}	
		
	
	}
	public function getContactList($FormId){
		
		$this->db->select(TBL_PREFIX.TBL_LISTING_CONTACTS.".name,".TBL_PREFIX.TBL_LISTING_CONTACTS.".email,".TBL_PREFIX.TBL_LISTING_CONTACTS.".mobile,".TBL_PREFIX.TBL_LISTING_CONTACTS.".message,".TBL_PREFIX.TBL_LISTING_CONTACTS.".contact_to,".TBL_PREFIX.TBL_BUSINESS_DETAILS.".form_id,".TBL_PREFIX.TBL_BUSINESS_DETAILS.".business_type,".TBL_PREFIX.TBL_BUSINESS_DETAILS.".key_headline"); 
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_LISTING_CONTACTS.'.form_id','left');

		//$this->db->where(array(TBL_PREFIX.TBL_LISTING_CONTACTS.form_id=>$FormId));
		
		$this->db->where(TBL_PREFIX.TBL_LISTING_CONTACTS.'.form_id',$FormId);
		$q = $this->db->get(TBL_PREFIX.TBL_LISTING_CONTACTS);
		$data = $q->result_array();
		
		log_message('debug', 'Last query to getContact  ['.$this->db->last_query().']');
		
		if( !$data ){
			return null;
		}else{
			return $data;
		}	
	}
	
	public function getSaveCountByFormId($FormId){
		
		$this->db->select('id, count(*)'); 

		$getFavCountAll =$this->db->where(array(TBL_PREFIX.TBL_PROPERTY_FAVORITE.'.property_form_id'=>$FormId))->from(TBL_PREFIX.TBL_PROPERTY_FAVORITE)->count_all_results();
		
			
		//log_message('debug', 'Last query to getFhhhhhavCountAll  ['.$this->db->last_query().']');
		
		if( !$getFavCountAll ){
			return null;
		}else{
			return $getFavCountAll;
		}	
		
	
	}
	
	public function getSaveList($FormId){
		
		$this->db->select('*'); 
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_PROPERTY_FAVORITE.'.property_form_id','left');
		
		$this->db->where(array('property_form_id'=>$FormId));
		$q = $this->db->get(TBL_PREFIX.TBL_PROPERTY_FAVORITE);
		$data = $q->result_array();
		
		log_message('debug', 'Last query to getContact33333  ['.$this->db->last_query().']');
		
		if( !$data ){
			return null;
		}else{
			return $data;
		}	
	}
	//business viewed listing by user count
	public function getUserViewedPropertyCount(){
		
		
		
		$this->db->select('id, count(*)'); 

		$getFavCountAll =$this->db->where(array(TBL_PREFIX.TBL_PROPERTY_VIEW_USER.'.viewed_user_id'=>$this->session->userdata('userid')))->from(TBL_PREFIX.TBL_PROPERTY_VIEW_USER)->count_all_results();
		
			
		//log_message('debug', 'Last query to getFhhhhhavCountAll  ['.$this->db->last_query().']');
		
		if( !$getFavCountAll ){
			return null;
		}else{
			return $getFavCountAll;
		}	
	}
	
	//business viewed listing by user
	public function getUserViewedProperty(){
		
		$this->db->select('*'); 
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_PROPERTY_VIEW_USER.'.viewed_form_id','left');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id','left');
		
		$this->db->where(array('viewed_user_id'=>$this->session->userdata('userid')));
		$q = $this->db->get(TBL_PREFIX.TBL_PROPERTY_VIEW_USER);
		$data = $q->result_array();
		
		log_message('debug', 'Last query to getContact33333  ['.$this->db->last_query().']');
		
		if( !$data ){
			return null;
		}else{
			return $data;
		}	
	}
	
	
	//user save or favourite list
	public function getSaveListUser(){
		
		$this->db->select('*'); 
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_PROPERTY_FAVORITE.'.property_form_id','left');
		
		$this->db->where(array('like_user_id'=>$this->session->userdata('userid')));
		$q = $this->db->get(TBL_PREFIX.TBL_PROPERTY_FAVORITE);
		$data = $q->result_array();
		
		log_message('debug', 'Last query to getContact33333  ['.$this->db->last_query().']');
		
		if( !$data ){
			return null;
		}else{
			return $data;
		}	
	}
	
	
	//user save or favourite list count
	public function getSaveListUserCount(){
		
		$this->db->select('id, count(*)'); 

		$getFavCountAll =$this->db->where(array(TBL_PREFIX.TBL_PROPERTY_FAVORITE.'.like_user_id'=>$this->session->userdata('userid')))->from(TBL_PREFIX.TBL_PROPERTY_FAVORITE)->count_all_results();
		
		
		//log_message('debug', 'Last query to getFhhhhhavCountAll  ['.$this->db->last_query().']');
		
		if( !$getFavCountAll ){
			return null;
		}else{
			return $getFavCountAll;
		}	
	}
	
	//get contact count on particular form id

	public function getContactCountByFormIdUser(){
		
		$this->db->select('id, count(*)'); 
		
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_LISTING_CONTACTS.'.form_id','left');
		
		$getFavCountAll =$this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id'=>$this->session->userdata('userid')))->from(TBL_PREFIX.TBL_LISTING_CONTACTS)->count_all_results();
		
			
		log_message('debug', 'Last query to getFhhhhhavCou88888ntAll  ['.$this->db->last_query().']');
		
		if( !$getFavCountAll ){
			return null;
		}else{
			return $getFavCountAll;
		}	
		
	
	}
	
	//get contact list on particular form id by user
	public function getContactListUser(){
		
		$this->db->select(TBL_PREFIX.TBL_LISTING_CONTACTS.".name,".TBL_PREFIX.TBL_LISTING_CONTACTS.".email,".TBL_PREFIX.TBL_LISTING_CONTACTS.".mobile,".TBL_PREFIX.TBL_LISTING_CONTACTS.".message,".TBL_PREFIX.TBL_LISTING_CONTACTS.".contact_to,".TBL_PREFIX.TBL_BUSINESS_DETAILS.".form_id,".TBL_PREFIX.TBL_BUSINESS_DETAILS.".business_type,".TBL_PREFIX.TBL_BUSINESS_DETAILS.".key_headline"); 
		$this->db->join(TBL_PREFIX.TBL_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_LISTING_CONTACTS.'.form_id','left');
		
		$this->db->where(array('customer_id'=>$this->session->userdata('userid')));
		$q = $this->db->get(TBL_PREFIX.TBL_LISTING_CONTACTS);
		
		
		$data = $q->result_array();
		
		log_message('debug', 'Last query to getContact33333  ['.$this->db->last_query().']');
		
		if( !$data ){
			return null;
		}else{
			return $data;
		}	
	}
	
	public function ChangeUserPassword($newpassword,$confirmpassword){
		
		
		
		$userData = array('password'=>$newpassword);
		
		$this->db->where('customer_id',$this->session->userdata('userid'));
		
		if($this->db->update(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $userData)){
			//log_message('debug', 'User_model: changepassword: ['.$this->db->last_query().']');
			return '2';
		}else{
				return '1';
		}
	}
	public function mailSettings(){
		
		$this->db->select('*');
		$this->db->where(array('ID'=>1));
		$q = $this->db->get(TBL_PREFIX.TBL_MAIL_SETTINGS);
		return $data = $q->result_array();
		
		
	}
	
		public function InsertRegisterOtp($otp,$userid){
			
		$userData2 = array('status'=>'1');
		$this->db->where('customerid',$userid);
		$this->db->update(TBL_PREFIX.TBL_USER_REGISTER_OTP, $userData2);
		
		$userData = array('otp_number'=>$otp, 'customerid'=>$userid, 'status'=>'0','otp_datetime'=>date('Y-m-d h:i:s'));

		$result = $this->db->insert(TBL_PREFIX.TBL_USER_REGISTER_OTP, $userData);
		log_message('debug', 'User_model: registerUser: ['.$this->db->last_query().']');
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
	public function VerifyRegisterOtp(){
			
		$registeruserid=$this->input->post('registeruserid');
		$otpnumber=$this->input->post('otpnumber');
		
		$this->db->select('*');
		$this->db->where(array('customerid'=>$registeruserid,'otp_number'=>$otpnumber,'status'=>'0'));
		$this->db->get(TBL_PREFIX.TBL_USER_REGISTER_OTP);
		if ( $this->db->affected_rows() > 0 ){
			return 2;
		}else{
			return 1;
		}
		
	}
	
		public function validateOtpCustomer(){
		
		
		$whereClause = array( 'CUSTOMER_ID'=>$_SESSION['registeruserid']);
		$userQuery   = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $whereClause);
		//log_message('debug', 'User_model: validateCustomer: ['.$this->db->last_query().']');
		if ( isset( $userQuery ) && $userQuery->num_rows() > 0 ){
			$row = $userQuery->row();
			$this->session->set_userdata('is_logged_in', true);
			$this->session->set_userdata('userid', $_SESSION['registeruserid']);
			$this->session->set_userdata('username', $row->name);
			
		//update otp table	
		$userData = array('status'=>'1');
		
		$this->db->where('customerid',$_SESSION['registeruserid']);
		
		$this->db->update(TBL_PREFIX.TBL_USER_REGISTER_OTP, $userData);
		
		//update customer status 
		$userData2 = array('is_otp_verified'=>'1');
		
		$this->db->where('customer_id',$_SESSION['registeruserid']);
		
		$this->db->update(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $userData2);
			
		return true;
		}
	}
	
	public function verifyUserid(){
		
		$userId = $this->input->post('userid');
		

		$whereClause = array( 'CUSTOMER_ID'=>$userId);
		$userQuery   = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $whereClause);
		log_message('debug', 'User_model: validateCustomer2222: ['.$this->db->last_query().']');
		if ( isset( $userQuery ) && $userQuery->num_rows() > 0 ){
			
			return 2;
		}else{
			
			return 1;
		}
	}
	
	public function ChangeUserForPassword($newpassword,$confirmpassword,$Forgotpnumber){
		
		//check correct otp
		$this->db->select('*');
		$this->db->where(array('otp_number'=>$Forgotpnumber,'status'=>'0'));
		$q = $this->db->get(TBL_PREFIX.TBL_USER_REGISTER_OTP);
		if ( $this->db->affected_rows() > 0 ){
		$data = $q->result_array();	
		$customerid     = $data[0]['customerid'];	
		
		//update customer table
		$userData = array('password'=>$newpassword,'is_otp_verified'=>'1');
		
		$this->db->where('customer_id',$customerid);
		
		$this->db->update(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $userData);
		
		//update otp table
		
		$userData2 = array('status'=>'1');
		$this->db->where('customerid',$customerid);
		$this->db->update(TBL_PREFIX.TBL_USER_REGISTER_OTP, $userData2);
		
		return 2;
		}else{
				return 1;
		}
	}
	
	public function getUserEnquiry(){
		
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_CONTACT_US_DETAIL);
		
		
		$this->db->where('email',$this->session->userdata('userid'));
		
		
		$userQuery= $this->db->get();
		log_message('debug', 'User_model: getUserQuery: ['.$this->db->last_query().']');
		if( !$userQuery ){
			return null;
		}else{
			$dataToReturn = $userQuery->result_array();
		
		
			return $dataToReturn;
		}
	}
	public function UserQueriesExplore($getqueryid){ 
		
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_USER_QUERY);
		
		
		$this->db->where('id',$getqueryid);
		
		
		$userQueryDetails= $this->db->get();
		log_message('debug', 'User_model: getUserQuery: ['.$this->db->last_query().']');
		if( !$userQueryDetails ){
			return null;
		}else{
			$dataToReturn = $userQueryDetails->result_array();
		
		
			return $dataToReturn;
		}
	}
	public function userContactExplore($getqueryid){ 
		
		
		
		$this->db->select('*');
		$this->db->from(TBL_PREFIX.TBL_CONTACT_US_DETAIL);
		
		
		$this->db->where('id',$getqueryid);
		
		
		$userQueryDetails= $this->db->get();
		log_message('debug', 'User_model: getUserQuery: ['.$this->db->last_query().']');
		if( !$userQueryDetails ){
			return null;
		}else{
			$dataToReturn = $userQueryDetails->result_array();
		
		
			return $dataToReturn;
		}
	}
	
	
	
	
}
?>
