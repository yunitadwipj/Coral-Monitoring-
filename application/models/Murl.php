<?php 
class Murl extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function ambilData(){
		$data = $this->db->query('select * from data_training');
		return $data;
	}
	public function ambilDataTest(){
		$data = $this->db->query('select * from data_testing');
		return $data;
	}
	public function dataMax($col){
		$data = $this->db->query("select MAX($col) as max from data_training");
		return $data;
	}
	public function dataMin($col){
		$data = $this->db->query("select MIN($col) as min from data_training");
		return $data;
	}
	public function dataMaxt($col){
		$data = $this->db->query("select MAX($col) as max from data_testing");
		return $data;
	}
	public function dataMint($col){
		$data = $this->db->query("select MIN($col) as min from data_testing");
		return $data;
	}
}