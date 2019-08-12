<?php
namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
		protected $table ='Kamar';


		protected $filelable = ['id_kamar','nomor_kamar','id_admin','foto_kamar','lantai_kamar','harga_perbulan','status_kamar','time_insert'];


		protected $filehiden = ['last_update'];
} 