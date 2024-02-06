@extends('layouts.frontsection.front')
@section('title')

Cart items

@endsection

@section('content')




<h1>Shopping Cart</h1>

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cartItems as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->qty }}</td>
            <td>{{ $item->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection