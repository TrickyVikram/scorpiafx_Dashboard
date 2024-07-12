
@extends('layouts/contentNavbarLayout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">User Profile</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle">
                        </div>
                        <h5 class="card-title"> Name: {{ Auth::user()->name }}</h5>
                        <p class="card-text">Email: {{ Auth::user()->email }}</p>

                       
                        <a  href="{{ route('profile.edit',  Auth::user()->id ) }}" class="btn btn-primary"><i class="fas fa-edit me-1"></i>Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection