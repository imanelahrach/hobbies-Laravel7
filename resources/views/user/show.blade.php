@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">User details</div>
          
                <div class="card-body">
                  <b>{{$user->name}}</b>
                  <p>{{$user->motto}}</p>
                  <p>{{$user->about_me}}</p>
                  
                    <div class="mt-2">
                        <a href="{{ URL::previous() }}">
                    <button class="btn btn-sm btn-primary"><i class="fas fa-circle-up"></i> Back to Overview</button></a>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection