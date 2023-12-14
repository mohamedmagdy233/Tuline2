





  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalparts{{$part->id}}" tabindex="-1" aria-labelledby="exampleModalparts{{$part->id}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$special->name}}</h5>
        </div>
        <div class="modal-body" style="text-align: right">
          <form action="{{route("editparts",$part->id)}}" method="post">
            @csrf
            @method("PUT")
            <label for="">التخصص</label>
              <input type="text" name="name" class="form-control" value="{{$part->name}}">
              <label for="">المستوي الدراسي</label>
              <input type="text" name="level" id="" class="form-control my-2" value="{{$part->level}}">
              <label for="">سنوات الدراسة</label>
              <input type="text" name="years" id="" class="form-control my-2" value="{{$part->years}}">
              <label for="">اللغة</label>
              <input type="text" name="lang" id="" class="form-control my-2" value="{{$part->lang}}">
              <label for="">الرسوم قبل الحسم</label>
              <input type="text" name="moneybefore" id="" class="form-control my-2" value="{{$part->moneybefore}}">
              <label for="">الرسوم بعد الحسم</label>
              <input type="text" name="moneyafter" id="" class="form-control my-2" value="{{$part->moneyafter}}">
              <button class="btn btn-success w-100">Save</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>