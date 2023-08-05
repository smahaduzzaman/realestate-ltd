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
                        <h3 class="card-title">Add Role Permission</h3>
                        <form class="forms-sample" method="POST" action="{{ route('add.role.permission') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="role_id" class="form-label">Role Name</label>
                                <select name="role_id" id="role_id"
                                    class="form-select @error('group_name') is-invalid @enderror">
                                    <option selected disabled>Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="checkChecked">
                                <label class="form-check-label" for="checkChecked">
                                    Check All
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Purmitted</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Basic From Start  --}}
        </div>
    </div>
@endsection
