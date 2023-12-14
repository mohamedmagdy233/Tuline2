<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
        </div>
        <div class="modal-body">
          <form action="{{route("admin.addCategory")}}"   method="post" enctype="multipart/form-data">
            @csrf
              <input type="text" name="name" class="form-control">
              <button class="btn btn-success w-100">Save</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>