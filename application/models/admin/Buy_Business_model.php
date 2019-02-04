<?php
class Buy_Business_model extends CI_Model{


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

	public function updateBuyerBusinessProfile( $updateUnApprove = false ){
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
		$country                        = $this->input->post('country');
		$region                         = $this->input->post('region');
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
		$next_tab         = $this->input->post('next_tab');
		$formId                         = $this->input->post('formId');

		$userData = array('buy_invest_in'=>$buy_invest_in,'other_buy_invest'=>$other_buy_invest, 'profile_business_buyer'=>$profile_business_buyer,
		'profile_corporate_investor'=>$profile_corporate_investor, 'profile_pe_vc'=>$profile_pe_vc, 'profile_nri_foreign_investor'=>$profile_nri_foreign_investor,
		'profile_business_lender'=>$profile_business_lender, 'profile_business_broker'=>$profile_business_broker, 'bi_acquisition_buyout'=>$bi_acquisition_buyout, 'bi_distributor_cf'=>$bi_distributor_cf,
		'bi_invest_business'=>$bi_invest_business, 'bi_debt_financing'=>$bi_debt_financing, 'bi_jv_partnership'=>$bi_jv_partnership,
		'bi_startup_angel'=>$bi_startup_angel, 'country'=>$country, 'region'=>$region,'state'=>$state,'city'=>$city,'industry_preference'=>$industry_preference,
		'investment_min_price_currency'=>$investment_min_price_currency,'investment_min'=>$investment_min,'investment_max_price_currency'=>$investment_max_price_currency,'investment_max_price_unit'=>$investment_max_price_unit,'investment_max'=>$investment_max,'funding_own'=>$funding_own,'funding_debt'=>$funding_debt,'total_fund'=>$fund_tot,'investment_timeline'=>$investment_timeline,
		'business_preferences'=>$business_preferences,'purpose'=>$purpose);

		if ( $updateUnApprove ){
			//$userData['status'] = 0;
		}

		$result = $this->db->update( TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, $userData, array( 'form_id' => $formId ) );
		log_message('debug', 'Buyer_model: updateBuyerBusinessProfile: ['.$this->db->last_query().']');
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

	public function updatePostRequirement( $updateUnApprove = false ){
		$key_requirement                     = $this->input->post('key_requirement');
		$i=0;
		foreach($this->input->post('industry_preference') as $categories){
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
		$req_investment_min_price_currency   =  $this->input->post('req_investment_min_price_currency');
		
		$req_investment_min                  = $this->input->post('req_investment_min');
		$req_investment_min_price_unit       = $this->input->post('req_investment_min_price_unit');
		$req_investment_max_price_currency   = $this->input->post('req_investment_max_price_currency');
		$req_investment_max                  = $this->input->post('req_investment_max');
		$req_investment_max_price_unit       = $this->input->post('req_investment_max_price_unit');
		$next_tab         = $this->input->post('next_tab');
		$formId                         = $this->input->post('formId');

		$userData = array('key_requirement'=>$key_requirement, 'buy_listing_category'=>$listing_category,
		'buy_location'=>$state2,'req_investment_min_price_currency'=>$req_investment_min_price_currency, 'req_investment_min'=>$req_investment_min,
		'req_investment_min_price_unit'=>$req_investment_min_price_unit,'req_investment_max_price_currency'=>$req_investment_max_price_currency,'req_investment_max'=>$req_investment_max,'req_investment_max_price_unit'=>$req_investment_max_price_unit);

		if ( $updateUnApprove ){
			//$userData['status'] = 0;
		}

		$result = $this->db->update( TBL_PREFIX.TBL_BUY_BUSINESS_DETAILS, $userData, array( 'form_id' => $formId ) );
		log_message('debug', 'Buyer_model: updateBuyerBusinessProfile: ['.$this->db->last_query().']');
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
}
?>
