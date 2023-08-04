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
                        <h3 class="card-title">Edit Role</h3>
                        <form class="forms-sample" method="POST"
                            action="{{ route('update.role', $role->id) }}') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$role->id}}">
                            <div class="mb-3">
                                <label for="name" class="form-label">Role Name</label>
                                <input type="text" name="name" value="{{ $role->name }}"
                                    class="form-control @error('name') is-invalid @enderror" id="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Basic From Start  --}}
        </div>
    </div>
@endsection
