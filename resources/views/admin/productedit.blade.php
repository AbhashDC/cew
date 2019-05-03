@extends('admin.layout.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit product</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/admin/product/{{$data->id}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" value="{{$data->name}}" name="name" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Short Description</label>
                                    <input type="text" class="form-control" id="article-ckeditor" value="{{$data->short_description}}" name="short" placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description" id="article-ckeditor1" rows="3">{{$data->description}}
                                    </textarea>
                                </div>
                                <div class="">
                                    <label for="exampleFormControlInput1">Image Upload</label> <br>
                                    <input type="file" name="image"  id="fileToUpload">
                                </div>
                                <input type="submit" class="btn btn-primary" name="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
