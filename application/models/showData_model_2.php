<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model_2 extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('so_sim');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}

}

/* End of file showData_model_2.php */
/* Location: ./application/models/showData_model_2.php */