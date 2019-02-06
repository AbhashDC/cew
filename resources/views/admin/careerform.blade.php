@extends('admin.layout.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title "> New Vacancy</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('career.store')}}" >
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Title</label>
                                    <textarea class="form-control" name="title" id="article-ckeditor" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Summary</label>
                                    <textarea class="form-control" name="summary" id="article-ckeditor1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Qualification</label>
                                    <textarea class="form-control" name="qualification" id="article-ckeditor2" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Specification</label>
                                    <textarea class="form-control" name="specification" id="article-ckeditor3" rows="3"></textarea>
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


