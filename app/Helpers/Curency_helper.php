<?php 
namespace App\Helpers;

class Curency_helper  
{
		public function cetak()
		{
			echo "hellow data";
		}

		//return : 1.000.000
		public function format_rupiah($angka)
		{
			return strrev(implode('.',str_split(strrev(strval($angka)),3)));
		}
}