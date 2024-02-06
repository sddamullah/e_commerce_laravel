@extends('layouts.frontsection.front')

@section('content')

<style>
    .wrappe {
        position: relative;
        top: 70px;
        height: auto;
        width: 70%;
        margin: 50px auto;
        margin-bottom: 100px;
        border-radius: 7px 7px 7px 7px;
        /* VIA CSS MATIC https://goo.gl/cIbnS */
        -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    }

    .product-img {
        float: left;
        height: auto;
        width: 327px;
    }

    .product-img img {
        border-radius: 7px 0 0 7px;
    }

    .product-info {
        float: left;
        height: 420px;
        width: 64%;
        border-radius: 0 7px 10px 7px;
        background-color: #ffffff;
    }

    .product-text {
        height: auto;
        width: 327px;
    }

    .product-text h1 {


        font-size: 34px;
        color: #474747;
    }

    .product-text h1,
    .product-price-btn p {
        font-family: 'Bentham', serif;
    }

    .product-text h2 {

        font-size: 13px;
        font-family: 'Raleway', sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        color: #d2d2d2;
        letter-spacing: 0.2em;
    }

    .product-text p {

        margin: 0 0 0 38px;
        font-family: 'Playfair Display', serif;
        color: #8d8d8d;


        font-weight: lighter;
        overflow: hidden;
    }
</style>
<!-- new arivals -->
<div class="container-fluid mt-3 mb-md-5 ">

    <div class="   ">
        @foreach($product as $pro)
        <div class="wrappe row   mt-5">
            <div class="product-img col-md-6">
                <img src="{{asset('/admin/productimages/'. $pro->image)}}" height="420" width="327">
            </div>
            <div class="product-info col-md-6 ">
                @if($pro->trending == '1')
                <div class="btn btn-danger text-white rounded-2 fw-bold  " style="font-size: 12px; float:right !important;  "> Trending</div>
                @endif
                <div class="product-text mt-5 ms-5">

                    <h1>{{$pro->name}}</h1>
                    <h2> By E commerce store</h2>
                    <hr>
                    <p class="">
                        {{$pro->small_description}}

                    </p>
                    <div class="row mt-3">
                        <div class="col-md-8 ">
                            <label for="oprice " style="font-size: 14px;" class=" fw-lighter"> Orignal Price</label>
                            :
                            <span class="oprice fs-6 fw-lighter " style="font-size: 14px;"> <del>
                                    {{$pro->orignal_price}} Rs
                                </del></span>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-8 ">
                            <label for="oprice " style="font-size: 14px;" class=" fw-bold "> Selling Price</label>
                            :
                            <span class="oprice fs-6  fw-bold" style="font-size: 14px;">{{$pro->selling_price}} Rs</span>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-7 ">
                            <label for="oprice " style="font-size: 14px;" class=" fw-bold "> Sales Tax</label>
                            :
                            <span class="oprice fs-6  fw-bold" style="font-size: 14px;">{{$pro->tax}} Rs</span>
                        </div>

                    </div>
                    <input type="hidden" value="{{$pro->id}}" class="pro_id">
                    @if($pro->qty > 0)
                    <label class="text-white bg-success  px-2 mt-2 rounded-2" style="font-size: 14px;"> In Stock</label>

                    @else
                    <label class="text-white bg-danger  px-2 mt-2 rounded-2" style="font-size: 14px;"> Out of Stock</label>


                    @endif
                    <div class="row mt-3">
                        <div class="col-md-4 ">

                            <input type="hidden" value="{{$pro->id}}" name="pro_id">
                            <a href="{{ url('addToCart', ['id' => $pro->id]) }}" class="btn-sm btn-success  text-white  " style="font: size 10px;" value="">Add to Cart</a>

                        </div>
                        <div class="col-md-4 ">
                            <input type="button" class="btn-sm btn-primary text-white  " style="font: size 10px;" value="Add to whishlist">
                        </div>

                    </div>

                </div>



            </div>
        </div>


        @endforeach

    </div>
</div>
<!-- ////////////////////////////////progories -->

@endsection