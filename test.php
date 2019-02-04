<?php			
			// The mail sending protocol.
    $config['protocol'] = 'smtp';
    // SMTP Server Address for Gmail.
    $config['smtp_host'] = 'smtp.gmail.com';
    // SMTP Port - the port that you is required
    $config['smtp_port'] = '465';
    // SMTP Username like. (abc@gmail.com)
    $config['smtp_user'] = 'rajesh.meena23@gmail.com';
    // SMTP Password like (abc***##)
    $config['smtp_pass'] = 'sunitameena@25';
    // Load email library and passing configured values to email library
    //$this->load->library('email', $config);
    // Sender email address
    $this->email->from('sample@gmail.com', 'sample');
    // Receiver email address.for single email
	
	$to=$this->input->post('email');
    $this->email->to($to);
    //send multiple email
    //$this->email->to(abc@gmail.com,xyz@gmail.com,jkl@gmail.com);
    // Subject of email
	$subject="Thank you for registering with Business Deals";
    $this->email->subject($subject);
    // Message in email
	$message = '<html><body>';	
	$message .="<b>Dear ".$this->input->post('lb_uname').",<br></b>"; 
			$message .="Thank you for registering with Business Deals. It is a pleasure having you on board!<br>"; 
			$message .= "</body></html>";
			
    $this->email->message($message);
    // It returns boolean TRUE or FALSE based on success or failure
   echo $sendmail=$this->email->send(); 
   
   ?>