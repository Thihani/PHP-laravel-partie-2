@extends('layouts.backoffice-layout')
@section('content')
    <h1>Delete</h1>
    <form action="{{route('backoffice-delete')}}" method="post">
        {{ csrf_field() }}
        <input style="width: 35%" type="number" class="form-control"  name="id" placeholder="Product id">
        <br>
        <button style="width: 30%" type="submit" class="btn btn-outline-success" name="delete">Delete</button>
    </form>
@endsection

