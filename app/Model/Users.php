<?php 
namespace App\Model;

use Illuminate\Database\Elequent\Model;

class Users extends Model
{
	protected $table = "user";

	protected $filelable = ['id_user','username','email','password','level','insert_time'];

	protected $hidden =['updated_at'];
}