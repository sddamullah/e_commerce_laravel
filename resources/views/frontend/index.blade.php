@extends('layouts.frontsection.front')
@section('title')


E commerce store| Online Super Market

@endsection
@section('content')
@include('layouts.frontsection.header')


<!-- new arivals -->
<div class='container mt-3 mt-md-5'>
    <div class="row ">
        <div class="col-md-4 offset-md-4">
            <h3 class="text-white bg-danger  text-center  h4 rounded-3  py-3">Featured Product</h3>

        </div>
    </div>

    <div class="row slider">
        @foreach($product as $pro)
        <div class="col-md-12 col-sm-6 mt-md-5 px-2 ">
            <div class="product-grid">
                <div class="product-image">
                    <a href="{{url('view_product', $pro->id)}}" class="image">
                        <img src="{{asset('/admin/Productimages/'. $pro->image)}}" class="img-fluid img" width="100%" height="500px">
                    </a>



                </div>
                <div class="product-content ">
                    <h3 class="title"><a href="#">{{$pro->name}}</a></h3>
                    <div class="price">{{$pro->selling_price}}RS<span class="">{{$pro->orignal_price}}RS</span></div>
                </div>
            </div>
        </div>


        @endforeach

    </div>
</div>
<!-- ////////////////////////////////categories -->
<div class='container mt-3 mt-md-5'>
    <div class="row ">
        <div class="col-md-4 offset-md-4">
            <h3 class="text-white bg-danger  text-center  h4 rounded-3  py-3">Trending Categories</h3>

        </div>
    </div>

    <div class="row slider">
        @foreach($category as $cate)
        <div class="col-md-12 col-sm-6 mt-md-5 px-2 ">
            <div class="product-grid">
                <div class="product-image">
                    <a href="{{url('view_category', $cate->slug)}}" class="image">
                        <img src="{{asset('/admin/categoryimages/'. $cate->image)}}" class="img-fluid img" width="100%" height="500px">
                    </a>



                </div>
                <div class="product-content ">
                    <h3 class="title"><a href="#">{{$cate->name}}</a></h3>
                    <div class="price">{{$cate->describtion}}</div>
                </div>
            </div>
        </div>


        @endforeach

    </div>
</div>

@endsection