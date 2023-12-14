@extends("admin.master")
@section("content")
    <div class="container">
        <form action="{{route("updatePost",$post->id)}}" method="post" enctype="multipart/form-data">
            @method("put")
            @csrf
            <div class="row">
                <div class="col-md-12 my-2">
                    <label for="">Link</label>
                    <input type="text" name="link" id="" class="form-control" value="{{$post->link}}">
                </div>
                <div class="col-md-6 my-2">
                    <label for="">image</label>
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="col-md-6 my-2">
                    <label for="">category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="" disabled selected>chose...</option>

                        @foreach ($categories as $category )
                            <option value="{{$category->id}}" {{$post->category_id==$category->id?"selected":""}}>{{$category->ar_name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-6 my-2">
                    <label for="">العنوان</label>
                    <input type="text" class="form-control" name="ar_title" placeholder="العنوان بالعربي" value="{{$post->ar_title}}">
                </div>
                <div class="col-md-6 my-2">
                    <label for="">title</label>
                    <input type="text" class="form-control" name="en_title" placeholder="english title" value="{{$post->en_title}}">
                </div>
                <div class="col-md-6 my-2">
                    <label for="">الوصف</label>
                    <textarea name="ar_description" id="" cols="15" rows="5" placeholder="الوصف بالعربي" class="form-control">{{$post->ar_description}}</textarea>
                </div>
                <div class="col-md-6 my-2">
                    <label for="">description</label>
                    <textarea name="en_description" id="" cols="15" rows="5" placeholder="english title" class="form-control">{{$post->en_description}}</textarea>
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-success w-25"><i class="fa fa-check"></i> save</button>

            </div>
        </form>
    </div>
@endsection