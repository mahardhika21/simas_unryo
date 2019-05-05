<?php 

namespace App\Model;

use Illuminate\Database\Elequent\Model;

class Mahasiswa extends Model
{
		protected $table ='mahasiswa';


		protected $filelable = ['nim','nama','fakultas','prodi','tahun_masuk','time_insert'];


		protected $filehiden = ['last_update'];
}