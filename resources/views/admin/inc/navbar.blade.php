<nav class="main-header navbar navbar-expand navbar-white navbar-light" dir="ltr">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block mx-1">
        <a href="/" class="nav-link">website</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block mx-1 ">
        <a class="nav-link btn-info text-light" data-bs-toggle="modal" data-bs-target="#exampleModal"
         data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fa fa-plus"></i> Category
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block mx-1 ">
        <a class="nav-link btn-info text-light" data-bs-toggle="modal" data-bs-target="#areaexampleModal"
         data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fa fa-plus"></i> كيف وجدتنا
        </a>
      </li>

    
    </ul>
   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fa fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fa fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fa fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fa fa-th-large"></i>
        </a>
      </li>

      
    </ul>
  </nav>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route("saveCategory")}}" method="post">
            @csrf
            <label for="">arabic name</label>
            <input type="text" class="form-control" name="ar_name">

            <label for="">english name</label>
            <input type="text" class="form-control" name="en_name">

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-success">Save</button>
            </div>

          </form>
        </div>
     
      </div>
    </div>
  </div>



  <div class="modal fade" id="areaexampleModal" tabindex="-1" aria-labelledby="areaexampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">كيف وجدتنا</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route("savearea")}}" method="post">
            @csrf
            <label for="">arabic title</label>
            <input type="text" class="form-control" name="ar_area">

            <label for="">english title</label>
            <input type="text" class="form-control" name="en_area">

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-success">Save</button>
            </div>

          </form>
        </div>
     
      </div>
    </div>
  </div>