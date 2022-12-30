<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PolicyController extends Controller
{
    public function index(){
        $post=Post::with('users')->get();
//        dd($post);
        return view('policy.index',compact('post'));
    }

    public function show($id){
        $post = Post::findOrFail($id);
//        $this->authorize('view',$post);
//        Gate::allows('isAdmin') ? Response::allow() : abort(404);
        return view('policy.view',compact('post'));
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $this->authorize('delete',$post);
        $post->delete();
    }
}
