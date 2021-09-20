<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        $title ='';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')){
            $user = User::firstWhere('username',request('author'));
            $title = ' by ' . $user->name;
        }
        
        return view('posts',[
        'title'=>'All Post' . $title,
        'active'=>'post',
        'posts'=> Post::latest()->filters(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }
    public function show(Post $post){
        return view('post',[
        'title'=>'Single Post',
        'active'=>'post',
        'post'=> $post
    ]);
    }
}
