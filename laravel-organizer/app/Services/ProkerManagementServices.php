<?php

namespace App\Services;

use App\Models\Proker;

class ProkerManagementServices{
    public function store($request)
    {
        $inputs = $request->only(['Proker_name', 'status', 'deskripsi']);
        $proker = Proker::create([
            'Proker_name' => $request->Proker_name,
            'deskripsi' => $request->deskripsi,
            'status' => "berjalan"
        ]);
        return $proker;
    }

    public function update($request){
        $inputs = $request->only(['Proker_name','status', 'deskripsi']);
        $proker = Proker::where('id', $request->id)->update($inputs);
        return $proker;
    }

    public function delete($request){
        $proker = Proker::where('id',$request)->delete();
        return $proker;
    }

    public function updateStatus($request){
        $proker = Proker::where('id', $request->id)->update(['status' => $request->status_done]);
        return $proker;
    }
}