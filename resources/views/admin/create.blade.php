@extends('layouts.admaster')
@section('content')
    <h1>New Place Form</h1>
    <hr class="bg-danger">
    <form action="/admin/create" method="post" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Title" class="form-label">title</label>
            <input type="text" class="form-control" name="Title" id="Title" >
            <small id="helpId" class="text-muted">put the place name here</small>
        </div>
        <div class="mb-3">
            <label for="latitude" class="form-label">latitude</label>
            <input type="text" class="form-control" name="latitude" id="latitude" >
            <small id="helpId" class="text-muted">put the latitude  here</small>
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">longitude</label>
            <input type="text" class="form-control" name="longitude" id="longitude" >
            <small id="helpId" class="text-muted">put the longitude  here</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" rows="2" id="description" name="description"></textarea>
            <small id="helpId" class="text-muted">put the description  here</small>
        </div>
        <div class="mb-3">
            <label for="image">Images</label>
            <input type="file" name="image" id="image" class="form-control" >
            <small id="helpId" class="text-muted">upload the place image here</small>
        </div>
        <hr>
        <button type="submit" class="btn btn-success">submit</button>
    </form>



    
@endsection