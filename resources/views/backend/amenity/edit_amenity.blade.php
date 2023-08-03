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
                        <h3 class="card-title">Update Amenity</h3>
                        <form class="forms-sample" method="POST" action="{{ route('update.amenity', $amenity->id) }}">
                            @csrf
                            <div class="mb-3">
                            {{-- Hidden ID Optional --}}
                                <input type="hidden" name="id" value="{{$amenity->id}}">
                                <label for="type_name" class="form-label">Amenity Name</label>
                                <input
                                type="text"
                                name="amenity_name"
                                class="form-control @error('amenity_name') is-invalid @enderror"
                                id="type_name"
                                value="{{$amenity->amenity_name}}"
                                >
                                @error('type_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Update Amenity</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Basic From Start  --}}
        </div>
    </div>
@endsection
