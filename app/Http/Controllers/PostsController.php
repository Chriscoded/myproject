<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        //Non fluent
        //DB::select(['table' => 'post', 'where' => ['id' => 1]])
        //DB::table('posts)->where('id', 1)->get()
        //return view('posts/index');

        //$posts = DB::select('select * from posts WHERE id = :id', ['id' => 3]);
        
        $id = 3;
        // $posts = DB::table('posts')
        //     ->where('id', $id)
        //     ->get();

        $posts = DB::table('posts')
            //->where('created_at', '>', now()->subDay())
            //->orwhere('title', 'prof.')
            //->whereBetween('id', [1,5])
            //->whereNotNull('title')
            //passes raw unescaped queries its not safe vulnurable to mysql injection
            //whereRaw('title', 'prof.')
            //->select('title')
            //->distinct()
            //->orderBy('title', 'desc')
            //latest() is based on created_at decending order
            //->latest()
            // is based on created_at ascending order
            //->oldest()
            //in random shuffels the outputs
            //->inRandomOrder()
            
            //->orderBy('created_at', 'desc')
            //->first();
           // ->where('id', $id)
            //->find($id);
            //->count();
            // ->max('id');
            //->sum('id');
            //->avg('id');
            // ->insert([
            //     'title' => 'New Post', 'body' => 'New Body'
            // ]);
            ->where('id', '=', 5)
            ->delete();
            //->get();
            //  foreach ($posts as $user) {
            //      echo $user->title.'<br>';   
            //  }

            dd($posts);
    }
}
