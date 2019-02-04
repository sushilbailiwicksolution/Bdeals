<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Advertisements extends CI_Controller {

	function __construct(){
		parent::__construct();
		//check_isvalidated();
		check_isvalidated('admin');
		
        }

	public function AdvtIndex()
	{
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

				//$this->load->model('admin/Advertisements_model', 'advertisements');

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/advertisements');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function advertisements_Page(){
		
		
		
		$draw   = intval($this->input->get("draw"));
		$start  = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		
		//print_r($_REQUEST);

		$this->load->model('admin/Advertisements_model', 'advertisements');
		$tagList2 = $this->advertisements->getProAdvertisements();

		$data = array();
		$i    = 1;
		foreach($tagList2 as $r){
			
			
			$img="<img width='100' src=".base_url().''.$r['adverti_image'].">";
			
			//print_r($r);
		
		//die;
			
			
			$data[] = array($i, $r['adverti_name'],$img,$r['adverti_url'],$r['adverti_date'],'<a href="advertisement_explore/'.$r['adverti_id'].'" class="btn btn-sm btn-danger" role="button">Edit</a><input type="image"  value="'.$r['adverti_id'].'"  onclick="RemoveAds(this)" src="'.base_url().'assets/images/delete.png" />');
			$i++;
		}

		$output = array( "draw" => $draw, "recordsTotal" => count($tagList2), "recordsFiltered"=>count($tagList2), "data"=>$data);
		echo json_encode($output);
		exit();

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
			
	public function addadvertisement(){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min' );

				$this->load->model('admin/Advertisements_model', 'advertisements');
				
				$userpath='advertisements';
			
			$path = './uploads/'.$userpath.'/';
			

			$config['upload_path']   = $path;
			$config['allowed_types'] = "gif|jpg|png";
			//log_message('debug', 'Uploaded Images ' .print_r($_FILES['uploadfile']['name'],true));
					
					//print_r($_FILES['uploadfile']['name']);
					
					 $dataval=$_FILES['uploadfile']['name'];
					
					//echo $dataval['0'];
			
		$uploadedFileNames = $this->uploadMedia($path, $this->reArrayFilesMultiple($_FILES['uploadfile']));//for Upload Photos	

	//die;
	$imageval=$path.''.$dataval['0'];
		
			$res = $this->advertisements->addAdvertisement($imageval);
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Advertisements added successfully.');
                        redirect(base_url().'admin/advertisements');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/advertisements');
                }

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/advertisements');
                $this->parser->parse('admin/include/footer', $footer );
	}

	public function advertisement_explore($testimonialsid){
				$this->load->library('parser');
                $this->load->helper('html');
                $header['title']  = 'Business Deals';
                $header[ 'css_name' ] = array( 'admin/css/jquery.dataTables.min', 'admin/css/entypo', 'admin/css/font-awesome.min', 'admin/css/bootstrap.min', 'admin/css/mouldifi-forms', 'admin/css/mouldifi-core' ) ;
                $footer['fjs_name'] = array( 'admin/js/jquery.min', 'admin/js/jquery.dataTables.min', 'admin/js/bootstrap.min', 'admin/js/bootstrap/validator.min', 'admin/js/plugins/metismenu/jquery.metisMenu', 'admin/js/plugins/blockui-master/jquery-ui', 'admin/js/plugins/blockui-master/jquery.blockUI', 'admin/js/plugins/flot/jquery.flot.min', 'admin/js/plugins/flot/jquery.flot.tooltip.min', 'admin/js/plugins/flot/jquery.flot.resize.min', 'admin/js/plugins/flot/jquery.flot.selection.min', 'admin/js/plugins/flot/jquery.flot.pie.min', 'admin/js/plugins/flot/jquery.flot.time.min', 'admin/js/scripts/functions', 'admin/js/plugins/chartjs/Chart.min', 'js/state_city_js', 'js/ajaxmethods' );

		$this->load->model('admin/Advertisements_model', 'advertisements');
		
		$data['heading']='Update Advertisements';
		
		$data['testimonialsListid']  = $this->advertisements->getProTestimonialsById($testimonialsid);
		

                $this->load->view('admin/include/header', $header );
				$this->load->view('admin/advertisement_explore',$data);
                $this->parser->parse('admin/include/footer', $footer );
	}
	
	
	public function advertisement_edit(){
		
		
		
		
		
		$userpath='advertisements';
			
			$path = './uploads/'.$userpath.'/';
			

			$config['upload_path']   = $path;
			$config['allowed_types'] = "gif|jpg|png";
			//log_message('debug', 'Uploaded Images ' .print_r($_FILES['uploadfile']['name'],true));
					
					//print_r($_FILES['uploadfile']['name']);
					
					 $dataval=$_FILES['uploadfile']['name'];
					
					//echo $dataval['0'];
			
		$uploadedFileNames = $this->uploadMedia($path, $this->reArrayFilesMultiple($_FILES['uploadfile']));//for Upload Photos	

	//die;
	//$imageval=$path.''.$dataval['0'];
	
	//echo $dataval['0'];
	
	if($dataval['0']!=''){
		
	unlink($this->input->post('imagedata'));	
	
	$imageval=$uploadedFileNames;	
	
		
	}else{
		
	
	$imageval=$this->input->post('imagedata');	
		
	}
			//echo $imageval;
			
			//print_r($imageval);
			
			
			//die;
		
		$this->load->model('admin/Advertisements_model', 'advertisements');
		
	
		$res= $this->advertisements->advertisement_edit($this->uri->segment(3),$imageval);
		
		
		
		if($res=='true'){
                        
                        $this->session->set_flashdata('msg', 'Advertisements updated successfully.');
                        redirect(base_url().'admin/advertisements');
                }else{
                       
                        $this->session->set_flashdata('msg', 'Oops! some thing went wrong please try again.');
                        redirect(base_url().'admin/advertisements');
                }
				

	}
	public function DeleteAds($str){
		
		$this->load->model('admin/Advertisements_model', 'advertisements');
		
        $data['delete'] = $this->advertisements->DeleteAds($str);
		
		
	}
}
?>