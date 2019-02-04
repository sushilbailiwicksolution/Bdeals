<?php
 class PostModel extends CI_Model {
 
 function getPosts(){
  $this->db->select("key_headline,description,listing_category"); 
  $this->db->from('bd_business_details');
  $query = $this->db->get();
  return $query->result();
 }
 
}
	?>
