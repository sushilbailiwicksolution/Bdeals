<?php
class Startup_Business_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function updateUserProfile( $updateUnApprove = false ){
		$uname            = $this->input->post('name');
		$email            = $this->input->post('email');
		$contact          = $this->input->post('contact');
		$address          = $this->input->post('address');
		$location         = $this->input->post('location');
		$compname         = $this->input->post('cname');
		$designation      = $this->input->post('designation');
		$website          = $this->input->post('website');
		$isOwner          = @$this->input->post('owner');
		$isBroker         = @$this->input->post('broker');
		$isRepresentative = @$this->input->post('representative');
		$acontact         = $this->input->post('acontact');
		$next_tab         = $this->input->post('next_tab');
		$formId           = $this->input->post('formId');

		$who = $isOwner;
		if( isset($isOwner) ){
			$who = 'owner';
		}else if( isset($isBroker) ){
			$who = 'broker';
		}else if( isset( $isRepresentative ) ){
			$who = 'representative';
		}

		$userData = array('name'=>$uname, 'email'=>$email, 'contact'=>$contact, 'address'=>$address, 'location'=>$location, 'company_name'=>$compname, 'designation'=>$designation, 'website'=>$website, 'who'=>$who, 'alternative_contact'=>$acontact);

		if ( $updateUnApprove ){
			$userData['status'] = 0;
		}

		$result = $this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userData, array('form_id'=>$formId));
		if( !$result ){
			return array('status'=>'error', 'next_tab'=>$next_tab);
		}else{
			if( $this->db->affected_rows() > 0 ){
				return array('status'=>'true','next_tab'=>$next_tab);
			}else{
				return array('status'=>'false','next_tab'=>$next_tab);
			}
		}
	}

	public function updateBasicInformation( $updateUnApprove = false ){
		$keyHeadline           = $this->input->post('keyHeadline');
		$businessDesc          = $this->input->post('bus_desc');
		$businessCountry       = $this->input->post('country');
		$businessRegion        = $this->input->post('region');
		$businessState         = $this->input->post('state');
		$businessCity          = $this->input->post('city');
		$businessCategory      = $this->input->post('category');
		$businessSubCategory   = $this->input->post('subcategory');
		$legalEntity           = $this->input->post('legal');
		$establishmentYear     = $this->input->post('eyear');
		$currentBusinessStatus = $this->input->post('bstatus');
		$next_tab              = $this->input->post('next_tab');
		$formId                = $this->input->post('formId');
		
		$other_state           = $this->input->post('other_state');
		$other_city         = $this->input->post('other_city');
		
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

		$userData = array('customer_id'=>$this->session->userdata('userid'),'business_type'=>'re_business','name'=>$name,'email'=>$this->session->userdata('userid'),'contact'=>$contact_number,'address'=>$address,'location'=>$location,'company_name'=>$company_name,'key_headline'=>$keyHeadline,'description'=>$businessDesc,'location_country'=>$businessCountry,'location_region'=>$businessRegion,'location_state'=>$businessState,'location_city'=>$businessCity,'listing_category'=>$businessCategory,'listing_sub_category'=>$businessSubCategory,'legal_entity'=>$legalEntity,'yoe'=>$establishmentYear,'current_status_of_business'=>$currentBusinessStatus,'other_state'=>$other_state,'other_city'=>$other_city);

		if ( $updateUnApprove ){
			$userData['status'] = 0;
		}

		$result = $this->db->update( TBL_PREFIX.TBL_BUSINESS_DETAILS, $userData, array( 'form_id' => $formId ) );
		log_message('debug','Query to update business details ['.$this->db->last_query().']');
		if( !$result ){
			return array('status'=>'error', 'next_tab'=>$next_tab);
		}else{
			if( $this->db->affected_rows() > 0 ){
				return array('status'=>'true','next_tab'=>$next_tab);
			}else{
				return array('status'=>'true','next_tab'=>$next_tab);
			}
		}
	}

	public function updateBusinessPitch( $updateUnApprove = false ){
		$permanent_employee         = $this->input->post('noemp_par');
		$contractual_employee       = $this->input->post('noemp_con');
		$total_employee             = $this->input->post('noemp_tot');
		$business_re_locatable      = $this->input->post('bus_reloc');
		$listed_by      = $this->input->post('listed_by');
		$summarize_idea       = $this->input->post('summarize_idea');
		$key_highlights           = $this->input->post('key_highlights');
		$competition        = $this->input->post('competition');
		$future_potential            = $this->input->post('future_potential');
		$detailed_pitch     = $this->input->post('detailed_pitch');
		$team_overview         = $this->input->post('team_overview');
		$next_tab                = $this->input->post('next_tab');
		$formId                  = $this->input->post('formId');

		$userData = array('permanent_employee'=>$permanent_employee, 'contractual_employee'=>$contractual_employee, 'total_employee'=>$total_employee, 'business_re_locatable'=>$business_re_locatable, 'listed_by'=>$listed_by, 'listed_by'=>$listed_by, 'summarize_idea'=>$summarize_idea, 'key_highlights'=>$key_highlights, 'competition'=>$competition, 'future_potential'=>$future_potential, 'detailed_pitch'=>$detailed_pitch, 'team_overview'=>$team_overview);

		$result = $this->db->update( TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, $userData, array( 'form_id' => $formId ) );
		log_message('debug','Query to update business details ['.$this->db->last_query().']');
		if( !$result ){
			return array('status'=>'error', 'next_tab'=>$next_tab);
		}else{
			if( $this->db->affected_rows() > 0 ){

				if ( $updateUnApprove ){
					$userDataSB = array('status'=>0);
					$this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userDataSB, array( 'form_id' => $formId ));
				}
				return array('status'=>'true','next_tab'=>$next_tab);
			}else{
				return array('status'=>'true','next_tab'=>$next_tab);
			}
		}
	}

	public function updateJvDetails( $updateUnApprove = false ){

		$purpose_jv         = $this->input->post('purposeJv');
		$nature_jv          = $this->input->post('natureJv');
		$prev_investment    = $this->input->post('previous_investment');
		$reqd_investment    = $this->input->post('investment_required');
		$invest_range       = $this->input->post('investment_range');
		$role_new_investo   = $this->input->post('role');
		$proposed_deal      = $this->input->post('purpose_deal');
		$next_tab                = $this->input->post('next_tab');
		$formId                  = $this->input->post('formId');

		$userData = array('purpose_jv'=>$purpose_jv,'nature_jv'=>$nature_jv, 'prev_investment'=>$prev_investment, 'reqd_investment'=>$reqd_investment, 'invest_range'=>$invest_range, 'role_new_investo'=>$role_new_investo, 'proposed_deal'=>$proposed_deal);


		$result = $this->db->update( TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, $userData, array( 'form_id' => $formId ) );
		log_message('debug','Query to update JV details ['.$this->db->last_query().']');
		if( !$result ){
			return array('status'=>'error', 'next_tab'=>$next_tab);
		}else{
			if( $this->db->affected_rows() > 0 ){

				if ( $updateUnApprove ){
					$userDataSB = array('status'=>0);
					$this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userDataSB, array( 'form_id' => $formId ));
				}
				return array('status'=>'true','next_tab'=>$next_tab);
			}else{
				return array('status'=>'false','next_tab'=>$next_tab);
			}
		}
	}



	public function updateDealDetails( $updateUnApprove = false ){
		$next_tab              = $this->input->post('next_tab');
		$formId                = $this->input->post('formId');

		$purpose_investment         = $this->input->post('purpose_investment');
		$investment_required_as       = $this->input->post('investment_required_as');
		$investment_other       = $this->input->post('investment_other');
		$invester_role             = $this->input->post('invester_role');
		$propose_deal_structure      = $this->input->post('propose_deal_structure');
		$investor_role_other      = $this->input->post('investor_role_other');
		
		
			

		$userData = array('purpose_investment'=>$purpose_investment, 'investment_required_as'=>$investment_required_as,'investment_other'=>$investment_other, 'invester_role'=>$invester_role, 'propose_deal_structure'=>$propose_deal_structure,'investor_role_other'=>$investor_role_other);


		if( strcasecmp( $actType, "NEW" ) == 0 ){
			$userData['form_id'] = $this->session->userdata('last_form_id');
			$result = $this->db->insert( TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, $userData );
			log_message('debug', 'Startup_model: getSellerBusinessDealDetails: ['.$this->db->last_query().']');
			if ( !$result && $this->db->error()['code'] == 1062 ){
				return "duplicate";
			}else{
				if ( $this->db->affected_rows() > 0 ){
					//return true;
				}else{
					//return false;
				}
			}
		}else{
			$this->db->where('form_id', $this->input->post('frm_id'));
			if( $this->db->update( TBL_PREFIX.TBL_STARTUP_BUSINESS_DETAILS, $userData ) ){
				log_message('debug', 'Startup_model: getSellerBusinessDealDetails: ['.$this->db->last_query().']');
					//return true;
			}else{
					//return false;
			}
		}
		
		$val = 0;
		$dataArrFin = array();
		$count_fin = $this->input->post('count-fin');
		for( $ii=0; $ii < $count_fin; $ii++){
			$val = $ii+1;
			log_message('debug','In getSellerBusinessDealDetails:::::::::::::::::::::::In Count loop'.$val);
			
			$dataArrFin[$ii]['finance_id']           = $this->input->post('finance_id_'.$val);
			$dataArrFin[$ii]['fin_year']             = $this->input->post('fin_year_'.$val);
			$dataArrFin[$ii]['fin_revenue_turnover'] = $this->input->post('fin_revenue_turnover_'.$val);
			$dataArrFin[$ii]['fin_margin']           = $this->input->post('fin_margin_'.$val);
		}
		
		$response = "true";

		log_message('debug','In getSellerBusinessDealDetails:::::::::::::::::::::::Yahoo:::: after loop');
		for($j=0; $j < $count_fin; $j++){
			log_message('debug','In getSellerBusinessDealDetails:::::::::::::::::::::::Yahoo::::: in loop again');
			if(($dataArrFin[$j]['finance_id']==NULL)){
				log_message('debug','In getSellerBusinessDealDetails:::::::::::::::::::::::Yahoo:::::: finance not set');
				$userData = array('form_id'=>$this->session->userdata('last_form_id'),'fin_year'=>$dataArrFin[$j]['fin_year'],'fin_revenue_turnover'=>$dataArrFin[$j]['fin_revenue_turnover'], 'fin_margin'=>$dataArrFin[$j]['fin_margin']);


				
				$result = $this->db->insert( TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS, $userData );
				log_message('debug', 'Startup_model: getSellerBusinessDealDetails: ['.$this->db->last_query().']');
				
				if ( !$result && $this->db->error()['code'] == 1062 ){
					$response = "false";
					log_message('debug', 'Startup_model: getSellerBusinessDealDetails: [FALSE:::: Duplicate Data:]');
				}else{
					if ( $this->db->affected_rows() > 0 ){
						$response = "true";
						log_message('debug', 'Startup_model: getSellerBusinessDealDetails: [TRUE:::: Data Insertd]');
					}else{
						$response = "false";
						log_message('debug', 'Startup_model: getSellerBusinessDealDetails: [FALSE:::: Data not Inserted]');
					}
				}

			}else{
				log_message('debug','In getSellerBusinessDealDetails:::::::::::::::::::::::Yahoo::::: In else');
				$userData = array('form_id'=>$this->session->userdata('last_form_id'),'fin_year'=>$dataArrFin[$j]['fin_year'],'fin_revenue_turnover'=>$dataArrFin[$j]['fin_revenue_turnover'], 'fin_margin'=>$dataArrFin[$j]['fin_margin']);
				
					
				$result = $this->db->update( TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id'),'id'=>$dataArrFin[$j]['finance_id'] ) );
				log_message('debug', 'Startup_model: getSellerBusinessDealDetails: ['.$this->db->last_query().']');

				if( !$result ){
					$response = "false";
					log_message('debug', 'Startup_model: getSellerBusinessDealDetails: [FALSE:::: Error]');
				}else{
					if( $this->db->affected_rows() > 0 ){
						$response = "true";
						log_message('debug', 'Startup_model: getSellerBusinessDealDetails: [TRUE:::: Data Updated]');
					}else{
						$response = "true";
						log_message('debug', 'Startup_model: getSellerBusinessDealDetails: [TRUE:::: Data Not Updated]');
					}
				}

			}	
		}




		if($response=="true"){
			return array('status'=>'true','next_tab'=>$next_tab);
			//return true;
		}else{
			return array('status'=>'false','next_tab'=>$next_tab);
			//return false;
		}




	}

	public function registerSellerBusinessDescription( $actType = "NEW", $updateUnApprove = false ){
		$noe_permanent         = $this->input->post('noemp_par');
		$noe_contractual       = $this->input->post('noemp_con');
		$noe_total             = $this->input->post('noemp_tot');
		$isBusinessRelocatable = $this->input->post('bus_reloc');
		$businessListedBy      = $this->input->post('listed_by');
		$askingPriceType       = $this->input->post('ask_price_type');
		$askingPrice           = $this->input->post('ask_price');
		$priceRangeType        = $this->input->post('price_range_type');
		$priceRange            = $this->input->post('price_range');
		$latestRevenueType     = $this->input->post('latest_revenu_type');
		$latestRevenue         = $this->input->post('latest_revenu');
		$productServiceDesc    = $this->input->post('ps_desc');
		$competitionMarketDesc = $this->input->post('market');
		$growthPotential       = $this->input->post('growth');
		$reasonForSale         = $this->input->post('sale_reason');


		$userData = array('no_of_permanent_employee'=>$noe_permanent, 'no_of_contractual_emplyee'=>$noe_contractual, 'total_employee'=>$noe_total, 'is_re_locatable'=>$isBusinessRelocatable, 'business_listed_by'=>$businessListedBy, 'asking_price_type'=>$askingPriceType, 'asking_price'=>$askingPrice, 'price_range_type'=>$priceRangeType, 'price_range'=>$priceRange, 'total_revenue_type'=>$latestRevenueType, 'total_revenue'=>$latestRevenue, 'product_service_desc'=>$productServiceDesc, 'competition_market_desc'=>$competitionMarketDesc, 'growth_potential'=>$growthPotential, 'reason_for_sale'=>$reasonForSale);

		if( strcasecmp( $actType, "NEW" ) == 0 ){
			$userData['form_id'] = $this->session->userdata('last_form_id');
			$result = $this->db->insert( TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, $userData );
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
			if( $this->db->update( TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, $userData ) ){
				if ( $updateUnApprove ){
					$userDataSB = array('status'=>0);
					$this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userDataSB, array( 'form_id' => $formId ));
				}
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

	public function registerSellerAdditionalInformation( $updateUnApprove = false ){
		$property_type         = $this->input->post('property_type');
		$real_state_value      = $this->input->post('real_state_value');
		$facility_desc         = $this->input->post('facility_desc');
		$industrial_commercial = $this->input->post('industrial_commercial');
		$total_land_area_type  = $this->input->post('total_land_area_type');
		$total_land_area       = $this->input->post('total_land_area');
		$built_up_area_type    = $this->input->post('built_up_area_type');
		$built_up_area         = $this->input->post('built_up_area');
		$open_area_type        = $this->input->post('open_area_type');
		$open_area             = $this->input->post('open_area');
		$other_area            = $this->input->post('other_area');
		$fin_year              = $this->input->post('fin_year');
		$fin_revenue_turnover  = $this->input->post('fin_revenue_turnover');
		$fin_EDITDA            = $this->input->post('fin_EDITDA');
		$fin_PAT               = $this->input->post('fin_PAT');
		$fin_margin            = $this->input->post('fin_margin');
		$fin_yearly            = $this->input->post('fin_yearly');


		$userData = array('property_type'=>$property_type,'real_state_value'=>$real_state_value, 'facility_desc'=>$facility_desc, 'industrial_commercial'=>$industrial_commercial, 'total_land_area_type'=>$total_land_area_type, 'total_land_area'=>$total_land_area, 'built_up_area_type'=>$built_up_area_type, 'built_up_area'=>$built_up_area, 'open_area_type'=>$open_area_type, 'open_area'=>$open_area, 'other_area'=>$other_area, 'fin_year'=>$fin_year, 'fin_revenue_turnover'=>$fin_revenue_turnover, 'fin_EDITDA'=>$fin_EDITDA, 'fin_PAT'=>$fin_PAT, 'fin_margin'=>$fin_margin, 'fin_yearly'=>$fin_yearly);

		$result = $this->db->update( TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id') ) );
		if( !$result ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				if ( $updateUnApprove ){
					$userDataSB = array('status'=>0);
					$this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userDataSB, array( 'form_id' => $formId ));
				}
				return "true";
			}else{
				return "false";
			}
		}
	}

	public function saveAllDetails( $uploadedFileNames ){
		$i = 0;
		foreach($uploadedFileNames as $uploadedFile){
			log_message('debug', 'uploadedFile ['.print_r($uploadedFile, true).']');
			$userData = array('form_id'=>$this->session->userdata('last_form_id'), 'customer_id'=>$this->session->userdata('userid'), 'document_type'=> $uploadedFile['doc_type'], 'path'=>$uploadedFile['path']);
			$result   = $this->db->insert( TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, $userData );
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


	public function getBusinessMedia(){
		$mediaQuery = $this->db->get_where(TBL_PREFIX.TBL_BUSINESS_DOCUMENTS, array('customer_id'=>$this->session->userdata('userid'), 'form_id'=>$this->session->userdata('last_form_id')));
		if( isset( $mediaQuery ) && $mediaQuery->num_rows() > 0 ){
			return $mediaQuery->result_array();
		}else{
			return NULL;
		}
	}

	public function registerSellerPackage( $updateUnApprove = false ){
		$selectedPackage = $this->input->post('spackage');
		$form_id         = $this->input->post('form_id');
		$user_id         = $this->input->post('user_id');

		if ( isset($user_id) && $user_id != null ){
			$userData = array('customer_id'=>$user_id, 'form_id'=>$form_id, 'package_id'=>$selectedPackage );
			$whereClause = array( 'form_id'=>$form_id, 'customer_id' => $user_id );
		}else{
			$userData = array('customer_id'=>$this->session->userdata('userid'), 'form_id'=>$form_id, 'package_id'=>$selectedPackage );
			$whereClause = array( 'form_id'=>$form_id, 'customer_id' => $this->session->userdata('userid') );
		}

		$packageDetails = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $whereClause);
		log_message('debug', 'Query to check user current package ['.$this->db->last_query().']');
		if( isset( $packageDetails ) && $packageDetails->num_rows() > 0 ){
			$result = $this->db->update( TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $userData, $whereClause );
			if ( $updateUnApprove ){
				$userDataSB = array('status'=>0);
				$this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userDataSB, array( 'form_id' => $formId ));
			}
		}else{
			$result = $this->db->insert( TBL_PREFIX.TBL_CUSTOMER_PACKAGE, $userData );
		}

		log_message('debug', 'Last query to insert customer package ['.$this->db->last_query().']');
		if( $this->db->affected_rows() > 0 ){
			return true;
		}else{
			return false;
		}
	}


	public function registerBusinessPayment(){
		$property_type = $this->input->post('');

		$userData = array('property_type'=>$property_type,'real_state_value'=>$real_state_value, 'facility_desc'=>$facility_desc, 'industrial_commercial'=>$industrial_commercial, 'total_land_area_type'=>$total_land_area_type, 'total_land_area'=>$total_land_area, 'built_up_area_type'=>$built_up_area_type, 'built_up_area'=>$built_up_area, 'open_area_type'=>$open_area_type, 'open_area'=>$open_area, 'other_area'=>$other_area, 'fin_year'=>$fin_year, 'fin_revenue_turnover'=>$fin_revenue_turnover, 'fin_EDITDA'=>$fin_EDITDA, 'fin_PAT'=>$fin_PAT, 'fin_margin'=>$fin_margin, 'fin_yearly'=>$fin_yearly);

		$result = $this->db->update( TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id') ) );
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

	public function registerAdditionService(){
		//Need to check in which table data will be inserted for additional service
		$property_type         = $this->input->post('ads_featured_listing');
		$real_state_value      = $this->input->post('ads_information_memorandum');
		$facility_desc         = $this->input->post('business_plan');
		$industrial_commercial = $this->input->post('business_valuation');
		$total_land_area_type  = $this->input->post('business_mandate');
		$total_land_area       = $this->input->post('business_advisory');
		$built_up_area_type    = $this->input->post('per_sale_business_structuring');


		$userData = array('property_type'=>$property_type,'real_state_value'=>$real_state_value, 'facility_desc'=>$facility_desc, 'industrial_commercial'=>$industrial_commercial, 'total_land_area_type'=>$total_land_area_type, 'total_land_area'=>$total_land_area, 'built_up_area_type'=>$built_up_area_type, 'built_up_area'=>$built_up_area, 'open_area_type'=>$open_area_type, 'open_area'=>$open_area, 'other_area'=>$other_area, 'fin_year'=>$fin_year, 'fin_revenue_turnover'=>$fin_revenue_turnover, 'fin_EDITDA'=>$fin_EDITDA, 'fin_PAT'=>$fin_PAT, 'fin_margin'=>$fin_margin, 'fin_yearly'=>$fin_yearly);

		$result = $this->db->update( TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id') ) );
		if( !$result ){
			return "error";
		}else{
			if( $this->db->affected_rows() > 0 ){
				return "true";
			}else{
				return "false";
			}
		}
		return true;
	}


	public function setQueryInfo(){
		$name    = $this->input->post('name');
		$email   = $this->input->post('email');
		$city    = $this->input->post('city');
		$contact = $this->input->post('contact');
		$msg     = $this->input->post('msg');

		$queryData = array('name'=>$name, 'email'=>$email, 'city'=>$city, 'contact_number'=>$contact, 'message'=>$msg);
		$result = $this->db->insert(TBL_PREFIX.TBL_USER_QUERY, $queryData);
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
}
?>
