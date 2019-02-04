<?php
class Package_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getAvailablePackage(){
		$userDataQuery = $this->db->get_where(TBL_PREFIX.TBL_PACKAGE, array('status'=>'A'));
		if( isset( $userDataQuery ) && $userDataQuery->num_rows() > 0 ){
			return $userDataQuery->result_array();
		}else{
			return false;
		}

	}


}
?>
