<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $blogPosts = [
            ['id' => 1, 'title' => 'PHP', 'Postedby' => 'Ahmed Salama', 'CreatedAt' => '2025-8-5 at 8:00' ],
            ['id' => 2, 'title' => 'JS', 'Postedby' => 'Khaled', 'CreatedAt' => '2025-8-5 at 8:00' ],
            ['id' => 3, 'title' => 'Python', 'Postedby' => 'sara', 'CreatedAt' => '2025-4-5 at 8:00' ],
            ['id' => 4, 'title' => 'C++', 'Postedby' => 'Nouran', 'CreatedAt' => '2025-4-3 at 8:00' ],
            ['id' => 5, 'title' => 'CSS', 'Postedby' => 'salama', 'CreatedAt' => '2026-2-3 at 8:00' ],

        ];
        return view('posts.posts', ['posts' => $blogPosts]);
    }

    public function show(){
        return view('posts.show');
    }

    public function create(){
        return view('posts.create');
    } 

    public function store(){
        
        // $userDate = request()->all();
        // return $userDate;
        
        // $title = request()->title;
        // $cat  = requet()->category;
        // $content = request()->content;
        // $postImg = request()->img;

       
    }
}
