@extends('layouts.layout')

@section('title', 'Cart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h3>{{$product->name}}</h3>
            </div>
            <div class="col-sm">
                <h3>{{$product->price}}</h3>
            </div>
            <div class="col-sm">
                <form action="{{route('confirmOrder',['id'=>$id])}}" method="post">
                    {{ csrf_field() }}
                    <label><h3>Quantity</h3></label>
                    <input style="width: 30%" type="number" class="form-control"  name="quantity" value="1">
                    <button style="width: 30%" type="submit" class="btn btn-outline-success" name="pay"><h3>Pay</h3></button>
                </form>
            </div>
        </div>
    </div>

@endsection
