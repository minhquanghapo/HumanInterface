<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllerHI04 extends Controller
{
    public function getPatientExaminationSchedule(){
        return view('HI_03/HI_04-quan-li');
    }

    public function getFormSearch(Request $req){
    	$data = [];
    	$data["search_value"] = $req->search_box;
    	$data["search_type"] = $req->radio_search;
    	return view('HI_03/result')->with('data',$data);;
    }
}
