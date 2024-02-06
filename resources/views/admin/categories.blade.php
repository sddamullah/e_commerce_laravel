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
                    <a href="{{url('show_categoryform')}}" type="button" class="btn new  mt-1 float-right bg-success "> Add New Category</a>
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
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Popular</th>
                                <th>Meta Title</th>
                                <th>Meta Keyword</th>
                                <th>Meta Description</th>
                                <th>Category Image</th>
                                <th>Delete</th>
                                <th>Edit Ctaegory</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($catgory as $cata)
                            <tr>
                                <td>{{$cata->id}}</td>
                                <td>{{$cata->name}}</td>
                                <td>{{$cata->slug}}</td>
                                <td>{{$cata->describtion}}</td>
                                <td>{{$cata->status}}</td>
                                <td>{{$cata->popular}}</td>
                                <td>{{$cata->meta_title}}</td>
                                <td>{{$cata->meta_kewords}}</td>
                                <td>{{$cata->meta_descrip}}</td>



                                <td>
                                    <img src="{{asset('/admin/categoryimages/'. $cata->image)}}" width="120px" height="60px" alt="image" />

                                </td>
                                <td>
                                    <a type="button" class="btn btn-danger" href="{{url('delete_category', $cata->id)}}">delete</a>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-primary" href="{{url('get_category', $cata->id)}}">EDit</a>
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