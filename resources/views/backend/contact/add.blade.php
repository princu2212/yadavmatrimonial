@extends('backend.main')
@section('title')
    Add Contact Member
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title mb-3">Add Contact Member</h4>

                            <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="position" class="form-label">Position <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="position" placeholder="Position"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="about" class="form-label">About</label>
                                            <textarea type="text" class="form-control" name="about" placeholder="Enter About"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="contact" class="form-label">Mobile Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="phone"
                                                placeholder="Mobile Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <img id="showImage" class="rounded avatar-lg" src="" alt="Card image cap">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <input type="submit" class="btn btn-primary waves-effect waves-light mt-2" value="Submit">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
