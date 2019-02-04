<?php
class Advertisements_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getProAdvertisements(){
		$this->db->select('*');
		$testimonialsList = $this->db->get_where(TBL_PREFIX.TBL_ADVERTISEMENT);
		log_message('debug', 'Last query to get TBL_ADVERTISEMENT list ['.$this->db->last_query().']');
		if( !$testimonialsList ){
			return null;
		}else{
			$dataToReturn = $testimonialsList->result_array();
			return $dataToReturn;
		}

	}


	public function addAdvertisement($imagenamePost){
		
	
		$adverti_name     = $this->input->post('adverti_name');
		$adverti_url     = $this->input->post('adverti_url');
		
		$image     = $imagenamePost;
		
		
		$testimonialsData = array('adverti_name'=>$adverti_name,'adverti_url'=>$adverti_url,'adverti_image'=>$image,'adverti_date'=>date('Y-m-d h:i:s'));

			$result = $this->db->insert(TBL_PREFIX.TBL_ADVERTISEMENT, $testimonialsData);
			
				if ( $this->db->affected_rows() > 0 ){
					return "true";
				}else{
					return "false";
				}
			
		
	}
	public function getProTestimonialsById($testimonialsid){
		
			
			$this->db->select('*'); 
			$this->db->where(array('adverti_id'=>$testimonialsid));
			$testimonialsListid = $this->db->get(TBL_PREFIX.TBL_ADVERTISEMENT);
			

		log_message('debug', 'Last query to get testimonials list by id ['.$this->db->last_query().']');
		if( !$testimonialsListid ){
			return null;
		}else{
			$dataToReturn = $testimonialsListid->result_array();
			return $dataToReturn;
		}

	}

	
	public function advertisement_edit($testimonialsid,$image){
		
		//echo $image;
		
		//die;
		
		 $adverti_name     = $this->input->post('adverti_name');
		 $adverti_url     = $this->input->post('adverti_url');
		//die;
		$image     = $image;
		
		if(is_array($image)){
		
		foreach($image as $uploadedFile){
			
			
		
		$testimonialsData = array('adverti_name'=>$adverti_name,'adverti_url'=>$adverti_url,'adverti_image'=>$uploadedFile['path']);
			$this->db->set($testimonialsData);
			$this->db->where('adverti_id', $testimonialsid);
			$result = $this->db->update( TBL_PREFIX.TBL_ADVERTISEMENT);
			
			log_message('debug', 'Last query to get advt image update by id ['.$this->db->last_query().']');
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
		}else{
			
		
		$testimonialsData = array('adverti_name'=>$adverti_name,'adverti_url'=>$adverti_url,'adverti_image'=>$image);
			$this->db->set($testimonialsData);
			$this->db->where('adverti_id', $testimonialsid);
			$result = $this->db->update( TBL_PREFIX.TBL_ADVERTISEMENT);
			
			log_message('debug', 'Last query to get advt image update by id ['.$this->db->last_query().']');
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
	public function DeleteAds($str){ 

	
		$val=$this->input->get('str');
	
		$this->db->where('adverti_id', $val);
		$del=$this->db->delete(TBL_PREFIX.TBL_ADVERTISEMENT); 
		log_message('debug', 'Last query to DeleteAds  ['.$this->db->last_query().']');		
		return $del;
		
	}
}
?>
