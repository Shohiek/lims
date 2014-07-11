<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class results extends MY_Controller {

	public $results_array = array();

	public function __construct(){

		parent::__construct();
		$this->login_reroute(array(2));


		$this->load->module("upload/upload");

		$this->view_data['content_view'] 	= 	"eid/update_results";
		$this->view_data['sidebar'] 		= 	"eid_sidebar";
		$this->view_data['title'] 			= 	"EID | Results";
		$this->view_data['filter']			=	false;
		
		$this->view_data['b_color']			=	"no-skin";
		$this->view_data['topleft_title']	=	"EID";
		
		$this->view_data 					=	array_merge($this->view_data,$this->load_libraries(array("dropzone")));		
		$this->view_data['menu_select']		= 	array(3,0);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Results",
																	"link"		=>	base_url()."eid/results",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"Update",
																	"link"		=>	base_url()."eid/results/update",
																	"class"		=>	"active"
																	)
												);

	}

	public function index(){

		$this->update();
	}	

	public function update(){
		
		$this -> template($this->view_data);
	}

	public function dispatch(){	

		$this->view_data['menu_select']		= 	array(3,1);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Results",
																	"link"		=>	base_url()."eid/results",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"Dispatch",
																	"link"		=>	base_url()."eid/results/dispatch",
																	"class"		=>	"active"
																	)
												);		
		$this -> template($this->view_data);
	}

	public function view(){		
		
		$this->view_data['menu_select']		= 	array(3,2);
		$this->view_data['breadcrumbs'] 	=	array(
														0 	=>	array(
																	"title" 	=>	"Home",
																	"link"		=>	base_url()."eid/",
																	"class"		=>	""
																	),
														1 	=>	array(
																	"title" 	=>	"Results",
																	"link"		=>	base_url()."eid/results",
																	"class"		=>	"active"
																	),
														2 	=>	array(
																	"title" 	=>	"View",
																	"link"		=>	base_url()."eid/results/view",
																	"class"		=>	"active"
																	)
												);
		$this -> template($this->view_data);
	}
	
	public function update_results()
	{
		$this->load->view("update_results_oscar");
		
	}

	public function upload_file(){
		print_r($_FILES);

		// $this->login_reroute(array(2)); 


		// if($_FILES['file']){
		// 	if(substr($_FILES['file']['name'], -3) == "txt"){
		// 		$results_array 	= 	$this->uploads->read_slk($_FILES['file']['tmp_name'],false);
		// 	}elseif(substr($_FILES['file']['name'], -3) == "csv"){
		// 		$results_array	=	$this->uploads->read_csv($_FILES['file']['tmp_name'],false);
		// 	}else{
		// 	}
		// }else{
		// 	redirect("poc/upload");
		// }

		// $this -> template($this->data);		
	}
	private function read_abbott(){
		
	}

	private function read_cobas(){
		
	}
}