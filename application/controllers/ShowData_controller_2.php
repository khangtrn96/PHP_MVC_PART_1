<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowData_controller_2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->view('showData_view_2');
		$this->load->model('showData_model_2');
		$dulieu=$this->showData_model_2->getdatabase();
		$dulieumang=array('dulieutucontroller'=>$dulieu);
		echo "<pre>";
		//var_dump($dulieumang);
		$this->load->view('showData_view_2', $dulieumang, FALSE);

	}

}

/* End of file ShowData_controller_2.php */
/* Location: ./application/controllers/ShowData_controller_2.php */