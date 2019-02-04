<?php
class Sector_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getProSector(){
		$this->db->select('*');
		$sectorList = $this->db->get_where(TBL_PREFIX.TBL_SECTOR);
		log_message('debug', 'Last query to get sector list ['.$this->db->last_query().']');
		if( !$sectorList ){
			return null;
		}else{
			$dataToReturn = $sectorList->result_array();
			return $dataToReturn;
		}

	}


	public function addSector(){
		
		$sector_name     = $this->input->post('sector_name');
			$sectorData = array('sector_name'=>$sector_name);

			$result = $this->db->insert(TBL_PREFIX.TBL_SECTOR, $sectorData);
			
				if ( $this->db->affected_rows() > 0 ){
					return "true";
				}else{
					return "false";
				}
			
		
	}
	public function getProSectorById($sectorid){
		
			
			$this->db->select('*'); 
			$this->db->where(array('id'=>$sectorid));
			$sectorListid = $this->db->get(TBL_PREFIX.TBL_SECTOR);
			

		log_message('debug', 'Last query to get sector list by id ['.$this->db->last_query().']');
		if( !$sectorListid ){
			return null;
		}else{
			$dataToReturn = $sectorListid->result_array();
			return $dataToReturn;
		}

	}

	
	public function sector_edit($sectorid){
		
		$sector_name     = $this->input->post('sector_name');
		
			$sectorData = array('sector_name'=>$sector_name);
			$this->db->set($sectorData);
			$this->db->where('id', $sectorid);
			$result = $this->db->update( TBL_PREFIX.TBL_SECTOR);
			
			//log_message('debug', 'Last query to get sector update by id ['.$this->db->last_query().']');
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
	
	public function getSubProSector(){
		$this->db->select('*');
		$this->db->join(TBL_PREFIX.TBL_SECTOR, TBL_PREFIX.TBL_SECTOR.'.id = '.TBL_PREFIX.TBL_SUB_SECTOR_LIST.'.sector_id','left');
		
		
		$sectorList = $this->db->get_where(TBL_PREFIX.TBL_SUB_SECTOR_LIST);
		log_message('debug', 'Last query to get sector list ['.$this->db->last_query().']');
		if( !$sectorList ){
			return null;
		}else{
			$dataToReturn = $sectorList->result_array();
			return $dataToReturn;
		}

	}
public function addSubSector(){
		
		$sector_id     = $this->input->post('sector_id');
		$subsector_name     = $this->input->post('sub_sector_name');
		
			$sectorData = array('sector_id'=>$sector_id,'sub_sector_name'=>$subsector_name);

			$result = $this->db->insert(TBL_PREFIX.TBL_SUB_SECTOR_LIST, $sectorData);
			log_message('debug', 'Last query to get sector list ['.$this->db->last_query().']');
				if (!$result){
					return "false";
				}else{
					return "true";
				}
			
		
	}
	public function getSubSectorById($sectorid){
		
			
			$this->db->select('*'); 
			
			$this->db->join(TBL_PREFIX.TBL_SECTOR, TBL_PREFIX.TBL_SECTOR.'.id = '.TBL_PREFIX.TBL_SUB_SECTOR_LIST.'.sector_id','left');
			$this->db->where(array('sub_id'=>$sectorid));
			
			$sectorListid = $this->db->get(TBL_PREFIX.TBL_SUB_SECTOR_LIST);
			

		log_message('debug', 'Last query to get sector list by id ['.$this->db->last_query().']');
		if( !$sectorListid ){
			return null;
		}else{
			$dataToReturn = $sectorListid->result_array();
			return $dataToReturn;
		}

	}
		public function sub_sector_edit($sectorid){
		
		$sub_sector_name     = $this->input->post('sub_sector_name');
		$sector_id     = $this->input->post('sector_id');
		
			$sectorData = array('sector_id'=>$sector_id,'sub_sector_name'=>$sub_sector_name);
			$this->db->set($sectorData);
			$this->db->where('sub_id', $sectorid);
			$result = $this->db->update( TBL_PREFIX.TBL_SUB_SECTOR_LIST);
			
			//log_message('debug', 'Last query to get sector update by id ['.$this->db->last_query().']');
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
