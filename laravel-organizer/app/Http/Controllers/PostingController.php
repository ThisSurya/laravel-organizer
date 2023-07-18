<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Proker;
use App\Models\User;
use App\Services\MemberManagementServices;
use App\Services\PostingManagementServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class PostingController extends Controller
{
    var $postingManagementServices;
    var $memberManagementServices;
    public function __construct(PostingManagementServices $postingManagementServices, MemberManagementServices $memberManagementServices){
        $this->postingManagementServices = $postingManagementServices;
        $this->memberManagementServices = $memberManagementServices;
    }
    public function index($id) : View
    {
        $proker = Proker::all();
        $Proker  = $proker->find($id);
        
        
        if($Proker->status != trim('berjalan')){
            return view('prokertidakberjalan');
        }

        $postingans = DB::table('post')->where('proker_id', $id)->get();

        $data = [
            'option' => '',
            'proker' => $Proker,
            'postingan' => $postingans,
        ];

        return view('post.postingview', $data);
    }

    public function addView($id) : View
    {
        $proker = Proker::all();
        $Proker  = $proker->find($id);
        $roles_user = Auth::user()->role_id;
        if($Proker->status != trim('berjalan')){
            return view('prokertidakberjalan');
        }

        $data = [
            'option' => '',
            'proker' => $Proker,
            'roles_user' => $roles_user,
        ];
        
        return view('post.postingview', $data);
    }

    public function editView(Request $request){

        $proker = Proker::all();
        $Proker  = $proker->find($request->proker_id);
        
        if($Proker->status != trim('berjalan')){
            return view('prokertidakberjalan');
        }

        $posting = Post::all();
        $postingan = $posting->find($request->posting_id);
        $data = [
            'postingan' => $postingan,
            'proker' => $Proker,
            'option' => 'edit'
        ];

        return view('post.postingview', $data);
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'deskripsi' => ['required', 'max:255'],
            'judul' => ['required', 'string', 'max:255']
        ]);

        $myroute = '/postingan/view/'.$request->proker_id;

        try{
            $data = $this->postingManagementServices->store($request);
        }catch (\Exception $e) {
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
        return redirect($myroute)->with($request->proker_id);
    }

    public function update(Request $request) : RedirectResponse
    {
        $request->validate([
            'deskripsi'  => ['required', 'string', 'max:255'],
            
        ]);
        $myroute = '/postingan/view/'.$request->proker_id;
        try{
            $check = $this->postingManagementServices->update($request);
        }catch(\Exception $e){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
        return redirect($myroute)->with($request->proker_id);
    }

    public function delete(Request $request) : RedirectResponse
    {
        $myroute = '/postingan/view/'.$request->proker_id;
        try{
            $check = $this->postingManagementServices->delete($request);
        }catch(\Exception $e){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
        return redirect($myroute)->with($request->proker_id);
    }

    public function addMemberView(Request $request){
        $proker = Proker::all();
        $Proker  = $proker->find($request->id);

        if($Proker->status != trim('berjalan')){
            return view('prokertidakberjalan');
        }

        $member = $this->memberManagementServices->getMember($request->id);
        $nonMember = $this->memberManagementServices->getNonMember($request->id);

        $data = [
            'proker' => $Proker,
            'option' => 'addmember',
            'user' => $nonMember,
            'member' => $member,
        ];

        return view('post.postingview', $data);
    }

    public function kickMember(Request $request) : RedirectResponse
    {
        $myroute = '/postingan/view/'.$request->proker_id;
        try{
            $result = $this->memberManagementServices->destroy($request);
            
        }catch(\Exception $e){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
        return redirect($myroute)->with($request->proker_id);
    }

    public function addMember(Request $request) : RedirectResponse
    {
        // $proker = Proker::findOrFail($request->proker_id)->users()->wherePivot('user_id', $request->user_id)->first();
        // if($proker){
        //     $request->validate([
        //         'user_id' => ['required']
        //     ]);
    
        //     return redirect('/');
        // }else{
        //     $proker = Proker::findOrFail($request->proker_id);
        //     $proker->users()->attach($request->user_id);
        //     return redirect('/');
        // }
            $request->validate([
                'user_id' => ['required']
            ]);
            $myroute = '/postingan/view/'.$request->proker_id;
        try{
            $result = $this->memberManagementServices->store($request);
        }catch(\Exception $e){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "error".$e->getMessage();
        }
        return redirect($myroute)->with($request->proker_id);
    }
}
