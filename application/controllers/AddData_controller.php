<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//echo "text xem chạy được chưa";
		$this->load->view('addData_view');
	}
	public function insertData_controller()
	{
		//lấy dữ liệu từ view
		$sodienthoai=$this->input->post('so');
		$giatien=$this->input->post('gia');
		//truyen dữ liệu vào model
		$this->load->model('addData_model');
		if($this->addData_model->insert($sodienthoai,$giatien)){
				//insert thành cong
				$this->load->view('thanhcong');
		} 
		else{
			//insert thất bại
			echo "insert thất bại, xem lại code nhé";
		}
	}

}

/* End of file AddData_controller.php */
/* Location: ./application/controllers/AddData_controller.php */