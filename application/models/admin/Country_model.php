<?php
class Country_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getProCountry(){
		$this->db->select('*');
		$countryList = $this->db->get_where(TBL_PREFIX.TBL_COUNTRY);
		log_message('debug', 'Last query to get country list ['.$this->db->last_query().']');
		if( !$countryList ){
			return null;
		}else{
			$dataToReturn = $countryList->result_array();
			return $dataToReturn;
		}

	}


	public function addCountry(){
		
		$country_name     = $this->input->post('country_name');
			$countryData = array('country_name'=>$country_name);

			$result = $this->db->insert(TBL_PREFIX.TBL_COUNTRY, $countryData);
			
				if ( $this->db->affected_rows() > 0 ){
					return "true";
				}else{
					return "false";
				}
			
		
	}
	public function getProCountryById($countryid){
		
			
			$this->db->select('*'); 
			$this->db->where(array('id'=>$countryid));
			$countryListid = $this->db->get(TBL_PREFIX.TBL_COUNTRY);
			

		log_message('debug', 'Last query to get country list by id ['.$this->db->last_query().']');
		if( !$countryListid ){
			return null;
		}else{
			$dataToReturn = $countryListid->result_array();
			return $dataToReturn;
		}

	}

	
	public function country_edit($countryid){
		
		$country_name     = $this->input->post('country_name');
		
			$countryData = array('country_name'=>$country_name);
			$this->db->set($countryData);
			$this->db->where('id', $countryid);
			$result = $this->db->update( TBL_PREFIX.TBL_COUNTRY);
			
			//log_message('debug', 'Last query to get country update by id ['.$this->db->last_query().']');
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
	public function getProRegion(){
		$this->db->select('*');
		$countryList = $this->db->get_where(TBL_PREFIX.TBL_REGION_LIST);
		log_message('debug', 'Last query to get country list ['.$this->db->last_query().']');
		if( !$countryList ){
			return null;
		}else{
			$dataToReturn = $countryList->result_array();
			return $dataToReturn;
		}

	}
	
	public function addregion(){
		
		$region_name     = $this->input->post('region_name');
			$countryData = array('region_name'=>$region_name);

			$result = $this->db->insert(TBL_PREFIX.TBL_REGION_LIST, $countryData);
			
				if ( $this->db->affected_rows() > 0 ){
					return "true";
				}else{
					return "false";
				}
			
		
	}
	public function region_edit($regionid){
		
		$region_name     = $this->input->post('region_name');
		
			$countryData = array('region_name'=>$region_name);
			$this->db->set($countryData);
			$this->db->where('region_id', $regionid);
			$result = $this->db->update( TBL_PREFIX.TBL_REGION_LIST);
			
			//log_message('debug', 'Last query to get country update by id ['.$this->db->last_query().']');
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
	
	public function getProRegionById($regionid){
		
			
			$this->db->select('*'); 
			$this->db->where(array('region_id'=>$regionid));
			$countryListid = $this->db->get(TBL_PREFIX.TBL_REGION_LIST);
			

		log_message('debug', 'Last query to get country list by id ['.$this->db->last_query().']');
		if( !$countryListid ){
			return null;
		}else{
			$dataToReturn = $countryListid->result_array();
			return $dataToReturn;
		}

	}
	public function DeleteCountry($str){ 
	
		$val=$this->input->get('str');
	
		$this->db->where('id', $val);
		$del=$this->db->delete(TBL_PREFIX.TBL_COUNTRY); 
		log_message('debug', 'Last query to DeleteCountry  ['.$this->db->last_query().']');		
		return $del;
		
	}
}
?>
