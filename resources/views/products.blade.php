@extends('layout')
    
@section('content')
     
<div class="row">
    @foreach($productos as $producto)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="product_box">
                <img src="{{ $producto->image }}" alt="">
                <div class="caption">
                    <h4>{{ $producto->nombre }}</h4>
                    <p><strong>Precio: </strong> {{ $producto->precio }}$</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $producto->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
     
@endsection