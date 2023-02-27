<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        // get all data in posts
        // $posts = DB::select("SELECT * FROM posts;");

        // query builder
        // $posts = DB::select("SELECT * FROM posts WHERE id = :id", [
        //     'id' => 3
        // ]);

        // just like linq C#
        // $posts = DB::table("posts")
        // ->whereNotNull("body")
        // ->oldest() // cu nhat
        // ->latest() // moi nhat
        // ->orderBy('id', 'desc')
        // ->orderBy('id', 'asc')
        // ->whereBetween('id', [1, 3])
        // ->where('created_at', '>', now()->subDay())
        // ->orWhere('id', '>', 0)
        // ->where('id', 1)
        // ->select('title')
        // ->first(); //select top 1
        // ->get(); 
        // ->find(2); //select * where id = 2
        // ->count();
        // ->max('id');
        // ->min('id');
        // ->sum('id');
        // ->avg('id');
        // ->insert([
        //     'title' => "OK",
        //     "body" => 'New post'
        // ]);
        // ->where('id', '=', 6)
        // ->update([
        //     'title' => "Good",
        //     "body" => 'change some post'
        // ]);
        // ->where('id', '=', 6)
        // ->delete();
        // dump a variable's contents to the browser and stop the further script execution
        // dump and die -- Tra ve mot giao dien truc quan
        // dd($posts);
        return view('posts.index');
    }
}
