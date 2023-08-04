Admin Chage Password
@extends('admin.admin_dashboard')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{route('add.permission')}}" class="btn btn-inverse-danger">Download</a>
            </ol>
        </nav>
        <div class="row profile-body">
            {{-- Basic From Start  --}}
            <div class="col-md-7 col-xl-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Import Permission</h3>
                        <form class="forms-sample" method="POST" action="{{ route('store.permission') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">xlsx import</label>
                                <input
                                type="file"
                                name="import"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-inverse-warning me-2">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Basic From Start  --}}
        </div>
    </div>
@endsection
