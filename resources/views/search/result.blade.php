@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Motion</div>
                
                
                <div class="panel-body">
                @foreach($motions as $motion)
                <li>{{ $motion->motion}}</li>
                @endforeach

               
                </div>

              
                <div class="panel-heading">Tournament</div>
                <div class="panel-body">
                @foreach($tournaments as $tournament)
                <li>{{ $tournament->name}}</li>
                @endforeach
         
               
                </div>

                <div class="panel-heading">User</div>
                <div class="panel-body">
                @foreach($users as $user)
                <li>{{ $user->name}}</li>
                @endforeach

               
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
