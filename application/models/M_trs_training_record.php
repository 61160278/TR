<?php
/*
* Da_evs_group
* C
* @author Jakkarin Pimpaeng
* @Create Date 2564-04-8
*/ 


include_once("trs_model.php");

/*
* Da_evs_group
* 
* @author Jakkarin Pimpaeng
* @Create Date 2564-04-8
*/ 
 
class M_trs_training_record extends trs_model {		
	
	public $Course_code_id; //
	public $Place_training; //
	public $Start_date; //
	public $Start_time; //
	public $End_date; //
	public $End_time; //
	public $Total_hours; //
	public $Cost; //
	public $Pre_test_score; //
	public $Post_test_score; //
	

	function __construct() {
		parent::__construct();
	
	}

	/*
	* insert
	* Insert  to database
	* @input 
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2564-04-8
	*/
	
	function insert() {
	 
	 	$sql = "INSERT INTO trs_database.trs_training_record (Course_code_id ,Place_training ,Start_date ,Start_time ,End_date ,End_time ,Total_hours ,Cost ,Pre_test_score ,Post_test_score,Trainer_id ,Certificate)
	 	VALUES(?,? ,? ,? ,? ,? ,? ,? ,? ,?,?,?)";
		 
	 	$this->db->query($sql, array($this->Course_code_id ,$this->Place_training ,$this->Start_date ,$this->Start_time ,$this->End_date ,$this->End_time ,$this->Total_hours ,$this->Cost ,$this->Pre_test_score ,$this->Post_test_score ,$this->Trainer_id ,$this->Certificate));
	 }
	 
	/*
	* update
	* Update  into database
	* @input 
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2564-04-8
	*/

	function update() {
	
		$sql = "UPDATE trs_database.trs_training_record 
				SET	Place_training = ? ,Start_date = ? ,Start_time = ?,End_date = ?,End_time = ? ,Total_hours = ? ,Cost = ? ,Pre_test_score = ? ,Post_test_score = ?,Trainer_id = ? ,Certificate = ?
				WHERE  Training_id = ? ";
	     
	     $this->db->query($sql, array($this->Place_training, $this->Start_date, $this->Start_time, $this->End_date, $this->End_time, $this->Total_hours, $this->Cost , $this->Pre_test_score, $this->Post_test_score ,$this->Trainer_id ,$this->Certificate ,$this->Training_id));
		
	}                       

	/*
	* delete
	* Delete from database
	* @input 
	* @output -
	* @author Tippawan Aiemsaad
	* @Create Date 2564-04-8
	*/

	function delete() {
	 	
	 	$sql = "DELETE FROM trs_database.trs_training_record
		WHERE  Training_id = ? ";
	 	$this->db->query($sql, array($this->Training_id));
	 }

	/*
	* get_by_key
	* Get  from database
	* @input 
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2564-04-8
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM trs_database.trs_course_data
				WHERE gru_id=?";
		$query = $this->db->query($sql, array($this->gru_id));
		return $query;
	}




	function get_all_training() {	
		$sql = "SELECT * 
				FROM trs_database.trs_training_record";
		$query = $this->db->query($sql);
		return $query;
	}

	function get_data_course(){	
		$sql = "SELECT *
				FROM trs_database.trs_course_data
				WHERE trs_course_data.Course_code = ?";
		$query = $this->db->query($sql, array($this->Course_code));
		return $query->result();
	}//for get data from database course

	function get_data_name(){	
		$sql = "SELECT *
				FROM trs_database.trs_course_data
				WHERE trs_course_data.Course_name = ?";
		$query = $this->db->query($sql, array($this->Course_name));
		return $query->result();
	}//for get data from database course

	function connect_tb(){	
		$sql = "SELECT *
				FROM trs_database.trs_training_record as ttr
				LEFT JOIN trs_database.trs_course_data as tcd
				ON tcd.Course_code = ttr.Course_code_id
				LEFT JOIN trs_database.trs_trainer_data as ttd
				ON ttd.trainer_id = ttr.Trainer_id
				";
				
		$query = $this->db->query($sql);
		return $query;
	
	}//get_group


	function training_member(){	
		$sql = "SELECT *
				FROM trs_database.trs_training_record as ttr
				LEFT JOIN trs_database.trs_member_course as tmc
				ON tmc.Training_ID = ttr.Training_id
				";
				
		$query = $this->db->query($sql);
		return $query;
	
	}//get_group


	function get_emp(){	
		$sql = "SELECT *
				FROM dbmc.employee
				WHERE employee.Emp_ID = ? ";
		$query = $this->db->query($sql, array($this->Emp_ID));
		return $query->result();
	}

	function get_data_emp(){	
		$sql = "SELECT * 
                FROM dbmc.employee AS emp
                INNER JOIN dbmc.group_secname AS gsec 
                ON gsec.Sectioncode = emp.Sectioncode_ID
                INNER JOIN dbmc.position AS pos
                ON pos.Position_ID = emp.Position_ID
                WHERE emp.Emp_ID=? " ;
        $query = $this->db->query($sql,array($this->Emp_ID));
        return $query;
	}

	function get_training() {	
		$sql = "SELECT * 
				FROM trs_database.trs_training_record
				ORDER BY Training_id DESC LIMIT 1";
		$query = $this->db->query($sql);
		return $query;
	}

	function insert_member() {
	 
		$sql = "INSERT INTO trs_database.trs_member_course (Training_ID ,Employee_Code ,Training_Status)
		VALUES(?,? ,?)";
		
		$this->db->query($sql, array($this->Training_ID ,$this->Employee_Code ,$this->Training_Status));
	}



	function get_training_data() {	
		$sql = "SELECT * 
				FROM trs_database.trs_training_record AS ttr
				INNER JOIN trs_database.trs_course_data AS tcd
                		ON tcd.Course_code = ttr.Course_code_id
				INNER JOIN trs_database.trs_trainer_data AS ttd
                		ON ttd.trainer_id = ttr.Trainer_id
				WHERE ttr.Training_id = ?";
				
		$query = $this->db->query($sql ,array($this->Training_id));
		return $query;
	}

	function get_member() {	
		$sql = "SELECT * 
				FROM trs_database.trs_member_course AS tmc
				INNER JOIN trs_database.trs_training_record AS ttr
                		ON ttr.Training_id = tmc.Training_ID
				INNER JOIN dbmc.employee AS emp
                		ON emp.Emp_ID = tmc.Employee_Code
				INNER JOIN dbmc.position AS pos
                		ON pos.Position_ID = emp.Position_ID
				INNER JOIN dbmc.sectioncode AS sec
                		ON sec.Sectioncode = emp.Sectioncode_ID
				WHERE tmc.Training_ID = ?";
				
		$query = $this->db->query($sql ,array($this->Training_ID));
		return $query;
	}

function delete_member(){
	$sql = "DELETE FROM trs_database.trs_member_course
                 WHERE Training_ID=?";
         $this->db->query($sql, array($this->Training_ID));

}



}		 
?>