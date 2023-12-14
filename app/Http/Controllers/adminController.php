<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Option;
use App\Models\Post;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function adminHome(){
        return view("admin.main");
    }
    public function contact(){
        $contacts=Contact::all();
        return view("admin.contact",compact("contacts"));
    }
    public function saveCategory(Request $request){
        $category=new Category();
        $category->ar_name=$request->ar_name;
        $category->en_name=$request->en_name;
        $category->save();
        return back()->with("success","category saved successfully!");
    }
    public function editPost($id){
        $categories=Category::all();
        $post=Post::findOrFail($id);
        return view("admin.editPost",compact("categories","post"));
    }
    public function addPost(){
        $categories=Category::all();
        return view("admin.addPost",compact("categories"));
    }
    
    public function savePost(Request $request){
        $post=new Post();
        if($request->hasFile('image')){
            $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/uploads',$fileToStore);
        }
        $post->category_id=$request->category_id;
        $post->img=$fileToStore;

        $post->link=$request->link;
        $post->ar_title=$request->ar_title;
        $post->ar_description=$request->ar_description;
        $post->en_title=$request->en_title;
        $post->en_description=$request->en_description;
        $post->save();
        return back()->with("success","Project Saved Successfully!");
    }

    public function updatePost(Request $request,$id){
        $post=Post::findOrFail($id);
        if($request->hasFile('image')){
            $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/uploads',$fileToStore);
            $post->img=$fileToStore;
        }else{
            $fileToStore=$post->img;
        }
        $post->category_id=$request->category_id;
       

        $post->link=$request->link;
        $post->ar_title=$request->ar_title;
        $post->ar_description=$request->ar_description;
        $post->en_title=$request->en_title;
        $post->en_description=$request->en_description;
        $post->save();
        return back()->with("success","Project Saved Successfully!");
    }
    public function deletePost($id){
        $post=Post::findOrFail($id)->delete();
        return back();
    }
    public function savearea(Request $request){
        $area=new Area();
        $area->ar_area=$request->ar_area;
        $area->en_area=$request->en_area;
        $area->save();
        return back()->with("success","object saved successfully!");

    }
    public function deletecontact($id){
        $contact=Contact::findOrFail($id)->delete();
        return back()->with("success","message deleted");
    }

    public function optionupdate(Request $request,$id){
        $option=Option::findOrFail($id);
        $option->ar_title=$request->ar_title;
        $option->ar_description=$request->ar_description;

        $option->en_title=$request->en_title;
        $option->en_description=$request->en_description;
        $option->save();
        return back();
    }
}
