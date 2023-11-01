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
                <h6 class="card-title">Admin : </h6>
                <h6 class="card-title">clients : </h6>

            </div>
        </div>
    </div>
    
@endsection