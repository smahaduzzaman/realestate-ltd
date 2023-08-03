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
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$permission->id}}">
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
                                    <option value="type" {{$permission->group_name == "type" ? "selected" : ""}}>Property Type</option>
                                    <option value="state" @if ($permission->group_name == 'state') selected @endif>State</option>
                                    <option value="amenities" {{$permission->group_name == "amenities" ? "selected" : ""}}>Amenities</option>
                                    <option value="property" {{$permission->group_name == "property" ? "selected" : ""}}>Property</option>
                                    <option value="history" {{$permission->group_name == "history" ? "selected" : ""}}>Package History</option>
                                    <option value="message" @if ($permission->group_name == 'message') selected @endif>Property Message</option>
                                    <option value="testimonials" @if ($permission->group_name == 'testimonials') selected @endif>Testimonials</option>
                                    <option value="agent" @if ($permission->group_name == 'agent') selected @endif>Manage Agent</option>
                                    <option value="category" @if ($permission->group_name == 'category') selected @endif>Blog Category</option>
                                    <option value="post" {{$permission->group_name == "post" ? "selected" : ""}}>Blog Post</option>
                                    <option value="comment" {{$permission->group_name == "comment" ? "selected" : ""}}>Blog Comment</option>
                                    <option value="smtp" {{$permission->group_name == "smtp" ? "selected" : ""}}>SMTP Setting</option>
                                    <option value="site" {{$permission->group_name == "site" ? "selected" : ""}}>Site Setting</option>
                                    <option value="role" {{$permission->group_name == "role" ? "selected" : ""}}>Role & Permission</option>
                                </select>
                                @error('group_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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
