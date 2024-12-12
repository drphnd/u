<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

// untuk menampilkan semua data
public function index() {
    return view('index',[
        "pagetitle" => "HOME PAGE",
        'projects' => Project::allData()
    ]);
}

// untuk menampilkan data dengan code
public function show($code) {
    return view('detail',[
                "pagetitle" => "Detail Data",
                'projects' => Project::dataWithCode($code)
            ]);
}

// untuk menampilkan data dengan id
public function find($id) {
    return view('detailWid',[
                "pagetitle" => "Detail Data",
                'projects' => Project::find($id)
            ]);
        }

}
