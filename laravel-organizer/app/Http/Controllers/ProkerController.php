<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProkerRequest;
use App\Models\Proker;
use App\Models\User;
use App\Services\ProkerManagementServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProkerController extends Controller
{
    var $prokerManagementServices;
    public function __construct(ProkerManagementServices $prokermanagementservices){
        $this->prokerManagementServices = $prokermanagementservices;
    }

    public function index() : View
    {
        $roles_user = Auth::user()->role_id;

        $proker = Proker::all();

        $find = $proker;

        $sessionId = Auth::user()->id;
        // 1 adalah role untuk ketua
        if($roles_user != 1){
            $result = User::findOrFail($sessionId)->prokers()->wherePivot('user_id', $sessionId)->get();  
            $proker = $result;
        }
        
        $data['option'] = '';
        $data['proker'] = $proker;
        $data['userRole'] = $roles_user;
        return view('proker.prokerview', $data);
    }

    public function addView() : View
    {
        $data['option'] = 'tambah';
        return view('proker.prokerview', $data);
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'Proker_name' => ['required', 'string', 'max:255'],
            'deskripsi' => ['string', 'max:255'],
        ]);
        try{
            $data = $this->prokerManagementServices->store($request);

            return redirect('/dashboard');
        }catch (\Exception $e) {
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
    }

    public function update(Request $request)    :   RedirectResponse
    {
        $request->validate([
            'Proker_name' => ['required', 'string', 'max:255'],
            'deskripsi' => ['max:255'],
            'id' => ['required']
        ]);

        try{
            $data = $this->prokerManagementServices->update($request);

            return redirect('/dashboard');
        }catch (\Exception $e) {
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
    }

    public function editView($id) : View
    {
        $proker = Proker::all();
        $data['proker'] = $proker->find($id);
        $data['option'] = 'edit';

        return view('proker.prokerview', $data);
    }

    public function delete($id) : RedirectResponse
    {
        try{
            $data = $this->prokerManagementServices->delete($id);
        }catch (\Exception $e) {
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
        return redirect('prokerview');
    }

    public function done(Request $request) : RedirectResponse
    {
        // change status into selesai
        try{
            $result = $this->prokerManagementServices->updateStatus($request);
        }catch(Exception $e){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
        return redirect('prokerview');
    }
}
