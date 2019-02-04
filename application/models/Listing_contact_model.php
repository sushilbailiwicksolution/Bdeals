<?php
class Listing_contact_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}
	
	
	public function putContactForm(){
		
		//print_r("hello");
		//die;
		
		$frm_id = $this->input->post('frm_id');
		$business_type            = $this->input->post('business_type');
		$name                     = $this->input->post('name');
		$email                    = $this->input->post('email');
		$mobile                   = $this->input->post('mobile');
		$country                  = $this->input->post('country');
		$message                  = $this->input->post('message');
		$contact_to_customer_id   = $this->input->post('contact_to_customer_id');
		$contact_from_customer_id = $this->input->post('contact_from_customer_id');
		
		//post when user id is blank
		$lb_address = $this->input->post('lb_address');
		$lb_location = $this->input->post('lb_location');
		$passwd = $this->input->post('passwd');
		$lb_web = $this->input->post('lb_web');
		$lb_owner = $this->input->post('lb_owner');
		$lb_broker = $this->input->post('lb_broker');
		$lb_representative = $this->input->post('lb_representative');
		
	 $contact_type = $this->input->post('contact_type');
	
	//die;
		
		$who = $lb_owner;
		if( isset($lb_owner) ){
			$who = $lb_owner;
		}else if( isset($lb_broker) ){
			$who = $lb_broker;
		}else if( isset( $lb_representative ) ){
			$who = $lb_representative;
		}

		
		log_message('debug', 'Form_id ['.$frm_id.']');
		log_message('debug', 'Business_type ['.$business_type.']');
		
		$userid=$this->session->userdata('userid');
		//print_r($userid);
		//die;
		
		
		
		if($userid==''){
			
		$whereClause = array('CUSTOMER_ID'=>$email);
		$userDataQuery = $this->db->get_where(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $whereClause);
		log_message('debug', 'Listing_Contact_model: Checking Basic Profile: ['.$this->db->last_query().']');
		if( isset( $userDataQuery ) && $userDataQuery->num_rows() > 0 ){
			return 'Already existing user, Kindly login first to fill the form';
		}else{	
		
			$userData = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'country'=>$country, 'message'=> $message,'form_id'=>$frm_id,'contact_to'=>$contact_to_customer_id,'contact_from'=>$contact_from_customer_id,'date'=>date('Y-m-d h:i:s'),'contact_type'=>$contact_type);
			$result   = $this->db->insert( TBL_PREFIX.TBL_LISTING_CONTACTS, $userData );
		
		log_message('debug', 'Listing_Contact_model: Checking Basic Profile: ['.$this->db->last_query().']');
		
		
			if( $result ){
				if( $this->db->affected_rows() > 0 ){
					$i++;
				}
			}
			$userData = null;
	
		
			if( $i > 0 ){
				//return true;
				//return 'Successfully Submitted';
			}else{
				//return false;
				//return 'There is some technical problem, Kindly try again.';
			}
			/*************register user if not login start here****************/
		
		
			$user_Data = array('customer_id'=>$email, 'name'=>$name, 'country_code'=>$country,'contact_number'=>$mobile,'address'=>$lb_address,'location'=>$lb_location,'password'=>$passwd,'website'=>$lb_web,'who'=>$who,'register_date'=>date('Y-m-d h:i:s'),'contact_type'=>$contact_type);

			$result2 = $this->db->insert(TBL_PREFIX.TBL_CUSTOMER_DETAILS, $user_Data);	
			log_message('debug', 'User_model: registerUser: ['.$this->db->last_query().']');
			if ( !$result2 && $this->db->error()['code'] == 1062 ){
				return "duplicate";
			}else{
				if ( $this->db->affected_rows() > 0){
					
				
					return 'Successfully Submitted';
				
				}else{
					return 'There is some technical problem, Kindly try again.';
				}
			}
		}
		
		/*************register user if not login end here******************/
	}else{
		
		$userData = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'country'=>$country, 'message'=> $message,'form_id'=>$frm_id,'contact_to'=>$contact_to_customer_id,'contact_from'=>$contact_from_customer_id,'date'=>date('Y-m-d h:i:s'),'contact_type'=>$contact_type);
			$result   = $this->db->insert( TBL_PREFIX.TBL_LISTING_CONTACTS, $userData );
		
		log_message('debug', 'Listing_Contact_model: Checking Basic Profile: ['.$this->db->last_query().']');
		
		
			if( $result ){
				if( $this->db->affected_rows() > 0 ){
					$i++;
				}
			}
			$userData = null;
	
		
			if( $i > 0 ){
				//return true;
				return 'Successfully Submitted';
				
				
				
			}else{
				//return false;
				return 'There is some technical problem, Kindly try again.';
			}
			
			
		
		}	
	}	
}	
?>	