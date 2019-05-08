<?php
namespace App\Helpers;

class Calendar_helper 
{
	//return : 20 april 2016

	function long_date($date)
	{
		 $angka = explode("-", $date);
		 $month = $this->full_arr_month($angka[1]);
		 //echo $month;
		 echo '<pre>'.print_r($month, true) .'</pre>';
	}



	function full_arr_month($number)
	{
		$month = array (
				1  =>   'Januari',
				2  =>   'Februari',
				3  =>   'Maret',
				4  =>	'April',
				5  =>	'Mei',
				6  =>	'Juni',
				7  =>	'Juli',
				8  =>	'Agustus',
				9  =>	'September',
				10 =>	'Oktober',
				11 =>	'November',
				12 =>	'Desember'
			);

		return $month[$number];
	}
}