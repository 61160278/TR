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


class Emp_training_record extends MainController {

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
	function Employee_training()
	{
		$this->output('/consent/tr_employee_training_record/v_employee_training_record');
	}
	// function Employee_training()
	function Show_Profile()
	{
		$Emp_id = $this->input->post('emp_id');
		$this->load->model('M_trs_training_Search','mtts');
		$this->mtts->Emp_ID = $Emp_id;
		$data["data_id"] = $this->mtts->get_data_emp();
		if(sizeof($data["data_id"]->result()) != 0){
		// 	$this->load->model('M_trs_training_Search','mtts');
		// $this->mtts->Emp_ID = $Emp_id;
		// $data["data_id"] = $this->mtts->get_data_emp();
			$this->output('/consent/tr_employee_training_record/v_profile_show', $data);
		}else{
			redirect("tr_employee_training_record/Emp_training_record/Employee_training");
		}
		
	}
	
 
}
// 