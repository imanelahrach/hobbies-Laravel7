@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">User details {{$user->name}}</div>
                <div class="card-body">
                  <p>{{$user->motto}}</p>
                  <p>{{$user->about_me}}</p>
                  <div class="card">

                 @if($user->hobbies->count() > 0) 
                 <div class="card-header">Hobbies created by {{$user->name}}</div>
                 <div class="card-body">
                  <ul class="list-group">
                           @foreach($user->hobbies as $hobby)
                                <li class="list-group-item">
                                    <a text ="Show details" href="/hobby/{{$hobby->id}}" >{{$hobby->name}}</a>
                                        <span class="float-right mx-2">{{ $hobby->created_at->diffForHumans() }}</span>
                                    <br>
                                    @foreach($hobby->tags as $tag)
                                    <a href="/hobby/tag/{{ $tag->id }}"><span class="badge badge-{{ $tag->style }}">{{ $tag->name }}</span></a>
                                    @endforeach                              
                                      </li>
                           @endforeach
                    </ul>
                    @else($user->hobbies->count() < 0)
                    <div class="mt-2">
                    <p>{{$user->name}} has not created any hobbies yet.</p>
                        <a href="/hobby/create">
                    <button class="btn btn-sm btn-primary"><i class="fas fa-circle-up"></i> Add new hobby </button></a>
</div>
@endif
                    
                </div> </div></div>
            </div>
        </div>
    </div>
</div>
@endsection