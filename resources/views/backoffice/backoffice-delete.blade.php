@extends('layouts.backoffice-layout')
@section('content')
    <h1>Delete</h1>
    <form action="{{route('backoffice-delete',['id'=>$id])}}" method="post">
        @method('DELETE')
        {{ csrf_field() }}
        <input style="width: 35%" type="number" class="form-control"  name="id" value="{{$product->id}}">
        <br>
        <button style="width: 30%" type="submit" class="btn btn-outline-success" name="delete">Delete</button>
    </form>
@endsection

