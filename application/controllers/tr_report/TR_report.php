<?php
/*
* TR_report
* @author Jirayu Jaravichit
*/
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");
require('WriteHTML.php');

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
		$data["data_id"] = [];
		$this->output('/consent/tr_report/v_report_person',$data);

		
		
	}

	function Report_person_pdf()
	{
		$pdf = new PDF_HTML(); 
// Add Thai font 
$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->AddFont('THSarabunNew','B','THSarabunNew_b.php');
$pdf->AddPage();
$pdf->SetFont('THSarabunNew','B',16);
$pdf->Cell(0, 10, iconv('UTF-8', 'cp874', 'รายงานการอบรมของพนักงานรายบุคคล (Personnel Report Form)'), 0, 1, 'C', 0);
$pdf->SetFont('THSarabunNew','',16);
$pdf->Cell(40, 10, iconv('UTF-8', 'cp874', 'เนื้อหาต่างๆ'));
$pdf->Output();
// $pdf->Output('D','Report_person.pdf');
		

		
		
	}//ฟังก์ชันหน้าการแสดงผล PDF 

	function Report_group()
	{
		$this->load->model('M_trs_training_Search','mevg');
		$data['get_dep'] = $this->mevg->get_department()->result();

		$this->load->model('M_trs_training_Search','megg');
		$data['get_grp'] = $this->megg->get_group()->result();

		$this->load->model('M_trs_training_Search','mese');
		$data['get_sec'] = $this->mese->get_section()->result();

		$this->load->model('M_trs_training_Search','meeg');
		$data['get_emp'] = $this->meeg->get_emp()->result();

	
		
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
		$emp_temp = [];
  		$emp_check = [];
  		$emp_info = [];

		  $this->mevg->Department_id = $department_id;
		  $data['get_dep'] = $this->mevg->get_department_id()->result();

				foreach($data['get_dep'] as $index => $row){
					$count = $index;
					$dp = $row->Department_id;
					$sc = $row->Section_id;
					$sb = $row->SubSection_id;
					$gr = $row->Group_id;
					$ln = $row->Line_id;
					$emp = $this->mevg->get_emp_by_dpm($dp,$sc,$sb,$gr,$ln)->result();

					if(sizeof($emp) != 0){
						foreach($emp as $index => $row){
							array_push($emp_temp, $row);
		
	
						}
					}
					// if 
					
				}

			$data = $emp_temp	;
		
		echo json_encode($data);

	}


	function Get_Section(){
		$department_id = $this->input->post('department_id');

		$this->load->model('M_trs_training_Search','mevg');
		  $this->mevg->Department_id = $department_id;
		  $data = $this->mevg->get_section_by_dpmid()->result();
  
	
		
		echo json_encode($data);

	}
	function Get_Group(){
		$Section_id = $this->input->post('Section_id');

		$this->load->model('M_trs_training_Search','mevg');
		  $this->mevg->Section_id = $Section_id;
		  $data = $this->mevg->get_group_by_sectionID()->result();
  
	
		
		echo json_encode($data);

	}
	

	function Get_section_by_departmentID(){
		$Department_id = $this->input->post('Department_id');
		$Section_id = $this->input->post('Section_id');
		$Section_id = $this->input->post('Section_id');
		$this->load->model('M_trs_training_Search','mevg');
		$emp_temp = [];
  		$emp_check = [];
  		$emp_info = [];
		  $this->mevg->Department_id = $Department_id;
		  $this->mevg->Section_id = $Section_id;
		  $data['get_dep'] = $this->mevg->get_department_by_sectionID()->result();
		  
				foreach($data['get_dep'] as $index => $row){
					$count = $index;
					$dp = $row->Department_id;
					$sc = $row->Section_id;
					$sb = $row->SubSection_id;
					$gr = $row->Group_id;
					$ln = $row->Line_id;
					$emp = $this->mevg->get_emp_by_dpm($dp,$sc,$sb,$gr,$ln)->result();

					if(sizeof($emp) != 0){
						foreach($emp as $index => $row){
							array_push($emp_temp, $row);
						}
					}
					// if 

				}
		$data = $emp_temp;
		
		echo json_encode($data);

	}


	function Get_group_by_departmentID(){
		$Department_id = $this->input->post('Department_id');
		$Section_id = $this->input->post('Section_id');
		$Group_id = $this->input->post('Group_id');
		
		$this->load->model('M_trs_training_Search','mevg');
		$emp_temp = [];
  		$emp_check = [];
  		$emp_info = [];
		  $this->mevg->Department_id = $Department_id;
		  $this->mevg->Section_id = $Section_id;
		  $this->mevg->Group_id = $Group_id;
		  $data['get_dep'] = $this->mevg->get_department_by_groupID()->result();
		  
				foreach($data['get_dep'] as $index => $row){
					$count = $index;
					$dp = $row->Department_id;
					$sc = $row->Section_id;
					$sb = $row->SubSection_id;
					$gr = $row->Group_id;
					$ln = $row->Line_id;
					$emp = $this->mevg->get_emp_by_dpm($dp,$sc,$sb,$gr,$ln)->result();

					if(sizeof($emp) != 0){
						foreach($emp as $index => $row){
							array_push($emp_temp, $row);
						}
					}
					// if
					}
		$data = $emp_temp	;
		
		echo json_encode($data);

	}

	

}
// 