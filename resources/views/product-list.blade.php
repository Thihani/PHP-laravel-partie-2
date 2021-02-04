@extends('layouts.layout')

@section('title', 'Catalogue')

@section('content')
    <div class = "photo-anne-sophie">
        <img id = "photo-anne-sophie" class="img-fluid" src={{ asset('images/anne-sophie.png') }} alt="photo de Anne Sophie">
    </div>
    <div class="row body-productlist">
        @foreach ($productlist as $product)
            <div class="col product-col">
                <div class="product">
                    <img class="photoproduct" src={{ asset('images/image.png') }} alt="photo of product">
                    <p>{{ $product->name }} - €{{ $product->price/100 }}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection

