@extends('layouts.backoffice-layout')
@section('content')
<h1>UPDATE</h1>
<form action="{{route('backoffice-update',['id'=>$id])}}" method="post">
    @method('PUT')
    {{ csrf_field() }}
    <label><h3>Product name</label></h3>
    <input style="width: 50%" type="text" class="form-control"  name="name" value="{{$product->name}}">
    <br>
    <label><h3>Price</h3></label>
    <input style="width: 50%" type="number" class="form-control"  name="price" value="{{ $product->price }}">
    <br>
    <label><h3>Description</h3></label>
    <textarea style="width: 50%" class="form-control" rows="5" name="description">{{ $product->description }}</textarea>
    <br>
    <label><h3>Category</h3></label>
    <input style="width: 50%" type="number" class="form-control"  name="category" value="{{ $product->category_id }}">
    <button style="width: 30%" type="submit" class="btn btn-outline-success" name="update"><h3>Update</h3></button>
</form>

@endsection
