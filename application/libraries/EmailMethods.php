<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailMethods{
	public function sendMail( $from, $fromName='Business Deals', $to, $cc, $bcc, $subject, $message ){
		$CI =& get_instance();
		$CI->load->library('email');

		$CI->email->from( $from, $fromName );
		$CI->email->to( $to );

		if( $cc != null ){
			$CI->email->cc( $cc );
		}
		if( $bcc != null ){
			$CI->email->bcc( $bcc );
		}

		$CI->email->subject( $subject );
		$CI->email->message( $message );

		return $CI->email->send();

	}
}
