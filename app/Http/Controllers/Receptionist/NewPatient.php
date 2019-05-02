<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Storage;

class NewPatient extends Controller
{
    /**
     * admin dashboard
     */
    public function index()
    {
        return view('receptionist.dashboard');
    }
    public function checkin()
    {
        return view('receptionist.checkin');
    }
    public function getAudio($filename){
        $fileContents = Storage::disk('local')->get('HI_06/audio/'.$filename);
        $response = Response::make($fileContents, 200);
        $response->header('Content-Type', "audio/mpeg");
        return $response;

    }
}
