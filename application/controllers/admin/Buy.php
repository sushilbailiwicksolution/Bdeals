<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buy extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated('admin');
        }

	public function index()
	{
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

		$this->load->model('admin/Buy_model', 'buy');
		$data['userList'] = $this->buy->getBusinessUserProfile('buy_business');

                $this->load->view('admin/include/header', $header );
		$this->load->view('admin/buy', $data);
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function buyer_page(){
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$this->load->model('admin/Buy_model', 'buy');
		$userList = $this->buy->getBusinessUserProfile('buy_business');
		$this->load->model('admin/Users_model', 'user');

		$assignToDetails = null;
		$data = array();
		$i    = 1;
		foreach($userList as $r){
			//$assignToDetails = $this->seller->getAssignToDetails( $r['form_id'] );
			$assignToDetails = $this->buy->getAssignToDetails( $this->user->getCustomerDetailsByCustId($r['customer_id'], array('id', 'name'))[0]['id'] );
			if ( strcasecmp($this->session->userdata('admin_type'), 'admin' ) == 0 ){
				$businessStatus  = $this->buy->getBusinessStatusByFormId( $r['form_id'] );
				log_message('debug','Assigned To Details ['.print_r($assignToDetails, true).'], user id from session ['.$this->session->userdata('admin_userid').']');
				if( $assignToDetails[0]['id'] == null ){
					$assignToDetails[0]['id'] = 'NA';
				}
				$data[] = array($i, $r['name'], $r['email'], $r['company_name'], $this->cachemethods->getCountryNameById($r['country']), $r['contact'], $assignToDetails[0]['user_id'], $r['added_date'],$r['expiry_date'], $businessStatus.'-'.$assignToDetails[0]['status'], '<a href="buy_explore/'.$assignToDetails[0]['id'].'/'.$r['form_id'].'/'.$r['customer_id'].'/abc" class="btn btn-sm btn-danger" role="button">Explore</a>');
				$i++;
			}else{
				if ( strcasecmp( $this->session->userdata('admin_userid'), $assignToDetails[0]['user_id'] ) == 0 ){
					$businessStatus  = $this->buy->getBusinessStatusByFormId( $r['form_id'] );
					log_message('debug','Assigned To Details ['.print_r($assignToDetails, true).'], user id from session ['.$this->session->userdata('admin_userid').']');
					if( $assignToDetails[0]['id'] == null ){
						$assignToDetails[0]['id'] = 'NA';
					}
					$data[] = array($i, $r['name'], $r['email'], $r['company_name'], $this->cachemethods->getCountryNameById($r['country']), $r['contact'], $assignToDetails[0]['user_id'], $r['added_date'],$r['expiry_date'], $businessStatus.'-'.$assignToDetails[0]['status'], '<a href="'.base_url().'admin/buy_explore/'.$assignToDetails[0]['id'].'/'.$r['form_id'].'/'.$r['customer_id'].'/abc" class="btn btn-sm btn-danger" role="button">Explore</a>');
					$i++;
				}
			}
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($userList), "recordsFiltered"=>count($userList), "data"=>$data);
		echo json_encode($output);
		exit();

	}

	public function buyer_explore( $assignedTo=NULL, $selectedFormId, $customerId){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core','css/default','css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min','css/responsive-leyouts','admin/js/style-swicher/style-swicher' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods', 'admin/js/seller_edit_jv' ,'admin/js/style-swicher/style-swicher', 'admin/js/style-swicher/custom');

		$this->load->model('Business_model', 'business');
		$data['businessDetails']  = $this->business->getBusinessDetailsByFormId('buy_business', $selectedFormId);
		$this->load->model('Buyer_model', 'BM');
		$this->BM->setFormSession($selectedFormId);
		
		log_message('debug', 'FORM ID IS ['.$selectedFormId.'] IN SELLER_EXPLORE');
		$data['assignedEmpDetails'] = $this->BM->getAssignedEmployee();
		$data['sellBusinessUserProfile'] = $this->BM->getBusinessUserProfileAdmin('buy_business', $selectedFormId);
		$data['buyBusinessProfile'] = $this->BM->getBuyerBusinessProfile('buy_business', $selectedFormId );

		$data['formId'] = $selectedFormId;
		$data['assignedEmployee'] = $assignedTo;

		$data['assignedTo'] = $assignedTo;
		$data['formId']     = $selectedFormId;
		$data['customerId'] = $customerId;
        $this->load->view('admin/include/header', $header );
		$this->load->view('admin/buy_explore', $data);
        $this->parser->parse('admin/include/footer', $footer );
				
				
				
	}
	
	
	
	public function userProfileCreateProfile(){
		$this->load->model('Buyer_model', 'BM');
		$dbResult = null;
		$frmValue = $this->input->post('frm_submit');
		log_message('debug','FORM TANUJ VALUE PROFILE ['.$frmValue.']');
		if ( strcasecmp( $frmValue, 'bb_up' ) == 0 ){
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->registerBusinessUser("UPDATE");
				}else{
					$dbResult = $this->BM->registerBusinessUser("NEW");
				}

				if( $dbResult ){
					redirect('admin/buy_explore/Assign/'.$this->input->post('frm_id').'/id/businessprofile');
				}else{
					redirect('admin/buy_explore/Assign/'.$this->input->post('frm_id').'/id/personaldetail'); //Redirect user on user profile page in case any db error
				}
			
		}else if ( strcasecmp( $frmValue, 'bb_bp' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('buy-a-business-profile');
			}else{
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->registerBuyerBusinessProfile("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->BM->registerBuyerBusinessProfile( "NEW", $this->session->userdata('last_form_id') );
				}

				if( $dbResult ){
					redirect('admin/buy_explore/Assign/'.$this->input->post('frm_id').'/id/postrequirement');
				}else{
					redirect('admin/buy_explore/Assign/'.$this->input->post('frm_id').'/id/personaldetail'); //Redirect user on business description page in case any db error
				}
			}
		}else if ( strcasecmp( $frmValue, 'bb_pr' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('buy-a-business-post-requirement');
			}else{
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->BM->buyerPostRequirement("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->BM->buyerPostRequirement( "NEW", $this->session->userdata('last_form_id') );
				}

				if( $dbResult ){
					redirect('admin/buy_explore/Assign/'.$this->input->post('frm_id').'/id/postrequirement');
				}else{
					redirect('admin/buy_explore/Assign/'.$this->input->post('frm_id').'/id/postrequirement'); //Redirect user on business description page in case any db error
				}
			}
		}
	}	

	public function seller_edit($formType){
		log_message('debug','FORM DATA IS ['.print_r($this->input->post(), true).']');
		$this->load->library('parser');
		$this->load->helper('html');
		$this->load->model('admin/Jv_Business_model','business');
		if( strcasecmp( $formType, 'seller_up' ) == 0 ){
			$retVal = $this->business->updateUserProfile();
		}else if ( strcasecmp( $formType, 'seller_binfo' ) == 0 ){
			$retVal = $this->business->updateBasicInformation();
		}else if ( strcasecmp( $formType, 'seller_bd' ) == 0 ){
			$retVal = $this->business->updateBusinessDetails();
		}else if ( strcasecmp( $formType, 'seller_adetails' ) == 0 ){
			$retVal = $this->business->updateSellerAdditionalDetails();
		}else if ( strcasecmp( $formType, 'jv_details' ) == 0 ){
                        $retVal = $this->business->updateJvDetails( true );
        }else if ( strcasecmp( $formType, 'seller_package' ) == 0 ){
			$retVal = $this->business->registerSellerPackage();
			if ( $retVal ){
				$retVal = array('status'=>'true','next_tab'=>'Additionalservices');
			}else{
				$retVal = array('status'=>'false','next_tab'=>'Packagedetails');
			}
		}else if ( strcasecmp( $formType, 'seller_aservice' ) == 0 ){
                        $retVal = $this->userProfileCreate();
        }
		
		log_message('debug','RETURN IS ['.json_encode($retVal).']');
		echo json_encode($retVal);
	}

	public function userProfile(){
		$this->load->model('Jv_Business_model','business');
	}
	
	public function userProfileCreate(){
		$this->load->model('user_model', 'user');
		$dbResult = null;
		$frmValue = $this->input->post('frm_submit');
		log_message('debug','FORM TANUJ VALUE ['.$frmValue.']');
		if ( strcasecmp( $frmValue, 'sb_up' ) == 0 ){
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->user->registerBusinessUser("UPDATE")[0];
				}else{
					$dbResult = $this->user->registerBusinessUser("NEW")[0];
				}

				if( $dbResult ){
					redirect('list-your-business-basic-information');
				}else{
					redirect('list-your-business-user-profile'); //Redirect user on user profile page in case any db error
				}
			
		}else if ( strcasecmp( $frmValue, 'sb_bi' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-basic-information');
			}else{
				if( $this->user->registerBusinessBasicInformation() ){
					redirect('list-your-business-description');
				}else{
					redirect('list-your-business-basic-information'); //Redirect user on basic information page in case any db error
				}
			}
		}else if ( strcasecmp( $frmValue, 'sb_bd' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-description');
			}else{
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->user->registerSellerBusinessDescription("UPDATE");
				}else{
					$dbResult = $this->user->registerSellerBusinessDescription( "NEW" );
				}

				if( $dbResult ){
					redirect('list-your-business-additional-details');
				}else{
					redirect('list-your-business-description'); //Redirect user on business description page in case any db error
				}
			}
		}else if ( strcasecmp( $frmValue, 'sb_ad' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-additional-details');
			}else{
				log_message('debug','In additional details:::::::::::::::yehoo');
				if( $this->user->registerSellerAdditionalInformation() ){
					redirect('list-your-business-additional-details-uploads');
				}else{
					redirect('list-your-business-additional-details'); //Redirect user on addition information page in case any db error
				}
			}
		}else if ( strcasecmp( $frmValue, 'sb_pa' ) == 0 ){//Selected Pack
			
			log_message('debug', 'FORM TANUJ ID  ['.$this->session->userdata('last_form_id').']');
			
			if($this->session->userdata('last_form_id')=='NEW'){
				log_message('debug', 'FORM TANUJ ID  ------------Its New');
				redirect('list-your-business-package-details');
				//echo '{"status":"nok"}';
			}else{

				if ( $this->user->registerSellerPackage() ){
					log_message('debug', 'FORM TANUJ ID  ------------package successfullu updated');
					//redirect('list-your-business-package-details');
					 echo '{"status":"ok"}';
				}else{
					redirect('list-your-business-package-details');
					echo  '{"status":"nok"}';
				}
			}
		}else if ( strcasecmp( $frmValue, 'SB_PA_UP' ) == 0 ){//Selected Pack
			
			log_message('debug', 'FORM TANUJ ID  ['.$this->session->userdata('last_form_id').']');
			
			if($this->session->userdata('last_form_id')=='NEW'){
				log_message('debug', 'FORM TANUJ ID ---- In New Form');
				echo '{"status":"nok","next_tab":"Packagedetails"}';
				//return array('status'=>'nok', 'next_tab'=>'Packagedetails');
			}else{
				if ( $this->user->registerSellerPackageAdmin() ){
					log_message('debug', 'FORM TANUJ ID ----successfully submitted');
					echo '{"status":"true","next_tab":"Additionalservices"}';
				}else{
					 //$retVal =  array('status'=>'true', 'next_tab'=>'Packagedetails');
					log_message('debug', 'FORM TANUJ ID ---- failed');
					//redirect('list-your-business-package-details');
					echo '{"status":"nok","next_tab":"Packagedetails"}';
					//$retVal =  array('status'=>'nok', 'next_tab'=>'Packagedetails');
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_as' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-additional-services');
			}else{
				if( $this->user->registerAdditionService() ){
					redirect('list-your-business-payment');
				}else{
					redirect('list-your-business-additional-services');
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_aservice' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-additional-services');
			}else{
				if( $this->user->registerAdditionServiceAdmin() ){
					$next_tab = $this->input->post('next_tab');
					return array('status'=>'true','next_tab'=>$next_tab);
				}else{
					$next_tab = $this->input->post('next_tab');
					return array('status'=>'false','next_tab'=>$next_tab);
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_pay' ) == 0 ){
			if( $this->user->registerBusinessPayment() ){
				redirect('list-your-business-preview');
			}else{
				redirect('list-yout-business-payment');
			}
		}else if( strcasecmp( $frmValue, 'sb_pre' ) == 0 ){
			//Need to check where should user navigate in this case.

			//if( $this->user->showPreview() ){
			redirect('home');
			//}else{
			//	redirect('list-your-business-preview');
			//}
		}else{// if( /*strcasecmp( $frmValue, 'sb_au' ) == 0 ||*/ isset($_FILES['uploadfile']['name']) ){
			//Code to upload files and insert file names with uploaded path in DB.
			if($this->input->post('frm_id') != 'NEW'){
			$uploadedImageFileNames = array();
			$uploadedVideoFileNames = array();
			$uploadedExecutiveFileNames = array();
			$uploadedMemorandumFileNames = array();
			$uploadedFinancialsFileNames = array();
			$uploadedAdditionalFileNames = array();

			log_message('debug', 'In Upload ['.print_r( $this->input->post(), true ).']');
			
			$customer_id = $this->input->post('customer_id');
			$assigned_to = $this->input->post('assigned_to');
			$form_id     = $this->input->post('frm_id');
			//$userpath = str_replace('@','',$this->session->userdata('userid'));
			$userpath = str_replace('@','',$customer_id);
			log_message('debug', 'user id is ['.$this->session->userdata('userid').'], ['.$userpath.']');
			$path = './uploads/'.$userpath.'/'.date('Y-m-d').'/';
			if( !is_dir($path) ){
				mkdir($path, 0777, TRUE);
			}

			$config['upload_path']   = $path;
			$config['allowed_types'] = "gif|jpg|png|mp4|doc|docx|pdf|xls|txt";

			//Code to upload image files
			//log_message('debug', 'FILE ['.print_r($_FILES['uploadfile'], true).']');
			//log_message('debug', 'FILE uploadexesumfile ['.print_r($_FILES['uploadexesumfile'], true).']');
			//log_message('debug', 'FILE uploadmemofile ['.print_r($_FILES['uploadmemofile'], true).']');
			//log_message('debug', 'FILE uploadfinancialfile ['.print_r($_FILES['uploadfinancialfile'], true).']');
			//log_message('debug', 'FILE uploadadditionfile ['.print_r($_FILES['uploadadditionfile'], true).']');

			/*Start code to upload and insert file details for image/video*/
			/*$file_ary = $this->reArrayFilesMultiple($_FILES['uploadfile']);
			$fileName = '';
			$j        = 0;
			foreach( $file_ary as $file ){
				$fileName         = $file['name'];
				$fileBaseName     = pathinfo( $fileName, PATHINFO_FILENAME);
				$originalFileName = $fileBaseName;
				$fileExtension    = pathinfo( $fileName, PATHINFO_EXTENSION);

				while( file_exists( $path.'/'.$fileBaseName.'.'.$fileExtension ) ){
					$fileBaseName = (String)$originalFileName.'_'.$i;
					$fileName     = $fileBaseName.'.'.$fileExtension;
					$i++;
				}
				if ( move_uploaded_file( $file['tmp_name'], $path.'/'.$fileName ) ){
					$uploadedFileNames[$j]['name']     = $file['name'];
					$uploadedFileNames[$j]['type']     = $file['type'];
					$uploadedFileNames[$j]['path']     = $path.$fileName;

					if( strstr($file['type'], 'image') != null ){
						$uploadedFileNames[$j]['doc_type'] = "image";
					}else{
						$uploadedFileNames[$j]['doc_type'] = "video";
					}
					$j++;
				}
			}*/
			log_message('debug', 'Uploaded file Namejjjjjjjjjjjjjjjjjjjjjjjjjjjjjj ' .print_r($_FILES,true));
			$uploadedFileNames = $this->uploadMedia($path, $this->reArrayFilesMultiple($_FILES['uploadfile']));
			log_message('debug', 'Uploaded file Name ['.print_r( $uploadedFileNames, true).']');
			/*if( count($uploadedFileNames) > 0 ){
				if( $this->user->saveAllDetails( $uploadedFileNames ) ){
					redirect('list-your-business-package-details'); //Redirect user after successfull business registration
				}else{
					redirect('list-your-business-additional-details-uploads');//Redirect user on upload document page in case any db error
				}
			}*/

			$uploadedFileNamesExe = $this->uploadMedia( $path, $this->reArrayFilesMultiple($_FILES['uploadexesumfile']), 'executive' );
			$uploadedFileNamesMem = $this->uploadMedia( $path, $this->reArrayFilesMultiple($_FILES['uploadmemofile']), 'memorandum' );
			$uploadedFileNamesFin = $this->uploadMedia( $path, $this->reArrayFilesMultiple($_FILES['uploadfinancialfile']), 'financials' );
			$uploadedFileNamesAdd = $this->uploadMedia( $path, $this->reArrayFilesMultiple($_FILES['uploadadditionfile']), 'additional' );

			$fileInfoToSaveInDB = array_merge( $uploadedFileNames, $uploadedFileNamesExe, $uploadedFileNamesMem, $uploadedFileNamesFin, $uploadedFileNamesAdd );

			if( $this->user->saveAllDetailsAdmin( $fileInfoToSaveInDB ) ){
				if( strcasecmp( $frmValue, 'UA_FU' ) == 0 ){
					//$next_tab = $this->input->post('next_tab');
					//return array('status'=>'true','next_tab'=>$next_tab);
					redirect('admin/jv_explore/'.$assigned_to.'/'.$form_id.'/'.$customer_id.'/Packagedetails');
				}else{
					redirect('list-your-business-package-details'); //Redirect user after successfull business registration
				}
			}else{
				if( strcasecmp( $frmValue, 'UA_FU' ) == 0 ){
					$next_tab = $this->input->post('next_tab');
					return array('status'=>'false','next_tab'=>$next_tab);
				}else{
					redirect('list-your-business-additional-details-uploads');//Redirect user on upload document page in case any db error
				}
			}
			}else{
				redirect('list-your-business-additional-details-uploads');//Redirect if its a new form
			}

			/*End of code for image/video upload*/

		}
	}

	
	public function uploadMedia( $path, $file_ary, $type = NULL ){
		$uploadedFileNames = array();
		$fileName = '';
		$j        = 0;
		log_message('debug','hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh '.print_r($file_ary,true));
		foreach( $file_ary as $file ){
			$fileName         = $file['name'];
			$fileBaseName     = pathinfo( $fileName, PATHINFO_FILENAME);
			$originalFileName = $fileBaseName;
			$fileExtension    = pathinfo( $fileName, PATHINFO_EXTENSION);

			while( file_exists( $path.'/'.$fileBaseName.'.'.$fileExtension ) ){
				$fileBaseName = (String)$originalFileName.'_'.$i;
				$fileName     = $fileBaseName.'.'.$fileExtension;
				$i++;
			}
			log_message('debug','File Name IS::::::::::::::::::::::::::::::::::::::::: ['.$fileName.']');
			if ( move_uploaded_file( $file['tmp_name'], $path.'/'.$fileName ) ){
				$uploadedFileNames[$j]['name'] = $file['name'];
				$uploadedFileNames[$j]['path'] = $path.$fileName;
				log_message('debug','Upload File Name IS::::::::::::::::::::::::::::::::::::::::: ['.$uploadedFileNames[$j]['name'].']');
				if( strstr($file['type'], 'image') != null ){
					$uploadedFileNames[$j]['doc_type'] = "image";
				}else if( strstr($file['type'], 'video') != null ){
					$uploadedFileNames[$j]['doc_type'] = "video";
				}else if( $type != null ){
					$uploadedFileNames[$j]['doc_type'] = $type;
				}
				$j++;
			}
		}
		return $uploadedFileNames;
	}

	public function reArrayFilesMultiple($files) {
		$file_ary = array();
		log_message('debug', 'FILE ARRAY IS ['.print_r($files, true).']');
		$file_count = count($files['name']);
		log_message('debug','File count is::::::::::::::::::::::::::::::::' .$file_count);
		for ($i=0; $i<$file_count; $i++) {
			$file_ary[$i]['name']     = $files['name'][$i];
			$file_ary[$i]['type']     = $files['type'][$i];
			$file_ary[$i]['tmp_name'] = $files['tmp_name'][$i];
			$file_ary[$i]['error']    = $files['error'][$i];
			$file_ary[$i]['size']     = $files['size'][$i];
		}

		return $file_ary;
	}
	
		
	public function UpdateBuyerForm(){
					$this->load->model('Buyer_model', 'BM');
					$dbResult = $this->BM->UpdateBuyerPerFields();
					$dbResult2 = $this->BM->UpdateBuyerKeyFields();
					$dbResult3 = $this->BM->UpdateBuyerBusFields();
				
				if( $dbResult3 ){
					redirect('admin/buy_explore/'.$this->input->post('user_id').'/'.$this->input->post('frm_id').'/'.$this->input->post('customer_id').'/abc');
				
				}
			}
		
	
}
