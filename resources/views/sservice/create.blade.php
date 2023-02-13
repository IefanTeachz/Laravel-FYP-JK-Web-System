@extends('vservice.layouts.template')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Service</h2>
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
   
<form action="{{ route('sservice.store') }}" method="POST">
    @csrf
  
     <div class="row">
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="text" name="phone" class="form-control" placeholder="Phone number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Facebook Name:</strong>
                <input type="text" name="fb" class="form-control" placeholder="Facebook name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Instagram Name:</strong>
                <input type="text" name="insta" class="form-control" placeholder="Instagram name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="text" name="image" class="form-control" placeholder="Link of Image from internet Ex. IG,FB">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" name="category_id">
                <option value="">-- Choose category --</option>
                @foreach ($category as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($sservice['category_id']) && $sservice['category_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        <br>        
        <br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" name="state_id">
                <option value="">-- Choose State --</option>
                @foreach ($state as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($sservice['state_id']) && $sservice['state_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        <br>        
        <br>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('sservice.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection