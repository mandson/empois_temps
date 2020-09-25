<?php

namespace App\Http\Controllers;
use App\ufr;
use Illuminate\Http\Request;

class adminMasterController extends Controller
{
    //

    public function index1(){
                return view('../admin/pages2/universite', [
            'ufrs' => ufr::paginate(10) //pour retourner 10 articles par 10 par exemple
            ]);      
       
    }
}
