@extends('admin.layout.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Response Table</h4>
                            <p class="card-category"> Response from visitors</p>
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
                                        Email
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Message
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $dataOut)
                                    <tr>
                                        <td>
                                           {{$dataOut->id}}
                                        </td>
                                        <td>
                                            {{$dataOut->name}}
                                        </td>
                                        <td>
                                            {{$dataOut->email}}
                                        </td>
                                        <td>
                                            {{$dataOut->phone}}
                                        </td>
                                        <td class="text-primary">
                                            {{$dataOut->message}}
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
