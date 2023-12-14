<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Option;
use App\Models\Service;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        $services=Service::all();
        return view("index",compact('services'));
    }
    public function projects(){
        $categories=Category::all();
        return view("projects",compact("categories"));
    }
    public function services(){
        $upOptions=Option::where("row","1")->get();
        $downOptions=Option::where("row","2")->get();
        return view("services",compact("upOptions","downOptions"));
    }
    public function contact(){
        $areas=Area::all();
        return view("contact",compact("areas"));
    }
    public function savecontact(Request $request){
        $validate=$this->validate($request,[
            'area_id'=>"required",
            'username'=>"required",
            'email'=>"required|email",
            'mobile'=>"required",
            'description'=>"required",
        ]);
        $contact=new Contact();
        $contact->area_id=$validate["area_id"];
        $contact->username=$validate["username"];
        $contact->email=$validate["email"];
        $contact->mobile=$validate["mobile"];
        $contact->description=$validate["description"];
        $contact->save();
        return back()->with("success","Thank you, message sent successfully");
    }

    public function changeLanguage(Request $request)
    {

        $locale = $request->input('locale');
        // تحقق من أن اللغة المُحددة مدعومة
        if (in_array($locale, ['en', 'ar'])) {
            // حفظ اللغة المُحددة في جلسة المستخدم
            session(['locale' => $locale]);
        }
        // قم بالتوجيه إلى الصفحة الحالية
        return redirect()->back();
    }


}
