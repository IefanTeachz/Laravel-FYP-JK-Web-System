@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit plan</h2>
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
  
    <form action="{{ route('plan.update',$plan->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <input type="hidden" name="id" value="{{ $plan->id }}"> <br/>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Edit Plan Name:</strong>
                    <input type="text" name="title" value="{{ $plan->title }}" class="form-control" placeholder="Edit Your Plan"></input>
                </div>
            </div>
           
        <div class="col-xs-12 col-sm-612col-md-12">
            <div class="form-group">
                <strong> Edit Start Date:</strong>
                <input type="text" name="start" value="{{ $plan->start }}" class="form-control" placeholder="Edit Start Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-612col-md-12">
            <div class="form-group">
                <strong>Edit End Date:</strong>
                <input type="text" name="end" value="{{ $plan->end }}" class="form-control" placeholder="Edit End Date">
            </div>
        </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('plan.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection