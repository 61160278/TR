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
 
class M_trs_course_data extends trs_model {		
	
	public $Course_id; //
	public $Course_code; //
	public $Course_name; //
	public $Course_description; //
	// public $Course_type; //

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
	 
	 	$sql = "INSERT INTO trs_database.trs_course_data (Course_code ,Course_name,Course_description)
	 	VALUES(?, ?, ?)";
		 
	 	$this->db->query($sql, array($this->Course_code, $this->Course_name, $this->Course_description));
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
				SET	trainer_titlename = ?, trainer_fname = ?, trainer_Sname = ?, Institution = ? 
				WHERE trainer_id = ?" ;
	     
	     $this->db->query($sql, array($this->trainer_titlename ,$this->trainer_fname ,$this->trainer_Sname ,$this->Institution ,$this->trainer_id));
		
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




	function get_all_ins() {	
		$sql = "SELECT * 
				FROM trs_database.trs_course_data";
		$query = $this->db->query($sql);
		return $query;
	}




}		 
?>