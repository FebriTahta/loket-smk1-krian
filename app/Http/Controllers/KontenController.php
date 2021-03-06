<?php

namespace App\Http\Controllers;
use App\Models\Konten;
use App\Models\Video;
use App\Models\Nilai;
use App\Models\Kriteria;
use DataTables;
use Excel;
use LaravelVideoEmbed;
use App\Imports\ImportEx;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index()
    {
        $p = kriteria::where('id',2)->get();

        return view('displayAdmin.konten.index',compact('p'));
    }

    public function import(Request $request)
    {
        $id=2;
        $pid = Penilaian::where('kriteria_id',2)->get('id');
        $jmlh= $pid->count();
        Excel::import(new ImportEx($id), $request->file('file'));
        return redirect()->back()->with('success','Peserta Berhasil Ditambahkan Melalui file Excel');
    }

    public function getkonten(Request $request)
    {
        if(request()->ajax())
        {
            $data = Konten::orderBy('id','desc');
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('img', function($row){
                            $url=asset('gambar/'.$row->gambar); 
                            $btn = '<img src="'.$url.'" class="rounded-circle" height="50px" width="50px">';
                            return $btn;
                        })
                        ->addColumn('Actions', function($row){
                            $btn = '<button type="button" data-toggle="modal" data-target="#formuserini" data-id="'.$row->id.'" data-id2="'.$row->name.'" class="btn btn-danger waves-effect waves-light "> <i class="fa fa-trash"></i> Hapus </button>';
                            return $btn;
                        })
                        ->rawColumns(['Actions','img'])
                        ->make(true);
                return datatables()->of($data)->make(true);
        }
    }

    public function getvideo(Request $request)
    {
        if(request()->ajax())
        {
            $data = Video::orderBy('id','desc');
                return Datatables::of($data)
                        ->addIndexColumn()
                        // ->addColumn('video', function($row){
                        //     $url=asset('video/'.$row->video); 
                        //     $btn = '<img src="'.$url.'" class="rounded-circle" height="50px" width="50px">';
                        //     return $btn;
                        // })
                        ->addColumn('Actions', function($row){
                            $btn = '<button type="button" data-toggle="modal" data-target="#formuseritu" data-id="'.$row->id.'" data-id2="'.$row->name.'" class="btn btn-danger waves-effect waves-light "> <i class="fa fa-trash"></i> Hapus </button>';
                            $btn = $btn. '<button type="button" data-toggle="modal" data-target="#formuserupvid" data-id="'.$row->id.'" data-video="'.$row->video.'" class="btn btn-warning waves-effect waves-light "> <i class="fa fa-pencil"></i> Update </button>';
                            return $btn;
                        })
                        ->rawColumns(['Actions'])
                        ->make(true);
                return datatables()->of($data)->make(true);
        }
    }

    public function store(Request $request)
    {
            # code...
            $data=Konten::firstOrCreate([
                'gambar'=>$request->gambar,
                'name'=>$request->name,
            ]);
            if($request -> hasFile('gambar'))
            {
                $request->file('gambar')->move('gambar/',$request->file('gambar')->getClientOriginalName());
                $data->gambar = $request->file('gambar')->getClientOriginalName();
                $data->save();
            }
            return Response()->json([
                $data,
                'success'=>'Konten Baru Berhasil Disimpan'
            ]);
    }

    public function store2(Request $request)
    {
            # code...
            $data=Video::firstOrCreate([
                'video'=>$request->video,
                'name'=>$request->name,
            ]);
            if($request -> hasFile('video'))
            {
                $request->file('video')->move('video/',$request->file('video')->getClientOriginalName());
                $data->video = $request->file('video')->getClientOriginalName();
                $data->save();
            }
            return Response()->json([
                $data,
                'success'=>'Konten Baru Berhasil Disimpan'
            ]);
    }

    public function hapus(Request $request)
    {
        $id = $request->id;
        $data = Konten::find($id)->delete();
        return Response()->json([
            $data,
            'success'=>'Konten Tersebut Berhasil Dihapus'
        ]);
    }

    public function updatevideo(Request $request)
    {
        $id = $request->id;
        $data = Video::find($id)->update(['video'=>$request->video]);
        return Response()->json([
            $data,
            'success'=>'Video Tersebut Berhasil diupdate'
        ]);
    }

    public function hapusvideo(Request $request)
    {
        $id = $request->id;
        if(request()->ajax())
        {
            $user  = Video::find($id)->delete();
            return Response()->json([
                $user,
                'success'=>'Video Tersebut Berhasil dihapus'
            ]);       
        }
    }
}
