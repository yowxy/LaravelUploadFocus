@extends('layouts.app')

@section('title','Register')

@section('content')
<div class="row">
    <div class="col-md-4"></div>

    <div class="card col-md4">
        <div class="card-body">
            <h1 class="text-center">Register</h1>

            @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        <form method="POST" action="{{ url('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="email" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Regist Now</button>
            </div>
        </form>

        </div>
    </div>
</div>
@endsection
