<?php

namespace App\Imports;
use App\Models\Nilai;
use App\Models\Penilaian;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportEx implements ToCollection
{
    public function __construct($id)
    {
        
        $this->id=$id;
        
    }
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 1) {
                $pid = Penilaian::where('kriteria_id',$this->id)->get('id');
                foreach ($pid as $key => $value) {
                    # code...
                    $dt_peserta = [
                                 'penilaian_id' => $value->id,
                                 'nilai'=>$row[2+$key],
                              ];
                              DB::table('nilais')->insert($dt_peserta);
                }
            }
            
            // for ($i=0; $i < $this->jmlh; $i++) { 
            //     # code...
            //      $dt_peserta = [
            //         'penilaian_id' => $this->pid,
            //         'nilai'=>$row[$i],
            //      ];
            //      DB::table('nilais')->insert($dt_peserta);
            // }
        }
    }
}
