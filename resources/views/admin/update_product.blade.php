@extends('layouts.admin')
@section('body')
<section class="content p-md-5">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8 offset-md-2 col-12">
                <!-- jquery validation -->
                <div class="card card-primary ">
                    <div class="card-header">
                        <h3 class="card-title py-2">Product Form /<small>update Product</small></h3>
                    </div>
                    @foreach($product as $pro)
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" method="post" action="{{url('/update_product', $pro->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <select class="form-control" name="cate_id" aria-label="Default select example">
                                <option value="">Select Category</option>
                                @foreach($category as $cate)
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach

                            </select>
                            <div class="form-group">
                                <label for="name"> Product Name</label>
                                <textarea type="text" name="name" class="form-control" id="name" placeholder="Product Name ">{{$pro->name}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Slug">Small Describtion</label>
                                <textarea type="text" name="small_description" class="form-control" id="Slug" placeholder="Slug">{{$pro->small_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Slug">Slug</label>
                                <textarea type="txet" name="slug" class="form-control" id="Slug" placeholder="Slug">{{$pro->slug}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="Slug">Quantity</label>
                                <textarea type="text" name="qty" class="form-control" id="Slug" placeholder="Quantity">{{$pro->qty}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Slug">Tax</label>
                                <textarea type="text" name="tax" class="form-control" id="Slug" placeholder="tax">{{$pro->tax}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Slug">Sellin Price</label>
                                <textarea type="text" name="selling_price" class="form-control" id="Slug" placeholder="selling_price">{{$pro->selling_price}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Slug">Orignal Price</label>
                                <textarea type="text" name="orignal_price" class="form-control" id="Slug" placeholder="tax">{{$pro->orignal_price}}</textarea>
                            </div>

                            <div class="row d-flex justify-content-around">
                                <div class="co-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="status" class="form-check-input-lg" id="status" {{ $pro->status ? 'checked' : '' }}>
                                        <label class="form-check-label-lg " for="status">Status</label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="trending" class="form-check-input-lg " id="popular" {{ $pro->trending ? 'checked' : '' }}>
                                        <label class="form-check-label-lg " for="status">Trending</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="MetaTitle">Meta Title</label>
                                <textarea type="text" name="meta_title" class="form-control " id="MetaTitle" placeholder="Meta Title">{{$pro->meta_title}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Status">Meta Keywords</label>
                                <textarea type="text" name="meta_keywords" class="form-control" id="Status" placeholder="Meta Keywords">{{$pro->meta_keywords}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Status">
                                    <label for="Status">Meta Description </label>
                                    <textarea type="text" name="meta_description" class="form-control w-100" id="Status" placeholder="Meta Description">{{$pro->meta_description}}</textarea>
                            </div>
                            <div class="form-group">Product Image</label>
                                <input type="file" name="image" class="form-control" id="Status" placeholder="Meta Describtion">
                                <img src="{{asset('/admin/Productimages/'. $pro->image)}}" width="120px" height="60px" alt="image" />
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    @endforeach
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection