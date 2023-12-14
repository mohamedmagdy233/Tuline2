@extends("admin.master")
@section("content")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <div class="form-box">
        @include('admin.services.addServicesCss')

        <h1>Services Form</h1>
        <form action="{{url('update/services',$show->id)}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$show->id}}">
            <div class="form-group">
                <label for="name">title in arabic</label>
                <input class="form-control" id="name" value="{{$show->getTranslation('title','ar') }}" type="text" name="name-ar">
            </div>

            <div class="form-group">
                <label for="name">title in english</label>
                <input class="form-control" id="name" value="{{$show->getTranslation('title','en') }}"type="text" name="name-en">
            </div>

            <div class="form-group">
                <label for="message">description in arabic</label>
                <textarea class="form-control" id="message"  name="description-ar">
{{$show->getTranslation('description','ar') }}
                </textarea>
            </div>

            <div class="form-group">
                <label for="message">description in english</label>
                <textarea class="form-control" id="message" name="description-en">
{{$show->getTranslation('description','en') }}
                </textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit" />

        </form>

    </div>

@endsection
