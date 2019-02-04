<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realestate extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated();
        }

	public function setNewForm(){
		$this->load->model('Realestate_model', 'RE');
		$this->RE->setNewForm();
			//Code to show view of user after login
			redirect('real-estate-basic-information');
		
		
	}	
		
	public function userProfile(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );
		$this->load->model('Jv_model', 'JV');

		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessUserProfile']=null;
		}else{
			$data['sellBusinessUserProfile'] = $this->JV->getBusinessUserProfile('joint_ventures');
		}
		$this->load->view('include/header', $header );
		$this->load->view('joint_ventures/business_as_jv/user-profile', $data);
		$this->parser->parse('include/footer', $footer );
	}

	public function userProfileCreate(){
		$this->load->model('Realestate_model', 'RE');
		$this->load->model('Jv_model', 'JV');
		$dbResult = null;
		$frmValue = $this->input->post('frm_submit');
		if ( strcasecmp( $frmValue, 'sb_up' ) == 0 ){
			if( $this->input->post('frm_id') != null ){
				$dbResult = $this->JV->registerBusinessUser("UPDATE")[0];
			}else{
				$dbResult = $this->JV->registerBusinessUser("NEW")[0];
			}

			if( $dbResult ){
				redirect('list-your-business-basic-information-jv');
			}else{
				redirect('list-your-business-user-profile-jv'); //Redirect user on user profile page in case any db error
			}
		}else if ( strcasecmp( $frmValue, 'sb_bi' ) == 0 ){
				/*if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-basic-information');
			}else{*/
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->RE->registerBusinessBasicInformation("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->RE->registerBusinessUser("NEW")[0];
					$dbResult = $this->RE->registerBusinessBasicInformation("UPDATE", $this->session->userdata('last_form_id'));
				}
				
				if( $dbResult ){
					//redirect('buy-a-business-post-requirement');
					redirect('real-estate-tenancy-description');
				}else{
					redirect('real-estate-basic-information'); //Redirect user on business description page in case any db error
				}
				
				
			//}
			
		}else if ( strcasecmp( $frmValue, 'sb_bd' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('real-estate-tenancy-description');
			}else{
				if( $this->RE->registerSellerBusinessDescription() ){
					redirect('real-estate-tenancy-details');
				}else{
					redirect('real-estate-tenancy-description'); //Redirect user on addition information page in case any db error
				}
				
				
			}
		}else if ( strcasecmp( $frmValue, 'sb_td' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('real-estate-tenancy-details');
			}else{
				if( $this->RE->registerSellerBusinessDetails() ){
					
					/**********************mail sent after form submission start here for re business*****/
$this->load->model('user_model', 'user');

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
		  
		  
		  redirect('re-business-preview');
        }else{
         //  echo "email not sent";
		}
					/**********************mail sent after form submission end here for re business*****/
					redirect('real-estate-tenancy-details');
				}else{
					redirect('real-estate-tenancy-details'); //Redirect user on addition information page in case any db error
				}
							
			}
		}else if ( strcasecmp( $frmValue, 'sb_ad' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-additional-details-jv');
			}else{
				if( $this->JV->registerSellerAdditionalInformation() ){
					redirect('list-your-business-jv-details-jv');
				}else{
					redirect('list-your-business-additional-details-jv'); //Redirect user on addition information page in case any db error
				}
				//redirect('list-your-business-additional-details-jv'); //Redirect user on addition information page in case any db error
			}
		}else if ( strcasecmp( $frmValue, 'sb_jv' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-jv-details-jv');
			}else{
				if( $this->JV->registerSellerJvDetails() ){
					redirect('list-your-business-additional-details-uploads-jv');
				}else{
					redirect('list-your-business-jv-details-jv'); //Redirect user on addition information page in case any db error
				}
			}
		}else if ( strcasecmp( $frmValue, 'sb_pa' ) == 0 ){//Selected Pack
			if($this->session->userdata('last_form_id')=='NEW'){
				//redirect('list-your-business-package-details');
				echo '{"status":"nok"}';
			}else{			
				if ( $this->JV->registerSellerPackage() ){
					//redirect('list-your-business-additional-services');
					echo '{"status":"ok"}';
				}else{
					//redirect('list-your-business-package-details');
					echo '{"status":"nok"}';
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_as' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-additional-services-jv');
			}else{
				if( $this->JV->registerAdditionService() ){
					redirect('list-your-business-payment-jv');
				}else{
					redirect('list-your-business-additional-services-jv');
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_aservice' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-additional-services');
			}else{
				if( $this->JV->registerAdditionService() ){
					$next_tab = $this->input->post('next_tab');
					return array('status'=>'true','next_tab'=>$next_tab);
				}else{
					$next_tab = $this->input->post('next_tab');
					return array('status'=>'false','next_tab'=>$next_tab);
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_pay' ) == 0 ){
			if( $this->JV->registerBusinessPayment() ){
				redirect('list-your-business-preview-jv');
			}else{
				redirect('list-yout-business-payment-jv');
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

			$userpath = str_replace('@','',$this->session->userdata('userid'));
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

			$uploadedFileNames = $this->uploadMedia($path, $this->reArrayFilesMultiple($_FILES['uploadfile']));
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

			if( $this->RE->saveAllDetails( $fileInfoToSaveInDB ) ){
				if( strcasecmp( $frmValue, 'UA_FU' ) == 0 ){
					//$next_tab = $this->input->post('next_tab');
					//return array('status'=>'true','next_tab'=>$next_tab);
					redirect('login-business-profile-form-jv/Tanuj/'.$this->input->post('frm_id').'/123/Packagedetails');
				}else{
					redirect('list-your-business-package-details-jv'); //Redirect user after successfull business registration
				}
			}else{
				if( strcasecmp( $frmValue, 'UA_FU' ) == 0 ){
					//$next_tab = $this->input->post('next_tab');
					//return array('status'=>'false','next_tab'=>$next_tab);
					redirect('login-business-profile-form-jv/Tanuj/'.$this->input->post('frm_id').'/123/Packagedetails');
				}else{
					redirect('list-your-business-additional-details-uploads-jv');//Redirect user on upload document page in case any db error
				}
			}
			}else{
				redirect('list-your-business-additional-details-uploads-jv');//Redirect if its a new form
			}

			/*End of code for image/video upload*/

		}
	}

	public function seller_edit($formType){
                log_message('debug','FORM DATA IS ['.print_r($this->input->post(), true).']');
                $this->load->library('parser');
                $this->load->helper('html');
                $this->load->model('admin/Jv_Business_model','business');
                if( strcasecmp( $formType, 'seller_up' ) == 0 ){
                        $retVal = $this->business->updateUserProfile( true );
                }else if ( strcasecmp( $formType, 'seller_binfo' ) == 0 ){
                        $retVal = $this->business->updateBasicInformation( true );
                }else if ( strcasecmp( $formType, 'seller_bd' ) == 0 ){
                        $retVal = $this->business->updateBusinessDetails( true );
                }else if ( strcasecmp( $formType, 'seller_adetails' ) == 0 ){
                        $retVal = $this->business->updateSellerAdditionalDetails( true );
                }else if ( strcasecmp( $formType, 'jv_details' ) == 0 ){
                        $retVal = $this->business->updateJvDetails( true );
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
				$uploadedFileNames[$j]['name'] = $file['name'];
				$uploadedFileNames[$j]['path'] = $path.$fileName;

				if( strstr($file['type'], 'image') != null ){
					$uploadedFileNames[$j]['doc_type'] = "image";
				} if( strstr($file['type'], 'video') != null ){
					$uploadedFileNames[$j]['doc_type'] = "video";
				} if( $type != null ){
					$uploadedFileNames[$j]['doc_type'] = $type;
				}
				$j++;
			}
		}
		return $uploadedFileNames;
	}

	public function reArrayFilesMultiple($files) {
		$file_ary = array();
		$file_count = count($files['name']);

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
			$this->load->model('Realestate_model', 'RE');
			$data['sellBusinessBasicInformation'] = $this->RE->getBusinessUserProfile('real_estate');
		}
		$this->load->view('include/header', $header );
		$this->load->view('real_estate/business_as_re/property-information', $data);
		$this->parser->parse('include/footer', $footer );
	}

	public function tenancyDescription(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->model('Realestate_model', 'RE');
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessDescription']=null;
		}else{
			$data['sellBusinessDescription'] = $this->RE->getSellerBusinessDescription('real_estate');
		}

		$this->load->view('include/header', $header );
		$this->load->view('real_estate/business_as_re/tenancy-description',$data);
		$this->parser->parse('include/footer', $footer );
	}


	public function tenancyDetails(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->model('Realestate_model', 'RE');
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessDescription']=null;
		}else{
			$data['sellBusinessDescription'] = $this->RE->getSellerBusinessDescription('real_estate');
		}

		$this->load->view('include/header', $header );
		$this->load->view('real_estate/business_as_re/tenancy-details',$data);
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

		$this->load->model('Jv_model', 'JV');
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessAdditionalDetails'] = null;
		}else{
			$data['sellBusinessAdditionalDetails'] = $this->JV->getSellerAdditionalDetails('joint_ventures');
			$data['sellBusinessAdditionalFinancialDetails'] = $this->JV->getSellerAdditionalFinancialDetails('sell_business');
		}

		$this->load->view('include/header', $header );
		$this->load->view('joint_ventures/business_as_jv/business-additional-details', $data);
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
		$this->load->model('Jv_model','JV');
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['medias'] = null;
		}else{
			$data['medias'] = $this->JV->getBusinessMedia($this->session->userdata('last_form_id'));
		}
		$this->load->view('include/header', $header );
		$this->load->view('joint_ventures/business_as_jv/business-additional-details-upload',$data);
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

		$this->load->model('Jv_model', 'JV');
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['jv_business_details'] = null;
			$data['additionalServices']    = null;
		}else{
			$data['jv_business_details'] = $this->JV->getSellerBusinessDescription('jv_business');
			$data['additionalServices'] = $this->JV->currentAdditionalServices( $data['jv_business_details'][0]['form_id'] );
		}

		$this->load->view('include/header', $header );
		$this->load->view('joint_ventures/business_as_jv/business-additional-services', $data);
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
		$this->load->model('Jv_model', 'JV');
		if($this->session->userdata('last_form_id')=='NEW'){
		
			$availablePackages['sell_business_details']=null;
			$availablePackages['user_package']=null;
		}else{
			$availablePackages['sell_business_details'] = $this->JV->getSellerBusinessDescription();
			$availablePackages['user_package'] = $this->JV->currentPackage( $availablePackages['sell_business_details'][0]['form_id'] );
		}
		$this->load->view('include/header', $header );
		$this->load->view('joint_ventures/business_as_jv/business-package-details', $availablePackages);
		$this->parser->parse('include/footer', $footer );
	}



	public function jvDetails(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );
		
		 $this->load->model('Jv_model', 'JV');
		if($this->session->userdata('last_form_id')=='NEW'){		 
				 
				 $data['sellJvDetails'] = null;
		}else{
			$data['sellJvDetails'] = $this->JV->getSellerJvDetails();
		}
                $this->load->view('include/header', $header );
		$this->load->view('joint_ventures/business_as_jv/jv-details', $data);
                $this->parser->parse('include/footer', $footer );
	}

	public function stepsJv(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

                $this->load->view('include/header', $header );
		$this->load->view('joint_ventures/steps-jv');
                $this->parser->parse('include/footer', $footer );
	}

	public function benefitsJv(){
		$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                //$header[ 'js_name' ]  = array( 'jquery' );
                //$header[ 'showLeftPanel' ] = true;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

                $this->load->view('include/header', $header );
		$this->load->view('joint_ventures/benefits-jv');
                $this->parser->parse('include/footer', $footer );
	}
	
		public function RealestateProfile(){
			
			
			
			
		$this->load->model('Realestate_model', 'RE');
		
		$dbResult = null;
		$frmValue = $this->input->post('frm_submit');
		 if ( strcasecmp( $frmValue, 'su_binfo' ) == 0 ){
				/*if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-basic-information');
			}else{*/
				if( $this->input->post('frm_id') != null ){
					
					
					$dbResult = $this->RE->ProInfo("UPDATE",$this->input->post('frm_id'));
					
					$next_tab = 'TenancyDescription';
					return array('status'=>'true','next_tab'=>$next_tab);
					//echo '{"status":"true","next_tab":"TenancyDescription"}';
					
				}else{
					$next_tab = 'PropertyInformation';
					return array('status'=>'false','next_tab'=>$next_tab);
				}
				
			//}
			
		}else if ( strcasecmp( $frmValue, 'su_ten' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('real-estate-tenancy-description');
			}else{
				if( $this->RE->TenDesc($this->input->post('frm_id')) ){
					$next_tab = 'TenancyDetails';
					return array('status'=>'true','next_tab'=>$next_tab);
				}else{
					$next_tab = 'TenancyDescription';
					return array('status'=>'false','next_tab'=>$next_tab);
				}
				
				
			}
		}else if ( strcasecmp( $frmValue, 'su_det' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('real-estate-tenancy-details');
			}else{
				if( $this->RE->Tendetails($this->input->post('frm_id')) ){
					$next_tab = 'PropertyInformation';
					return array('status'=>'true','next_tab'=>$next_tab);
				}else{
					$next_tab = 'TenancyDetails';
					return array('status'=>'false','next_tab'=>$next_tab);
				}
							
			}
		}
	}
	public function re_edit($formType){
		
		
		
		//echo $formType;
		
		//die;
		//$this->load->model('Realestate_model', 'RE');
                log_message('debug','FORM DATA IS ['.print_r($this->input->post(), true).']');
                $this->load->library('parser');
                $this->load->helper('html');
               
                if ( strcasecmp( $formType, 'su_binfo' ) == 0 ){
                        $retVal = $this->RealestateProfile();
                }else if ( strcasecmp( $formType, 'su_ten' ) == 0 ){
                        $retVal = $this->RealestateProfile();
                }else if ( strcasecmp( $formType, 'su_det' ) == 0 ){
                        $retVal = $this->RealestateProfile();
                }
				

                log_message('debug','RETURN IS ['.json_encode($retVal).']');
                echo json_encode($retVal);
        }
		
			public function RePreview(){
			
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Search';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

				$businessType = 'startup_business'; 
				$formid=$this->session->userdata('last_form_id');
				
				$this->load->model('listing_details_model', 'LDM');
				$this->load->model('Realestate_model', 'RE');
				$data['businessData'] = $this->LDM->getBusinessDetails($formid,$businessType);
				$data['sellBusinessDescription'] = $this->RE->getSellerBusinessDescription('real_estate');
				
                $this->load->view('include/header', $header );
                $this->load->view('real_estate/business_as_re/re-business-preview', $data);
                $this->parser->parse('include/footer', $footer );
				
				
	}	
}
?>