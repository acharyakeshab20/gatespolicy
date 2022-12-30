@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Welcome to  Your Panel</h3>
    <h3 class="text-center">Post</h3>
    <a href="{{ route('policy.index') }}">Policy</a>
{{--    <a href="{{ route('policy.index') }}" class="btn ">Post</a>--}}
    @can('isAdmin')
         <form action="" method="post">
        @csrf
        <div class="row mt-3">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="enter Staff name" class="form-control">
        </div>
        <div class="row mt-3">
            <label for="Address">Address</label>
            <input type="text" name="name" placeholder="enter staff address" class="form-control">
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg">Submit</button>
        </div>
    </form>
    @endcan
</div>
@endsection
