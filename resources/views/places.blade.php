@extends('layouts.admin')
@section('content')
<table class="table-bordered w-75 p-3">
    <thead>
        <tr>
            <th>place</th>
            <th>latitude</th>
            <th>longitude</th>
            <th>description</th>
            <th>image</th>
            <th>operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->latitude}}</td>
                <td>{{$item->longitude}}</td>
                <td>{{$item->description}}</td>
                <td><img src="img/{{$item->logo}}" class="img-fluid w-25" alt=""></td>
                <td><a href=""><button >delette</button></a><button>update</button></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="container">
    <div id="map" style="width: 100%;height: 300px;">

    </div>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt5k-sCaEODnX5vPF517RZEOwDjzFJrig" defer></script> --}}
</div>
<script async  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt5k-sCaEODnX5vPF517RZEOwDjzFJrig&callback=initMap"></script>
<script>
    

    function initMap(lat,long) {
    var coord = {lat:lat,lng:long};

    var map = new google.maps.Map(
            document.getElementById("map"),{
                zoom:10,
                center:coord
            }
        );

        new google.maps.Marker({
        position:coord,
        map:map
        })
    }

    

    initMap(35.778555682753414,-5.808295979212141);
</script>


@endsection
