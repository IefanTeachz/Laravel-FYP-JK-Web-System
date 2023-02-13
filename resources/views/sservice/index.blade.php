@extends('vservice.layouts.template')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>SERVICE</b></h2>
            </div>
            
        </div>
    </div>
    <br>
    <br>
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sservice.create') }}" style="margin-bottom:2%;"> Create New Service</a>
            </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success"></div>
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th width="280px">Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Phone</th>
            <th>Address</th>
            <th>FB</th>
            <th>Insta</th>
            <th>Category</th>
            <th>State</th>
            <th>Action</th>
        </tr>
        @foreach ($sservice as $service)
        <tr>
            <td>{{ $service->id }}</td>
            <td><img src="{{ $service->image }}" alt="{{ $service->name }}" width="200" height="200"></td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->price }}</td>
            <td>{{ $service->description }}</td>
            <td>{{ $service->phone }}</td>
            <td>{{ $service->address }}</td>
            <td>{{ $service->fb }}</td>
            <td>{{ $service->insta }}</td>
            <td>{{ $service->category->services}}</td>
            <td>{{ $service->state->state}}</td>
            <td>
                <form action="{{ route('sservice.destroy',$service->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('sservice.edit',$service->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
      @endforeach
    </table>
    
            


    
      
@endsection