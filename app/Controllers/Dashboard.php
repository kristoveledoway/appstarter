<?php

namespace App\Controllers;

use App\Models\M_kas_keluar;
use App\Models\M_kas_masuk;

class Dashboard extends BaseController
{
	public function index()
	{
		$bm     = new M_kas_masuk();
		$mb     = new M_kas_keluar();
		$data['totalkasmasuk'] = $bm->hitungjumlah();
		$data['totalkaskeluar'] = $mb->hitungkeluar();
		$data['totalsuratmasuk'] = $bm->totalsuratmasuk();
		$data['totalsuratkeluar'] = $mb->totalsuratkeluar();
		return view('dashboard/index', $data);
	}

	//--------------------------------------------------------------------

}
