<?php
/*
* Trs_Controller
* Form Management
* @input  -   
* @output -
* @author Kunanya Singmee
* @Create Date 2564-7-10
*/
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");


class Manage_training_record extends MainController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	/*
	* index
	* 
	* @input 
	* @output 
	* @author 	Kunanya Singmee
	* @Create Date 2564-7-10
	*/
	function index()
	{
		$this->load->model('M_trs_training_record','mtrr');
		$data['trc'] = $this->mtrr->connect_tb()->result();
		
		$this->output('/consent/tr_manage_training_record/v_manage_training_record',$data);
	}
	// function index()
	function info_training_data($Training_id)
	{
		$this->load->model('M_trs_training_record','mtdr');
		$this->mtdr->Training_id = $Training_id;
		$data['trd'] = $this->mtdr->get_training_data()->result();

		$this->load->model('M_trs_training_record','mtrs');
		$this->mtrs->Training_ID = $Training_id;
		$data['mtr'] = $this->mtrs->get_member()->result();
		$this->output('/consent/tr_manage_training_record/v_info_training_record' ,$data);
	}
	// function create_training_data()
	function create_training_data()
	{
		$this->load->model('M_trs_trainer_data','mttd');
		$data['ins'] = $this->mttd->get_all_ins()->result();
		$this->output('/consent/tr_manage_training_record/v_create_training_record',$data);
	}
	// function create_training_data()
	function edit_training_data($Training_id)
	{
		$this->load->model('M_trs_training_record','mtdd');
		$this->mtdd->Training_id = $Training_id;
		$data['trr'] = $this->mtdd->get_training_data()->result();

		$this->load->model('M_trs_training_record','mtrr');
		$this->mtrr->Training_ID = $Training_id;
		$data['mtn'] = $this->mtrr->get_member()->result();
		$this->output('/consent/tr_manage_training_record/v_edit_training_record' ,$data);
	}
	// function create_training_data()



	function add_training()
	{
		$tr_course_code = $this->input->post("tr_course_code");
		$place_training = $this->input->post("place_training");
		$start_date = $this->input->post("start_date");
		$start_time = $this->input->post("start_time");
		$end_date = $this->input->post("end_date");
		$end_time = $this->input->post("end_time");
		$total_h = $this->input->post("total_h");
		$cost = $this->input->post("cost");
		$pre_score = $this->input->post("pre_score");
		$post_score = $this->input->post("post_score");
		$trainer = $this->input->post("trainer");
		$checkboxs = $this->input->post("checkboxs");
		$Show_count = $this->input->post("Show_count");
		$Show_course_id = $this->input->post("Show_course_id");
		
	
		$this->load->model('M_trs_training_record','mttr');
		$this->mttr->Course_code_id = $tr_course_code;
		$this->mttr->Place_training = $place_training;
		$this->mttr->Start_date = $start_date;
		$this->mttr->Start_time = $start_time;
		$this->mttr->End_date = $end_date;
		$this->mttr->End_time = $end_time;
		$this->mttr->Total_hours = $total_h;
		$this->mttr->Cost = $cost;
		$this->mttr->Pre_test_score = $pre_score;
		$this->mttr->Post_test_score = $post_score;
		$this->mttr->Trainer_id = $trainer;
		$this->mttr->Certificate = $checkboxs;
		$this->mttr->insert();
		

		$this->load->model('M_trs_course_data','mtcd');
		$this->mtcd->Course_count = $Show_count+1;
		$this->mtcd->Course_id = $Show_course_id;
		$this->mtcd->upstatus();
		$data="add_tr";
		echo json_encode($data);
		
		
	}
	// function add_training()


	function edit_training()
	{
		$Training_id = $this->input->post('Training_id');
		$edt_place_training = $this->input->post("edt_place_training");
		$edt_start_date = $this->input->post("edt_start_date");
		$edt_start_time = $this->input->post("edt_start_time");
		$edt_end_date = $this->input->post("edt_end_date");
		$edt_end_time = $this->input->post("edt_end_time");
		$edt_total_h = $this->input->post("edt_total_h");
		$edt_cost = $this->input->post("edt_cost");
		$edt_pre_score = $this->input->post("edt_pre_score");
		$edt_post_score = $this->input->post("edt_post_score");
		$edt_trainer = $this->input->post("edt_trainer");
		$edt_checkboxs = $this->input->post("edt_checkboxs");
		$edt_Show_count = $this->input->post("edt_Show_count");
		$edt_Show_course_id = $this->input->post("edt_Show_course_id");
		
	
		$this->load->model('M_trs_training_record','mtrt');
		$this->mtrt->Training_id = $Training_id;
		$this->mtrt->Place_training = $edt_place_training;
		$this->mtrt->Start_date = $edt_start_date;
		$this->mtrt->Start_time = $edt_start_time;
		$this->mtrt->End_date = $edt_end_date;
		$this->mtrt->End_time = $edt_end_time;
		$this->mtrt->Total_hours = $edt_total_h;
		$this->mtrt->Cost = $edt_cost;
		$this->mtrt->Pre_test_score = $edt_pre_score;
		$this->mtrt->Post_test_score = $edt_post_score;
		$this->mtrt->Trainer_id = $edt_trainer;
		$this->mtrt->Certificate = $edt_checkboxs;
		$this->mtrt->update();
		$data="edt_tr";
		echo json_encode($data);
		
		
	}
	// function edit_training()


	function delete_training_data()
	{

		$Training_id = $this->input->post('Training_id');
		$this->load->model('M_trs_training_record','mddd');
		$this->mddd->Training_id = $Training_id;
		$this->mddd->delete();
		$data="delete_tr";
		echo json_encode($data);
		
	}
	// function delete_instructor

	function search_by_course_code(){
		$tr_course_code = $this->input->post('tr_course_code');
		$this->load->model('M_trs_training_record','mtcd');
		$this->mtcd->Course_code = $tr_course_code;
		$data = $this->mtcd->get_data_course();
		echo json_encode($data);
	}


	function search_by_course_name(){
		$Show_course_name = $this->input->post('Show_course_name');
		$this->load->model('M_trs_training_record','mtdd');
		$this->mtdd->Course_name = $Show_course_name;
		$data = $this->mtdd->get_data_name();
		echo json_encode($data);
	}

 
	function search_emp(){
		$emp_id = $this->input->post('emp_id');
		$this->load->model('M_trs_training_record','mtrr');
		$this->mtrr->Emp_ID = $emp_id;
		
		$data = $this->mtrr->get_emp();
		echo json_encode($data);
	}
	// function search_emp

	function search_get_emp(){
		$emp_id = $this->input->post('emp_id');
		$this->load->model('M_trs_training_record','mtrr');
		$this->mtrr->Emp_ID = $emp_id;
		
		$data = $this->mtrr->get_data_emp()->row();
		echo json_encode($data);
	}
	// function search_get_emp
function get_course(){
	$this->load->model('M_trs_training_record','mtcr');
	$data = $this->mtcr->get_training()->row();
	echo json_encode($data);
}
function save_member(){
	
	$training = $this->input->post('training'); 
	$count = $this->input->post('count'); 
	$empid = $this->input->post('empid'); 
for($i=0;$i<$count;$i++){
	$this->load->model('M_trs_training_record','mtcc');
	$this->mtcc->Training_ID = $training;
	$this->mtcc->Employee_Code = $empid[$i];
	$this->mtcc->Training_Status = "PASS";
	$this->mtcc->insert_member();
	
}

$data="save_member";
echo json_encode($data);
}





}
// 