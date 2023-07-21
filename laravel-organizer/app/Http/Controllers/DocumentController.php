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
    public function __construct(DocumentManagementServices $documentManagementServices){
        $this->documentManagementServices = $documentManagementServices;
    }

    public function index() : View
    {
        return view('fileForm');
    }

    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'files' => 'required|file|max:2048|',
            'judul' => 'required|string|max:255'
        ]);
        $file = $request->file('files')->store('public-file', 'public');

        $validatedData['nama_file'] = $request->file('files')->store('public-file', 'public');
        $validatedData['judul'] = $request->judul;
        
        try{
            // $result = Document::create([
            //     'nama_file' => $validatedData['nama_file'],
            // ]);
            $result = $this->documentManagementServices->create($validatedData);
            return back();
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
        return view('document.isidocument', $data);
    }

    public function download($id)
    {   
        $download = DB::table('documents')->where('id', $id)->first();
        $pathFile = $download->nama_file;
        // dd($pathFile);
        return Storage::download($pathFile);
   }

   public function delete(Request $request) : RedirectResponse
   {
    $find = DB::table('documents')->where('id', $request->id)->first();
    $pathFile = $find->nama_file;

    $delete = DB::table('documents')->where('id', $request->id)->delete();
    $result = Storage::delete($pathFile);
    return back();
   }
}
