@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{route('add.role')}}" class="btn btn-info">Add Role</a>
                &nbsp; &nbsp; &nbsp;
                <a href="{{route('import.role')}}" class="btn btn-inverse-warning">Import</a>
                &nbsp; &nbsp; &nbsp;
                <a href="{{route('add.role')}}" class="btn btn-inverse-danger">Export</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Role</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Role Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>
                                            <a href="{{route('edit.role',$role->id)}}" class="btn btn-inverse-success">Edit</a>
                                            <a href="{{route('delete.role',$role->id)}}" class="btn btn-inverse-danger">Delete</a>
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
