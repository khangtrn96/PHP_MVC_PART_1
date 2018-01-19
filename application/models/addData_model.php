<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($s,$g)
	{	
		//so và gia trong mảng $dulieu được lấy theo cách dặt tên trong table so_sim
		//bật structure trong phpMyadmin để thấy điều đó
		$dulieu = array('so' =>$s ,'gia'=>$g );
		//so_sim là table được lấy trong hệ cơ sở dữ liệu mysql
		//dùng db->insert là thêm dữ liệu vào database của phpmyadmin, cụ thể là đưa vào bảng so_sim
		$this->db->insert('so_sim', $dulieu);

		return $this->db->insert_id();//tra ve gia tri là id cua chính phần tử đấy
	}

}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */