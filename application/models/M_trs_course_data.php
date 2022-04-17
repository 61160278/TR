<?php
/*
* M_trs_course_data
* C
* @author Jirayu Jaravichit
*/ 


include_once("trs_model.php");


 
class M_trs_course_data extends trs_model {		
	
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
	* @author Jirayu Jaravichit
	
	*/
	
	function insert() {
	 
	 	$sql = "INSERT INTO trs_database.trs_course_data (Course_code ,Course_name ,Course_description ,Course_category1 ,Course_category2 ,Course_category3 ,Course_type)
	 	VALUES(?, ?, ?, ?, ?, ?, ?)";
		 
	 	$this->db->query($sql, array($this->Course_code, $this->Course_name, $this->Course_description, $this->Course_category1, $this->Course_category2, $this->Course_category3, $this->Course_type));
	 }
	 
	/*
	* update
	* Update  into database
	* @input 
	* @output -
	* @author Jirayu Jaravichit
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
	* @author Jirayu Jaravichit
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
	* @author Jirayu Jaravichit
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM trs_database.trs_course_data
				WHERE gru_id=?";
		$query = $this->db->query($sql, array($this->gru_id));
		return $query;
	}


/*
	* get_all_crs
	* Get  from database
	* @input 
	* @output -
	* @author Jirayu Jaravichit
	*/

	function get_all_crs() {	
		$sql = "SELECT * 
				FROM trs_database.trs_course_data";
		$query = $this->db->query($sql);
		return $query;
	}
/*
	* upstatus
	* upstatus when course use
	* @input 
	* @output -
	* @author Jirayu Jaravichit
	*/
	function upstatus(){
		$sql = "UPDATE trs_database.trs_course_data 
				SET	Course_count = ? , Number_record =?
				WHERE Course_id = ?" ;
	     
	     $this->db->query($sql, array($this->Course_count ,$this->Number_record,$this->Course_id));


	}
	/*
	* upstatus
	* upstatus when course dont use
	* @input 
	* @output -
	* @author Jirayu Jaravichit
	*/
	function upstatus_del(){
		$sql = "UPDATE trs_database.trs_course_data 
				SET	Course_count = ? 
				WHERE Course_id = ?" ;
	     
	     $this->db->query($sql, array($this->Course_count ,$this->Course_id));


	}


}		 
?>