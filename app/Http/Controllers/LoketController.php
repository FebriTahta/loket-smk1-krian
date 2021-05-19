<?php

namespace App\Http\Controllers;
use App\Models\Antrian;
use DataTables;
use Illuminate\Http\Request;

class LoketController extends Controller
{
    public function index()
    {
        return view('displayAdmin.loket.index');
    }

    public function gethistory()
    {
        if(request()->ajax())
        {
            // $data = Antrian::where('loket_id', 1)->where('status', 2)->orwhere('status', 1)->orderby('antrian_ke','desc')->where('tanggal', date("Y-m-d"));
            $data = Antrian::where('loket_id',1)->orderby('antrian_ke','desc')->where('tanggal', date("Y-m-d"))->where(function($query){
                $query->where('status',1);
                $query->orWhere(function($query_two){
                    $query_two->where('status',2);
                });
            });
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('status', function($row){
                if ($row->status==1) {
                    # code...
                    return '<span class="badge badge-primary">Diterima</span>'; 
                }else{
                    $y = csrf_field();
                    return '<button class="badge badge-danger" data-status="'.$row->status.'" data-antrianke="'.$row->antrian_ke.'" data-toggle="modal" data-target="#terimal1">Dilewati</button>'; 
                }
            })
            ->rawColumns(['status'])
            ->make(true);
        }
        return datatables()->of($data)->make(true);
    }

    public function gethistory2()
    {
        if(request()->ajax())
        {
            // $data = Antrian::where('loket_id',2)->orderby('antrian_ke','desc')->where('tanggal', date("Y-m-d"))->where('status',2)->orwhere('status',1);
            $data = Antrian::where('loket_id',2)->orderby('antrian_ke','desc')->where('tanggal', date("Y-m-d"))->where(function($query){
                $query->where('status',1);
                $query->orWhere(function($query_two){
                    $query_two->where('status',2);
                });
            });
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('status', function($row){
                if ($row->status==1) {
                    # code...
                    return '<span class="badge badge-primary">Diterima</span>'; 
                }else{
                    $y = csrf_field();
                    return '<button class="badge badge-danger" data-status="'.$row->status.'" data-antrianke="'.$row->antrian_ke.'" data-toggle="modal" data-target="#terimal2">Dilewati</button>'; 
                }
            })
            ->rawColumns(['status'])
            ->make(true);
        }
        return datatables()->of($data)->make(true);
    }

    public function daftarloket1()
    {
        $data = Antrian::where('loket_id', 1)->where('status',0)->orderBy('antrian_ke', 'asc')->first();
        $response = [
            'STATUS' => 'SUKSES',
            'Message' => 'Data Loket1',
            'data' =>  $data,
        ];

        return response()->json($data, 200);
    }

    public function daftarloket2(Request $request)
    {
        $data = Antrian::where('loket_id', 2)->where('status',0)->orderBy('antrian_ke', 'asc')->first();
        $response = [
            'STATUS' => 'SUKSES',
            'Message' => 'Data Loket1',
            'data' =>  $data,
        ];

        return response()->json($data, 200);
    }
    //terima antrian loket 1
    public function updateloket1(Request $request)
    {
        $id = $request->id;
        $data = Antrian::where('loket_id', 1)->where('status', 0)->where('antrian_ke', $id)
                ->update([
                    'status'=> 1,
                ]);

        return Response()->json([
            $data,
            'success'=>'Struct Loket Diterima. Next'
        ]);
    }
    //terima antrian loket 2
    public function updateloket2(Request $request)
    {
        $id = $request->id;
        $data = Antrian::where('loket_id', 2)->where('status', 0)->where('antrian_ke', $id)
                ->update([
                    'status'=> 1,
                ]);

        return Response()->json([
            $data,
            'success'=>'Struct Loket Diterima. Next'
        ]);
        // return $id;
    }
    //skip antrian loket 1
    public function updateloket3(Request $request)
    {
        $id = $request->id;
        $data = Antrian::where('loket_id', 1)->where('antrian_ke', $id)
                ->update([
                    'status'=> 2,
                ]);

        return Response()->json([
            $data,
            'success'=>'Struct Loket Dilewati. Next'
        ]);
    }
    //skip antrian loket 2
    public function updateloket4(Request $request)
    {
        $id = $request->id;
        $data = Antrian::where('loket_id', 2)->where('antrian_ke', $id)
                ->update([
                    'status'=> 2,
                ]);

        return Response()->json([
            $data,
            'success'=>'Struct Loket Dilewati. Next'
        ]);
    }

    public function updateloket5(Request $request)
    {
        $id = $request->id;
        $data = Antrian::where('loket_id', 1)->where('status', 2)->where('antrian_ke', $id)
                ->update([
                    'status'=> 1,
                ]);

        return Response()->json([
            $data,
            'success'=>'Struct Loket Yang Sudah Dilewati Berhasil Diterima. Next'
        ]);
    }

    public function updateloket6(Request $request)
    {
        $id = $request->id;
        $data = Antrian::where('loket_id', 2)->where('status', 2)->where('antrian_ke', $id)
                ->update([
                    'status'=> 1,
                ]);

        return Response()->json([
            $data,
            'success'=>'Struct Loket Yang Sudah Dilewati Berhasil Diterima. Next'
        ]);
    }
}
