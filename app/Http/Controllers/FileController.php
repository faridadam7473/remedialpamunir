<?php

namespace App\Http\Controllers;

use App\item;
use App\Imports\FileImport;
use App\cr;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = item::all();
        return view('file' ,compact('item'));
    }

   
    public function store(Request $request)
    {
        Excel::import(new FileImport() , $request->file('items'));
    }

}
