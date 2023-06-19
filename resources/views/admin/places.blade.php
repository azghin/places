@extends('layouts.admaster')
@section('content')
<h4>Places list</h4>
<hr>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <caption>Places list</caption>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>coords</th>
                    <th>Description</th>
                    <th>operation</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @isset($data)
                    @foreach ($data as $row)
                        <tr class="table-primary">
                            <td scope="row">{{$row->id}}</td>
                            <td scope="row">{{$row->Title}}</td>
                            <td scope="row">{{$row->latitude}},{{$row->longitude}}</td>
                            <td scope="row">{{$row->description}}</td>
                            <td scope="row"><a href="{{route('admin.edit',['id'=>$row->id])}}" class="btn btn-primary">More</a> <hr> <form action="{{route('admin.delete',['id'=>$row->id])}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-danger">delete</button> </form> </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
    
    
@endsection