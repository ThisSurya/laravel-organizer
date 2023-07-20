<?php
namespace App\Services;

use App\Models\Document;

class DocumentManagementServices{
    public function create($image)
    {
        dd($image);
        $file = Document::create([
            'nama_file' => 'asdfcveargfzvxc',
            'post_id' => 1
        ]);
        dd($file);
    }
}