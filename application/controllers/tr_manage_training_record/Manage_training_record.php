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
	function info_training_data()
	{
		$this->output('/consent/tr_manage_training_record/v_info_training_record');
	}
	// function create_training_data()
	function create_training_data()
	{
		$this->load->model('M_trs_trainer_data','mttd');
		$data['ins'] = $this->mttd->get_all_ins()->result();
		$this->output('/consent/tr_manage_training_record/v_create_training_record',$data);
	}
	// function create_training_data()
	function edit_training_data()
	{
		$this->output('/consent/tr_manage_training_record/v_edit_training_record');
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
	// function Instructor()

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
 
}
// 