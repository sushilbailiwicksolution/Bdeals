<?php
class Jv_Business_model extends CI_Model{


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

		$userData = array('key_headline'=>$keyHeadline,'description'=>$businessDesc,'location_country'=>$businessCountry,'location_region'=>$businessRegion,'location_state'=>$businessState,'location_city'=>$businessCity,'listing_category'=>$businessCategory,'listing_sub_category'=>$businessSubCategory,'legal_entity'=>$legalEntity,'yoe'=>$establishmentYear,'current_status_of_business'=>$currentBusinessStatus);

		if ( $updateUnApprove ){
			$userData['status'] = 0;
		}

		$result = $this->db->update( TBL_PREFIX.TBL_BUSINESS_DETAILS, $userData, array( 'form_id' => $formId ) );
		if( !$result ){
			return array('status'=>'error', 'next_tab'=>$next_tab);
		}else{
				return array('status'=>'true','next_tab'=>$next_tab);
			}
		
	}

	public function updateBusinessDetails( $updateUnApprove = false ){
		$pemployee               = $this->input->post('pemployee');
		$cemployee               = $this->input->post('cemployee');
		$temployee               = $this->input->post('temployee');
		$bus_reloc               = $this->input->post('bus_reloc');
		$listed_by               = $this->input->post('listed_by');
		$ask_price_currency       = $this->input->post('ask_price_currency');
		$ask_price             = $this->input->post('ask_price');
		$ask_price_unit             = $this->input->post('ask_price_unit');
		$priceRangeType        = $this->input->post('price_range_type');
		$priceRange            = $this->input->post('price_range');
		$latest_revenu_currency     = $this->input->post('latest_revenu_currency');
		$latest_revenu         = $this->input->post('latest_revenu');
		$latest_revenu_unit         = $this->input->post('latest_revenu_unit');
		$product_service_desc    = $this->input->post('product_service_desc');
		$competition_market_desc = $this->input->post('competition_market_desc');
		$growth_potential        = $this->input->post('growth_potential');
		$reason_for_sale         = $this->input->post('reason_for_sale');
		$next_tab                = $this->input->post('next_tab');
		$formId                  = $this->input->post('formId');

		$userData = array('no_of_permanent_employee'=>$pemployee,'no_of_contractual_emplyee'=>$cemployee,'total_employee'=>$temployee,'is_re_locatable'=>$bus_reloc, 'business_listed_by'=>$listed_by,'ask_price_currency'=>$ask_price_currency,'ask_price'=>$ask_price,'ask_price_unit'=>$ask_price_unit,'price_range_type'=>$priceRangeType, 'price_range'=>$priceRange,'latest_revenu_currency'=>$latest_revenu_currency, 'latest_revenu'=>$latest_revenu,'latest_revenu_unit'=>$latest_revenu_unit,'product_service_desc'=>$product_service_desc,'competition_market_desc'=>$competition_market_desc, 'growth_potential'=>$growth_potential, 'reason_for_sale'=>$reason_for_sale);

		$result = $this->db->update( TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, $userData, array( 'form_id' => $formId ) );
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
		
		$formId                = $this->input->post('formId');

		$purpose_jv         = $this->input->post('purposeJv');
		$nature_jv          = $this->input->post('natureJv');
		$previous_investment_currency          = $this->input->post('previous_investment_currency');
		$prev_investment    = $this->input->post('previous_investment');
		$previous_investment_unit    = $this->input->post('previous_investment_unit');
		$investment_required_currency    = $this->input->post('investment_required_currency');
		$reqd_investment    = $this->input->post('investment_required');
		$investment_required_unit    = $this->input->post('investment_required_unit');
		$invest_range       = $this->input->post('investment_range');
		$role_new_investo   = $this->input->post('role');
		$role_new_invest_other   = $this->input->post('role_new_invest_other');
		$proposed_deal      = $this->input->post('purpose_deal');
		$purpose_jv_other      = $this->input->post('purpose_jv_other');
		

		$userData = array('purpose_jv'=>$purpose_jv,'nature_jv'=>$nature_jv, 'prev_investment'=>$prev_investment,'previous_investment_currency'=>$previous_investment_currency,'previous_investment_unit'=>$previous_investment_unit, 'reqd_investment'=>$reqd_investment,'investment_required_currency'=>$investment_required_currency,'investment_required_unit'=>$investment_required_unit, 'invest_range'=>$invest_range, 'role_new_investo'=>$role_new_investo,'role_new_invest_other'=>$role_new_invest_other, 'proposed_deal'=>$proposed_deal,'purpose_jv_other'=>$purpose_jv_other);


		$result = $this->db->update( TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, $userData, array( 'form_id' => $formId ) );
		log_message('debug','Query to update JV details ['.$this->db->last_query().']');
		if( !$result ){
			return array('status'=>'error', 'next_tab'=>$next_tab);
		}else{
			if($result){

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



	public function updateSellerAdditionalDetails( $updateUnApprove = false ){
		$next_tab              = $this->input->post('next_tab');
		$formId                = $this->input->post('formId');


		log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo');
		$response = "true";
		$dataArr = array();
		$count = $this->input->post('count');
		for( $i=0; $i < $count; $i++){
			$val = $i+1;
			log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::In Count loop'.$val);
			$dataArr[$i]['property_id']         = $this->input->post('property_id_'.$val); 

			$dataArr[$i]['property_type']         = $this->input->post('property_type_'.$val);
			log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::In Count loop'.$this->input->post('property_type_'.$val));
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
			/*dataArr[$i]['fin_year']              = $this->input->post('fin_year');
			$fin_revenue_turnover  = $this->input->post('fin_revenue_turnover');
			$fin_EDITDA            = $this->input->post('fin_EDITDA');
			$fin_PAT               = $this->input->post('fin_PAT');
			$fin_margin            = $this->input->post('fin_margin');
			$fin_yearly            = $this->input->post('fin_yearly');*/
		}

		$val = 0;
		$dataArrFin = array();
		$count_fin = $this->input->post('count-fin');
		for( $ii=0; $ii < $count_fin; $ii++){
			$val = $ii+1;
			log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::In Count loop'.$val);
			$dataArrFin[$ii]['finance_id']           = $this->input->post('finance_id_'.$val);
			$dataArrFin[$ii]['fin_year']             = $this->input->post('fin_year_'.$val);
			$dataArrFin[$ii]['fin_revenue_turnover'] = $this->input->post('fin_revenue_turnover_'.$val);
			$dataArrFin[$ii]['fin_EDITDA']           = $this->input->post('fin_EDITDA_'.$val);
			$dataArrFin[$ii]['fin_PAT']              = $this->input->post('fin_PAT_'.$val);
			$dataArrFin[$ii]['fin_margin']           = $this->input->post('fin_margin_'.$val);
			//$dataArrFin[$ii]['fin_yearly']           = $this->input->post('fin_yearly_'.$val);



		}




		log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo:::: after loop');
		for($j=0; $j < $count; $j++){
			log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo::::: in loop again');
			if(($dataArr[$j]['property_id']==NULL)){
				log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo:::::: property not set');
				$userData = array('form_id'=>$this->session->userdata('last_form_id'),'property_type'=>$dataArr[$j]['property_type'],'real_state_value_unit'=>$dataArr[$j]['real_state_value_unit'],'real_state_value'=>$dataArr[$j]['real_state_value'], 'facility_desc'=>$dataArr[$j]['facility_desc'], 'industrial_commercial'=>$dataArr[$j]['industrial_commercial'], 'total_land_area_type'=>$dataArr[$j]['total_land_area_type'], 'total_land_area'=>$dataArr[$j]['total_land_area'], 'built_up_area_type'=>$dataArr[$j]['built_up_area_type'], 'built_up_area'=>$dataArr[$j]['built_up_area'], 'open_area_type'=>$dataArr[$j]['open_area_type'], 'open_area'=>$dataArr[$j]['open_area'], 'other_area'=>$dataArr[$j]['other_area'], 'carpet_area'=>$dataArr[$j]['carpet_area']);


				
				$result = $this->db->insert( TBL_PREFIX.TBL_ADDITIONAL_DETAILS, $userData );
				log_message('debug', 'JV_model: registerSellerAdditionalInformation: ['.$this->db->last_query().']');
				
				if ( !$result && $this->db->error()['code'] == 1062 ){
					$response = "false";
					log_message('debug', 'JV_model: registerSellerAdditionalInformation: [FALSE:::: Duplicate Data:]');
				}else{
					if ( $this->db->affected_rows() > 0 ){
						$response = "true";
						log_message('debug', 'JV_model: registerSellerAdditionalInformation: [TRUE:::: Data Insertd]');
					}else{
						$response = "true";
						log_message('debug', 'JV_model: registerSellerAdditionalInformation: [FALSE:::: Data not Inserted]');
					}
				}

			}else{
				log_message('debug','In registerSellerAdditionalInformation:::::::::::::::::::::::Yahoo::::: In else');
				$userData = array('property_type'=>$dataArr[$j]['property_type'],'real_state_value_unit'=>$dataArr[$j]['real_state_value_unit'],'real_state_value'=>$dataArr[$j]['real_state_value'], 'facility_desc'=>$dataArr[$j]['facility_desc'], 'industrial_commercial'=>$dataArr[$j]['industrial_commercial'], 'total_land_area_type'=>$dataArr[$j]['total_land_area_type'], 'total_land_area'=>$dataArr[$j]['total_land_area'], 'built_up_area_type'=>$dataArr[$j]['built_up_area_type'], 'built_up_area'=>$dataArr[$j]['built_up_area'], 'open_area_type'=>$dataArr[$j]['open_area_type'], 'open_area'=>$dataArr[$j]['open_area'], 'other_area'=>$dataArr[$j]['other_area'], 'carpet_area'=>$dataArr[$j]['carpet_area']);
				
					
				$result = $this->db->update( TBL_PREFIX.TBL_ADDITIONAL_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id'),'id'=>$dataArr[$j]['property_id'] ) );
				log_message('debug', 'JV_model: registerSellerAdditionalInformation: ['.$this->db->last_query().']');

				if( !$result ){
					$response = "false";
					log_message('debug', 'JV_model: registerSellerAdditionalInformation: [FALSE:::: Error]');
				}else{
					if( $this->db->affected_rows() > 0 ){
						$response = "true";
						log_message('debug', 'JV_model: registerSellerAdditionalInformation: [TRUE:::: Data Updated]');
					}else{
						$response = "true";
						log_message('debug', 'JV_model: registerSellerAdditionalInformation: [TRUE:::: Data Not Updated]');
					}
				}

			}	
		}

		
		$response = "true";

		log_message('debug','In registerSellerAdditionalFinancialInformation:::::::::::::::::::::::Yahoo:::: after loop');
		for($j=0; $j < $count_fin; $j++){
			log_message('debug','In registerSellerAdditionalFinancialInformation:::::::::::::::::::::::Yahoo::::: in loop again');
			if(($dataArrFin[$j]['finance_id']==NULL)){
				log_message('debug','In registerSellerAdditionalFinancialInformation:::::::::::::::::::::::Yahoo:::::: finance not set');
				$userData = array('form_id'=>$this->session->userdata('last_form_id'),'fin_year'=>$dataArrFin[$j]['fin_year'],'fin_revenue_turnover'=>$dataArrFin[$j]['fin_revenue_turnover'],'fin_EDITDA'=>$dataArrFin[$j]['fin_EDITDA'], 'fin_PAT'=>$dataArrFin[$j]['fin_PAT'], 'fin_margin'=>$dataArrFin[$j]['fin_margin']);


				
				$result = $this->db->insert( TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS, $userData );
				log_message('debug', 'JV_model: registerSellerAdditionalFinancialInformation: ['.$this->db->last_query().']');
				
				if ( !$result && $this->db->error()['code'] == 1062 ){
					$response = "false";
					log_message('debug', 'JV_model: registerSellerAdditionalFinancialInformation: [FALSE:::: Duplicate Data:]');
				}else{
					if ( $this->db->affected_rows() > 0 ){
						if ( $updateUnApprove ){
						$userDataSB = array('status'=>0);
						$this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userDataSB, array( 'form_id' => $formId ));
					}
						$response = "true";
						log_message('debug', 'JV_model: registerSellerAdditionalFinancialInformation: [TRUE:::: Data Insertd]');
					}else{
						$response = "true";
						log_message('debug', 'JV_model: registerSellerAdditionalFinancialInformation: [FALSE:::: Data not Inserted]');
					}
				}

			}else{
				log_message('debug','In registerSellerAdditionalFinancialInformation:::::::::::::::::::::::Yahoo::::: In else');
				$userData = array('form_id'=>$this->session->userdata('last_form_id'),'fin_year'=>$dataArrFin[$j]['fin_year'],'fin_revenue_turnover'=>$dataArrFin[$j]['fin_revenue_turnover'],'fin_EDITDA'=>$dataArrFin[$j]['fin_EDITDA'], 'fin_PAT'=>$dataArrFin[$j]['fin_PAT'], 'fin_margin'=>$dataArrFin[$j]['fin_margin']);
				
					
				$result = $this->db->update( TBL_PREFIX.TBL_ADDITIONAL_FINANCIAL_DETAILS, $userData, array( 'form_id' => $this->session->userdata('last_form_id'),'id'=>$dataArrFin[$j]['finance_id'] ) );
				log_message('debug', 'JV_model: registerSellerAdditionalFinancialInformation: ['.$this->db->last_query().']');

				if( !$result ){
					$response = "false";
					log_message('debug', 'JV_model: registerSellerAdditionalFinancialInformation: [FALSE:::: Error]');
				}else{
					if( $this->db->affected_rows() > 0 ){
						if ( $updateUnApprove ){
						$userDataSB = array('status'=>0);
						$this->db->update(TBL_PREFIX.TBL_BUSINESS_DETAILS, $userDataSB, array( 'form_id' => $formId ));
				}
						$response = "true";
						log_message('debug', 'JV_model: registerSellerAdditionalFinancialInformation: [TRUE:::: Data Updated]');
					}else{
						$response = "true";
						log_message('debug', 'JV_model: registerSellerAdditionalFinancialInformation: [TRUE:::: Data Not Updated]');
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




		/*$userData = array('property_type'=>$property_type,'real_state_value'=>$real_state_value,'facility_desc'=>$facility_desc,'industrial_commercial'=>$industrial_commercial, 'total_land_area_type'=>$total_land_area_type,'total_land_area'=>$total_land_area,'built_up_area_type'=>$built_up_area_type,'built_up_area'=>$built_up_area,'open_area_type'=>$open_area_type,'open_area'=>$open_area,'other_area'=>$other_area,'fin_year'=>$fin_year, 'fin_revenue_turnover'=>$fin_revenue_turnover, 'fin_EDITDA'=>$fin_EDITDA, 'fin_PAT'=>$fin_PAT, 'fin_margin'=>$fin_margin, 'fin_yearly'=>$fin_yearly);

		$result = $this->db->update( TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, $userData, array( 'form_id' => $formId ) );
		log_message('debug','Query to update additional details ['.$this->db->last_query().']');
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
		}*/
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
	
	public function getApprovedCount($btype){ //get all approved
		
		$this->db->select('COUNT(form_id)');
	
	
		
		$countAssigned = $this->db->where(array(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.status'=>'1','business_type'=>$btype))->from(TBL_PREFIX.TBL_BUSINESS_DETAILS)->count_all_results();
		
		

		//log_message('debug', 'Last query to getApprovedCount100000000  ['.$this->db->last_query().']');
		//log_message('debug', 'Last query to getApprovedCount244444444  ['. $countAssigned.']');
		
		if( !$countAssigned ){
			return null;
		}else{
			return $countAssigned;
		}	
	}
	
	public function getAllCount($btype){ //get all form
		
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
	public function getJVReport(){

	
		$this->db->select(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.listing_category,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.name,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.contact,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.email,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.address,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.expiry_date,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.num_business_viewed,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.add_to_favorite,'.TBL_PREFIX.TBL_EMPLOYEE.'.name as Empname,'.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_city,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.other_city,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.location_state,'.TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_add_date,'.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.added_date');
		
		
		$this->db->join(TBL_PREFIX.TBL_JV_BUSINESS_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id = '.TBL_PREFIX.TBL_JV_BUSINESS_DETAILS.'.form_id','left');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_DETAILS, TBL_PREFIX.TBL_BUSINESS_DETAILS.'.customer_id = '.TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.customer_id','left');
		$this->db->join(TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY, TBL_PREFIX.TBL_CUSTOMER_DETAILS.'.id = '.TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.customer_id','left');
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CUSTOMER_RESPONSIBILITY.'.assigned_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id','left');
	
	
	
		$this->db->order_by(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.form_id',"desc");
		
		$this->db->where(TBL_PREFIX.TBL_BUSINESS_DETAILS.'.business_type', 'jv_business');
		$userBusinessData = $this->db->get(TBL_PREFIX.TBL_BUSINESS_DETAILS);
	
	//print_r($userBusinessData);
	
	
		log_message('debug', 'Last Query for business profileExportdata889956555 ['.$this->db->last_query().']');
		if( !$userBusinessData ){
			return null;
		}else{
			return $userBusinessData->result_array();
			//return $dataToReturn;
		}
	}
}
?>
