<?php
class State_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getProState(){
		
		$this->db->select(TBL_PREFIX.TBL_COUNTRY_STATE.'.id,'.TBL_PREFIX.TBL_COUNTRY_STATE.'.state_name,'.TBL_PREFIX.TBL_COUNTRY.'.country_name,'.TBL_PREFIX.TBL_REGION_LIST.'.region_name');
		
		$this->db->join(TBL_PREFIX.TBL_COUNTRY, TBL_PREFIX.TBL_COUNTRY.'.id = '.TBL_PREFIX.TBL_COUNTRY_STATE.'.country_id','left');
		$this->db->join(TBL_PREFIX.TBL_REGION_LIST, TBL_PREFIX.TBL_REGION_LIST.'.region_id = '.TBL_PREFIX.TBL_COUNTRY_STATE.'.regions_id','left');
		
		
		 $stateList = $this->db->get_where(TBL_PREFIX.TBL_COUNTRY_STATE);
		
		log_message('debug', 'Last query to get state list ['.$this->db->last_query().']');
		if( !$stateList ){
			return null;
		}else{
			$dataToReturn = $stateList->result_array();
			return $dataToReturn;
		}

	}


	public function addState(){
		
		$state_name     = $this->input->post('state_name');
		$country     = $this->input->post('country');
		$regions_id     = $this->input->post('regions_id');
		
		
			$stateData = array('state_name'=>$state_name,'country_id'=>$country,'regions_id'=>$regions_id);

			$result = $this->db->insert(TBL_PREFIX.TBL_COUNTRY_STATE, $stateData);
			
				if ( $this->db->affected_rows() > 0 ){
					return "true";
				}else{
					return "false";
				}
			
		
	}
	public function getProStateById($stateid){
		
			
			$this->db->select('*'); 
			$this->db->where(array('id'=>$stateid));
			$stateListid = $this->db->get(TBL_PREFIX.TBL_COUNTRY_STATE);
			

		log_message('debug', 'Last query to get state list by id ['.$this->db->last_query().']');
		if( !$stateListid ){
			return null;
		}else{
			$dataToReturn = $stateListid->result_array();
			return $dataToReturn;
		}

	}

	
	public function state_edit($stateid){
		
		$state_name     = $this->input->post('state_name');
		$country     = $this->input->post('country');
		$regions_id     = $this->input->post('regions_id');
		
			$stateData = array('state_name'=>$state_name,'country_id'=>$country,'regions_id'=>$regions_id);
			$this->db->set($stateData);
			$this->db->where('id', $stateid);
			$result = $this->db->update( TBL_PREFIX.TBL_COUNTRY_STATE);
			
			//log_message('debug', 'Last query to get state update by id ['.$this->db->last_query().']');
		if( !$result ){
			return "false";
		}else{
				return "true";
			}
		}
			
	public function DeleteState($str){ 
	
		$val=$this->input->get('str');
	
		$this->db->where('id', $val);
		$del=$this->db->delete(TBL_PREFIX.TBL_COUNTRY_STATE); 
		log_message('debug', 'Last query to DeleteState  ['.$this->db->last_query().']');		
		return $del;
		
	}
}
?>
