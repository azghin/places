@extends('layouts.master')

@section('content')
    <h1>hello wrold</h1>

    
    @isset($data)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endisset
    
        
   
@endsection
