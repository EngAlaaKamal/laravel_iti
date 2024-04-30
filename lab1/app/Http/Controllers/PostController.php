<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts= [
        ['id'=>1 ,'title'=>'title1' , 'body'=> 'content1', 'image'=>'img1.jpeg'],
        ['id'=>2 ,'title'=>'title2' , 'body'=> 'content2', 'image'=>'img2.jpeg'],
        ['id'=>3 ,'title'=>'title3' , 'body'=> 'content3', 'image'=>'img3.jpeg'],



    ];
    function index(){
    return view("index" , ["posts"=>$this->posts]);
    }
    function show($id){
        if ($id <=count($this->posts)){
            $post =$this->posts[$id-1];
            return view('show', ["post"=>$post]);
        }
        return abort(404);
    }
    function create(){
        return view("create");
    }
    function edit($id){
        if ($id <=count($this->posts)){
            $ptd =$this->posts[$id-1];
            return view('edit', ["post"=>$ptd]);
        }
        return abort(404);
    }
    function destroy($id){
        if ($id <=count($this->posts)){
            $ptd =$this->posts[$id-1];
            return view('destroy', ["post"=>$ptd]);
        }
        return abort(404);
    }
}
