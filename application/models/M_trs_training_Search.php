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
 
class M_trs_training_Search extends trs_model {		
	
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
	 
	 	$sql = "INSERT INTO trs_database.trs_training_record (Course_code_id ,Place_training ,Start_date ,Start_time ,End_date ,End_time ,Total_hours ,Cost ,Pre_test_score ,Post_test_score,Trainer_id ,Certificate ,No_training)
	 	VALUES(?,? ,? ,? ,? ,? ,? ,? ,? ,?,?,?,?)";
		 
	 	$this->db->query($sql, array($this->Course_code_id ,$this->Place_training ,$this->Start_date ,$this->Start_time ,$this->End_date ,$this->End_time ,$this->Total_hours ,$this->Cost ,$this->Pre_test_score ,$this->Post_test_score ,$this->Trainer_id ,$this->Certificate ,$this->No_training));
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
				SET	Place_training = ? ,Start_date = ? ,Start_time = ?,End_date = ?,End_time = ? ,Total_hours = ? ,Cost = ? ,Pre_test_score = ? ,Post_test_score = ?,Trainer_id = ? ,Certificate = ? ,No_training = ?
				WHERE  Training_id = ? ";
	     
	     $this->db->query($sql, array($this->Place_training, $this->Start_date, $this->Start_time, $this->End_date, $this->End_time, $this->Total_hours, $this->Cost , $this->Pre_test_score, $this->Post_test_score ,$this->Trainer_id ,$this->Certificate ,$this->No_training ,$this->Training_id));
		
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
	function get_by_key1() {	
		$sql = "SELECT * 
				FROM trs_database.trs_course_data
				WHERE gru_id=?";
		$query = $this->db->query($sql, array($this->gru_id));
		return $query;
	}


	function get_all_training1() {	
		$sql = "SELECT * 
				FROM trs_database.trs_training_record";
		$query = $this->db->query($sql);
		return $query;
	}
	function get_data_emp(){	
		$sql = "SELECT *
				FROM dbmc.employee
				INNER JOIN dbmc.position
				ON position.Position_ID = employee.Position_ID 
				WHERE employee.Emp_ID = ? ";
		$query = $this->db->query($sql, array($this->Emp_ID));
		return $query;
	}
	function training_table(){	
		$sql = "SELECT *
				FROM trs_database.trs_training_record as ttr
				LEFT JOIN trs_database.trs_course_data as tcd
				ON tcd.Course_id = ttr.Course_code_id
				LEFT JOIN trs_database.trs_trainer_data as ttd
				ON ttd.trainer_id = ttr.Trainer_id
				LEFT JOIN trs_database.trs_member_course as tmc
				ON tmc.Training_ID = ttr.Training_id
				WHERE tmc.Employee_Code = ?
				";
				
		$query = $this->db->query($sql, array($this->Employee_Code));
		return $query;
	
	}//get_group

	function get_emp_department($sec_id){	
		$temp = substr($sec_id,4);
        $temp_sec = substr($temp,0,2);
        $sec = "";
        if($temp_sec == "DP"){
            $sec = "Department_id";
        }
        // if 
        else if($temp_sec == "SC"){
            $sec = "Section_id";
        }
        // else if
        else if($temp_sec == "SB"){
            $sec = "SubSection_id";
        }
        // else if 
        else if($temp_sec == "LN"){
            $sec = "Line_id";
        }
        // else if
        else if($temp_sec == "DV"){
            $sec = "Division_id";
        }
        // else if
        else if($temp_sec == "GR"){
            $sec = "Group_id";
        }
        // else if
		$sql = "SELECT * 
                FROM dbmc.employee AS emp
		    INNER JOIN dbmc.master_mapping AS map
                ON map.".$sec." = emp.Sectioncode_ID
                INNER JOIN dbmc.position AS pos
                ON pos.Position_ID = emp.Position_ID
                WHERE emp.Emp_ID=? " ;
        $query = $this->db->query($sql,array($this->Emp_ID));
        return $query;
	}

	function get_department(){	
		$sql = "SELECT * 
		FROM dbmc.master_mapping AS map
		WHERE Department != ''
		GROUP BY Department_id
		ORDER BY Department_id";
    $query = $this->db->query($sql);
    return $query;
	}
	function get_group(){	
		$sql = "SELECT * 
		FROM dbmc.master_mapping AS map
		WHERE `Group` != '' 
		GROUP BY Group_id
		ORDER BY Group_id";
    $query = $this->db->query($sql);
    return $query;
	}
	function get_section(){	
		$sql = "SELECT * 
		FROM dbmc.master_mapping AS map
		WHERE Section != '' 
		GROUP BY Section_id
		ORDER BY Section_id";
    $query = $this->db->query($sql);
    return $query;
	}
	function get_emp(){	
		$sql = "SELECT *
			  FROM dbmc.employee";
		$query = $this->db->query($sql);
		return $query;
	}


}		 
?>