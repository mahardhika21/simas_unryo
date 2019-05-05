<?php 

namespace App\Model;

use Illuminate\Database\Elequent\Model;

class Transaksi extends Model
{
		protected $table ='transaksi';


		protected $filelable = ['id_transaksi','nim','nomor_kamar','tgl_mulai','tgl_akhir','status','bukti_pembayaran','time_insert'];


		protected $filehiden = ['last_update'];
}