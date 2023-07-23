Admin Chage Password
@extends('admin.admin_dashboard')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">
        <div class="row profile-body">
            {{-- Basic From Start  --}}
            <div class="col-md-7 col-xl-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Update Property Type</h3>
                        <form class="forms-sample" method="POST" action="{{ route('update.type', $type->id) }}">
                            @csrf
                            <div class="mb-3">
                                <label for="type_name" class="form-label">Type Name</label>
                                <input
                                type="text"
                                name="type_name"
                                class="form-control @error('type_name') is-invalid @enderror"
                                id="type_name"
                                value="{{$type->type_name}}"
                                >
                                @error('type_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="type_icon" class="form-label">Type Icon</label>
                                <input
                                type="text"
                                name="type_icon"
                                class="form-control @error('type_icon') is-invalid @enderror"
                                id="type_icon"
                                value="{{$type->type_icon}}"
                                >
                                @error('type_icon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Update Type</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Basic From Start  --}}
        </div>
    </div>
@endsection
