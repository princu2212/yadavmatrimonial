@extends('backend.main')
@section('title')
    Add Groom | Bride
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title mb-3">Add Groom | Bride</h4>

                            <form method="post" action="{{ route('matrimonial.store') }}" enctype="multipart/form-data">
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
                                            <label for="age" class="form-label">Age <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="age" placeholder="Age"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Gender <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="gender" required>
                                                <option selected disabled>Choose...</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="height" class="form-label">Height<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="height" required>
                                                <option selected disabled>Choose...</option>
                                                <option value="4ft.5inch">4ft.5inch</option>
                                                <option value="4ft.6inch">4ft.6inch</option>
                                                <option value="4ft.7inch">4ft.7inch</option>
                                                <option value="4ft.8inch">4ft.8inch</option>
                                                <option value="4ft.9inch">4ft.9inch</option>
                                                <option value="5ft.0inch">5ft.0inch</option>
                                                <option value="5ft.1inch">5ft.1inch</option>
                                                <option value="5ft.2inch">5ft.2inch</option>
                                                <option value="5ft.3inch">5ft.3inch</option>
                                                <option value="5ft.4inch">5ft.4inch</option>
                                                <option value="5ft.5inch">5ft.5inch</option>
                                                <option value="5ft.6inch">5ft.6inch</option>
                                                <option value="5ft.7inch">5ft.7inch</option>
                                                <option value="5ft.8inch">5ft.8inch</option>
                                                <option value="5ft.9inch">5ft.9inch</option>
                                                <option value="6ft.0inch">6ft.0inch</option>
                                                <option value="6ft.1inch">6ft.1inch</option>
                                                <option value="6ft.2inch">6ft.2inch</option>
                                                <option value="6ft.3inch">6ft.3inch</option>
                                                <option value="6ft.4inch">6ft.4inch</option>
                                                <option value="6ft.5inch">6ft.5inch</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="education" class="form-label">Education</label>
                                            <input type="text" class="form-control" name="education"
                                                placeholder="Education">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="marital_status" class="form-label">Marital Status <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="marital_status" required>
                                                <option selected disabled>Choose...</option>
                                                <option value="unmarried">Unmarried</option>
                                                <option value="divorced">Divorced</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="work" class="form-label">Work <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="work" placeholder="Work"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="contact" class="form-label">Mobile Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="phone"
                                                placeholder="Mobile Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="gotra" class="form-label">Gotra</label>
                                            <input type="text" class="form-control" name="gotra" placeholder="Gotra">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="address"
                                                placeholder="Enter Address" required>
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
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" name="dob">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="birth_time" class="form-label">Birth Time</label>
                                            <input type="time" class="form-control" name="birth_time"
                                                placeholder="Enter Birth Time">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="birth_place" class="form-label">Birth Place</label>
                                            <input type="text" class="form-control" name="birth_place"
                                                placeholder="Enter Birth Place">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="rashi" class="form-label">Rashi</label>
                                            <input type="text" class="form-control" name="rashi"
                                                placeholder="Enter Rashi">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="village" class="form-label">Village/Town <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="village"
                                                placeholder="Enter Village/Town" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="block" class="form-label">Block</label>
                                            <input type="text" class="form-control" name="block"
                                                placeholder="Enter Block">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control" name="city" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="district" class="form-label">District <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="district"
                                                placeholder="Enter District" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="curr_address" class="form-label">Current Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="curr_address"
                                                placeholder="Enter Current Address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="per_address" class="form-label">Permanent Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="per_address"
                                                placeholder="Enter Permanent Address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="fathers_name" class="form-label">Father's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="fathers_name"
                                                placeholder="Enter Father's Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="mothers_name" class="form-label">Mother's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="mothers_name"
                                                placeholder="Enter Mother's Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="dada_name" class="form-label">Dada Name</label>
                                            <input type="text" class="form-control" name="dada_name"
                                                placeholder="Enter Dada Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="dadi_name" class="form-label">Dadi Name</label>
                                            <input type="text" class="form-control" name="dadi_name"
                                                placeholder="Enter Dadi Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="nana_name" class="form-label">Nana Name</label>
                                            <input type="text" class="form-control" name="nana_name"
                                                placeholder="Enter Nana Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="nani_name" class="form-label">Nani Name</label>
                                            <input type="text" class="form-control" name="nani_name"
                                                placeholder="Enter Nani Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="total_member" class="form-label">Total Member in Family<span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="total_member"
                                                placeholder="Enter Total Member" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="no_of_brothers" class="form-label">No. of Brothers <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="no_of_brothers"
                                                placeholder="Enter No. of Brothers" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="no_of_sisters" class="form-label">No. of Sisters <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="no_of_sisters"
                                                placeholder="Enter No. of Sisters" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="hobby" class="form-label">Hobbies</label>
                                            <input type="text" class="form-control" name="hobby"
                                                placeholder="Enter Hobbies">
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
