<?php
namespace App\Services;

use App\Models\Document;

class DocumentManagementServices{
    public function create($validatedData)
    {

        $file = Document::create([
            'nama_file' => $validatedData['nama_file'],
            'judul' => $validatedData['judul']
        ]);
        return $file;
    }
}