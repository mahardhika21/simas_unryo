<?php 
namespace App\Model;


use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
		protected $table ='mahasiswa';


		protected $filelable = ['nim','nama','fakultas','prodi','provinsi','kabupaten','alamat','tahun_masuk','time_insert'];


		protected $filehiden = ['last_update'];
}