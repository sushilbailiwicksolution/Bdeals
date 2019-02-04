<?php
class Property_tags_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getProTags(){
		$this->db->select('*');
		$tagList = $this->db->get_where(TBL_PREFIX.TBL_PROPERTY_TAGS);
		log_message('debug', 'Last query to get tag list ['.$this->db->last_query().']');
		if( !$tagList ){
			return null;
		}else{
			$dataToReturn = $tagList->result_array();
			return $dataToReturn;
		}

	}


	public function addTags(){
		
		$tag_name     = $this->input->post('tag_name');
		$tag_background_color    = $this->input->post('tag_background_color');
		$tag_color = $this->input->post('tag_color');
		

		

			$tagsData = array('tag_name'=>$tag_name, 'tag_background_color'=>$tag_background_color, 'tag_color'=>$tag_color);

			$result = $this->db->insert(TBL_PREFIX.TBL_PROPERTY_TAGS, $tagsData);
			
				if ( $this->db->affected_rows() > 0 ){
					return "true";
				}else{
					return "false";
				}
			
		
	}
	public function getProTagsById($tagid){
		
			
			$this->db->select('*'); 
			$this->db->where(array('tag_id'=>$tagid));
			$tagListid = $this->db->get(TBL_PREFIX.TBL_PROPERTY_TAGS);
			

		log_message('debug', 'Last query to get tag list by id ['.$this->db->last_query().']');
		if( !$tagListid ){
			return null;
		}else{
			$dataToReturn = $tagListid->result_array();
			return $dataToReturn;
		}

	}

	
	public function tag_edit($tagid){
		
		$tag_name     = $this->input->post('tag_name');
		$tag_background_color    = $this->input->post('tag_background_color');
		$tag_color = $this->input->post('tag_color');
		
				

			$tagsData = array('tag_name'=>$tag_name, 'tag_background_color'=>$tag_background_color, 'tag_color'=>$tag_color);
			$this->db->set($tagsData);
			$this->db->where('tag_id', $tagid);
			$result = $this->db->update( TBL_PREFIX.TBL_PROPERTY_TAGS);
			
			log_message('debug', 'Last query to get tag update by id ['.$this->db->last_query().']');
				if ( $this->db->affected_rows() > 0 ){
					return "true";
				}else{
					return "false";
				}
			
		
	}
	
}
?>
