@extends('layouts.admin')
@section('content')
<table class="table-bordered w-100 p-3">
    <thead>
        <tr>
            <th>place</th>
            <th>localisation</th>
            <th>description</th>
            <th>image</th>
            <th>operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->local}}</td>
                <td>{{$item->description}}</td>
                <td><img src="img/{{$item->logo}}" alt=""></td>
                <td><a href=""><button >delette</button></a><button>update</button></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
