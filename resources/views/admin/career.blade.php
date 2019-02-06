@extends('admin.layout.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Job Posting</h4>
                            <a class="btn btn-danger" href="{{route('career.create')}}" >New Job</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Summary
                                    </th>
                                    <th>
                                        Qualification
                                    </th>
                                    <th>
                                        Specification
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
                                                {!!  $datas->title!!}

                                            </td>
                                            <td>
                                                {!! $datas->summary !!}

                                            </td>
                                            <td>
                                                {!! $datas->qualification !!}

                                            </td>
                                            <td>
                                                {!! $datas->specification !!}
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-block" href="/admin/career/{{$datas->id}}/edit">Edit</a>
                                                <form action="/admin/career/{{$datas->id}}" method="POST">
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
