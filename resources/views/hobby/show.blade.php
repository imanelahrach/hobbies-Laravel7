@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Hobby details</div>
          
                <div class="card-body">
                  <b>{{$hobby->name}}</b>
                  <p>{{$hobby->description}}</p>

                    <div class="mt-2">
                        <a href="/hobby">
                    <button class="btn btn-sm btn-primary"><i class="fas fa-circle-up"></i> Back to Overview</button></a>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
