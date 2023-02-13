@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show guest Details</h2>
            </div>
        </div>
    </div>
   
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>guest Name:</strong>
                {{ $guest->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number of guest:</strong>
                {{ $guest->number }}
            </div>
        </div>
        
    
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('guest.index') }}"> Back</a>
        </div>
    </div>
@endsection