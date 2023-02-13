@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit guest</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('guest.update',$guest->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <input type="hidden" name="id" value="{{ $guest->id }}"> <br/>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>guest Name:</strong>
                    <input type="text" name="name" value="{{ $guest->name }}" class="form-control" placeholder="guest Name"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number of guest:</strong>
                    <input type="integer" name="number" value="{{ $guest->number }}" class="form-control" placeholder="Numguest"></input>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('guest.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection