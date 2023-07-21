<?php

namespace App\Services;

use App\Models\User;

class PermissionManagementServices {
    public function update($request){
        $inputs = $request->only(['role_id']);
        $roles = User::where('id', $request->user)->update($inputs);

        return $roles;
    }
}