@extends('backend.main')
@section('title')
    Edit Groom | Bride
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title mb-3">Edit Groom | Bride</h4>

                            <form method="post" action="{{ route('matrimonial.update', $matrimonial->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->name }}"
                                                name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="age" class="form-label">Age <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" value="{{ $matrimonial->age }}"
                                                name="age" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Gender <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="gender">
                                                <option selected disabled>Choose...</option>
                                                <option value="male"
                                                    {{ $matrimonial->gender == 'Male' ? 'selected' : '' }}>Male
                                                </option>
                                                <option value="female"
                                                    {{ $matrimonial->gender == 'Female' ? 'selected' : '' }}>
                                                    Female</option>
                                                <option value="others"
                                                    {{ $matrimonial->gender == 'Others' ? 'selected' : '' }}>
                                                    Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="height" class="form-label">Height<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="height" required>
                                                <option selected disabled>Choose...</option>
                                                <option value="4ft.5inch"
                                                    {{ $matrimonial->height == '4ft.5inch' ? 'selected' : '' }}>4ft.5inch
                                                </option>
                                                <option value="4ft.6inch"
                                                    {{ $matrimonial->height == '4ft.6inch' ? 'selected' : '' }}>4ft.6inch
                                                </option>
                                                <option value="4ft.7inch"
                                                    {{ $matrimonial->height == '4ft.7inch' ? 'selected' : '' }}>4ft.7inch
                                                </option>
                                                <option value="4ft.8inch"
                                                    {{ $matrimonial->height == '4ft.8inch' ? 'selected' : '' }}>4ft.8inch
                                                </option>
                                                <option value="4ft.9inch"
                                                    {{ $matrimonial->height == '4ft.9inch' ? 'selected' : '' }}>4ft.9inch
                                                </option>
                                                <option value="5ft.0inch"
                                                    {{ $matrimonial->height == '5ft.0inch' ? 'selected' : '' }}>5ft.0inch
                                                </option>
                                                <option value="5ft.1inch"
                                                    {{ $matrimonial->height == '5ft.1inch' ? 'selected' : '' }}>5ft.1inch
                                                </option>
                                                <option value="5ft.2inch"
                                                    {{ $matrimonial->height == '5ft.2inch' ? 'selected' : '' }}>5ft.2inch
                                                </option>
                                                <option value="5ft.3inch"
                                                    {{ $matrimonial->height == '5ft.3inch' ? 'selected' : '' }}>5ft.3inch
                                                </option>
                                                <option value="5ft.4inch"
                                                    {{ $matrimonial->height == '5ft.4inch' ? 'selected' : '' }}>5ft.4inch
                                                </option>
                                                <option value="5ft.5inch"
                                                    {{ $matrimonial->height == '5ft.5inch' ? 'selected' : '' }}>5ft.5inch
                                                </option>
                                                <option value="5ft.6inch"
                                                    {{ $matrimonial->height == '5ft.6inch' ? 'selected' : '' }}>5ft.6inch
                                                </option>
                                                <option value="5ft.7inch"
                                                    {{ $matrimonial->height == '5ft.7inch' ? 'selected' : '' }}>5ft.7inch
                                                </option>
                                                <option value="5ft.8inch"
                                                    {{ $matrimonial->height == '5ft.8inch' ? 'selected' : '' }}>5ft.8inch
                                                </option>
                                                <option value="5ft.9inch"
                                                    {{ $matrimonial->height == '5ft.9inch' ? 'selected' : '' }}>5ft.9inch
                                                </option>
                                                <option value="6ft.0inch"
                                                    {{ $matrimonial->height == '6ft.0inch' ? 'selected' : '' }}>6ft.0inch
                                                </option>
                                                <option value="6ft.1inch"
                                                    {{ $matrimonial->height == '6ft.1inch' ? 'selected' : '' }}>6ft.1inch
                                                </option>
                                                <option value="6ft.2inch"
                                                    {{ $matrimonial->height == '6ft.2inch' ? 'selected' : '' }}>6ft.2inch
                                                </option>
                                                <option value="6ft.3inch"
                                                    {{ $matrimonial->height == '6ft.3inch' ? 'selected' : '' }}>6ft.3inch
                                                </option>
                                                <option value="6ft.4inch"
                                                    {{ $matrimonial->height == '6ft.4inch' ? 'selected' : '' }}>6ft.4inch
                                                </option>
                                                <option value="6ft.5inch"
                                                    {{ $matrimonial->height == '6ft.5inch' ? 'selected' : '' }}>6ft.5inch
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="education" class="form-label">Education</label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->education }}" name="education">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="marital_status" class="form-label">Marital Status <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="marital_status">
                                                <option selected disabled>Choose...</option>
                                                <option value="married"
                                                    {{ $matrimonial->marital_status == 'Married' ? 'selected' : '' }}>
                                                    Married
                                                </option>
                                                <option value="unmarried"
                                                    {{ $matrimonial->marital_status == 'Unmarried' ? 'selected' : '' }}>
                                                    Unmarried
                                                </option>
                                                <option value="widowed"
                                                    {{ $matrimonial->marital_status == 'Widowed' ? 'selected' : '' }}>
                                                    Widowed
                                                </option>
                                                <option value="divorced"
                                                    {{ $matrimonial->marital_status == 'Divorced' ? 'selected' : '' }}>
                                                    Divorced
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="work" class="form-label">Work <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->work }}"
                                                name="work" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="contact" class="form-label">Mobile Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->phone }}"
                                                name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="gotra" class="form-label">Gotra</label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->gotra }}"
                                                name="gotra">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->address }}"
                                                name="address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="about" class="form-label">About</label>
                                            <textarea class="form-control" name="about">{{ $matrimonial->about }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control"
                                                value="{{ $matrimonial->date_of_birth }}" name="dob">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="birth_time" class="form-label">Birth Time</label>
                                            <input type="time" class="form-control"
                                                value="{{ $matrimonial->birth_time }}" name="birth_time">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="birth_place" class="form-label">Birth Place</label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->birth_place }}" name="birth_place">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="rashi" class="form-label">Rashi</label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->rashi }}"
                                                name="rashi">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="village" class="form-label">Village/Town <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->village }}"
                                                name="village" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="block" class="form-label">Block</label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->block }}"
                                                name="block">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->city }}"
                                                name="city">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="district" class="form-label">District <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->district }}" name="district" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="curr_address" class="form-label">Current Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->current_address }}" name="curr_address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="per_address" class="form-label">Permanent Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->permanent_address }}" name="per_address"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="fathers_name" class="form-label">Father's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->fathers_name }}" name="fathers_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="mothers_name" class="form-label">Mother's Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->mothers_name }}" name="mothers_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="dada_name" class="form-label">Dada Name</label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->dada_name }}" name="dada_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="dadi_name" class="form-label">Dadi Name</label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->dadi_name }}" name="dadi_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="nana_name" class="form-label">Nana Name</label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->nana_name }}" name="nana_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="nani_name" class="form-label">Nani Name</label>
                                            <input type="text" class="form-control"
                                                value="{{ $matrimonial->nani_name }}" name="nani_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="total_member" class="form-label">Total Member in Family<span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control"
                                                value="{{ $matrimonial->total_members }}" name="total_member" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="no_of_brothers" class="form-label">No. of Brothers <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control"
                                                value="{{ $matrimonial->no_of_brothers }}" name="no_of_brothers"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="no_of_sisters" class="form-label">No. of Sisters <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control"
                                                value="{{ $matrimonial->no_of_sisters }}" name="no_of_sisters" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="hobby" class="form-label">Hobbies</label>
                                            <input type="text" class="form-control" value="{{ $matrimonial->hobby }}"
                                                name="hobby">
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
                                            <img id="showImage" class="rounded avatar-lg"
                                                src="{{ !empty($matrimonial->image) ? url('upload/matrimonial/' . $matrimonial->image) : url('upload/no_image.jpg') }}"
                                                alt="Card image cap">
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
