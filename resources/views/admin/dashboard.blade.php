@extends('layouts.admaster')
@section('content')
    <h3>Dashboard</h3>
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">number places</h4>
                <p class="card-text">{{$count}}</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">number users</h4>
                <p class="card-text">{{$countU}}</p>
            </div>
        </div>
    </div>
    
@endsection