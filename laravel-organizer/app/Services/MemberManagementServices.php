<?php

namespace App\Services;

use App\Models\Proker;
use App\Models\User;
use App\Models\Post;

use App\Services\PostingManagementServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MemberManagementServices{
    public function getMember($id){
        $proker = Proker::findOrFail($id);
        $member = $proker->users()->get();

        return $member;
    }

    public function getNonMember($id) {
        $proker = Proker::findOrFail($id);
        $memberIds = $proker->users()->pluck('users.id');

        $nonMembers = User::whereNotIn('id', $memberIds)->get();
    
        return $nonMembers;
    }

   public function store($request){
    $proker = Proker::findOrFail($request->proker_id)->users();
    $check = $proker->wherePivot('user_id', $request->user_id)->first();
    if($check){
        return false;
    }
    $proker->attach($request->user_id);
    return true;
   }

   public function destroy($request){
    $proker = Proker::findOrFail($request->proker_id);
    $result = $proker->users()->detach($request->user_id);
   }
}