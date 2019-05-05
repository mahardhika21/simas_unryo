<?php 
namespace App\Model;

use Illuminate\Database\Elequent\Model;

class User extends Model
{
	protected $table = "user";

	protected $filelable = ['id_user','username','email','password','insert_time'];

	protected $hidden =['updated_at'];
}