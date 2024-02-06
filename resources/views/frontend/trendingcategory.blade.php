@extends('layouts.frontsection.front')

@section('content')


<!-- new arivals -->
<div class="container mt-3 mt-md-5 mb-md-5 ">
    <div class="row ">
        <div class="col-md-4 offset-md-4">
            <h3 class="text-white bg-danger  text-center  h4 rounded-3  py-3">Featured Categories</h3>

        </div>
    </div>
    <div class="row slider  ">
        @foreach($category as $cate)
        <div class="col-md-12 col-sm-6 mt-md-5 px-2  ">
            <div class="product-grid">
                <div class="product-image">
                    <a href=" {{url('view_category', $cate->slug)}}" class="image">
                        <img src="{{asset('/admin/categoryimages/'. $cate->image)}}" class="img-fluid img" width="100%">
                    </a>



                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$cate->name}}</a></h3>
                    <div class="price">{{$cate->describtion}}</div>
                </div>
            </div>
        </div>


        @endforeach

    </div>
</div>
<!-- ////////////////////////////////categories -->

@endsection