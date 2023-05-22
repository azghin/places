@extends('layouts.master')
@section('content')
    <div class="container">
        <div id="map"style="width:100%;height:300px;">
            
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt5k-sCaEODnX5vPF517RZEOwDjzFJrig" defer></script>
    </div>
    <h1>{{$data->title}}</h1>
    <p>{{$data->description}}</p>



    <style>
        let map;

        function showMap(lat,long) {
            var coord = {lat:lat,lng:long};
            new google.maps.Map(
                document.getElementById("map"),{
                    zoom:10,
                    center:coord
                }
            );
        }

        showMap(0,0);
    </style>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt5k-sCaEODnX5vPF517RZEOwDjzFJrig&callback=showMap"></script>

@endsection