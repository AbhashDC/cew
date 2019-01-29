@extends('admin.layout.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Service Table</h4>
                            <a class="btn btn-danger" href="{{route('service.create')}}" >New Service</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Short Description
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $datas)
                                        <tr>
                                            <td>
                                                {{$datas->id}}
                                            </td>
                                            <td>
                                                {{$datas->name}}
                                            </td>
                                            <td>
                                                {{$datas->short_description}}
                                            </td>
                                            <td>
                                                {{$datas->description}}
                                            </td>
                                            <td>
                                                <img src="{{asset('storage/img/service/'.$datas->image)}}" class="img-fluid" >
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-block" href="/admin/service/{{$datas->id}}/edit">Edit</a>
                                                <form action="/admin/service/{{$datas->id}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="submit" value="Delete" class="btn btn-danger btn-block" >
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
