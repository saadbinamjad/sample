@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/search') }}">
                        {{ csrf_field() }}

                         <div class="panel-heading">
                            <strong> bdbdebate seacrh</strong>
                         </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        
                            <div class="panel-heading">
                            <div class="col-md-6">
                                <input id="search" name="search" value="{{ $searchItem }}" required autofocus>

                             </div>
                             </div>
                        </div>
                        <div class="form-group">
                            <div class="panel-heading">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                            </div>
                     
                        </div>
                    </form>

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
