<?php

namespace App\Http\Controllers;
use App\Posts;
use App\Comments;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	$posts=Posts::get();
    	return view("post.index",["posts"=>$posts]);

    }

    public function create()
    {
    	return view("post.create");
    }
    public function store(Request $request)
    {
    	Posts::create([
    		"img_link"=>$request->input("img_link"),
    		"category"=>$request->input("category"),
    		"title"=>$request->input("title"),
    		"short_description"=>$request->input("short_description"),
    		"description"=>$request->input("description")
    	]);
    	return redirect()->route("index");
    }

    public function edit($id)
    {
    	$post=Posts::where('id',$id)->firstOrFail();
    	return view('post.edit',['post'=>$post]);
     }
    public function update(Request $request)
    {
    	Posts::where('id',$request->input('id'))->update([
            "img_link"=>$request->input("img_link"),
            "category"=>$request->input("category"),
            "title"=>$request->input("title"),
            "short_description"=>$request->input("short_description"),
            "description"=>$request->input("description")
        ]);
    	return redirect()->route("index");
    }

     public function delete(Request $request)
    {
    	Posts::where('id',$request->input('id'))->delete();
    	return redirect()->back();
     }

     public function post($id)
    {
        $post=Posts::where('id',$id)->firstOrFail();
        $comments=Comments::where('post_id',$id)->get();
        return view('post.post',['post'=>$post, "comments"=>$comments]);
     }

     public function comment(Request $request)
    {
        Comments::create([
            "post_id"=>$request->input("post_id"),
            "name"=>$request->input("name"),
            "comment"=>$request->input("comment")
        ]);
        return redirect()->back();
     }
}