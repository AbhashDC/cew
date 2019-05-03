@extends('admin.layout.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Code details</h4>
                            <a class="btn btn-danger" href="{{route('code.stores')}}" >New Code</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Code
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Position
                                    </th>

                                    </thead>
                                    <tbody>
                                    @foreach($data as $datas)
                                        <tr>
                                            <td>
                                                {{$datas->id}}
                                            </td>
                                            <td>
                                                {!!  $datas->code!!}

                                            </td>
                                            <td>
                                                {!! $datas->name !!}

                                            </td>
                                            <td>
                                                {!! $datas->email !!}

                                            </td>
                                            <td>
                                                {!! $datas->position !!}
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
