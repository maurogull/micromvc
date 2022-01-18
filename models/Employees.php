<?php


class Employees extends Model {


	/* This is an example of Model method, we do an SQL query and just return all rows */	
	/* IMPORTANT: Be careful if you receive any parameters and concatenate them to form a SQL query, SQL INJECTION RISK !!!! */	
	/* ALWAYS SANITIZE DATA !!!! */	
	public function getAll() {
		$this->db->query("SELECT * FROM employees");
		return $this->db->fetchAll();
	}


}