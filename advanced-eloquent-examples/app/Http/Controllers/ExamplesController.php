<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class ExamplesController extends Controller
{
    public function index()
    {
        die('here');
    }

    public function accessors()
    {
        $user = User::find(1);
        $user->first_name = 'hElloOoo';
        echo $user;
        // echo $user->age;
    }

    public function queryScope()
    {
        $post = Post::find(1);
        $post->increment('views');
    }
}
