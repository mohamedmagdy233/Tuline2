@extends('admin.master')
@section('content')
<div class="container">
    <div class="title fw-bold text-info text-center pt-1">
        <h1 class="text-info">المكاتب</h1>
    </div>
    <a href="/register" class="btn btn-primary btn-sm">اضافة مكتب <i class="fa fa-plus"></i></a>
    <div class="orders">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">رقم</th>
                <th scope="col">الاسم</th>
                <th scope="col">low</th>
                <th scope="col">mid</th>
                <th scope="col">high</th>
                <th scope="col">vip</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)

                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>

                  
                    <td>
                        <form action="{{route("userslowp",$user->id)}}" class="d-flex br-0" method="post">
                            @csrf 
                            @method("put")
                            <input type="text" class="form-control w-25 br-0" name="lowp" value="{{$user->lowp}}">
                            <button class="btn btn-warning btn-sm br-0"><i class="fa fa-check"></i></button>
                        </form>
                    </td>

                    
                    <td>
                      <form action="{{route("usersmidp",$user->id)}}" class="d-flex br-0" method="post">
                          @csrf 
                          @method("put")
                          <input type="text" class="form-control w-25 br-0" name="midp" value="{{$user->midp}}">
                          <button class="btn btn-warning btn-sm br-0"><i class="fa fa-check"></i></button>
                      </form>
                  </td>


                  
                  <td>
                    <form action="{{route("usershighp",$user->id)}}" class="d-flex br-0" method="post">
                        @csrf 
                        @method("put")
                        <input type="text" class="form-control w-25 br-0" name="highp" value="{{$user->highp}}">
                        <button class="btn btn-warning btn-sm br-0"><i class="fa fa-check"></i></button>
                    </form>
                </td>


                
                <td>
                  <form action="{{route("usersvipp",$user->id)}}" class="d-flex " method="post">
                      @csrf 
                      @method("put")
                      <input type="text" class="form-control w-25 br-0" name="vipp" value="{{$user->vipp}}">
                      <button class="btn btn-warning btn-sm br-0"><i class="fa fa-check"></i></button>
                  </form>
              </td>
                    
                </tr>
              @endforeach

            </tbody>
          </table>
    </div>
</div>
@endsection