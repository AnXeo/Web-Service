<?php

namespace App\Http\Controllers;
use App\Model\MonAn;


use Illuminate\Http\Request;

class MonAnController extends Controller
{
    public function danhsach(Request $rq)
    {

    	$danhsach = MonAn::orderBy('id');

    	if($rq->ten != '')
    	{
    		$danhsach->where('ten','like','%'. $rq->ten .'%');
    	}


    	if($rq->gia != '')
    	{
    		$danhsach->where('gia','<=', $rq->gia);
    	}

    	$kq = $danhsach->get();
    	return response()->json($kq);
    }

    public function chitiet(Request $rq)
    {
    	$monan = MonAn::where('id','=',$rq->id)->first();
    	return response()->json($monan);
    }

    public function them(Request $rq)
    {
    	$monan = new MonAn;
    	$monan->ten=$rq->ten;
    	$monan->mota=$rq->mota;
    	$monan->gia=$rq->gia;

    	$monan->save();

    	return response()->json("Da them thanh cong");
    }

    public function xoa(Request $rq)
    {
    	$monan = MonAn::where('id','=',$rq->id);

    	$monan->delete();
    	// return response()->json("Da xoa thanh cong");

    }

    public function sua(Request $rq)
    {
        $monan = MonAn::where('id','=',$rq->id)->first();


        if($rq->ten != '')
        {
            $monan->ten = $rq->ten;
        }

        if($rq->mota != '')
        {
            $monan->mota = $rq->mota;
        }

        if($rq->gia != '')
        {
            $monan->gia = $rq->gia;
        }
        
        $monan->save();

        return response()->json($monan);

    }


}
