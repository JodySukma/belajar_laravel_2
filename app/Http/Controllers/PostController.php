<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades;
use function Symfony\Component\VarDumper\Dumper\esc;

class PostController extends Controller
{
    public function gate()
    {
        $post = Post::find(1);

        if(Gate::allows('update-post', $post)){
            echo 'Allowed';
        }else{
            echo 'Not Allowed';
        }

        exit;
    }

    public function view()
    {
        // mengambul data user
        $user = Auth::user();

        // menload post
        $post = Post::find(1);

        if($user->can('view', $post)){
            echo "Current logged in user is allowed to update the Post : {$post->id}";
        }else{
            echo 'Not Authorized';
        }
    }

    public function create(){
        $user = Auth::user();

        if($user->can('create', Post::class)){
            echo "Current logged in user is allowed to create new posts";
        }else{
            echo 'Not Authorized';
        }
        exit;
    }

    public function update(){
        $user = Auth::user();

        $post = Post::find(1);

        if ($user->can('update', $post)){
            echo "Current logged in user is allowed to update the Post : {$post->id}";
        }else{
            echo "Not Authorized";
        }
    }

    public function delete(){
        $user = Auth::user();

        $post = Post::find(1);

        if($user->can('delete', $post)){
            echo "Current logged in user is allowed to delete the Post : {$post->id}";
        }else{
            echo "Not Authorized";
        }
    }
}
