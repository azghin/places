@extends('layouts.admaster')
@section('content')
<script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&language=fr&key=AIzaSyB4rQXALT8miSahBlXgjzGN4VP8gZAB1-s"  type="text/javascript"></script>
    <div class="container">
        @isset($data)
            <form action="{{route('admin.update',['id'=>$data->id])}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('put')
                <hr>
                <div class="mb-3 row">
                    <label for="Titel" class="col-4 col-form-label">Titel</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Title" id="Title" value="{{$data->Title}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="latitude" class="col-4 col-form-label">latitude</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="latitude" id="latitude" value="{{$data->latitude}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="longitude" class="col-4 col-form-label">longitude</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="longitude" id="longitude" value="{{$data->longitude}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-4 col-form-label">description</label>
                    <div class="col-8">
                        <input name="description" id="description"  class="form-control" value="{{$data->description}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <img class="col-4" src="../storage/{{$data->image}}" alt="">
                    <div class="col-8">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="offset-sm-4 col-sm-8">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        @endisset
        <div class="card" id="map">
            map content
        </div>
    </div>
@endsection
<style>
    #map{
        height: 500px;
        box-shadow: 10px 10px;
    }
    .container{
        margin-bottom: 20px;
        padding-bottom: 50px;
    }

</style>

<script async  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt5k-sCaEODnX5vPF517RZEOwDjzFJrig&callback=initMap"></script>
<script>
     function initMap() {
      const coord = { lat:{{$data->latitude}} ,lng:{{$data->longitude}} };
      const map = new google.maps.Map(document.getElementById("map"), {
        scaleControl: true,
        center: coord,
        zoom: 20,
      });
      new google.maps.Marker({
        position:coord,
        map:map
      })

    }
</script>