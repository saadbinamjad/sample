@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User List</div>
                <div class="panel-body">
                @foreach($users as $user)
                <li>{{ $user->name}}</li>
                @endforeach

                {{ $users->links() }}
                </div>

                <div class="panel-body">
                <a href={{url('/register')}}>Add new user</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
