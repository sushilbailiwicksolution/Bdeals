<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	function __construct(){
		parent::__construct();
		//check_isvalidated();
        }

	public function getState(){
		$this->load->library('parser');
		$this->load->helper('html');
		$states = $this->cachemethods->getStateByCountry( $this->input->post('contid') );
		if( isset( $states ) && $states != null ){
			echo json_encode($states);
		}else{
			echo '[{"id":-1, "country_id":'.$this->input->post('contid').', "state_name":"Not Found"}]';
		}
	}
	
	public function getRState(){
		$this->load->library('parser');
		$this->load->helper('html');
		//log_message('info', 'Filter Dataregion ['.print_r($this->input->post('rid')).']');
		$states = $this->cachemethods->getStateByRegion( $this->input->post('rid') );
		if( isset( $states ) && $states != null ){
			echo json_encode($states);
		}else{
			echo '[{"id":-1, "regions_id":'.$this->input->post('rid').', "state_name":"Not Found"}]';
		}
	}
	
	public function getCatSub(){
		$this->load->library('parser');
		$this->load->helper('html');
		//log_message('info', 'Filter Dataregion ['.print_r($this->input->post('rid')).']');
		$states = $this->cachemethods->getSubCatBycategory( $this->input->post('rid') );
		if( isset( $states ) && $states != null ){
			echo json_encode($states);
		}else{
			echo '[{"id":-1, "sector_id":'.$this->input->post('rid').', "sub_sector_name":"Not Found"}]';
		}
	}


	public function getCities(){
		$this->load->library('parser');
		$this->load->helper('html');
		$cities = $this->cachemethods->getCityByStateId( $this->input->post('stid') );
		if( isset( $cities ) && $cities != null ){
			echo json_encode($cities);
		}else{
			echo '[{"id":-1, "state_id":'.$this->input->post('stid').', "city_name":"Not Found"}]';
		}
	}
}
