@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('common.errors')
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Motion List</div>
                <div class="panel-body">
                @foreach($motions as $motion)
                <li>{{ $motion->motion}}</li>
                @endforeach

                {{ $motions->links() }}
                </div>

                 <div class="panel-body">
                 <a href= "{{url('/motion/create')}}">Create Motion</a>
                 </div>
            </div>
        </div>
    </div>
  
</div>
@endsection
