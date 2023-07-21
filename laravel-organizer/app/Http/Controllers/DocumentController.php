<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Services\DocumentManagementServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class DocumentController extends Controller
{
    var $documentManagementServices;
    var $sess;
    public function __construct(DocumentManagementServices $documentManagementServices){
        $this->documentManagementServices = $documentManagementServices;
        $this->sess = session();
    }

    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'files' => 'required|file|max:2048|mimes:ppt, xlsx, pdf, doc, png, jpg, docx',
            'judul' => 'required|string|max:255'
        ]);
        $file = $request->file('files')->store('public-file', 'public');

        $validatedData['nama_file'] = $request->file('files')->store('public-file', 'public');
        $validatedData['judul'] = $request->judul;

        try{
            $result = $this->documentManagementServices->create($validatedData);
            $this->sess->flash('addFile', 'File berhasil diupload');
            return redirect('/documentView');
        }catch(\Exception $e){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "Error" .$e->getMessage();
        }

    }

    public function View() : View
    {
        $photo = Document::all();
        $data['file'] = $photo;
        $data['option'] = '';
        return view('document.documentview', $data);
    }

    public function addView() : View
    {
        $data['option'] = 'tambah';
        return view('document.documentview', $data);
    }

    public function download($id)
    {
        $download = DB::table('documents')->where('id', $id)->first();
        $pathFile = $download->nama_file;
        return Storage::download($pathFile);
   }

   public function delete(Request $request) : RedirectResponse
   {
    $find = DB::table('documents')->where('id', $request->id)->first();
    $pathFile = $find->nama_file;

    try{
        $delete = DB::table('documents')->where('id', $request->id)->delete();
        $this->sess->flash('delete', 'File berhasil dihapus');
        $result = Storage::delete($pathFile);
    }catch(\Exception $e){
        echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "Error" .$e->getMessage();
    }

    return back();
   }
}
