<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowData_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->view('showData_view');
		$this->load->model('showData_model');
		//gọi hàm getdatabase trong showData_model
		$dulieu=$this->showData_model->getdatabase();
		/*truyền dữ liệu lấy được từ cơ sở dữ liệu vào view, mà cụ thể ở 
		đây là truyền dữ liệu của biến $dulieu vào view showData_view 
		*/
		//đưa biến $dulieu vào mảng với key dulieutucontroller
		$dulieumang=array('dulieutucontroller'=>$dulieu);
		var_dump($dulieumang);
		$this->load->view('showData_view', $dulieumang, FALSE);

	}

}

/* End of file showData_controller.php */
/* Location: ./application/controllers/showData_controller.php */