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
                <div class="col-sm productinfo"><img class="photoproduct" src={{ asset('images/image.png') }} alt="photo of product">
                    <form action="{{route('order',['id'=>$id])}}" method="post">
                        {{ csrf_field() }}
                        Quantity
                        <input style="width: 50%" type="number" class="form-control"  name="quantity" value="1">
                        <p style="color: red">@error('quantity') {{$message}} @enderror</p>
                        <button style="width: 30%" type="submit" class="btn btn-outline-success" name="order"><h3>Order</h3></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
