<?php
class Employee_model extends CI_Model{


	public function __construct(){
		parent::__construct();
	}

	public function getEmployees(){
		$this->db->select('id, name, email, country, contact_no, add_date, status');
		$employeeList = $this->db->get_where(TBL_PREFIX.TBL_EMPLOYEE);
		log_message('debug', 'Last query to get employee list ['.$this->db->last_query().']');
		if( !$employeeList ){
			return null;
		}else{
			$dataToReturn = $employeeList->result_array();
			return $dataToReturn;
		}

	}

	public function getEmployeeDetailsById( $empId ){
		$this->db->select('name, email');
		$employeeData = $this->db->get_where(TBL_PREFIX.TBL_EMPLOYEE, array('id'=>$empId));
		if( !$employeeData ){
			return null;
		}else{
			return $employeeData->result_array();
		}
	}

	public function addEmployee(){
		$name     = $this->input->post('name');
		$email    = $this->input->post('email');
		$password = $this->input->post('password');
		$country  = $this->input->post('country');
		$contact  = $this->input->post('contact');
		$add_date = $this->input->post('add_date');

		$resp = $this->createEmployeeIdPassword($email, $password);
		if( strcmp($resp['status'], 'duplicate') == 0 || strcmp($resp['status'], 'false') == 0 ){
			return $resp['status'];
		}else{

			$employeeData = array('id'=>$resp['id'], 'name'=>$name, 'contact_no'=>$contact, 'email'=>$email, 'country'=>$country, 'add_date'=>$add_date);

			$result = $this->db->insert(TBL_PREFIX.TBL_EMPLOYEE, $employeeData);
			/*if ( !$result && $this->db->error()['code'] == 1062 ){
				return "duplicate";
			}else{*/
				if ( $this->db->affected_rows() > 0 ){
					return "true";
				}else{
					return "false";
				}
			/*}*/
		}
	}

	public function createEmployeeIdPassword( $email, $password ){
		$userEmpData = array('user_id'=>$email, 'password'=>$password, 'type'=>'employee');
		$result = $this->db->insert(TBL_PREFIX.TBL_USERS, $userEmpData);
		if( !$result && $this->db->error()['code'] == 1062 ){
			return array('status'=>'duplicate', 'id'=>-1);
		}else{
			if ( $this->db->affected_rows() > 0 ){
				return array('status'=>'true', 'id'=>$this->db->insert_id());
			}else{
				return array('status'=>'false', 'id'=>-1);
			}
		}
	}
		public function userFormCase($form_caseid){
		
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Query Re-Assign';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Case_model', 'cases');
		$data['userList'] = $this->cases->getUserFormCases($form_caseid);
		
		$this->load->view('admin/include/header', $header );
		$this->load->view('admin/user-form-case-details', $data);
		$this->parser->parse('admin/include/footer', $footer );

	}
	public function getUserFormCases($assignid){
		$this->db->select(TBL_PREFIX.TBL_CASE_HISTORY.'.followup_date,'.TBL_PREFIX.TBL_EMPLOYEE.'.name,'.TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to,'.TBL_PREFIX.TBL_CASE_HISTORY.'.comment,'.TBL_PREFIX.TBL_CASE_HISTORY.'.date,'.TBL_PREFIX.TBL_CASE_HISTORY.'.status,'.TBL_PREFIX.TBL_CASE_HISTORY.'.case_id');
		$this->db->from(TBL_PREFIX.TBL_CASE_HISTORY);
		$this->db->join(TBL_PREFIX.TBL_EMPLOYEE, TBL_PREFIX.TBL_CASE_HISTORY.'.assign_to = '.TBL_PREFIX.TBL_EMPLOYEE.'.id');
		$this->db->where(array('assign_to'=>$assignid));
		$caseHistory = $this->db->get();

		log_message('debug','Query Type88888 ['.$this->db->last_query().']');
		if( !$caseHistory ){
			return null;
		}else{
			return $caseHistory->result_array();
			return $dataToReturn;
		}

	}
}
?>
