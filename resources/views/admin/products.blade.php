@extends('layouts.admin')
@section('body')
<div class="container-fluid  ">
    <div class="row">
        <div class="col-12 px-md-2 pt-md-2 ">
            <div class="card" style="box-shadow: 3px 2px 10px black;">
                <div class="card-header bg-primary ">
                    <h2 class="card-title "> All categories</h2>

                    <div class="card-tools">
                        <div class="input-group input-group-sm  mt-1" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right Py-1" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('show_productform')}}" type="button" class="btn new  mt-1 float-right bg-success "> Add New Product</a>
                </div>
                <style>
                    .new {
                        margin-right: 50px;
                    }
                </style>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap  " style="overflow: scroll !important;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Category id</th>
                                <th>Small Describtion</th>
                                <th>Tax</th>
                                <th>Quantitiy</th>

                                <th>Slug</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Trending</th>
                                <th>Orignal Price</th>
                                <th>Selling Price</th>
                                <th>Meta Title</th>
                                <th>Meta Keyword</th>
                                <th>Meta Description</th>
                                <th>Product Image</th>
                                <th>Delete</th>
                                <th>Edit Ctaegory</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $pro)
                            <tr>
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->name}}</td>
                                <td>{{$pro->cate_id}}</td>
                                <td>{{$pro->small_description}}</td>
                                <td>{{$pro->tax}}</td>
                                <td>{{$pro->qty}}</td>
                                <td>{{$pro->slug}}</td>
                                <td>{{$pro->describtion}}</td>
                                <td>{{$pro->status}}</td>
                                <td>{{$pro->trending}}</td>
                                <td>{{$pro->orignal_price}}</td>
                                <td>{{$pro->selling_price}}</td>
                                <td>{{$pro->meta_title}}</td>
                                <td>{{$pro->meta_keywords}}</td>
                                <td>{{$pro->meta_description}}</td>



                                <td>
                                    <img src="{{asset('/admin/Productimages/'. $pro->image)}}" width="120px" height="60px" alt="image" />

                                </td>
                                <td>
                                    <a type="button" class="btn btn-danger" href="{{url('delete_Product', $pro->id)}}">delete</a>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-primary" href="{{url('get_Product', $pro->id)}}">EDit</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection