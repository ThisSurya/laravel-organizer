<?php

namespace App\Services;

use App\Models\Proker;

class ProkerManagementServices{
    public function store($request)
    {
        $inputs = $request->only(['Proker_name', 'status']);
        $proker = Proker::create([
            'Proker_name' => $request->Proker_name,
            'status' => "berjalan"
        ]);
        return $proker;
    }

    public function update($request){
        $inputs = $request->only(['Proker_name']);
        $proker = Proker::where('id', $request->id)->update($inputs);
        return $proker;
    }

    public function delete($request){
        $proker = Proker::where('id',$request)->delete();
        return $proker;
    }
}