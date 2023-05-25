@extends('layouts.admin')
@section('MapAPI')
<script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&language=fr&key=AIzaSyB4rQXALT8miSahBlXgjzGN4VP8gZAB1-s"  type="text/javascript"></script>
@endsection
@section('content')
<div class="container">
    <table class="table table-bordered w-100">
        <thead class="table-dark">
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
                <tr onclick="initMap({{$item->latitude}},{{$item->longitude}})">
                    <td>{{$item->title}}</td>
                    <td>{{$item->latitude}}</td>
                    <td>{{$item->longitude}}</td>
                    <td>{{$item->description}}</td>
                    <td><img src="img/{{$item->image}}" class="img-fluid w-25" alt=""></td>
                    <td>
                        <form action="{{ route('deleteplace', ['id' => $item->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('update.show', ['id' => $item->id]) }}" class="btn btn-primary">update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

<div class="container">
    <div id="map" style="width: 100%;height: 500px;">

    </div>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt5k-sCaEODnX5vPF517RZEOwDjzFJrig" defer></script> --}}
</div>
<script async  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt5k-sCaEODnX5vPF517RZEOwDjzFJrig&callback=initMap"></script>
<script>
<<<<<<< HEAD
    function initMap(lt,lg) {
      const coord = { lat: lt, lng: lg };
      const map = new google.maps.Map(document.getElementById("map"), {
        scaleControl: true,
        center: coord,
        zoom: 20,
      });
      new google.maps.Marker({
        position:coord,
        map:map
      })
=======
    function initMap() {
      const coord = { lat: 35.778555682753414, lng: -5.808295979212141 };
      const map = new google.maps.Map(document.getElementById("map"), {
        scaleControl: true,
        center: coord,
        zoom: 10,
      });
>>>>>>> 0a8a4acbd8e42b75dbd197fe26e9030d173d6721

    }
/*
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

    */

    initMap(35.778555682753414,-5.808295979212141);
</script>


@endsection
