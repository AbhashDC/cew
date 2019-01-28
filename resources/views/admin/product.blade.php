@extends('admin.layout.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Simple Table</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
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
                                            {{$datas->short_Description}}
                                        </td>
                                        <td>
                                            {{$datas->description}}
                                        </td>
                                        <td>
                                            {{$datas->image}}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-block" href="admin/product/{{$datas->id}}/edit">Edit</a>
                                            <a class="btn btn-danger btn-block"  href="delete/{{$datas->id}}"> @method('DELETE')Delete</a>
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
