@extends('template.user')

@section('title')
  My Ecommerce
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/show.css')}}">
@endsection

@section('content')
<div class="container">
  <h2 class="title">{{ $services->name }}</h2>
  <hr>
  <div class="row">
    <div class="wrapper">
      <div class="col-lg-4" id="picture">
      <img src="{{asset($services->image)}}" alt="" height="200" width="200">
      </div>
    </div>
    <div class="col-lg-4 desc">
      <h4 id="description"><b>Description</b></h4>
      <p>{{ $services->description }}</p><br>
      <p><b>Phone:</b> {{ $services->phone }}</p><br>
      <p><b>Address:</b> {{ $services->address }}</p><br>
      <p><b>Fb page: </b>{{ $services->fb }}</p><br>
      <p><b>Instagram Page:</b> {{ $services->insta }}</p><br>
      <p><b>Category: </b>{{ $services->category->services }}</p><br>
      <p><b>State:</b> {{ $services->state->state }}</p><br>
    </div>
    <div class="col-lg-4">
      <div class="kartu">
        <p>Price</p>
        <h2>RM {{ number_format ($services->price) }}</h2>
        <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $services->id }}" name="service_id">
        <input type="submit" class="btn btn-primary" value="Add to Cart">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection


