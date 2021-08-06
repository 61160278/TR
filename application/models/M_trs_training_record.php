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
	
	public $Course_id; //
	public $Course_code; //
	public $Course_name; //
	public $Course_description; //
	public $Course_category1; //
	public $Course_category2; //
	public $Course_category3; //
	public $Course_type; //

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
	 
	 	$sql = "INSERT INTO trs_database.trs_training_record (Course_code_id ,Place_training ,Start_date ,Start_time ,End_date ,End_time ,Total_hours ,Cost ,Pre_test_score ,Post_test_score)
	 	VALUES(?,? ,? ,? ,? ,? ,? ,? ,? ,?)";
		 
	 	$this->db->query($sql, array($this->Course_code_id ,$this->Place_training ,$this->Start_date ,$this->Start_time ,$this->End_date ,$this->End_time ,$this->Total_hours ,$this->Cost ,$this->Pre_test_score ,$this->Post_test_score));
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
	
		$sql = "UPDATE trs_database.trs_course_data 
				SET	Course_code = ?, Course_name = ?, Course_description = ?, Course_category1 = ? ,Course_category2 = ? ,Course_category3 = ? , Course_type = ?
				WHERE Course_id = ?" ;
	     
	     $this->db->query($sql, array($this->Course_code, $this->Course_name, $this->Course_description, $this->Course_category1, $this->Course_category2, $this->Course_category3, $this->Course_type ,$this->Course_id));
		
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
	 	
	 	$sql = "DELETE FROM trs_database.trs_course_data
		WHERE  Course_id = ? ";
	 	$this->db->query($sql, array($this->Course_id));
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




	function get_all_crs() {	
		$sql = "SELECT * 
				FROM trs_database.trs_course_data";
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



}		 
?>