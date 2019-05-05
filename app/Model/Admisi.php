<?php 

namespace App\Model;

use Illuminate\Database\Elequent\Model;

class Admisi extends Model
{
		protected $table ='admisi';


		protected $filelable = ['id_admisi','username','nama','phone','insert_time'];


		protected $filehiden = ['last_update'];
}