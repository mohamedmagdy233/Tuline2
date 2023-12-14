<!--------------------------top------------------------->
<div class="row">
    @foreach($chairsup as $chair)
        <div class="col-3 m-auto">
            <div class="set8 p-2 m-auto">
          
              <!-- Button trigger modal -->
<button type="button" class="btn  text-light" style="border:none ;@if($chair->person==8) width:80px ;@endif background:{{$chair->color}}"
data-bs-toggle="modal" data-bs-target="#exampleModalup{{$chair->id}}">
    {{$chair->person}}
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalup{{$chair->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          <h5 class="modal-title" id="exampleModalLabel">قسم العلوي</h5>
        </div>
        <form action="{{route("updatechair",$chair->id)}}" method="post">
            @csrf 
            @method("put")
        <div class="modal-body">
            <label for="">عدد </label>
            <input type="text" name="person" class="form-control" value="{{$chair->person}}">
            <label for="">سعر </label>
            <input type="text" name="price" class="form-control" value="{{$chair->price}}">
            <label for="">الدرجة</label>
            <select name="degree" id="" class="form-control">
              <option value="low" @if($chair->degree=="low") selected @endif>low</option>
              <option value="mid" @if($chair->degree=="mid") selected @endif>mid</option>
              <option value="high" @if($chair->degree=="high") selected @endif>high</option>
              <option value="vip" @if($chair->degree=="vip") selected @endif>vip</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary">Save </button>
        </div>
    </form>
      </div>
    </div>
  </div>
            </div>
        </div>
    @endforeach
</div>
<!---------------------------top----------------------->
<div class="row my-3">
  
    @foreach($chairsmid as $chair)
    <div class="col-3"></div>
    <div class="col-3"></div>
    <div class="col-3"></div>
        <div class="col-3">
            <div class="set8 p-2">
                <button type="button" class="btn btn-primary " style="border:none ;@if($chair->person==8) width:80px ;@endif background:{{$chair->color}}"
                    data-bs-toggle="modal" data-bs-target="#exampleModalmid{{$chair->id}}">
                        {{$chair->person}}
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalmid{{$chair->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                              <h5 class="modal-title" id="exampleModalLabel">قسم العلوي</h5>
                            </div>
                            <form action="{{route("updatechair",$chair->id)}}" method="post">
                                @csrf 
                                @method("put")
                            <div class="modal-body">
                                <label for="">عدد </label>
                                <input type="text" name="person" class="form-control" value="{{$chair->person}}">
                                <label for="">سعر </label>
                                <input type="text" name="price" class="form-control" value="{{$chair->price}}">
                                <label for="">الدرجة</label>
                                <select name="degree" id="" class="form-control">
                                  <option value="low">low</option>
                                  <option value="mid">mid</option>

                                  <option value="high">high</option>
                                  <option value="vip">vip</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button class="btn btn-primary">Save </button>
                            </div>
                        </form>
                          </div>
                        </div>
                      </div>
            </div>
        </div>
    @endforeach
</div>

<!---------------------------top----------------------->
<div class="row">
    @foreach($chairsdown as $chair)
        <div class="col-3">
            <div class="set8 p-2">
                <button type="button" class="btn btn-primary " style="border:none ;@if($chair->person==8) width:80px ;@endif background:{{$chair->color}}"
                    data-bs-toggle="modal" data-bs-target="#exampleModaldown{{$chair->id}}">
                        {{$chair->person}}
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModaldown{{$chair->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                              <h5 class="modal-title" id="exampleModalLabel">قسم سفلي</h5>
                            </div>
                            <form action="{{route("updatechair",$chair->id)}}" method="post">
                                @csrf 
                                @method("put")
                            <div class="modal-body">
                                <label for="">عدد </label>
                                <input type="text" name="person" class="form-control" value="{{$chair->person}}">
                                <label for="">سعر </label>
                                <input type="text" name="price" class="form-control" value="{{$chair->price}}">
                                <label for="">الدرجة</label>
                                <select name="degree" id="" class="form-control">
                                  <option value="low">low</option>
                                  <option value="mid">mid</option>

                                  <option value="high">high</option>
                                  <option value="vip">vip</option>
                                </select>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button class="btn btn-primary">Save </button>
                            </div>
                        </form>
                          </div>
                        </div>
                      </div>
            </div>
        </div>
    @endforeach
</div>
<!---------------------------top----------------------->
