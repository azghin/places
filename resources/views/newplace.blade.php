@extends('layouts.admin')
@section('content')
    <h1>ADD PLACE</h1>
    <form action="/newplace" method="POST">
        @csrf
        {{-- <label for="id">id</label>
        <input type="text" name="id" id="id"> --}}
        <br>
        <label for="titel">Titel</label>
        <input type="text" class="form-control" name="titel" id="titel">
        <br>
        <label for="local">local</label>
        <input type="text" class="form-control" name="local" id="local">
        <br>
        <label for="description">description</label>
        <input type="text" class="form-control" name="description" id="description">
        <br>
        <label for="Images"></label>
        <button type="submit" class="btn btn-primary">ADD place</button>
    </form>
@endsection