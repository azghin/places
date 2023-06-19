@extends('layouts.admaster')
@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="../storage/{{$user->image}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{$user->name}}</h5>
              {{-- <p class="text-muted mb-1">Full Stack Developer</p> --}}
              <p class="text-muted mb-4">{{$user->address}}</p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary" id="showButton">Update Profile</button>
                {{-- <button type="button" class="btn btn-outline-primary ms-1">Message</button> --}}
              </div>
            </div>
          </div>
          {{-- <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">https://mdbootstrap.com</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
              </ul>
            </div>
          </div> --}}
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->name}} {{$user->last_name}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->email}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->phone_number}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->address}}</p>
                </div>
              </div>
            </div>
          </div>
          {{-- edit profile form --}}
          <div class="card mb-4 d-none" id="hiddenDiv">
            <form action="/admin/upuser" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                    <label for="name" class="mb-0">First Name</label>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="last_name" class="mb-0">Last Name</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="last_name" id="last_name" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="phone_number" class="mb-0">phone number</label>
                        </div>
                        <div class="col-sm-9">
                        <input type="text" name="phone_number" id="phone_number" class="form-control">
                        </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="address" class="mb-0">address</label>
                        </div>
                        <div class="col-sm-9">
                        <input type="text" name="address" id="address" class="form-control">
                        </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="image" class="mb-0">profile image</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Update Profiel</button>
                  </div>
              </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $(document).ready(function() {
      // Attach a click event to the button
      $('#showButton').click(function() {
        // Show the hidden div
        $('#hiddenDiv').toggleClass('d-none');
      });
    });
  </script>
@endsection