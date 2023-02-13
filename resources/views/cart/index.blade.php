@extends('template.user')

@section('title')
    Cart
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection

@section('content')
<div class="container">
    <!-- success message & Error message -->

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

        @php
            $total = 0;
        @endphp
    @if ($carts->count() == 0)
    <p style="text-align:center;">Your Cart is Empty</p>
    @endif
<div>
    <h3>{{ $carts->count() }} Item(s) in your cart</h3>
</div>

@foreach ($carts as $cart)
<div class="cart">
    <div class="row">
        <div class="col-lg-3">
        <img class="img-cart" src="{{asset($cart->service->image)}}" alt="">
        </div>
        <div class="col-lg-9">
            <div class="top">
                <p class="item-name">{{ $cart->service->name }}</p>
                <div class="top-right">
                    <p class="">RM {{ number_format($cart->service->price) }}</p>
                
                    <!-- Subtotal -->
                    <p class="total-item">RM {{ number_format($cart->service->price) }}</p>
                </div>
            </div>
            <hr class="mt-2 mb-2">
            <div class="bottom">
               <div class="row">
                    <p class="col-lg-6 item-desc">
                        {{ $cart->service->description }}
                    </p>
                    <div class="offset-lg-4">

                    </div>
                    <div class="col-lg-2">
                    <!-- delete cart -->
                        <form action="{{ route('cart.destroy',$cart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>

    @php
    $total += ($cart->service->price);
    @endphp
    
@endforeach

<div class="totalz">
    <h4 class="total-price">Total Price: RM {{ number_format($total) }}</h4>
</div>
</div>


    {{-- @endif --}}
    
        <form action="/checkout" style="margin-left: 700px;" method="GET">
        @csrf
        
        <input type="submit" class="btn btn-primary" value="Checkout">
        </form>
        
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection
