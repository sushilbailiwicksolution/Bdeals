<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated('admin');
        }

	public function index()
	{
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );
				
				
				//user count total	
				$this->load->model('admin/Users_model', 'users');
				$data['UserCountVal']  = $this->users->getNuCount();
				
				//query count total
				$data['queryCountVal']  = $this->users->getNqCount();
				
				//contact total
				$data['ContactCount']  = $this->users->getContactPendingCount();
				
				//seller count total
				$data['TotalSeller']  = $this->users->getSellerCount();
				
				//Buyer count total
				$data['TotalBuyer']  = $this->users->getBuyerCount();
				
				//JV count total
				$data['TotalJV']  = $this->users->getJVCount();

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/index',$data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	

}
?>