<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Startup extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_isvalidated();
	}

	public function setNewForm(){
		$this->load->model('startup_model', 'startup');
		$this->startup->setNewForm();
			//Code to show view of user after login
			redirect('start-up-basic-information');
		
		
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
			$this->load->model('startup_model', 'startup');
			$data['sellBusinessUserProfile'] = $this->startup->getBusinessUserProfile('startup_business');
		}

		$this->load->view('include/header', $header );
		$this->load->view('startups/startup/user-profile', $data);
		$this->parser->parse('include/footer', $footer );
	}

	public function userProfileCreate(){
		$this->load->model('startup_model', 'startup');
		$dbResult = null;
		$frmValue = $this->input->post('frm_submit');
		log_message('debug','FORM TANUJ VALUE ['.$frmValue.']');
		if ( strcasecmp( $frmValue, 'sb_up' ) == 0 ){
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->startup->registerBusinessUser("UPDATE")[0];
				}else{
					$dbResult = $this->startup->registerBusinessUser("NEW")[0];
				}

				if( $dbResult ){
					redirect('start-up-basic-information');
				}else{
					redirect('start-up-user-profile'); //Redirect user on user profile page in case any db error
				}
			
		}else if ( strcasecmp( $frmValue, 'sb_bi' ) == 0 ){
			/*if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-basic-information');
			}else{*/
				if( $this->input->post('frm_id') != null ){
					$dbResult = $this->startup->registerBusinessBasicInformation("UPDATE", $this->session->userdata('last_form_id'));
				}else{
					$dbResult = $this->startup->registerBusinessUser("NEW")[0];
					$dbResult = $this->startup->registerBusinessBasicInformation("UPDATE", $this->session->userdata('last_form_id'));
				}
				
				if( $dbResult ){
					//redirect('buy-a-business-post-requirement');
					redirect('start-up-business-pitch');
				}else{
					redirect('start-up-basic-information'); //Redirect user on business description page in case any db error
				}
				
				
			//}
									
		}else if ( strcasecmp( $frmValue, 'sb_bp' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('start-up-business-pitch');
			}else{
				if( $this->input->post('frm_id') != null ){
					log_message('debug','FORM VALUE IS::::::::: ['.$this->input->post('frm_id').']');
					$dbResult = $this->startup->registerBusinessPitch("UPDATE");
				}else{
					$dbResult = $this->startup->registerBusinessPitch( "NEW" );
				}

				if( $dbResult ){
					redirect('start-up-deal-details');
				}else{
					redirect('start-up-business-pitch'); //Redirect user on business description page in case any db error
				}
			}
		}else if ( strcasecmp( $frmValue, 'sb_dd' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('start-up-deal-details');
			}else{
				if( $this->input->post('frm_id') != null ){
					log_message('debug','FORM VALUE IS::::::::: ['.$this->input->post('frm_id').']');
					$dbResult = $this->startup->registerBusinessDealDetails("UPDATE");
				}else{
					$dbResult = $this->startup->registerBusinessDealDetails( "NEW" );
				}

				if( $dbResult ){
					redirect('start-up-additional-details-uploads');
				}else{
					redirect('start-up-deal-details'); //Redirect user on business description page in case any db error
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
				if ( $this->user->registerSellerPackage() ){
					log_message('debug', 'FORM TANUJ ID ----successfully submitted');
					echo '{"status":"true","next_tab":"Packagedetails"}';
					 //return array('status'=>'true', 'next_tab'=>'Packagedetails');
				}else{
					log_message('debug', 'FORM TANUJ ID ---- failed');
					//redirect('list-your-business-package-details');
					return array('status'=>'nok', 'next_tab'=>'Packagedetails');
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_as' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('start-up-additional-services');
			}else{
				if( $this->startup->registerAdditionService() ){
					
				/**********************mail sent after form submission start here for startup business*****/
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
$htmlContent .= '<p><a href='.$website_url.'login-business-profile-form-startup'.'/'.$data['assignedEmpDetails'][0]->name.'/'.$this->session->userdata('last_form_id').'/1234/abc#Packagedetails'.'>Click here to Upgrade your Listing</a></p>';
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
					/**********************mail sent after form submission end here for startup business*****/	
					$this->session->set_flashdata('msg', 'Your form is submitted successfully & it is in waiting for approval session for admin to approve!.');
					redirect('start-up-preview');
				}else{
					redirect('start-up-additional-services');
				}
			}
		}else if( strcasecmp( $frmValue, 'sb_aservice' ) == 0 ){
			if($this->session->userdata('last_form_id')=='NEW'){
				redirect('list-your-business-additional-services');
			}else{
				if( $this->startup->registerAdditionService() ){
					//echo '{"status":"true","next_tab":"Additionalservices"}';
					return array('status'=>'true','next_tab'=>'Additionalservices');
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
			
			
			$userpath = str_replace('@','',$this->session->userdata('userid'));
			//$userpath = str_replace('@','',$userID);
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

			if( $this->startup->saveAllDetails( $fileInfoToSaveInDB ) ){
				if( strcasecmp( $frmValue, 'UA_FU' ) == 0 ){
						//$next_tab = $this->input->post('next_tab');
						//return array('status'=>'true','next_tab'=>$next_tab);
						redirect('login-business-profile-form-startup/Tanuj/'.$this->input->post('frm_id').'/123/Packagedetails');
					}else{
						redirect('start-up-additional-details-uploads'); //Redirect user after successfull business registration
					}
				}else{
					if( strcasecmp( $frmValue, 'UA_FU' ) == 0 ){
					//$next_tab = $this->input->post('next_tab');
					//return array('status'=>'false','next_tab'=>$next_tab);
					redirect('login-business-profile-form-startup/Tanuj/'.$this->input->post('frm_id').'/123/Packagedetails');
					}else{
					redirect('start-up-additional-details-uploads');//Redirect user on upload document page in case any db error
					}
				}
			}else{
				redirect('start-up-additional-details-uploads');//Redirect if its a new form
			}

			/*End of code for image/video upload*/

		}
	}


	public function seller_edit($formType){
                log_message('debug','FORM DATA IS ['.print_r($this->input->post(), true).']');
                $this->load->library('parser');
                $this->load->helper('html');
                $this->load->model('admin/Startup_Business_model','business');
                if ( strcasecmp( $formType, 'su_binfo' ) == 0 ){
                        $retVal = $this->business->updateBasicInformation( true );
                }else if ( strcasecmp( $formType, 'su_bp' ) == 0 ){
                        $retVal = $this->business->updateBusinessPitch( true );
                }else if ( strcasecmp( $formType, 'su_dd' ) == 0 ){
                        $retVal = $this->business->updateDealDetails( true );
                }else if ( strcasecmp( $formType, 'seller_upload' ) == 0 ){
                        $retVal = $this->userProfileCreate();
                }else if ( strcasecmp( $formType, 'su_aservice' ) == 0 ){
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
				}if( strstr($file['type'], 'video') != null ){
					$uploadedFileNames[$j]['doc_type'] = "video";
				}if( $type != null ){
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
			$this->load->model('startup_model', 'startup');
			$data['sellBusinessBasicInformation'] = $this->startup->getBusinessUserProfile('startup_business');
		}

		$this->load->view('include/header', $header );
		$this->load->view('startups/startup/basic-information', $data);
		$this->parser->parse('include/footer', $footer );
	}

	public function businessPitch(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->model('startup_model', 'startup');
		
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessDescription']=null;
		}else{
			$data['sellBusinessDescription'] = $this->startup->getSellerBusinessPitch('startup_business');
		}

		$this->load->view('include/header', $header );
		$this->load->view('startups/startup/business-pitch', $data);
		$this->parser->parse('include/footer', $footer );
	}

	
	public function dealDetails(){
		$this->load->library('parser');
		$this->load->helper('html');
		$header['title']  = 'Business Deals';
		$header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );

		$this->load->model('startup_model', 'startup');
		
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sellBusinessDescription']=null;
		}else{
			$data['sellBusinessBasicInformation'] = $this->startup->getSellerBusinessPitch('startup_business');
			$data['sellBusinessAdditionalFinancialDetails'] = $this->startup->getSellerAdditionalFinancialDetails();
		}

		$this->load->view('include/header', $header );
		$this->load->view('startups/startup/deal-details', $data);
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
		$header[ 'css_name' ] = array('js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
		//$header[ 'js_name' ]  = array( 'jquery' );
		//$header[ 'showLeftPanel' ] = true;
		$footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/state_city_js', 'js/userquery_js' );
		$this->load->model('startup_model','startup');
		
		if($this->session->userdata('last_form_id')=='NEW'){
			$data['medias'] = null;
		}else{
			$data['medias'] = $this->startup->getBusinessMedia($this->session->userdata('last_form_id'));
		}
		$this->load->view('include/header', $header );
		$this->load->view('startups/startup/business-additional-details-upload', $data);
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

		$this->load->model('startup_model', 'startup');

		if($this->session->userdata('last_form_id')=='NEW'){
			$data['sell_business_details'] = null;
			$data['additionalServices']    = null;

		}else{
			$data['sell_business_details'] = $this->startup->getSellerBusinessPitch('startup_business');
			$data['additionalServices'] = $this->startup->currentAdditionalServices( $data['sell_business_details'][0]['form_id'] );
		}

		$this->load->view('include/header', $header );
		$this->load->view('startups/startup/business-additional-services', $data);
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
		$this->load->model('startup_model', 'startup');
		if($this->session->userdata('last_form_id')=='NEW'){
			$availablePackages['sell_business_details']=null;
			$availablePackages['user_package']=null;
		}else{
			$availablePackages['sell_business_details'] = $this->startup->getSellerBusinessPitch('startup_business');
			$availablePackages['user_package'] = $this->startup->currentPackage( $availablePackages['sell_business_details'][0]['form_id'] );
		}

		$this->load->view('include/header', $header );
		$this->load->view('startups/startup/business-package-details', $availablePackages);
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
		public function startUpPreview(){
			
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals :: Search';
                $header[ 'css_name' ] = array( 'js/bootstrap/bootstrap.min', 'js/mainmenu/menu', 'css/default', 'css/layouts', 'css/shortcodes', 'css/font-awesome/css/font-awesome.min', 'css/responsive-leyouts', 'js/masterslider/style/masterslider', 'css/Simple-Line-Icons-Webfont/simple-line-icons', 'css/et-line-font/et-line-font', 'js/owl-carousel/owl.carousel', 'js/jFlickrFeed/style', 'js/tabs/assets/css/responsive-tabs', 'js/style-swicher/style-swicher', 'js/custom-scrollbar/jquery.mCustomScrollbar' ) ;
                $footer['fjs_name'] = array( 'js/universal/jquery', 'js/bootstrap/bootstrap.min', 'js/bootstrap/validator.min', 'js/jFlickrFeed/jflickrfeed.min', 'js/jFlickrFeed/jquery.cycle.all.min', 'js/masterslider/jquery.easing.min', 'js/masterslider/masterslider.min', 'js/mainmenu/customeUI', 'js/owl-carousel/owl.carousel', 'js/owl-carousel/custom', 'js/tabs/assets/js/responsive-tabs.min', 'js/tabs/smk-accordion', 'js/tabs/custom', 'js/scrolltotop/totop', 'js/mainmenu/jquery.sticky', 'js/custom-scrollbar/jquery.mCustomScrollbar.concat.min', 'js/style-swicher/style-swicher', 'js/style-swicher/custom', 'js/scripts/functions', 'js/ajaxmethods', 'js/userquery_js', 'js/state_city_js' );

				$businessType = 'startup_business'; 
				$formid=$this->session->userdata('last_form_id');
				
				//log_message('debug', 'Controller:::::::::::::::: '.$businessType);
				$this->load->model('listing_details_model', 'LDM');
				$this->load->model('startup_model', 'startup');
				$data['businessData'] = $this->LDM->getBusinessDetails($formid,$businessType);
				$data['sellBusinessBasicInformation'] = $this->startup->getSellerBusinessPitch($businessType);
				$data['businessDocuments'] = $this->LDM->getBusinessImageDocuments($formid,$businessType);
				//$data['additionalDetails'] = $this->LDM->getAdditionalDetails($formid,$businessType);
				$data['additionalFinancialDetails'] = $this->LDM->getAdditionalFinancialDetails($formid,$businessType);
				$data['user_package'] = $this->startup->currentPackage($formid);
				$data['additionalServices'] = $this->startup->currentAdditionalServices($formid);

                $this->load->view('include/header', $header );
                $this->load->view('startups/startup/business-preview', $data);
                $this->parser->parse('include/footer', $footer );
				
				
	}
}
?>