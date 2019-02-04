<?php
class Currency_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getCurrencyDetails(){
		$currencyDetails = $this->db->get(TBL_PREFIX.TBL_CURRENCY);
		log_message('debug','Query to get currency details ['.$this->db->last_query().']');

		if( isset( $currencyDetails ) && $currencyDetails->num_rows() > 0 ){
			return $currencyDetails->result_array();
		}else{
			return null;
		}

	}

	public function createCurrency(){
		$currency_name   = $this->input->post('currency_name');
		$currency_symbol = $this->input->post('currency_symbol');
		$country_id      = $this->input->post('country_id');
		$status          = $this->input->post('status');

		$currencyData = array('currency_name'=>$currency_name, 'currency_symbol'=>$currency_symbol, 'country_id'=>$country_id, 'status'=>$status,'add_date'=>date('Y-m-d h:i:s'));

		$result = $this->db->insert(TBL_PREFIX.TBL_CURRENCY, $currencyData);
		log_message('debug','Query to create Currency['.$this->db->last_query().']');
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
	
		public function exploreCurrency($id){
		
		
	
			$this->db->select('*');
			$this->db->where(array('id'=>$id));
			$currencyDetails = $this->db->get(TBL_PREFIX.TBL_CURRENCY);
		//log_message('debug','update fetch to create Currency['.$this->db->last_query().']');
		
		if( isset( $currencyDetails ) && $currencyDetails->num_rows() > 0 ){
			return $currencyDetails->result_array();
		}else{
			return null;
		}
		
	}
	public function editCurrency($id){
		
		$currency_name   = $this->input->post('currency_name');
		$currency_symbol = $this->input->post('currency_symbol');
		$country_id      = $this->input->post('country_id');
		$status          = $this->input->post('status');
	
				
		
		$data = array('currency_name'=>$currency_name, 'currency_symbol'=>$currency_symbol, 'country_id'=>$country_id, 'status'=>$status);
		$this->db->set($data);
		$this->db->where('id', $id);
		$result = $this->db->update( TBL_PREFIX.TBL_CURRENCY);
		log_message('debug','update fetch to create Currency['.$this->db->last_query().']');
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
