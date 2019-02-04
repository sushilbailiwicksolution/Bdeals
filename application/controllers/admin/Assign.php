<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assign extends CI_Controller {

	function __construct(){
		parent::__construct();
		//check_isvalidated();
	}

	public function index($bType, $assignedTo, $formId)
	{
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Employee_model', 'employee');
		$data['employees'] = $this->employee->getEmployeeList( $bType );
		$data['assignedTo'] = $assignedTo;
		$data['formId'] = $formId;

		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/expl_assign', $data);
		$this->parser->parse('admin/include/footer', $footer );
	}


	public function assignCase(){
		$this->load->library('parser');
		$this->load->helper('html');

		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->assignCaseToUser();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'Business Deals', $empDetails->email, NULL, NULL, 'Business Deals:: Notification!', 'Dear '.$empDetails->name.' You have a new business case.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Case assigned successfully.');
			redirect(base_url().'admin/seller');
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to assign case to ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign case to ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/seller');
		}
	}
	
		public function assignCaseUser(){
			
		 	 $user_id=$this->uri->segment('4');
		
		//die;
		$this->load->library('parser');
		$this->load->helper('html');

		$this->load->model('admin/Employee_model', 'employee');
		$empDetails = $this->employee->getEmployeeDetailsById( $this->input->post('assigned_to') );

		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->assignQueryToEmployee();
		if( strcasecmp( $res, "true" ) == 0 ){
			//Send mail code
			if( $this->emailmethods->sendMail( 'gaurav@bailiwicksolution.com', 'Business Deals', $empDetails->email, NULL, NULL, 'Business Deals:: Notification!', 'Dear '.$empDetails->name.' You have a new business case.') ){
				log_message('info', 'Email sent to '.$empDetails->email.' address');
			}else{
				log_message('info', 'Email not send to '.$empDetails->email.' address');
			}
			$this->session->set_flashdata('msg', 'Query assigned successfully.');
			redirect(base_url().'admin/singleuserquery/'.$user_id);
		}else{
			if( strcasecmp( $res, "false" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to assign case to ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, "duplicate" ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same case already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign Query to ['.$this->input->post('assigned_to').']. Due to duplicate case to same user');
			}
			redirect(base_url().'admin/singleuserquery/'.$user_id);
		}
	}


	public function assignUser(){
		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->assignCustomerToEmployee();
		if( strcasecmp( $res, 'true' ) == 0 ){
			$this->load->model('admin/Users_model', 'users');
			if( strcasecmp( $this->users->updateUserStatus( $this->input->post('user_id') ), 'true' ) == 0 ){
				$this->session->set_flashdata('msg', 'User assigned successfully.');
			}else{
				$this->session->set_flashdata('msg', 'User assignment failed.');
			}
		}else{
			if( strcasecmp( $res, 'false' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to assign user to ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, 'duplicate' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same user already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign user to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}else if( strcasecmp( $res, 'already_assigned' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same user already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign user to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}
		}
		//redirect(base_url().'admin/newusers');
		redirect(base_url().'admin/'.$this->input->post('to'));
	}

	public function assignQuery(){
		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->assignQueryToEmployee();
		if( strcasecmp( $res, 'true' ) == 0 ){
			$this->load->model('admin/Users_model', 'users');
			if( strcasecmp( $this->users->updateQueryStatus( $this->input->post('query_id') ), 'true' ) == 0 ){
				$this->session->set_flashdata('msg', 'Query assigned successfully.');
			}else{
				$this->session->set_flashdata('msg', 'Query assignment failed.');
			}
		}else{
			if( strcasecmp( $res, 'false' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, 'duplicate' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same query already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}else if( strcasecmp( $res, 'already_assigned' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same query already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}
		}
		//redirect(base_url().'admin/newusers');
		redirect(base_url().'admin/'.$this->input->post('to'));
	}

	public function businessAction( $bType, $action, $formId ){
		
				
		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->businessAction( $bType, $action, $formId );
		if( strcasecmp( $res, 'true' ) == 0 ){
			
			//mailer for acceptation start here
			$this->load->model('user_model', 'user');

$data = $this->user->mailSettings();

$website_url=$data[0]['website_url'];
$website_logo_url=$data[0]['website_logo_url'];
$email=$data[0]['email'];
$phone=$data[0]['phone'];

$data['assignedEmpDetails'] = $this->assign->getAssignedEmployee($formId);

//echo $data['assignedEmpDetails'][0]->name;

//die;

//user email , name
$data['UserDetails'] = $this->assign->getUserDetails($formId);

//print_r($data['assignedEmpDetails'][0]->name);

//Load email library
$this->load->library('email');
//SMTP & mail configuration

$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<img  src="'.$website_logo_url.'"/>';
$htmlContent .= '<h3>Dear '.ucwords(strtolower($data['UserDetails'][0]['name'])).'</h3>';
$htmlContent .= '<h4>Greetings from Business Deals!!</h4>';
$htmlContent .= '<h3>Your Listing is now live on '.$website_url.'</h3>';
$htmlContent .= '<p>For a more personalised service, we have assigned our Business Consultant who would assist you with your business/requirement.</p>';
$htmlContent .= '<p>Name: '.$data['assignedEmpDetails'][0]->name.' </p>';
$htmlContent .= '<p>Email: '.$data['assignedEmpDetails'][0]->email.'   </p>';
$htmlContent .= '<p>Mobile Number: '.$data['assignedEmpDetails'][0]->contact_no.'  </p>';
$htmlContent .= '<p>Department: '.$data['assignedEmpDetails'][0]->department.'  </p>';
$htmlContent .= '<p>For better results on your listing, you can upgrade your account so that you can reach out to greater number of Buyers/Investors/Partners.</p>';
if($bType=='sell'){
$htmlContent .= '<p><a href='.$website_url.'login-business-profile-form'.'/'.$data['assignedEmpDetails'][0]->name.'/'.$this->session->userdata('last_form_id').'/1234/abc#Packagedetails'.'>Click here to Upgrade your Listing</a></p>';
}else if($bType=='startup'){
$htmlContent .= '<p><a href='.$website_url.'login-business-profile-form-startup'.'/'.$data['assignedEmpDetails'][0]->name.'/'.$this->session->userdata('last_form_id').'/1234/abc#Packagedetails'.'>Click here to Upgrade your Listing</a></p>';	
}else if($bType=='jv'){
$htmlContent .= '<p><a href='.$website_url.'login-business-profile-form-jv'.'/'.$data['assignedEmpDetails'][0]->name.'/'.$this->session->userdata('last_form_id').'/1234/abc#Packagedetails'.'>Click here to Upgrade your Listing</a></p>';
		
}
$htmlContent .= '<p>Now you can also personally meet the consultant by booking an appointment</p>';
$htmlContent .= '<p><a href='.$website_url.'contact-us'.'>Book Appointment </a></p>';
$htmlContent .= '<p>Should you require any assistance please mail us to '.$email.' or call us at '.$phone.'.</p>';
$htmlContent .= '<p>Thanks and Regards</p>';
$htmlContent .= '<p>Team</p>';
$htmlContent .= '<p>Business Deals</p>';

$this->email->to($data['UserDetails'][0]['customer_id']);
$this->email->from($email,'Business Deals');
$this->email->subject('Your Listing is now live on Business Deals');
$this->email->message($htmlContent);
if($this->email->send()){
          //  echo "email sent";
        }else{
         //  echo "email not sent";
		}
			
			//mailer for acceptation end here
			
			$this->session->set_flashdata('msg', 'Business '.$action.' successfully.');
		}else{
			$this->session->set_flashdata('msg', 'Business acceptation failed.');

		}
		if($bType=='sell'){
		
		redirect(base_url().'admin/seller');
		
		}
		else if($bType=='startup'){
		
		redirect(base_url().'admin/startup');
		
		}
		else if($bType=='realestate'){
		
		redirect(base_url().'admin/realestate');
		
		}
		else{
			
			redirect(base_url().'admin/jv');
		}
	}
	
	/************buyer accept************/
	public function BuyerActionAccept( $bType, $action, $formId ){
		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->businessAction( $bType, $action, $formId );
		if( strcasecmp( $res, 'true' ) == 0 ){
			
			$this->session->set_flashdata('msg', 'Business accepted successfully.');
		}else{
			$this->session->set_flashdata('msg', 'Business acceptation failed.');

		}
		redirect(base_url().'admin/buy');
	}
	
	//user re assign 
	public function ReassignUser(){
		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->ReassignCustomerToEmployee();
		
		//print_r($res);
		//die;
		
		if( strcasecmp( $res, 'true' ) == 0 ){
			$this->load->model('admin/Users_model', 'users');
			if( strcasecmp( $this->users->updateUserStatus( $this->input->post('user_id') ), 'true' ) == 0 ){
				$this->session->set_flashdata('msg', 'User assigned successfully.');
			}else{
				$this->session->set_flashdata('msg', 'User assignment failed.');
			}
		}else{
			if( strcasecmp( $res, 'false' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to assign user to ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, 'duplicate' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same user already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign user to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}else if( strcasecmp( $res, 'already_assigned' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same user already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign user to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}
		}
		if($this->input->post('user_id')!=''){
			
		redirect(base_url().'admin/user_reassign/'.$this->input->post('user_id'));
		
		}
	}
	
	
	
	//query re assign
		public function reassignQuery($query_id){
		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->assignReQueryToEmployee();
		if( strcasecmp( $res, 'true' ) == 0 ){
			$this->load->model('admin/Users_model', 'users');
			if( strcasecmp( $this->users->updateQueryStatus( $this->input->post('query_id') ), 'true' ) == 0 ){
				$this->session->set_flashdata('msg', 'Query assigned successfully.');
			}else{
				$this->session->set_flashdata('msg', 'Query assignment failed.');
			}
		}else{
			if( strcasecmp( $res, 'false' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, 'duplicate' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same query already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}else if( strcasecmp( $res, 'already_assigned' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same query already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}
		}
		if($this->input->post('query_id')!=''){
			
		redirect(base_url().'admin/newquery_reassign/'.$this->input->post('query_id'));
		
		}
	}
	//contact query assign
		public function contactQuery(){
		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->assignContactToEmployee();
		if( strcasecmp( $res, 'true' ) == 0 ){
			$this->load->model('admin/Users_model', 'users');
			if( strcasecmp( $this->users->updateQueryStatus( $this->input->post('query_id') ), 'true' ) == 0 ){
				$this->session->set_flashdata('msg', 'Query assigned successfully.');
			}else{
				$this->session->set_flashdata('msg', 'Query assignment failed.');
			}
		}else{
			if( strcasecmp( $res, 'false' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, 'duplicate' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same query already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}else if( strcasecmp( $res, 'already_assigned' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same query already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}
		}
		//redirect(base_url().'admin/newusers');
		redirect(base_url().'admin/newcontact_explore/'.$this->input->post('query_id'));
	}
	
	//re assign employee to contact query
		//query re assign
		public function reassignContact($query_id){
		$this->load->model('admin/Assign_model', 'assign');
		$res = $this->assign->assignReContactToEmployee();
		if( strcasecmp( $res, 'true' ) == 0 ){
			$this->load->model('admin/Users_model', 'users');
			if( strcasecmp( $this->users->updateContactStatus( $this->input->post('query_id') ), 'true' ) == 0 ){
				$this->session->set_flashdata('msg', 'Query assigned successfully.');
			}else{
				$this->session->set_flashdata('msg', 'Query assignment failed.');
			}
		}else{
			if( strcasecmp( $res, 'false' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to db insertion fail');
			}else if( strcasecmp( $res, 'duplicate' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same query already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}else if( strcasecmp( $res, 'already_assigned' ) == 0 ){
				$this->session->set_flashdata('msg', 'Oops! same query already assigned to ['.$this->input->post('assigned_to').'].');
				log_message('debug', 'Unable to assign query to ['.$this->input->post('assigned_to').']. Due to duplicate user to same employee');
			}
		}
		if($this->input->post('query_id')!=''){
			
		redirect(base_url().'admin/newcontact_reassign/'.$this->input->post('query_id'));
		
		}
	}
	
}
?>