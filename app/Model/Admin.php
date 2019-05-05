<?php 
namespace App\Model;

use Illuminate\Database\Elequent\Model;

class Admin extends Model 
{
	protected $table = 'admin';

	protected $filelable = ['id_admin','username','nama','phone','insert_time'];

	protected $hidden = ['last_update'];
} 