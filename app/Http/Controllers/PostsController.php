<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{   
    //action to display posts in the posts page
    public function index(){//routing model binding
        $blogPosts = Post::all();
      
        return view('posts.posts', ['posts' => $blogPosts]);
    }
    //action to shw posts based on id or title(display the post content for each post)
    public function show($postId){ //routing model binding

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
    public function store(Request $request){ 
        
        // $userDate = request()->all();
        // return $userDate;

        // $titles = request()->titles;
        // $description = request()->description;
        // $created_by = request()->created_by;
        //model variale -> colum name in database = the var that retrive the data-> the name in html input filed

        // $postStore = new Post;
        // $postStore->titles = $request->title;
        // $postStore->created_by = $request->createdBy;
        // $postStore->description = $request->contnet;
        
        // $postStore->save(); 


        Post::create([
            'titles'=> $request->title,
            'description' => $request->description,
        ]);

        return to_route('posts.index');  
    }

    //action to edit a current post content
    public function edit(Post $post){
        return view('posts.edit', ['post'=>$post]);
    }

    //action to send/store the new updates in the database
    public function update($postId){
        
        $titles = request()->title;
        $description = request()->content;
        $created_by = request()->createdBy;

        $postUpdated = Post::find($postId);
        $postUpdated->update([
            'titles'=> $titles,
            'description' => $description,
            'created_by' => $created_by
        ]);
       // @dd($post);
        return  to_route('posts.show', $postId);
    }

    //action to delete/destroy the post 
    public function destroy($postId){
        $postDel = Post::find($postId);
        $postDel->delete();
        return to_route('posts.index');
    }

}
