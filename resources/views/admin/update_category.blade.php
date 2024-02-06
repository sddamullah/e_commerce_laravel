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
                        <h3 class="card-title py-2">Category Form /<small>update catagory</small></h3>
                    </div>
                    @foreach($category as $cata)
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" method="post" action="{{url('/update_catagory', $cata->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name"> Ctaegory Name</label>
                                <textarea type="text" name="name" class="form-control" id="name" placeholder="Category Name ">{{$cata->name}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Slug">Slug</label>
                                <textarea type="chekbox" name="slug" class="form-control" id="Slug" placeholder="Slug">{{$cata->slug}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Describtion">Describtion</label>
                                <textarea type="text" name="describtion" class="form-control" id="Describtion" placeholder="Describtion">{{$cata->describtion}}</textarea>
                            </div>
                            <div class="row d-flex justify-content-around">
                                <div class="co-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="status" class="form-check-input-lg" id="status" {{ $cata->status ? 'checked' : '' }}>
                                        <label class="form-check-label-lg " for="status">Status</label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="popular" class="form-check-input-lg " id="popular" {{ $cata->popular ? 'checked' : '' }}>
                                        <label class="form-check-label-lg " for="status">Popular</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="MetaTitle">Meta Title</label>
                                <textarea type="text" name="meta_title" class="form-control " id="MetaTitle" placeholder="Meta Title">{{$cata->meta_title}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Status">Meta Keywords</label>
                                        <textarea type="text" name="meta_kewords" class="form-control" id="Status" placeholder="Meta Keywords">{{$cata->meta_kewords}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Status">
                                            <label for="Status">Meta Describtion </label>
                                            <textarea type="text" name="meta_descrip" class="form-control" id="Status" placeholder="Category image">{{$cata->meta_descrip}}</textarea>
                                    </div>
                                    <div class="form-group">Category Image</label>
                                        <input type="file" name="image" class="form-control" id="Status" placeholder="Meta Describtion">
                                        <img src="{{asset('/admin/categoryimages/'. $cata->image)}}" width="120px" height="60px" alt="image" />
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