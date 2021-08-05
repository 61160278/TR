<?php
/*
* M_trs_trainer_data
* C
* @author Jirayu Jaravichit
* @Create Date 2564-07-29
*/ 


include_once("trs_model.php");
 
class M_trs_trainer_data extends trs_model {		
	
	public $trainer_id; //
	public $trainer_fname; //
	public $trainer_Sname; //
	public $Institution; //

	function __construct() {
		parent::__construct();
	
	}

	/*
	* insert
	* Insert  to database
	* @input 
	* @output -
	* @author Jirayu Jaravichit
	* @Create Date 2564-07-29
	*/
	
	function insert() {
	 
	 	$sql = "INSERT INTO trs_database.trs_trainer_data (trainer_titlename ,trainer_fname,trainer_Sname,Institution)
	 	VALUES(?, ?, ?, ?)";
		 
	 	$this->db->query($sql, array($this->trainer_titlename, $this->trainer_fname, $this->trainer_Sname, $this->Institution));
	 }
	 
	/*
	* update
	* Update  into database
	* @input 
	* @output -
	* @author Jirayu Jaravichit
	* @Create Date 2564-07-29
	*/

	function update() {
	
		$sql = "UPDATE trs_database.trs_trainer_data 
				SET	trainer_titlename = ?, trainer_fname = ?, trainer_Sname = ?, Institution = ? 
				WHERE trainer_id = ?" ;
	     
	     $this->db->query($sql, array($this->trainer_titlename ,$this->trainer_fname ,$this->trainer_Sname ,$this->Institution ,$this->trainer_id));
		
	}                       

	/*
	* delete
	* Delete from database
	* @input 
	* @output -
	* @author Jirayu Jaravichit
	* @Create Date 2564-07-29
	*/

	function delete() {
	 	
	 	$sql = "DELETE FROM trs_database.trs_trainer_data
		WHERE  trainer_id = ? ";
	 	$this->db->query($sql, array($this->trainer_id));
	 }

	/*
	* get_by_key
	* Get  from database
	* @input 
	* @output -
	* @author Jirayu Jaravichit
	* @Create Date 2564-08-3
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM trs_database.trs_trainer_data
				WHERE gru_id=?";
		$query = $this->db->query($sql, array($this->gru_id));
		return $query;
	}




	function get_all_ins() {	
		$sql = "SELECT * 
				FROM trs_database.trs_trainer_data";
		$query = $this->db->query($sql);
		return $query;
	}




}		 
?>