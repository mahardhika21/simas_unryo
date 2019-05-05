<?php
namespace App\Model;

use Illuminate\Database\Elequent\Model;

class Admisi extends Model
{
		protected $table ='admisi';


		protected $filelable = ['id_agenda','title','body','time_isnert','created_by','type','id_admin',];


		protected $filehiden = ['last_update'];
}