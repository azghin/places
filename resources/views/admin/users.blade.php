@extends('layouts.admaster')
@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-dark">
                <caption>Users List</caption>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>phone number</th>
                    <th>address</th>
                    <th>Profile Picture</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($users as $user)
                    <tr class="table-primary" >
                        <td scope="row">{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->address}}</td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" data-image-src="../storage/{{$user->image}}">Open modal for</button></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myModalModalLabel">New message</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <img src="" id="modal-image" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="Modal Image">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <script>
        $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var imageSrc = button.data('image-src'); // Extract the image source from data-image-src attribute
        var modalImage = $(this).find('#modal-image'); // Find the modal image element

        modalImage.attr('src', imageSrc); // Set the image source in the modal
        });      

    </script>
    
@endsection