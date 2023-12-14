@extends("admin.master")
@section("content")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Task</th>
                <th>Progress</th>
                <th >Label</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                $i=0;
                $i++;
                ?>
                @foreach($services as $service)
                <td>{{$i}}</td>
                <td>{{$service->title}}</td>
                <td>
                    {{$service->description}}
                </td>
                <td>
                    <a href="{{route('services.edit',$service->id)}}" class="btn btn-primary">Primary</a>
                    <a href="{{route('services.destroy',$service->id)}}" class="btn btn-danger">Danger</a>


                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
