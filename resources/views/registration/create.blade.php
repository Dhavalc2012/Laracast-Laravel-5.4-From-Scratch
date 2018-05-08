@extends('layout')

@section('content')
    <div class="col-sm-10">
        <h1>Register</h1>
        <form action="/register" method="post">
            {{csrf_field()}}
            <div class="form-group col-sm-6">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" requiredU>
            </div>
            <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <div class="form-group col-sm-12">
                @include('layouts.errors')
            </div>
        </form>
    </div>
@endsection