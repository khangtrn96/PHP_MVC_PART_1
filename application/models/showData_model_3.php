<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model_3 extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getDatabase()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('so_sim');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}
	public function deleteDataById($id)
	{
		/*Bên showData_view_3 sẽ thông qua nút xoá sẽ gửi dữ liệu đến địa chỉ
		ShowData_controller_3/deleteData/<?= $value['gia'] ?> tức là đã gọi hàm deleteData trong ShowData_controller_3.
		Lúc này <?= $value['gia'] ?> sẽ tương ứng với $g có trong deleteDataById($g).
		Dùng db_where để gán trường gia (có trong bảng so_sim) bằng $g. Lúc này biến db có giá trị là biến $g
		Dùng db_delete để xoá dữ liệu(tức là mọi trường) liên quan đến biến db (tức $g) có trong bảng so_sim
		*/
		$this->db->where('id',$id);
		return $this->db->delete('so_sim');
	}
	public function editById($idLayve)
	{
		$this->db->select('*');
		$this->db->where('id', $idLayve);
		$dulieucansua=$this->db->get('so_sim');
		//var_dump dùng để deug lỗi trong php
		//echo dùng để in dữ liêụ còn var_dump thì vừa in và hiện kiểu dữ liệu 
		$dulieucansuaremake=$dulieucansua->result_array();
		return $dulieucansuaremake;
		//echo "<pre>";
		//var_dump($dulieucansua);
	}
	public function updateDataById($i,$s,$g)
	{
		$dulieucanupdate=array(
			// 3 biến 'id','so','gia' phải giống các trường trong bảngso_sim thì mới update được
				'id'=>$i,
				'so'=>$s,
				'gia'=>$g
			);
		$this->db->where('id', $i);
		return $this->db->update('so_sim', $dulieucanupdate);
	}
}


/* End of file showData_model_3.php */
/* Location: ./application/models/showData_model_3.php */