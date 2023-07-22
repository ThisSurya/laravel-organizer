<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Services\PermissionManagementServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PermissionController extends Controller
{
    var $permissionManagementServices;

    public function __construct(PermissionManagementServices $permissionManagementServices){
        $this->permissionManagementServices = $permissionManagementServices;
    }

    public function index() : View|RedirectResponse
    {
        $check = Auth::user()->role_id;
        
        if($check != 1){
            return redirect()->route('prokerview');
        }
        $user = DB::table('users')
        ->select('*', 'users.id', 'roles.Roles')->join('roles', 'roles.id', '=', 'role_id')->get();

        $data = [
            'user' => $user,
            'option' => ''
        ];

        return view('permission.permissionView', $data);
    }

    public function addview() : View|RedirectResponse
    {
        $user = DB::table('users')
        ->select('*', 'users.id', 'roles.Roles')->join('roles', 'roles.id', '=', 'role_id')->get();
        $role = Role::all();

        $check = Auth::user()->role_id;
        
        if($check != 1){
            return redirect()->route('prokerview');
        }

        $data = [
            'user' => $user,
            'role' => $role,
            'option' => 'ganti'
        ];

        return view('permission.permissionView', $data);
    }

    public function change(Request $request){
        $check = Auth::user()->role_id;
        if($check != 1){
            dd($check);
        }
        try{
            $result = $this->permissionManagementServices->update($request);
        }catch(\Exception $e){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "Error" . $e->getMessage();
        }
        return back();
    }
}
