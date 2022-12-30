@extends('layouts.app')

{{--@section('tittle')--}}
{{--    Policy View--}}
{{--@endsection--}}
@section('describe')
    <div class="row  col-md-4 bg-gradient">
        <h3 class="text-center text-muted"> {{ Auth::user()->name }}</h3>
        <p> Post </p>
        <p> {{ $post->tittle }}</p>
        <p>{{ $post->description }}</p>
        <a href="" class="btn btn-success btn-sm d-block">Home</a>
    </div>
@endsection


