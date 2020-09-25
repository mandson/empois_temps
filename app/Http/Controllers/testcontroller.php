<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ufr;
class testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // return view('test', [
        //     'ufrs' => ufr::all()
        // ]);
        // return view('test', [
        //     'ufrs' => ufr::paginate(10) //pour retourner 10 articles par 10 par exemple
        //     ]);

        $ufrs = ufr::paginate(5);
        return view('../admin/pages2/universite',compact('ufrs'));
    }
    

    public function index22(){

    }
}
