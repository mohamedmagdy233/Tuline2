<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModaluc{{$govern->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$govern->name}}</h5>
        </div>
        <div class="modal-body" style="text-align: right">
          <form action="{{route("addequal",$govern->id)}}" method="post">
            @csrf
            <label for="">البدء</label>
              <input type="date" name="start" class="form-control">
              <label for="">النهاية</label>
              <input type="date" name="end" id="" class="form-control my-2">
              <label for="">النتيجة</label>
              <input type="date" name="result" id="" class="form-control my-2">
              <label for="">الشهادات المقبولة</label>
              <input type="text" name="accepts" id="" class="form-control my-2">
              <button class="btn btn-success w-100">Save</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>