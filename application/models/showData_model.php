<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase()
	{
		//db->insert là lệnh dùng để lấy dữ liệu từ bảng so_sim
		$this->db->select('so,gia,id');
		//cạu lệnh trên có thể thay thế cho câu lệnh sau, cùng với mục đích là lấy dữ liệu:
		//$this->db->select('*');
		//với * là thay thế các trường có trong bảng so_sim, mà cụ thể ở đây là trường so và trường sim
		/*
		Cú pháp để chọn bảng và số dữ liệu : 
		Dòng lệnh:$this->db->get('Table', limit, offset);
		Với:Table là bảng(vi du:so_sim),limit là số dữ kiện cần lấy, offset là lấy từ dữ kiện thú mấy trở di
		$this->db->get('Table', 2, 3); tức lấy 2 dữ liệu từ dữ liệu thứ 3 trở đi có trong bảng Table
		Lưu ý:Nếu muốn lấy hết thì bỏ limit và offset
		 */
		$ketqua=$this->db->get('so_sim');//giá trị của biến ketqua là mảng đa chiều
		/*
		Cú pháp xuất giá trị của biến về kiểu mảng:db_result_array
		Dòng lệnh:$Var->result_array();
		Với: Var là biến cần tác động đến
		 */
		$ketqua=$ketqua->result_array();
		return $ketqua;
	// 	Cú pháp dùng để kiểm tra loại dữ liệu: var_dump(expression)
	// 	với expression là biến
		 
	// 	//kiểm tra kiểu dữ liệu của biến ketqua
		
	// 	echo "<pre>";
	// 	var_dump($ketqua);
	}

}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */