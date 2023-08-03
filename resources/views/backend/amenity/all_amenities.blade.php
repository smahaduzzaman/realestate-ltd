@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{route('add.amenity')}}" class="btn btn-info">Add Amenity</a>

            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Amenities</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Amenity Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($amenities as $key => $amenity)
                                    <tr>
                                        <td>{{$amenity+1}}</td>
                                        <td>{{$amenity->amenity_name}}</td>
                                        <td>
                                            <a href="{{route('edit.amenity',$amenity->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{route('delete.amenity',$amenity->id)}}" class="btn btn-danger">Delete</a>
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
