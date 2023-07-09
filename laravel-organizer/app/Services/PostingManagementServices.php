<?php

namespace App\Services;

use App\Models\Post;

class PostingManagementServices{
   public function store($request)
   {
        $posting = Post::create([
            'Deskripsi' => $request->Deskripsi,
            'proker_id' => $request->proker_id
        ]);
        return $posting;
   }

   public function update($request){
        $inputs = $request->only(['deskripsi']);
        $posting = Post::where('id', $request->postingan_id)->update($inputs);
        return $posting;
}

    public function delete($request){
        $posting = Post::where('id',$request->posting_id)->delete();
        return $posting;
}
}