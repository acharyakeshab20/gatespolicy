@extends('layouts.app')
@section('profile')
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label for="password">Password</label>
        <input type="text" name="password" placeholder="enter your old password" class="form-control">
        <br>
        <label for="new_password">New Password</label>
        <input type="text" name="new_password" placeholder="enter your new password" class="form-control"><br>
        <label for="new_password_confirmation">Confirm Password</label>
        <input type="text" name="new_password_confirmation" placeholder="Re enter your password" class="form-control">
        <br>
        <button type="submit" class="btn btn-success btn-lg">Submit</button>
    </form>
@endsection
