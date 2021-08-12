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


class Manage_training_course extends MainController {

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
	function Course()
	{
		$this->load->model('M_trs_course_data','mtcd');
		$data['crs'] = $this->mtcd->get_all_crs()->result();

		$this->output('/consent/tr_manage_training_configuration/v_manage_training_course',$data);
	}
	// function index()
 

	function add_course()
	{
		$tr_course_code = $this->input->post("tr_course_code");
		$tr_course_name = $this->input->post("tr_course_name");
		$tr_course_des = $this->input->post("tr_course_des");
		$tr_course_category1 = $this->input->post("tr_course_category1");
		$tr_course_category2 = $this->input->post("tr_course_category2");
		$tr_course_category3 = $this->input->post("tr_course_category3");
		$tr_course_type = $this->input->post("tr_course_type");
		
		
		$this->load->model('M_trs_course_data','mttc');
		$this->mttc->Course_code = $tr_course_code;
		$this->mttc->Course_name = $tr_course_name;
		$this->mttc->Course_description = $tr_course_des;
		$this->mttc->Course_category1 = $tr_course_category1;
		$this->mttc->Course_category2 = $tr_course_category2;
		$this->mttc->Course_category3 = $tr_course_category3;
		$this->mttc->Course_type = $tr_course_type;
		$this->mttc->insert();
		$data="add_crs";
		echo json_encode($data);
		
	}
	// function Instructor()

	function edit_course()
	{
		$Course_id = $this->input->post('Course_id');
		$tr_course_code = $this->input->post("tr_course_code");
		$tr_course_name = $this->input->post("tr_course_name");
		$tr_course_des = $this->input->post("tr_course_des");
		$tr_course_category1 = $this->input->post("tr_course_category1");
		$tr_course_category2 = $this->input->post("tr_course_category2");
		$tr_course_category3 = $this->input->post("tr_course_category3");
		$tr_course_type = $this->input->post("tr_course_type");
		
		$this->load->model('M_trs_course_data','medt');
		$this->medt->Course_id = $Course_id;
		$this->medt->Course_code = $tr_course_code;
		$this->medt->Course_name = $tr_course_name;
		$this->medt->Course_description = $tr_course_des;
		$this->medt->Course_category1 = $tr_course_category1;
		$this->medt->Course_category2 = $tr_course_category2;
		$this->medt->Course_category3 = $tr_course_category3;
		$this->medt->Course_type = $tr_course_type;
		$this->medt->update();
		$data="edit_crs";
		echo json_encode($data);
		
	}
	// function edit_instructor()


	function delete_course()
	{

		$Course_id = $this->input->post('Course_id');
		$this->load->model('M_trs_course_data','mtdd');
		$this->mtdd->Course_id = $Course_id;
		$this->mtdd->delete();
		$data="delete_crs";
		echo json_encode($data);
		
	}
	// function delete_instructor


	function get_data_course()
	{
		$this->load->model('M_trs_trainer_data','mdda');
		$data = $this->mdda->get_all_crs()->result();
		echo json_encode($data);
	}
	// get_data

	






}
// 