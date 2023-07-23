@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{route('add.type')}}" class="btn btn-info">Add Property Type</a>

            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Property Types</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Type Name</th>
                                        <th>Type Icon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $key => $type)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$type->type_name}}</td>
                                        <td>{{$type->type_icon}}</td>
                                        <td>
                                            {{-- {{route('edit.type',$type->id)}} --}}
                                            <a href="#" class="btn btn-success">Edit</a>
                                            {{-- {{route('delete.type',$type->id)}} --}}
                                            <a href="#" class="btn btn-danger">Delete</a>
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
@endsection
