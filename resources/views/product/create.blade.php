@extends('layouts.app')

@section('content')
    <hr/>
    <!-- uses partial view in the common folder -->

    <!-- Create task. -->
    <form action="/product/store" method="POST">
        {{ csrf_field() }}
        Create Product 
        <br/><br/>
        product: <input type="text" name="description"> 
        <br/><br/>
        price: <input type="text" name="price"> 
        <br/><br/>
        quantity: <input type="text" name="quantity"> 
        <button type="submit">Create Product</button>
    </form>
@endsection
