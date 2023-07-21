<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Models\Kas;
use App\Models\CatatanKas;
use App\Services\Kas\KasManagementServices;


class KasController extends Controller
{
    var $kasManagementServices;
    public function __construct(KasManagementServices $kasmanagementservices){
        $this->kasManagementServices = $kasmanagementservices;
    }

    public function index() : View
    {
        $data['balance'] = Kas::findOrFail(1);
        $data['catatan'] = CatatanKas::All();
        $data['pemasukan'] = 0;
        $data['pengeluaran'] = 0;

        foreach($data['catatan'] as $catatan){
            if($catatan->jenis == "pemasukan" or $catatan->jenis == "pendapatan"){
                $data['pemasukan'] += $catatan->jumlah;
            }
            else {
                $data['pengeluaran'] += $catatan->jumlah;
            }
        }

        return view('kas.kasView', $data);
    }

    public function create() : View
    {
        return view('kas.create.kasCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => ['required', 'string', 'max:255'],
            'jumlah' => ['required', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255'],
        ]);
        try{
            if($request->jenis == "pemasukan"){
                $this->kasManagementServices->tambahKas($request);
            }
            else {
                $this->kasManagementServices->kurangiKas($request);
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
