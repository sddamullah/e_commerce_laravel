@extends('layouts.admin')
@section('body')
<section class="">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6 offset-md-3 py-2  col-12">
                <!-- jquery validation -->
                <div class="card card-primary ">
                    <div class="card-header">
                        <h3 class="card-title py-2">Product Form/ <small>Insert Product</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" method="post" action="{{url('/insert_product')}}" enctype="multipart/form-data">
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
                                <input type="text" name="name" class="form-control" id="name" placeholder="Product Name ">
                            </div>

                            <div class="form-group">
                                <label for="MetaTitle">Small Description</label>
                                <input type="text" name="small_description" class="form-control" id="MetaTitle" placeholder="Small Description">
                            </div>
                            <div class="form-group">
                                <label for="Slug">Slug</label>
                                <input type="chekbox" name="slug" class="form-control" id="Slug" placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label for="Describtion">Describtion</label>
                                <textarea type="text" name="describtion" class="form-control" id="Describtion" placeholder="Describtion"></textarea>
                            </div>
                            <div class="row d-flex justify-content-around">
                                <div class="co-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="status" value="1" class="form-check-input-lg" id="status">
                                        <label class="form-check-label-lg " for="status">Status</label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="trending" value="1" class="form-check-input-lg " id="popular">
                                        <label class="form-check-label-lg " for="status">Trending</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="MetaTitle">Quantitiy</label>
                                <input type="number" name="qty" class="form-control" id="MetaTitle" placeholder="Quantity">
                            </div>
                            <div class="form-group">
                                <label for="MetaTitle">Orignal Price</label>
                                <input type="number" name="orignal_price" class="form-control" id="MetaTitle" placeholder="Orignal Price">
                            </div>
                            <div class="form-group">
                                <label for="MetaTitle">Sellig price</label>
                                <input type="number" name="selling_price" class="form-control" id="MetaTitle" placeholder="Sellig price">
                            </div>
                            <div class="form-group">
                                <label for="MetaTitle">Tax</label>
                                <input type="text" name="tax" class="form-control" id="MetaTitle" placeholder="tax">
                            </div>
                            <div class="form-group">
                                <label for="MetaTitle">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" id="MetaTitle" placeholder="Meta Title">
                            </div>

                            <div class="form-group">
                                <label for="Status">Meta Keywords</label>
                                <input type="text" name="meta_keywords" class="form-control" id="Status" placeholder="Meta Keywords">
                            </div>
                            <div class="form-group">
                                <label for="Status">
                                    <label for="Status">Meta Describtion </label>
                                    <input type="text" name="meta_description" class="form-control" id="Status" placeholder="Product image">
                            </div>
                            <div class="form-group">Product Image</label>
                                <input type="file" name="image" class="form-control" id="Status" placeholder="Meta Describtion">
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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