<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kriteria;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KriteriaController extends Controller
{
    public function index(Request $request)
    {
        $title  = 'Kriteria';
        $data = kriteria::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit "> <button type="button" class="btn rounded-pill btn-icon btn-primary">
                        <span class="tf-icons bx bx-message-square-edit"></span>
                      </button></a>';
                    $btn = $btn . ' <button type="button" class="btn rounded-pill btn-icon btn-danger">
                    <span class="tf-icons bx bx-trash-alt"></span>
                  </button>';
                //     return $btn;
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('admin.kriteria.index', compact('title'));
    }

    public function data(){
        $data = kriteria::all();
        return response()->json($data);
    }
}
