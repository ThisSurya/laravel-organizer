<?php

namespace App\Services\Kas;

use App\Models\CatatanKas;
use App\Models\Kas;

class KasManagementServices{
   public function store($request)
   {
        $posting = Catatankas::create([
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'deskripsi' => $request->deskripsi,
        ]);
        return $posting;
   }

   public function TambahKas($request)
   {
        $kas = Kas::Find(1);
        $kas->jumlah += $request->jumlah;

        $nominal = Kas::where('id', 1)->update(["jumlah" => $kas->jumlah]);
        return $nominal;
   }

   public function KurangiKas($request)
   {
        $kas = Kas::Find(1);
        $kas->jumlah -= $request->jumlah;

        $nominal = Kas::where('id', 1)->update(["jumlah" => $kas->jumlah]);
        return $nominal;
   }
}
