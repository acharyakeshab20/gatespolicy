@extends('layouts.app')
@section('data')
    <h3 class="text-center">Users Details</h3>
@endsection
@section('table')
    <table class="table table-striped table-hover table-bordered">
        <thead>
           <tr>
                <th>Name</th>
               <th>Email</th>
               <th>Roles</th>
               <th>Post Details</th>
               <th>Total Post</th>
           </tr>
        </thead>
        <tbody>
            @foreach($userpost as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles }}</td>
                    <td>

                        @foreach($user->post as $posts)

                               {{ $posts->tittle }}<br>
{{--                            @dd($posts);--}}
                        @endforeach
                    </td>
                    <td>{{ $user->post->count() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

