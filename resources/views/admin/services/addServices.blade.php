
@extends("admin.master")
@section("content")
    <div class="form-box">
        @include('admin.services.addServicesCss')

        <h1>Services Form</h1>
        <form action="{{url('add/services')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">title in arabic</label>
                <input class="form-control" id="name" type="text" name="name-ar">
            </div>

            <div class="form-group">
                <label for="name">title in english</label>
                <input class="form-control" id="name" type="text" name="name-en">
            </div>

            <div class="form-group">
                <label for="message">description in arabic</label>
                <textarea class="form-control" id="message" name="description-ar"></textarea>
            </div>

            <div class="form-group">
                <label for="message">description in english</label>
                <textarea class="form-control" id="message" name="description-en"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit" />

        </form>

    </div>

@endsection



