<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mang_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $sv[0]="Khang";
		// $sv[1]="Giao";
		// $sv[2]="Thao";

		// $tensv = array("Kieu","Khiem","Vinh");
		

		// for($i=0; $i<3; $i++)
		// {
		// 	echo "<pre>";
		// 	echo $sv[$i];
		// 	echo "</pre>";
		// };
		// $bookauthor = array("Tony Khang"=>"Cuoi chan troi",
		// 				  "Tuyet Nhu"=>"Binh minh noi dau",
		// 				  "Nguyet Nga"=>"Bau troi xanh"
		// 				 );
		// echo $bookauthor["Tony Khang"];
		// //để duyệt mảng ta dùng foreach
		// foreach ($bookauthor as $key => $value) {
		// 	echo "<pre>";
		// 	echo "Ten tac gia: ".$key." co tac pham: ".$value;
		// 	echo "</pre>";
		// }
		$infobooks=array(
				"Tony Khang"=>array('Cuoi chan troi' =>"150.000 đ" ,"Troi nhieu may"=>"120.000 đ" ),
				"Tuyet Nhu"=>array("Bau troi co anh"=>"115.000 đ","Tinh em"=>"100.000 đ"),
				"Bao Bao"=>array("Anh sao"=>"130.000 đ","Noi nay co anh"=>"120.000 đ")
			);
		foreach ($infobooks as $key_1 => $value_1) {
			echo "<pre>";
			echo "Tac gia ".$key_1;
			echo " co ";
			foreach ($value_1 as $key_2 => $value_2) {
				echo "tac pham ".$key_2." co gia la ".$value_2;
				echo " ";
			}
			echo "</pre>";
		}
	}

}

/* End of file Mang_controller.php */
/* Location: ./application/controllers/Mang_controller.php */