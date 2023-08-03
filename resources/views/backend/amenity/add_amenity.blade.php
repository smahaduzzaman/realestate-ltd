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
                        <h3 class="card-title">Add Amenity</h3>
                        <form id="myForm" class="forms-sample" method="POST" action="{{ route('store.amenity') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="amenity_name" class="form-label">Amenity Name</label>
                                <input type="text" name="amenity_name"
                                    class="form-control id="amenity_name">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Add Amenity</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Basic From Start  --}}
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    amenity_name: {
                        required: true,
                    },
                },
                messages: {
                    amenity_name: {
                        required: 'Please Enter Amenity Name',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
