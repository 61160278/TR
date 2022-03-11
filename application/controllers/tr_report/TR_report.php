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


class TR_report extends MainController {

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
	function Report()
	{
		$this->output('/consent/tr_report/v_report_training');
	}
	// function index()
	function Report_person()
	{
		$data["Show_datapr"] = [];
		$this->output('/consent/tr_report/v_report_person',$data);
		
	}
	function Report_group()
	{
		$this->load->model('M_trs_training_Search','mevg');
		$data['get_dep'] = $this->mevg->get_department()->result();
		$this->output('/consent/tr_report/v_report_group', $data);
	}
	function Report_support()
	{
		$this->output('/consent/tr_report/v_report_support');
	}
	function Show_trainingperson()
	{
		$Emp_id = $this->input->post('emp_id');
		$this->load->model('M_trs_training_Search','mtts');
		$this->mtts->Emp_ID = $Emp_id;
		$data["data_id"] = $this->mtts->get_data_emp();
		if(sizeof($data["data_id"]->row()) != 0){
			
			$this->load->model('M_trs_training_Search','mtst');
			$this->mtst->Employee_Code = $Emp_id;
			$data["Show_datapr"] = $this->mtst->training_table()->result();
			   $this->output('/consent/tr_report/v_report_person', $data);
		}else{
			redirect("tr_report/Tr_report/Report_person");
		}
		  
	}//แสดงการอบรมต่างๆใน Report person


	function Get_department(){
		$department_id = $this->input->post('department_id');

		$this->load->model('M_trs_training_Search','mevg');
		// $this->mevg->department_id = $department_id;
		$data['get_dep'] = $this->mevg->get_department()->result();
		
		echo json_encode($data);

	}
}
// 