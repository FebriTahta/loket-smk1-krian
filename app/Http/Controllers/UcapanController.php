<?php

namespace App\Http\Controllers;
use App\Models\Ucapan;
use DataTables;
use Illuminate\Http\Request;

class UcapanController extends Controller
{
    public function index()
    {
        return view('displayAdmin.ucapan.index');
    }

    public function getucapan()
    {
        if(request()->ajax())
        {
            $data = Ucapan::orderBy('id','desc');
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('Actions', function($row){
                            $btn = '<button type="button" data-toggle="modal" data-target="#formuserini" data-id="'.$row->id.'" class="btn btn-danger waves-effect btn-sm waves-light "> <i class="fa fa-trash"></i> Hapus </button>';
                            $btn = $btn.'<button type="button" data-toggle="modal" data-target="#formuseritu" data-id="'.$row->id.'" data-kata="'.$row->kata.'" class="btn btn-sm btn-warning waves-effect waves-light "> <i class="fa fa-pencil"></i> Update </button>';
                            return $btn;
                        })
                        ->rawColumns(['Actions'])
                        ->make(true);
                return datatables()->of($data)->make(true);
        }
    }

    public function postucapan(Request $request)
    {
        $data   =   Ucapan::create(
            [
                'kata' => $request->kata,
            ]);    
                 
            return Response()->json([
                $data,
                'success'=>'Ucapan Baru Berhasil disimpan'
            ]);
    }

    public function hapusucapan(Request $request)
    {
        $id = $request->id;
        if(request()->ajax())
        {
            $user  = Ucapan::find($id)->delete();
            return Response()->json([
                $user,
                'danger'=>'Ucapan Tersebut Berhasil dihapus'
            ]);       
        }
    }

    public function updateucapan(Request $request)
    {
        $id = $request->id;
        $data = Ucapan::find($id)->update(['kata'=>$request->kata]);
        return Response()->json([
            $data,
            'success'=>'Ucapan Tersebut Berhasil diupdate'
        ]);
    }
}
