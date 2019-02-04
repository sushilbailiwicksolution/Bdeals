<?php

 function check_isvalidated( $type='user' ){
  $CI =& get_instance();
  if ( ! $CI->session->userdata( 'is_logged_in' ) && strcasecmp($type, 'user') == 0 ){
   redirect( 'logout' );
  }else if( ! $CI->session->userdata('is_admin_logged_in') && strcasecmp($type, 'admin') == 0 ){
   redirect( 'admin/login/logout' );
  }
 }

 function asset_url( $isEcho = false ){
  if ( $isEcho ){
   echo base_url().'assets/';
  }else{
   return base_url().'assets/';
  }
 }

 function content_url( $isEcho = false ){
  if ( $isEcho ){
   echo base_url().'content/';
  }else{
   return base_url().'content/';
  }
 }

 function objectToArray($d) {
  if (is_object($d)) {
   // Gets the properties of the given object
   // with get_object_vars function
   $d = get_object_vars($d);
 }
 if (is_array($d)) {
  /*
  * Return array converted to object
  * Using __FUNCTION__ (Magic constant)
  * for recursive call
  */
   return array_map(__FUNCTION__, $d);
  }else {
   // Return array
   return $d;
  }
 }

 function send_mail( $alert_type = 'email', $from, $to, $cc, $subject, $msg, $current_sys_obj ){

  if ( strcasecmp( $alert_type, 'email' ) == 0 ){
   $current_sys_obj->load->library('email');
   $current_sys_obj->email->from( $from );
   $current_sys_obj->email->to( $to );
   if( $cc != NULL ){
    $current_sys_obj->email->cc( $cc );
   }

   $current_sys_obj->email->subject( $subject );
   $current_sys_obj->email->message( $msg );

   if( $current_sys_obj->email->send() ){
    return true;
   }else{
    return false;
   }

  }else{
   return false;
  }

 }


if ( ! function_exists('script_tag')){
 function script_tag($src = '', $language = 'javascript', $type = 'text/javascript', $index_page = FALSE){
  $CI =& get_instance();

  $script = '<scr'.'ipt';

  if (is_array($src)){
   foreach ($src as $k=>$v){
    if ($k == 'src' AND strpos($v, '://') === FALSE){
     if ($index_page === TRUE){
      $script .= ' src="'.$CI->config->site_url($v).'"';
     }else{
      $script .= ' src="'.$CI->config->slash_item('base_url').$v.'"';
     }
    }else{
     $script .= "$k=\"$v\"";
    }
   }
   $script .= "></scr"."ipt>\n";
  }else{
   if ( strpos($src, '://') !== FALSE){
    $script .= ' src="'.$src.'" ';
   }elseif ($index_page === TRUE){
    $script .= ' src="'.$CI->config->site_url($src).'" ';
   }else{
    $script .= ' src="'.$CI->config->slash_item('base_url').$src.'" ';
   }
   $script .= 'language="'.$language.'" type="'.$type.'"';
   $script .= ' ></scr'.'ipt>'."\n";
  }
  return $script;
 }
}

if ( ! function_exists('link_tag')){
 function link_tag($src = '', $type = 'text/css', $index_page = FALSE){
  $CI =& get_instance();

  $link = '<link rel="stylesheet"';

  if (is_array($src)){
   foreach ($src as $k=>$v){
    if ($k == 'href' AND strpos($v, '://') === FALSE){
     if ($index_page === TRUE){
      $link .= ' href="'.$CI->config->site_url($v).'"';
     }else{
      $link .= ' href="'.$CI->config->slash_item('base_url').$v.'"';
     }
    }else{
     $link .= "$k=\"$v\"";
    }
   }
   $link .= "/>\n";
  }else{
   if ( strpos($src, '://') !== FALSE){
    $link .= ' href="'.$src.'" ';
   }elseif ($index_page === TRUE){
    $link .= ' href="'.$CI->config->site_url($src).'" ';
   }else{
    $link .= ' href="'.$CI->config->slash_item('base_url').$src.'" ';
   }
   $link .= 'type="'.$type.'"';
   $link .= ' />'."\n";
  }
  return $link;
 }
}

if ( ! function_exists('object_to_array')){
 function object_to_array($object){
  if (is_object($object)){
   // Gets the properties of the given object with get_object_vars function
   $object = get_object_vars($object);
  }
   return (is_array($object)) ? array_map(__FUNCTION__, $object) : $object;
 }
}

if ( ! function_exists('array_to_object')){
 function array_to_object($array){
  return (is_array($array)) ? (object) array_map(__FUNCTION__, $array) : $array;
 }
}

?>
