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


class Manage_instructor extends MainController {

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
	function Instructor()
	{

		$this->load->model('M_trs_trainer_data','mttd');
		$data['ins'] = $this->mttd->get_all_ins()->result();

		$this->output('/consent/tr_manage_training_configuration/v_manage_instructor',$data);
	}
	// function Instructor()
 
	function add_instructor()
	{
		// $trainer_titlename = $this->input->post("trainer_titlename");
		$tr_fname = $this->input->post("tr_fname");
		$tr_Sname = $this->input->post("tr_Sname");
		$tr_Institution = $this->input->post("tr_Institution");
		
		$this->load->model('M_trs_trainer_data','mtt');
		// $this->mtt->trainer_titlename = 1;
		$this->mtt->trainer_fname = $tr_fname;
		$this->mtt->trainer_Sname = $tr_Sname;
		$this->mtt->Institution = $tr_Institution;
		$this->mtt->insert();
		$this->Instructor();
		
	}
	// function Instructor()

	function edit_instructor()
	{
		$trainer_id = $this->input->post('trainer_id');
		// $trainer_titlename = $this->input->post("trainer_titlename");
		$tr_fname = $this->input->post("tr_fname");
		$tr_Sname = $this->input->post("tr_Sname");
		$tr_Institution = $this->input->post("tr_Institution");
		
		$this->load->model('M_trs_trainer_data','met');
		// $this->mtt->trainer_titlename = 1;
		$this->met->trainer_id = $trainer_id;
		$this->met->trainer_fname = $tr_fname;
		$this->met->trainer_Sname = $tr_Sname;
		$this->met->Institution = $tr_Institution;
		$this->met->update();
		$this->Instructor();
		
	}
	// function edit_instructor()


	function delete_instructor()
	{

		$trainer_id = $this->input->post('trainer_id');
		$this->load->model('M_trs_trainer_data','mtd');
		$this->mtd->trainer_id = $trainer_id;
		$this->mtd->delete();

		echo json_encode($status);
	}
	// function delete_instructor




}
// 