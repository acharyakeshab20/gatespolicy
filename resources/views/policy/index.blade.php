@extends('layouts.app')

@section('title')
    Policy Page
@endsection

@section('table')
    <div class="container">
        {{ Auth::guard()->user()->name }} Its all Yours
    </div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Tittle</th>
            <th>Description</th>
            <th>User Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($post as $po)
                <tr>
                    <td>{{ $po->id }}</td>
                    <td>{{ $po->tittle }}</td>
                    <td>{{ $po->description }}</td>
                    <td>{{ $po->users->name }}</td>
                    <td>
{{--                        @can('view',$post)--}}
{{--                          <a href="{{ route('policy.view',$po->id) }}">View</a>--}}
{{--                        @endcan--}}

                              <a href="{{ route('policy.show',$po) }}" class="btn btn-success">View</a>





{{--                        @if(@can('delete',$po) || $user->can('isAdmin'))--}}
                            @can('delete',$po)

                            <form action="{{ route('policy.delete',$po) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
{{--                        @endif--}}

                        @endcan
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
