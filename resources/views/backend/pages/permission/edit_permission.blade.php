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
                        <h3 class="card-title">Edit Permission</h3>
                        <form class="forms-sample" method="POST"
                            action="{{ route('update.permission', $permission->id) }}') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Permission Name</label>
                                <input type="text" name="name" value="{{ $permission->name }}"
                                    class="form-control @error('name') is-invalid @enderror" id="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="group_name" class="form-label">Group Name</label>
                                {{-- select form  --}}
                                <select value="{{ $permission->group_name }}" name="group_name"
                                    class="form-control @error('group_name') is-invalid @enderror" id="group_name">
                                    <option selected disabled>Select Group</option>
                                    <option value="property">Property Type</option>
                                    <option value="state">State</option>
                                    <option value="amenities">Amenities</option>
                                    <option value="property">Property</option>
                                    <option value="history">Package History</option>
                                    <option value="message">Property Message</option>
                                    <option value="testimonials">Testimonials</option>
                                    <option value="agent">Manage Agent</option>
                                    <option value="category">Blog Category</option>
                                    <option value="post">Blog Post</option>
                                    <option value="comment">Blog Comment</option>
                                    <option value="smtp">SMTP Setting</option>
                                    <option value="site">Site Setting</option>
                                    <option value="role">Role & Permission</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Add Permission</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Basic From Start  --}}
        </div>
    </div>
@endsection
