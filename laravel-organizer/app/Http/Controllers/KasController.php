<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Kas;
use App\Models\CatatanKas;
use App\Services\Kas\KasManagementServices;


class KasController extends Controller
{
    var $kasManagementServices;
    var $sess;
    public function __construct(KasManagementServices $kasmanagementservices){
        $this->kasManagementServices = $kasmanagementservices;
        $this->sess = session();
    }

    public function index() : View
    {
        $check = Auth::user()->role_id;
        if($check != 3 || $check != 1){
            return view('dashboard');
        }

        $data['balance'] = Kas::findOrFail(1);
        $data['catatan'] = CatatanKas::All();

        return view('kas.kasView', $data);
    }

    public function create($jenis) : View
    {
        $check = Auth::user()->role_id;
        if($check != 3 || $check != 1){
            return view('dashboard');
        }
        $data['jenis'] = $jenis;

        return view('kas.create.kasCreate', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => ['required', 'string', 'max:255'],
            'jumlah' => ['required', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255'],
        ]);
        try{
            if($request->jenis == "pendapatan"){
                $this->kasManagementServices->tambahKas($request);
                $this->sess->flash('laporan', 'laporan berhasil ditambahkan');
            }
            else {
                $this->kasManagementServices->kurangiKas($request);
                $this->sess->flash('laporan', 'laporan berhasil ditambahkan');
            }
            $data = $this->kasManagementServices->store($request);


            return redirect('/kas');
        }catch (\Exception $e) {
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
    }
}
