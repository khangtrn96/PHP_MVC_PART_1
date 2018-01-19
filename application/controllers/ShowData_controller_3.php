<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowData_controller_3 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showData_model_3');
		$dulieu=$this->showData_model_3->getDatabase();
		//lúc này dulieulaytucontroller bằng với $dulieu:$dulieulaytucontroller=$dulieu
		//mà $dulieu là một mảng với key là từ 0 đến n-1( n là số dữ kiện có trong bảng so_sim) và value là các giá trị của trường so, gia, id
		$dulieumang=array('dulieulaytucontroller'=>$dulieu);
		//Thông qua việc gọi view mang theo $dulieumang thì thành phần tận dụng là $dulieulaytucontroller=$dulieu
		//
		$this->load->view('showData_view_3', $dulieumang,FALSE);
	}
	public function deleteData($idnhanduoc)
	{

		$this->load->model('showData_model_3');
		if($this->showData_model_3->deleteDataById($idnhanduoc))
		{
			$this->load->view('thongbaoxoa_view');
		}
		else
		{
			echo "Xoá thất bại";
		}
	}
	public function editSim($idLayve)
	{
		$this->load->model('showData_model_3');
		$dulieuiddalay=$this->showData_model_3->editById($idLayve);
		$dulieuduavaoview=array('dulieuthuccanxuly'=>$dulieuiddalay);
		$this->load->view('editData_view', $dulieuduavaoview, FALSE);
	}
	public function updateData()
	{
		//lấy dữ liệu từ view editData_view.php
		$id=$this->input->post('id');
		$so=$this->input->post('so');
		$gia=$this->input->post('gia');
		// echo "Id là: ".$id;
		// echo "\n";
		// echo $so;
		// echo "\n";
		// echo "Gia là: ".$gia;
		$this->load->model('showData_model_3');
		//sử dụng hàm trong model giao tiếp với dữ liệu(nhận được từ view)
		if($this->showData_model_3->updateDataById($id,$so,$gia))
		{
			$this->load->view('thanhcong_view_3');
		}
		else
		{
			echo "Thất bại";
		}
	}

}

/* End of file ShowData_controller_3.php */
/* Location: ./application/controllers/ShowData_controller_3.php */