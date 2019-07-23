<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
		protected $table = 'extra';

		protected $primaryKey = 'id_extra';

		protected $filelable = ['id_extra','nama','body','type','detail','url','insert_time','updated_ad'];

}