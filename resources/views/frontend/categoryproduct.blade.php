@extends('layouts.frontsection.front')
@section('title')

{{$category->name}}

@endsection
@include('layouts.frontsection.header')

@section('content')


<!-- new arivals -->
<div class="container mt-3 mt-md-5 mb-md-5 ">
    <div class="row ">
        <div class="col-md-4 offset-md-4">
            <h3 class="text-white bg-danger  text-center  h4 rounded-3  py-3">{{$category->name}} Products</h3>

        </div>
    </div>
    <div class="row slider  ">
        @foreach($product as $pro)
        <div class="col-md-12 col-sm-6 mt-md-5 px-2  ">
            <div class="product-grid">
                <div class="product-image">
                    <a href="{{url('view_product', $pro->id)}}" class="image">
                        <img src="{{asset('/admin/productimages/'. $pro->image)}}" class="img-fluid img" width="100%">
                    </a>



                </div>
                <div class="product-content ">
                    <h3 class="title"><a href="#    ">{{$pro->name}}</a></h3>
                    <div class="price">{{$pro->selling_price}}RS<span class="">{{$pro->orignal_price}}RS</span></div>
                </div>
            </div>
        </div>


        @endforeach

    </div>
</div>
<!-- ////////////////////////////////progories -->

@endsection