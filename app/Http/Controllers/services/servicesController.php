<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class servicesController extends Controller
{
  public function index(){

      return view('admin.services.addServices');


  }

  public function store(Request $request){

      $storervices = new Service();
      $storervices->title = ['ar' => $request->input('name-ar'), 'en' => $request->input('name-en')];
      $storervices->description = ['ar' => $request->input('description-ar'), 'en' => $request->input('description-en')];
      $storervices->save();
      return redirect()->back();



  }

  public function show(){

      $services = Service::all();
      return view('admin.services.showServices',compact('services'));


  }

  public function edit($id){


      $show=Service::find($id);
      return view('admin.services.editServices',compact('show'));

  }

  public function update(Request $request){

      $updateServices = Service::find($request->id);
      $updateServices->title = ['ar' => $request->input('name-ar'), 'en' => $request->input('name-en')];
      $updateServices->description = ['ar' => $request->input('description-ar'), 'en' => $request->input('description-en')];
      $updateServices->save();
      return redirect(route('services.show'));


  }
  public function destroy($id){

      Service::find($id)->delete();
      return redirect()->back();
  }
}
