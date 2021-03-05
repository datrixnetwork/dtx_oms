<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mdl_Order;
use Illuminate\Http\Request;
use DataTables;

class getlist extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = mdl_Order::first()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
            
            $action = '<a id="show" data-toggle="modal" data-id='.$row->id.'><i class="far fa-eye"></i></a>
            <a id="edit" data-toggle="modal" data-id='.$row->id.'><i class="far fa-edit"></i> </a>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <button type="button" data-id="'.$row->id.'" data-toggle="modal" data-target="#DeleteArticleModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>
            <a id="delete1" data-id='.$row->id.'><i class="far fa-trash-alt"></i></a>';
            
            return $action;
            
            })
            ->rawColumns(['action'])
            ->make(true);
            }
            
            return view('orderlist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
