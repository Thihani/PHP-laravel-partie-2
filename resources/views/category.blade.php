@extends('layouts.layout')

@section('title', 'Category')

@section('content')
    @foreach($categories as $category)
        <p>{{$category->id}} - {{$category->name}}</p>
            @foreach($category->product as $product)
                {{$product->name}} <br>
            @endforeach
        <hr>
    @endforeach

@endsection

