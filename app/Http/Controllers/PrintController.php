<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Antrian;
use charlieuki\ReceiptPrinter\ReceiptPrinter as ReceiptPrinter;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index()
    {
        return view('displayAdmin.print.index');
    }

    public function input1(Request $request){
        $loketid= $request->loket_id;
        $user_id= $request->user_id;
        $antrianke = $request->antrian_ke;
        $data_antrian_baru=0;

        if($loketid==1 && $user_id==1){
                $dataantrianbaru= DB::table('antrians')
                ->where('loket_id',$loketid)
                ->where('user_id',$user_id)
                ->where('tanggal',date("Y-m-d"))
                ->max('antrian_ke');

                $dataantrian=empty($dataantrianbaru)?0:$dataantrianbaru;
                
                $data_loket= DB::table('lokets')->select("nama_loket")
                ->where('id',$loketid)->first();

                // dd($data_loket);
                $data_antrian_baru = $dataantrian + $antrianke;
                
                $input = $request->all();
                $input['antrian_ke'] = $data_antrian_baru;
                $input['tanggal']= date("Y-m-d");
                $user = Antrian::create($input);
                
                $data['status']="BERHASIL SIMPAN"; 
            
            try{
                // Set params
                $mid = '123123456';
                $store_name = 'SMK 1 KRIAN SIDOARJO';
                $store_email = 'SMK1KRIAN@email.com';
                $store_address = 'Jl. Kyai Mojo Katrungan-Krian, Bakalan, Katrungan, Sidoarjo';
                $store_phone = ' (031) 8971207';
                $store_website = 'http://smkkrian1.sch.id/';
                $tax_percentage = 0;
                $transaction_id = $data_loket;
                $currency = '';
                $request_amount=0;
                $logo= 'NO ANTRIAN';
                $printer = new ReceiptPrinter;
                $printer->init(
                    config('receiptprinter.connector_type'),
                    config('receiptprinter.connector_descriptor')
                );

                // Set store info
                $printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);

                
                // $printer->setLogo($logo);
                $printer->setLoket($data_loket->nama_loket);
                $printer->setRequestAmount($data_antrian_baru);
                // Print payment request
                $printer->printRequest();
                // return response(['data' => $data, 'success' => 'Berhasil Tersimpan dan akan di print!', 'status' => true]);
                return Response()->json([
                    $data,
                    'success'=>'Berhasil Tersimpan dan akan di print!'
                ]);
            }catch(\Exception $e){
                    dd($e);
           }
        }else if($loketid==1 && $user_id==1){
              
            $dataantrianbaru= DB::table('antrians')
            ->where('loket_id',$loketid)
            ->where('user_id',$user_id)
            ->where('tanggal',date("Y-m-d"))
            ->max('antrian_ke');

            $dataantrian=empty($dataantrianbaru)?0:$dataantrianbaru;
            

            $data_loket= DB::table('lokets')->select("nama_loket")
            ->where('id',$loketid)->first();

            // dd($data_loket);
            $data_antrian_baru = $dataantrian + $antrianke;
            
            $input = $request->all();
            $input['antrian_ke'] = $data_antrian_baru;
            $user = Antrian::create($input);

            $data['status']="BERHASIL SIMPAN"; 
            try{
                // Set params
                $mid = '123123456';
                $store_name = 'SMK 1 KRIAN SIDOARJO';
                $store_email = 'SMK1KRIAN@email.com';
                $store_address = 'Jl. Kyai Mojo Katrungan-Krian, Bakalan, Katrungan, Sidoarjo';
                $store_phone = ' (031) 8971207';
                $store_website = 'http://smkkrian1.sch.id/';
                $tax_percentage = 0;
                $transaction_id = $data_loket;
                $currency = '';
                $request_amount=0;
                $logo= 'NO ANTRIAN';
                $printer = new ReceiptPrinter;
                $printer->init(
                    config('receiptprinter.connector_type'),
                    config('receiptprinter.connector_descriptor')
                );

                // Set store info
                $printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);

                
                // $printer->setLogo($logo);
                $printer->setLoket($data_loket->nama_loket);
                $printer->setRequestAmount($data_antrian_baru);
                // Print payment request
                $printer->printRequest();
                // return response(['data' => $data, 'success' => 'Berhasil Tersimpan dan akan di print!', 'status' => true]);
                return Response()->json([
                    $data,
                    'success'=>'Berhasil Tersimpan dan akan di print!'
                ]);
            }catch(\Exception $e){
                    dd($e);
           }
        }
    }

    public function input2(Request $request){
        $loketid= $request->loket_id;
        $user_id= $request->user_id;
        $antrianke = $request->antrian_ke;
        $data_antrian_baru=0;

        if($loketid==2 && $user_id==2){
                $dataantrianbaru= DB::table('antrians')
                ->where('loket_id',$loketid)
                ->where('user_id',$user_id)
                ->where('tanggal',date("Y-m-d"))
                ->max('antrian_ke');

                $dataantrian=empty($dataantrianbaru)?0:$dataantrianbaru;
                
                $data_loket= DB::table('lokets')->select("nama_loket")
                ->where('id',$loketid)->first();

                // dd($data_loket);
                $data_antrian_baru = $dataantrian + $antrianke;
                
                $input = $request->all();
                $input['antrian_ke'] = $data_antrian_baru;
                $input['tanggal']= date("Y-m-d");
                $user = Antrian::create($input);
                
                $data['status']="BERHASIL SIMPAN"; 
            
            try{
                // Set params
                $mid = '123123456';
                $store_name = 'SMK 1 KRIAN SIDOARJO';
                $store_email = 'SMK1KRIAN@email.com';
                $store_address = 'Jl. Kyai Mojo Katrungan-Krian, Bakalan, Katrungan, Sidoarjo';
                $store_phone = ' (031) 8971207';
                $store_website = 'http://smkkrian1.sch.id/';
                $tax_percentage = 0;
                $transaction_id = $data_loket;
                $currency = '';
                $request_amount=0;
                $logo= 'NO ANTRIAN';
                $printer = new ReceiptPrinter;
                $printer->init(
                    config('receiptprinter.connector_type'),
                    config('receiptprinter.connector_descriptor')
                );

                // Set store info
                $printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);

                
                // $printer->setLogo($logo);
                $printer->setLoket($data_loket->nama_loket);
                $printer->setRequestAmount($data_antrian_baru);
                // Print payment request
                $printer->printRequest();
                // return response(['data' => $data, 'success' => 'Berhasil Tersimpan dan akan di print!', 'status' => true]);
                return Response()->json([
                    $data,
                    'success'=>'Berhasil Tersimpan dan akan di print!'
                ]);
            }catch(\Exception $e){
                    dd($e);
           }
        }else if($loketid==2 && $user_id==2){
              
            $dataantrianbaru= DB::table('antrians')
            ->where('loket_id',$loketid)
            ->where('user_id',$user_id)
            ->where('tanggal',date("Y-m-d"))
            ->max('antrian_ke');

            $dataantrian=empty($dataantrianbaru)?0:$dataantrianbaru;
            

            $data_loket= DB::table('lokets')->select("nama_loket")
            ->where('id',$loketid)->first();

            // dd($data_loket);
            $data_antrian_baru = $dataantrian + $antrianke;
            
            $input = $request->all();
            $input['antrian_ke'] = $data_antrian_baru;
            $user = Antrian::create($input);

            $data['status']="BERHASIL SIMPAN"; 
            try{
                // Set params
                $mid = '123123456';
                $store_name = 'SMK 1 KRIAN SIDOARJO';
                $store_email = 'SMK1KRIAN@email.com';
                $store_address = 'Jl. Kyai Mojo Katrungan-Krian, Bakalan, Katrungan, Sidoarjo';
                $store_phone = ' (031) 8971207';
                $store_website = 'http://smkkrian1.sch.id/';
                $tax_percentage = 0;
                $transaction_id = $data_loket;
                $currency = '';
                $request_amount=0;
                $logo= 'NO ANTRIAN';
                $printer = new ReceiptPrinter;
                $printer->init(
                    config('receiptprinter.connector_type'),
                    config('receiptprinter.connector_descriptor')
                );

                // Set store info
                $printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);

                
                // $printer->setLogo($logo);
                $printer->setLoket($data_loket->nama_loket);
                $printer->setRequestAmount($data_antrian_baru);
                // Print payment request
                $printer->printRequest();
                // return response(['data' => $data, 'success' => 'Berhasil Tersimpan dan akan di print!', 'status' => true]);
                return Response()->json([
                    $data,
                    'success'=>'Berhasil Tersimpan dan akan di print!'
                ]);
            }catch(\Exception $e){
                    dd($e);
           }
        }
    }

    
}
