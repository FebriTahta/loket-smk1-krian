<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('displayAdmin.user.index');
    }

    public function getUser(Request $request)
    {
        if(request()->ajax())
        {
            $data = User::orderBy('id','desc');
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('Actions', function($row){
                            $btn = '<button type="button" data-toggle="modal" data-target="#formuser2" data-id="'.$row->id.'" data-id2="'.$row->name.'" class="btn btn-danger waves-effect waves-light "> <i class="fa fa-trash"></i> Hapus </button>';
                            return $btn;
                        })
                        ->rawColumns(['Actions'])
                        ->make(true);
                return datatables()->of($data)->make(true);
        }
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

    public function delete(Request $request)
    {
        $id = $request->id;
        if(request()->ajax())
        {
            $user  = User::find($id)->delete();
            return Response()->json([
                $user,
                'danger'=>'User Tersebut Berhasil dihapus'
            ]);       
        }
    }
}
