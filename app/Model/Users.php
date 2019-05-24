<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = "users";

	protected $filelable = ['id_user','username','email','password','level','insert_time'];

	protected $hidden =['updated_at'];
}