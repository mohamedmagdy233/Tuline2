@extends("admin.master")
@section("content")
    <div class="container">
        <div class="title">
            <h2>التواصل</h2>
        </div>

        <div class="contact-info">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">message</th>
                    <th scope="col">founded By</th>
                    <th scope="col">settings</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$contact->username}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->mobile}}</td>
                    <td>{{$contact->description}}</td>
                    <td>{{\App\Models\Area::findOrFail($contact->area_id)->ar_area}}</td>
                    <td>
                        <form action="{{route("deletecontact",$contact->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger btn-sm" onclick="return confirm('انت على وشك حذف الرسالة')"><i class="fa fa-trash"></i></button>        
                        </form>
                    </td>
                  </tr>
               @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection