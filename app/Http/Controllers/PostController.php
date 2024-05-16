<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController
{
    public function index()
    {
        $post=DB::table('posts')->get();
        return view('blog',['posts'=>$post]);
    }
}
?>