<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalparts{{$special->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$special->name}}</h5>
        </div>
        <div class="modal-body" style="text-align: right">
          <form action="{{route("addparts",$special->id)}}" method="post">
            @csrf
            <label for="">التخصص</label>
              <input type="text" name="name" class="form-control">
              <label for="">المستوي الدراسي</label>
              <input type="text" name="level" id="" class="form-control my-2">
              <label for="">سنوات الدراسة</label>
              <input type="text" name="years" id="" class="form-control my-2">
              <label for="">اللغة</label>
              <input type="text" name="lang" id="" class="form-control my-2">
              <label for="">الرسوم قبل الحسم</label>
              <input type="text" name="moneybefore" id="" class="form-control my-2">
              <label for="">الرسوم بعد الحسم</label>
              <input type="text" name="moneyafter" id="" class="form-control my-2">
              <button class="btn btn-success w-100">Save</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>



