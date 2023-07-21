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
            'files' => 'required|file|max:1024|'
        ]);

        $validatedData['nama_file'] = $request->file('files')->store('public-file', 'public');
        try{
            $result = Document::create([
                'nama_file' => $validatedData['nama_file'],
                'proker_id' => '1'
            ]);
            return redirect('/');
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

   
}
