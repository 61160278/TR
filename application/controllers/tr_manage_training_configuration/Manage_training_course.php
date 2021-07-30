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
		$data['crs'] = $this->mtcd->get_all_ins()->result();
		$this->output('/consent/tr_manage_training_configuration/v_manage_training_course');
	}
	// function index()
 



	function add_course()
	{
		$tr_course_code = $this->input->post("tr_course_code");
		$tr_course_name = $this->input->post("tr_course_name");
		$tr_course_des = $this->input->post("tr_course_des");
		
		
		$this->load->model('M_trs_trainer_data','mttc');
		$this->mttc->Course_code = $tr_course_code;
		$this->mttc->Course_name = $tr_course_name;
		$this->mttc->Course_description = $tr_course_des;
		$this->mttc->insert();
		$data="add_crs";
		echo json_encode($data);
		
	}
	// function Instructor()

	function edit_course()
	{
		$trainer_id = $this->input->post('trainer_id');
		$tr_titlename = $this->input->post("tr_titlename");
		$tr_fname = $this->input->post("tr_fname");
		$tr_Sname = $this->input->post("tr_Sname");
		$tr_Institution = $this->input->post("tr_Institution");
		
		$this->load->model('M_trs_trainer_data','met');
		$this->met->trainer_titlename = $tr_titlename;
		$this->met->trainer_id = $trainer_id;
		$this->met->trainer_fname = $tr_fname;
		$this->met->trainer_Sname = $tr_Sname;
		$this->met->Institution = $tr_Institution;
		$this->met->update();
		$data="edit_ins";
		echo json_encode($data);
		
	}
	// function edit_instructor()


	function delete_course()
	{

		$trainer_id = $this->input->post('trainer_id');
		$this->load->model('M_trs_trainer_data','mtd');
		$this->mtd->trainer_id = $trainer_id;
		$this->mtd->delete();
		$data="delete_ins";
		echo json_encode($data);
		
	}
	// function delete_instructor











}
// 