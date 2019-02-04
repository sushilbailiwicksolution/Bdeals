<?php
class Testimonials_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getProTestimonials(){
		$this->db->select('*');
		$testimonialsList = $this->db->get_where(TBL_PREFIX.TBL_TESTIMONIALS);
		log_message('debug', 'Last query to get testimonials list ['.$this->db->last_query().']');
		if( !$testimonialsList ){
			return null;
		}else{
			$dataToReturn = $testimonialsList->result_array();
			return $dataToReturn;
		}

	}
	


	public function addTestimonials($imagenamePost){
		
		$content     = $this->input->post('content');
		$name     = $this->input->post('name');
		$company_name     = $this->input->post('company_name');
		$position     = $this->input->post('position');
		$image     = $imagenamePost;
		
		
		$testimonialsData = array('content'=>$content,'name'=>$name,'company_name'=>$company_name,'position'=>$position,'image'=>$image);

			$result = $this->db->insert(TBL_PREFIX.TBL_TESTIMONIALS, $testimonialsData);
			
				if ( $this->db->affected_rows() > 0 ){
					return "true";
				}else{
					return "false";
				}
			
		
	}
	public function getProTestimonialsById($testimonialsid){
		
			
			$this->db->select('*'); 
			$this->db->where(array('id'=>$testimonialsid));
			$testimonialsListid = $this->db->get(TBL_PREFIX.TBL_TESTIMONIALS);
			

		log_message('debug', 'Last query to get testimonials list by id ['.$this->db->last_query().']');
		if( !$testimonialsListid ){
			return null;
		}else{
			$dataToReturn = $testimonialsListid->result_array();
			return $dataToReturn;
		}

	}

	
	public function testimonials_edit($testimonialsid,$image){
		
		$content     = $this->input->post('content');
		$name     = $this->input->post('name');
		$company_name     = $this->input->post('company_name');
		$position     = $this->input->post('position');
		$image     = $image;
		
		
		foreach($image as $uploadedFile){
		
		$testimonialsData = array('content'=>$content,'name'=>$name,'company_name'=>$company_name,'position'=>$position,'image'=>$uploadedFile['path']);
			$this->db->set($testimonialsData);
			$this->db->where('id', $testimonialsid);
			$result = $this->db->update( TBL_PREFIX.TBL_TESTIMONIALS);
			
			log_message('debug', 'Last query to get testimonials update by id ['.$this->db->last_query().']');
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
	
}
?>
