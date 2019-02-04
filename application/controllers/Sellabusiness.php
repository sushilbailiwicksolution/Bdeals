<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sellabusiness extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated();

	}

	public function setNewForm(){
		$this->load->model('user_model', 'user');
		$this->user->setNewForm();
			//Code to show view of user after login
			redirect('list-your-business-basic-information');
		
		
	}


	public function userProfile(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessUserProfile']=null;
		}else{
			$this->load->model('user_model', 'user');
			$data['sellBusinessUserProfile'] = $this->user->getBusinessUserProfile('sell_business');
		}

		$this->load->view('include/header', $header );
		$this->load->view('sell_a_business/listbusiness/user-profile', $data);
		$this->parser->parse('include/footer', $footer );
	}

	public function userProfileCreate(){
		
		
		$this->load->model('user_model', 'user');
		$dbResult = null;
		$frmValue = $this->input->post('frm_submit');
		//log_message('debug','FORM TANUJ VALUE ['.$frmValue.']');
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
			/*if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-basic-information');
			}else{*/
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->user->registerBusinessBasicInformation("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->user->registerBusinessUser("NEW")[0];
					
					
					$dbResult = $this->user->registerBusinessBasicInformation("UPDATE", $this->session->userdata('last_form_id'));
				}
				
				if( $dbResult ){
					//redirect('buy-a-business-post-requirement');
					redirect('list-your-business-description');
				}else{
					redirect('list-your-business-basic-information'); //Redirect user on business description page in case any db error
				}
				
				
			//}
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
				//log_message('debug','In additional details:::::::::::::::yehoo');
				if( $this->user->registerSellerAdditionalInformation() ){
					redirect('list-your-business-additional-details-uploads');

				}else{
					redirect('list-your-business-additional-details'); //Redirect user on addition information page in case any db error
				}
			}
		}else if ( strcasecmp( $frmValue, 'sb_pa' ) == 0 ){//Selected Pack
			
			//log_message('debug', 'FORM TANUJ ID  ['.$this->session->userdata('last_form_id').']');
			
			if($this->session->userdata('last_form_id')=='NEW'){
				//log_message('debug', 'FORM TANUJ ID  ------------Its New');
				redirect('list-your-business-package-details');
				//echo '{"status":"nok"}';
			}else{

				if ( $this->user->registerSellerPackage() ){
					
					//echo $this->input->post('form_id');
					
					//die;
					
					//log_message('debug', 'FORM TANUJ ID  ------------package successfully updated');
					//redirect('login-business-profile-form/Tanuj/112/1234/abc');
					echo  'true';
					//redirect('login-business-profile-form/Tanuj/'.$this->input->post('form_id').'/1234/abc');
					
				}else{
					
					//log_message('debug', 'FORM TANUJ ID  ------------package successfully updated');
					//redirect('list-your-business-package-details');
					echo  'true';
				}
			}
		}else if ( strcasecmp( $frmValue, 'SB_PA_UP' ) == 0 ){//Selected Pack
			
			//log_message('debug', 'FORM TANUJ ID  ['.$this->session->userdata('last_form_id').']');
			
			if($this->session->userdata('last_form_id')=='NEW'){
				//log_message('debug', 'FORM TANUJ ID ---- In New Form');
				echo '{"status":"nok","next_tab":"Packagedetails"}';
				//return array('status'=>'nok', 'next_tab'=>'Packagedetails');
			}else{
				if ( $this->user->registerSellerPackage() ){
					//log_message('debug', 'FORM TANUJ ID ----successfully submitted');
					echo '{"status":"true","next_tab":"Packagedetails"}';
					 //return array('status'=>'true', 'next_tab'=>'Packagedetails');
				}else{
					//log_message('debug', 'FORM TANUJ ID ---- failed');
					//redirect('list-your-business-package-details');
					return array('status'=>'nok', 'next_tab'=>'Packagedetails');
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_as' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				
			
				redirect('list-your-business-additional-services');
			}else{
				if( $this->user->registerAdditionService() ){
					
					/**********************mail sent after form submission start here for sell a business*****/

$data = $this->user->mailSettings();

$website_url=$data[0]['website_url'];
$website_logo_url=$data[0]['website_logo_url'];
$email=$data[0]['email'];
$phone=$data[0]['phone'];

$data['assignedEmpDetails'] = $this->user->getAssignedEmployee();

//print_r($data['assignedEmpDetails'][0]->name);

//Load email library
$this->load->library('email');
//SMTP & mail configuration

$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<img  src="'.$website_logo_url.'"/>';
$htmlContent .= '<h3>Dear '.ucwords(strtolower($_SESSION['username'])).'</h3>';
$htmlContent .= '<h4>Greetings from Business Deals!!</h4>';
$htmlContent .= '<p>Your Business Listing has been submitted and is with the administrator for approval before it is live which would take upto 24 working hours.</p>';
$htmlContent .= '<p>Your Business Listing ID is: LB 00'.$this->session->userdata('last_form_id').'</p>';
$htmlContent .= '<p>Browse through the Investor Requirement Listings OR Latest Blogs to see if any buyer/investor has a requirement for a similar business.</p>';
$htmlContent .= '<p>It is our endeavour to find prospective Buyer/Investor/Partner for your business and for that we would be assigning a Business Accounts Executive who would assist you in the process.</p>';
$htmlContent .= '<p>For better results on your listing  you can upgrade your account so that you can reach out to greater number of Buyers/Investors/Partners.</p>';
$htmlContent .= '<p><a href='.$website_url.'login-business-profile-form'.'/'.$data['assignedEmpDetails'][0]->name.'/'.$this->session->userdata('last_form_id').'/1234/abc#Packagedetails'.'>Click here to Upgrade your Listing</a></p>';
$htmlContent .= '<p>Should you require any assistance please mail us to '.$email.' or call us at '.$phone.'.</p>';
$htmlContent .= '<p>Thanks and Regards</p>';
$htmlContent .= '<p>Team</p>';
$htmlContent .= '<p>Business Deals</p>';

$this->email->to($_SESSION['userid']);
$this->email->from($email,'Business Deals');
$this->email->subject('Your Deal Posted Successfully On Business Deals');
$this->email->message($htmlContent);
if($this->email->send()){
          //  echo "email sent";
        }else{
         //  echo "email not sent";
		}
					/**********************mail sent after form submission end here for sell a business*****/

				$this->session->set_flashdata('msg', 'Your form is submitted successfully & it is in waiting for approval session for admin to approve!.');
					redirect('sell-business-preview-form');
				}else{
					//redirect('list-your-business-additional-services');
					redirect('sell-business-preview-form');
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_aservice' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-additional-services');
			}else{
				if( $this->user->registerAdditionService() ){
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

			//log_message('debug', 'In Upload ['.print_r( $this->input->post(), true ).']');
			
			
			$userpath = str_replace('@','',$this->session->userdata('userid'));
			//$userpath = str_replace('@','',$userID);
			//log_message('debug', 'user id is ['.$this->session->userdata('userid').'], ['.$userpath.']');
			$path = './uploads/'.$userpath.'/'.date('Y-m-d').'/';
			if( !is_dir($path) ){
				mkdir($path, 0777, TRUE);
			}

			$config['upload_path']   = $path;
			$config['allowed_types'] = "gif|jpg|png|mp4|doc|docx|pdf|xls|txt";

		
			//log_message('debug', 'FILE uploadexesumfile ['.print_r($_FILES['uploadexesumfile'], true).']');

		
			$uploadedFileNames = $this->uploadMedia($path, $this->reArrayFilesMultiple($_FILES['uploadfile']));
			//log_message('debug', 'Uploaded file Name ['.print_r( $uploadedFileNames, true).']');
			

			$uploadedFileNamesExe = $this->uploadMedia( $path, $this->reArrayFilesMultiple($_FILES['uploadexesumfile']), 'executive' );
			$uploadedFileNamesMem = $this->uploadMedia( $path, $this->reArrayFilesMultiple($_FILES['uploadmemofile']), 'memorandum' );
			$uploadedFileNamesFin = $this->uploadMedia( $path, $this->reArrayFilesMultiple($_FILES['uploadfinancialfile']), 'financials' );
			$uploadedFileNamesAdd = $this->uploadMedia( $path, $this->reArrayFilesMultiple($_FILES['uploadadditionfile']), 'additional' );
			
			

			$fileInfoToSaveInDB = array_merge( $uploadedFileNames, $uploadedFileNamesExe, $uploadedFileNamesMem, $uploadedFileNamesFin, $uploadedFileNamesAdd );
			

			if( $this->user->saveAllDetails( $fileInfoToSaveInDB ) ){
				if( strcasecmp( $frmValue, 'UA_FU' ) == 0 ){
					//$next_tab = $this->input->post('next_tab');
					//return array('status'=>'true','next_tab'=>'Packagedetails');
					redirect('login-business-profile-form/Tanuj/'.$this->input->post('frm_id').'/1234/abc#Packagedetails');
				}else{
					//http://localhost/bdeals/login-business-profile-form/Tanuj/256/1234/abc#Packagedetails
					redirect('list-your-business-additional-details-uploads'); //Redirect user after successfull business registration
				}
			}else{
				if( strcasecmp( $frmValue, 'UA_FU' ) == 0 ){
					//$next_tab = $this->input->post('next_tab');
					//return array('status'=>'true','next_tab'=>'Packagedetails');
					redirect('login-business-profile-form/Tanuj/'.$this->input->post('frm_id').'/1234/abc#Packagedetails');
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


	public function seller_edit($formType){
		      
			
			  
                log_message('debug','FORM DATA IS ['.print_r($this->input->post(), true).']');
                $this->load->library('parser');
                $this->load->helper('html');
                $this->load->model('admin/Business_model','business');
                if( strcasecmp( $formType, 'seller_up' ) == 0 ){
                        $retVal = $this->business->updateUserProfile( true );
                }else if ( strcasecmp( $formType, 'seller_binfo' ) == 0 ){
					
                        $retVal = $this->business->updateBasicInformation( true );
					
						
                }else if ( strcasecmp( $formType, 'seller_bd' ) == 0 ){
                        $retVal = $this->business->updateBusinessDetails( true );
                }else if ( strcasecmp( $formType, 'seller_adetails' ) == 0 ){
                        $retVal = $this->business->updateSellerAdditionalDetails( true );
                }else if ( strcasecmp( $formType, 'seller_upload' ) == 0 ){
                        $retVal = $this->userProfileCreate();
                }else if ( strcasecmp( $formType, 'seller_aservice' ) == 0 ){
                        $retVal = $this->userProfileCreate();
                }

                log_message('debug','RETURN IS ['.json_encode($retVal).']');
                echo json_encode($retVal);
        }

	public function uploadMedia( $path, $file_ary, $type = NULL ){
		$uploadedFileNames = array();
		$fileName = '';
		$j        = 0;
		log_message('debug','hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh '.print_r($file_ary,true));
		
		
		
		
		
		foreach( $file_ary as $file ){
			
			//print_r($file_ary);
			
			
	//die;
			
			
		log_message('debug','filesName 11122222299999992222 '.print_r($this->reArrayFilesMultiple($_FILES['uploadexesumfile']),true));			
			
			$fileName         = $file['name'];
			$fileBaseName     = pathinfo( $fileName, PATHINFO_FILENAME);
			$originalFileName = $fileBaseName;
			$fileExtension    = pathinfo( $fileName, PATHINFO_EXTENSION);
			
			
			//print_r($_FILES);
			
			//die;
			/////
			

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
				}
				if( strstr($file['type'], 'video') != null ){
					$uploadedFileNames[$j]['doc_type'] = "video";
				}
				if( $type != null ){
					$uploadedFileNames[$j]['doc_type'] = $type;
				}
				
				
				//print_r($file['type']);
				//die;
				
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
		
		//print_r($_FILES);
		
		//die;
		//print_r($_FILES);

		for ($i=0; $i<$file_count; $i++) {
			$file_ary[$i]['name']     = $files['name'][$i];
			$file_ary[$i]['type']     = $files['type'][$i];
			$file_ary[$i]['tmp_name'] = $files['tmp_name'][$i];
			$file_ary[$i]['error']    = $files['error'][$i];
			$file_ary[$i]['size']     = $files['size'][$i];
			
			
			
		}

		return $file_ary;
	}

	public function basicInformation(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessBasicInformation']=null;
		}else{
			$this->load->model('user_model', 'user');
			
			$data['sellBusinessBasicInformation'] = $this->user->getBusinessUserProfile('sell_business');
		}

		$this->load->view('include/header', $header );
		$this->load->view('sell_a_business/listbusiness/basic-information', $data);
		$this->parser->parse('include/footer', $footer );
	}

	public function businessDescription(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->model('user_model', 'user');
		
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessDescription']=null;
		}else{
			$data['sellBusinessDescription'] = $this->user->getSellerBusinessDescription('sell_business');
		}

		$this->load->view('include/header', $header );
		$this->load->view('sell_a_business/listbusiness/business-description', $data);
		$this->parser->parse('include/footer', $footer );
	}


	public function businessAdditionalDetails(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->model('user_model', 'user');
		
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessAdditionalDetails'] = null;
		}else{
			$data['sellBusinessAdditionalDetails'] = $this->user->getSellerAdditionalDetails('sell_business');
			$data['sellBusinessAdditionalFinancialDetails'] = $this->user->getSellerAdditionalFinancialDetails('sell_business');

		}

		$this->load->view('include/header', $header );
		$this->load->view('sell_a_business/listbusiness/business-additional-details', $data);
		$this->parser->parse('include/footer', $footer );
	}

	public function businessAdditionalDetailsUpload(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );
		$this->load->model('user_model','user');
		
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['medias'] = null;
		}else{
			$data['medias'] = $this->user->getBusinessMedia($this->session->userdata('last_form_id'));
		}
		$this->load->view('include/header', $header );
		$this->load->view('sell_a_business/listbusiness/business-additional-details-upload', $data);
		$this->parser->parse('include/footer', $footer );
	}

	public function businessAdditionalServices(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->model('user_model', 'user');

		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sell_business_details'] = null;
			$data['additionalServices']    = null;

		}else{
			$data['sell_business_details'] = $this->user->getSellerBusinessDescription('sell_business');
			$data['additionalServices'] = $this->user->currentAdditionalServices( $data['sell_business_details'][0]['form_id'] );
		}

		$this->load->view('include/header', $header );
		$this->load->view('sell_a_business/listbusiness/business-additional-services', $data);
		$this->parser->parse('include/footer', $footer );
	}


	public function packageDetails(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js', 'js/user_package' );


		$this->load->model('package_model', 'package');
		$availablePackages['packages'] = $this->package->getAvailablePackage();
		$this->load->model('user_model', 'user');
		if($this->session->userdata('last_form_id')=='NEW'){
			$availablePackages['sell_business_details']=null;
			$availablePackages['user_package']=null;
		}else{
			$availablePackages['sell_business_details'] = $this->user->getSellerBusinessDescription();
			$availablePackages['user_package'] = $this->user->currentPackage( $availablePackages['sell_business_details'][0]['form_id'] );
		}

		$this->load->view('include/header', $header );
		$this->load->view('sell_a_business/listbusiness/business-package-details', $availablePackages);
		$this->parser->parse('include/footer', $footer );
	}


	public function stepSellBusiness(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->view('include/header', $header );
		$this->load->view('sell_a_business/steps-sell-business');
		$this->parser->parse('include/footer', $footer );
	}

	public function businessServices(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->view('include/header', $header );
		$this->load->view('sell_a_business/business-services');
		$this->parser->parse('include/footer', $footer );
	}
	
		public function SellBusinessPreview(){
			
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Search';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

				$businessType = 'sell_a_business'; 
				$formid=$this->session->userdata('last_form_id');
				
				//log_message('debug', 'Controller:::::::::::::::: '.$businessType);
				$this->load->model('listing_details_model', 'LDM');
				$data['businessData'] = $this->LDM->getBusinessDetails($formid,$businessType);
				$data['businessDocuments'] = $this->LDM->getBusinessImageDocuments($formid,$businessType);
				$data['additionalDetails'] = $this->LDM->getAdditionalDetails($formid,$businessType);
				$data['additionalFinancialDetails'] = $this->LDM->getAdditionalFinancialDetails($formid,$businessType);
				$data['contactFromDetails'] = $this->LDM->getContactFromUserDetails($formid,$businessType);
				

                $this->load->view('include/header', $header );
                $this->load->view('sell_a_business/listbusiness/sell-business-preview-form', $data);
                $this->parser->parse('include/footer', $footer );
	}
	public function DeleteProperty($idval){
		
		$this->load->model('User_model', 'user');
        $data['delete'] = $this->user->DeleteProperty($idval);
		
	}
	public function DeleteFinProperty($idval){
		
		$this->load->model('User_model', 'user');
        $data['delete'] = $this->user->DeleteFinProperty($idval);
		
	}
	
		
}

?>
