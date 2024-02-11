@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Create Post -->
    <h1 class="text-center my-3 fw-bold">Edit Profile</span></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('updateprofile') }}" method="POST">
                        @csrf
                        <label for="name">Name:</label>
                        <input name="name" id="name" class="form-control mb-4" type="text" value="{{ Auth::user()->name }}" required >
                        <label for="email">Email:</label>
                        <input name="email" id="email" class="form-control" type="text" value="{{ Auth::user()->email }}" required >
                        <button type="submit" class="btn btn-dark mt-3 float-end">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
