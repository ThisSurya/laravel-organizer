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

        return view('kas.kasView', $data);
    }

    public function create($jenis) : View
    {
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
