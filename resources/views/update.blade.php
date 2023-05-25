@extends('layouts.admin')
@section('content')
<form action="{{route('update',$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <br>
    <label for="title">title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}" >
    <br>
    <label for="latitude">latitude</label>
    <input type="text" class="form-control" name="latitude" id="latitude" value="{{$data->latitude}}" >
    <br>
    <label for="longitude">longitude</label>
    <input type="text" class="form-control" name="longitude" id="longitude" value="{{$data->longitude}}">
    <br>
    <label for="description">description</label>
    <input type="text" class="form-control" name="description" id="description"   >
    <br>
    {{-- <label for="image">Images</label>
    <input type="file" name="image" id="image" > --}}
    <br>
    <button type="submit" class="btn btn-primary">update</button>
</form>

@endsection
