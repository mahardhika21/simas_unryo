<?php 

namespace App\Model;

use Illuminate\Database\Elequent\Model;

class Sewa extends Model
{
		protected $table ='sewa';


		protected $filelable = ['id_sewa','id_admisi','id_transaksi','nomor_kamar','time_insert'];


		protected $filehiden = ['last_update'];
}