@extends('layouts.layout')

@section('title', 'Catalogue')

@section('content')
    <div class="body-productdetail">
        <div class="content-productdetail">
            <h1>{{ $product->name }}</h1>
            <div class="row">
                <div class="col-sm productinfo">
                    Desciption
                    <p>{{$product->description}}</p>
                </div>
                <div class="col-sm productinfo">€{{ $product->price/100 }}</div>
                <div class="col-sm productinfo"><img class="photoproduct" src={{ asset('images/image.png') }} alt="photo of product"></div>
            </div>
        </div>
    </div>

@endsection
