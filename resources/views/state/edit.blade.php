@extends('admin.layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit state</h2>
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
  
    <form action="{{ route('state.update',$state->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <input type="hidden" name="state_id" value="{{ $state->id }}"> <br/>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>State Name:</strong>
                    <input type="text" name="state" value="{{ $state->state }}" class="form-control" placeholder="State"></input>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('state.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection