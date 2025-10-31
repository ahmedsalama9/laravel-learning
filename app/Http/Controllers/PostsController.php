<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{   
    //action to display posts in the posts page
    public function index(){
        $blogPosts = Post::all();
      
        return view('posts.posts', ['posts' => $blogPosts]);
    }
    //action to shw posts based on id or title(display the post content for each post)
    public function show($postId){

        // method One: when dd(); it will render eluquent builder, because where is not a complate query so the laravel can not excute a non-complate query so we add ->orderBy() ->first() or take()..etc
        // arrow first will return model object
        //$singlePostShow = Post::where('id', $postId)->first();

        //Method Two using find()
        //it will render the whole single post and excute after assuming all queries are complate
        //$singlePostShow = Post::find($postId);
       //$singlePostShow = Post::findOrFail($postId);
        //Method two 
        //get() will return collection object and inside it one item
        //get() requires a foreach in the html foreach($post as $item)

       $singlePostShow = Post::where('id', $postId )->get();
        return view('posts.show', ['post'=>$singlePostShow]);
    }

    //action to create new post
    public function create(){

        return view('posts.create');
    } 
    //action to get the data and store in variables and send/store it in database
    public function store(){
        
        $userDate = request()->all();
        return $userDate;
        
        // $title = request()->title;
        // $cat  = requet()->category;
        // $content = request()->content;
        // $postImg = request()->img;

       
    }

    //action to edit a current post content
    public function edit(){
        return view('posts.edit');
    }

    //action to send/store the new updates in the database
    public function update(){
        //to stote all the inputs update at once, and all the coming operation willb be excuted at that var
        $dataUpdate= request()->all();
       // dd($dataUpdate);
       //to_route('the route', here is the dynamic route (1 is for example only))
        return  to_route('posts.show',1);
    }

    //action to delete/destroy the post 
    public function destroy(){
        return to_route('posts.index');
    }

}
